const CACHE = 'basic-service-worker-2.4';
const CACHE_FILES = [
  '/'
];

const BLACKLIST = [
  'pipedrive.com',
  'googleapis',
  'google.com',
  'pipedriveassets.com',
  '/m-adm',
  '/co-rs',
  'youtube.com',
  'youtu.be'
]

self.addEventListener('activate', function (event) {
  event.waitUntil(
    caches.keys().then(function (keyList) {
      return Promise.all(keyList.map(key => caches.delete(key)));
    })
  );
});
self.addEventListener('fetch', function (event) {

  const checkBlacklist = BLACKLIST.find(host => event.request.url.indexOf(host) > -1);
  if (checkBlacklist) {
    return false;
  }

  if (!!(event.request.url.indexOf('http') === 0)) {
    event.respondWith(
      caches.open(CACHE).then(function (cache) {
        return cache.match(event.request).then(function (response) {
          return response || fetch(event.request).then(function (response) {
            cache.put(event.request, response.clone());
            return response;
          });
        });
      })
    );
  }

});

function getFileNameWithoutHash(url) {
  const fileName = url.split('/').pop().split('#')[0].split('?')[0];

  return fileName.substring(fileName.indexOf('.') + 1)
}

function finalResponce(fileName, request) {
  return fromCache(fileName, request)
    .catch(() => fromInternetAndCache(fileName, request));
}

function fromCache(cacheName, request) {
  return caches.open(cacheName)
    .then(cache => {
      return cache.match(request)
        .then(response => {
          if (response) return response;

          return Promise.reject();
        });
    });
}

function fromInternetAndCache(cacheName, request) {
  return fetch(request)
    .then(response => {
      if (response.ok) {
        const copyResponce = response.clone();

        return cacheFile(cacheName, request, copyResponce)
          .then(() => response);
      }
      return response;
    });
}

function cacheFile(cacheName, request, response) {
  return caches.delete(cacheName)
    .then(() => caches.open(cacheName))
    .then(cache => cache.add(request, response));
}