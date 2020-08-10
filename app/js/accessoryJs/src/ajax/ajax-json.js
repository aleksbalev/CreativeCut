export default (url) => {
  let request = new XMLHttpRequest();
  request.open('GET', url, true);

  request.onload = function() {
    if (request.status >= 200 && request.status < 400) {
      // Success!
      let data = JSON.parse(request.responseText);
      console.log('Success!');
    } else {
      // We reached our target server, but it returned an error
      console.log('We reached our target server, but it returned an error');
    }
  };

  request.onerror = function() {
    // There was a connection error of some sort
    console.log('connection error of some sort');
  };

  request.send();
};
