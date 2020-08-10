function slideDown(elem) {
	elem.style.maxHeight = '1000px';
	elem.style.opacity = '1';
	elem.style.display = 'block';
}
function slideUp(elem) {
	elem.style.maxHeight = '0';
	once(1, function () {
		elem.style.opacity = '0';
		elem.style.display = 'none';
	});
}
function once(seconds, callback) {
	let counter = 0;
	let time = window.setInterval(function () {
		counter++;
		if (counter >= seconds) {
			callback();
			window.clearInterval(time);
		}
	}, 400);
}

export default class Cookie {
	constructor(_cookie, _cookieAccept, _cookieClose) {
		if (!localStorage.getItem('cookie') && navigator.cookieEnabled) {
			slideDown(_cookie);
		}
		_cookieAccept.addEventListener('click', function () {
			slideUp(_cookie);
			localStorage.setItem('cookie', 'U2l0ZSBkZXZlbG9wZWQgYnkgRWR1YXJkIEJhbGV2');
		});
		_cookieClose.addEventListener('click', function () {
			slideUp(_cookie);
		});
	}
};