import RemoveClass from '../accessoryJs/src/elements/remove-class';

function replaceSrc(img) {
    img.src = img.dataset.src;
    img.srcset = img.dataset.srcset;
    RemoveClass(img, 'lazy');
}

function replaceBg(img) {
    let bgLink = img.dataset.img;
    img.style.backgroundImage = 'url(' + bgLink + ')';
    RemoveClass(img, 'lazy_background');
}

export function lazyImg() {
    let lazyImages = [].slice.call(document.querySelectorAll('img.lazy'));
    if (!!window.IntersectionObserver) {
        let lazyImageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    let lazyImage = entry.target;
                    replaceSrc(lazyImage);
                    lazyImageObserver.unobserve(lazyImage);
                }
            });
        });

        lazyImages.forEach(lazyImage => {
            lazyImageObserver.observe(lazyImage);
        });
    } else {
        lazyImages.forEach(lazyImage => {
            replaceSrc(lazyImage);
        });
    }
}

export function lazyBackground() {
    let lazyBackgrounds = [].slice.call(document.querySelectorAll('.lazy_background'));
    if (!!window.IntersectionObserver) {
        let lazyBackgroundObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    let lazyBg = entry.target;
                    replaceBg(lazyBg);
                    lazyBackgroundObserver.unobserve(entry.target);
                }
            });
        });

        lazyBackgrounds.forEach(lazyBackground => {
            lazyBackgroundObserver.observe(lazyBackground);
        });
    } else {
        lazyBackgrounds.forEach(lazyBackground => {
            replaceBg(lazyBackground);
        });
    }
}

export class LazyLoad {
    constructor() {
        document.addEventListener('DOMContentLoaded', () => {
            lazyImg();
            lazyBackground();
        });
    }
  };