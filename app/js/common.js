'use strict';
import 'tiny-slider/src/tiny-slider.scss';
import '../sass/main.scss';
// import './app/app';

import { tns } from 'tiny-slider/src/tiny-slider';
import { AddClass, HasClass, RemoveClass, ToggleClass, Find, OuterHeight } from './accessoryJs/src/elements';
import Cookie from './cookie/cookie';
import GoTopButton from './goTopButton/goTopButton';
import { lazyImg, lazyBackground, LazyLoad } from './lazyload/lazyload';
import AccordionMap from './map/accordionMap';

new LazyLoad();


// Cookie module
const cookie = document.getElementById('rdmCookie'),
    cookieAccept = document.getElementById('rdmCookieOk'),
    cookieClose = document.getElementById('rdmCookieClose');
if (!!cookie && !!cookieAccept && !!cookieClose) new Cookie(cookie, cookieAccept, cookieClose);


// Open & close accordion map module
const mapBtn = document.getElementById('openMap');
const map = document.getElementById('contact_map');
if (!!mapBtn && !!map) mapBtn.addEventListener('click', () => new AccordionMap(map));

// go to top button
const toTop = document.getElementById('toTop');
if (!!toTop) new GoTopButton(toTop);

// Run header slider 
const runSliderElement = document.getElementById('runSlider');
if (!!runSliderElement) {

    const runSlider = tns({
        container: runSliderElement,
        mode: 'gallery',
        controls: false,
        items: 1,
        slideBy: 1,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        autoplayButtonOutput: false,
        nav: true,
        navPosition: 'bottom',
        speed: 300,
        lazyload: false,
        mouseDrag: false,
        useLocalStorage: false,
        swipeAngle: false,
        onInit: function(){
            runSliderElement.style.opacity = 1;
        }
    });

    invertDetect(runSlider.getInfo());

    runSliderElement.addEventListener('mouseout', () => {
        runSlider.play()
    });
    runSliderElement.addEventListener('mouseover', () => {
        runSlider.pause()
    });

    function invertDetect(infoObj) {
        let thisSlide = infoObj.slideItems[infoObj.index];
        if (Find(thisSlide, '.slider__slide--invert')) {
            AddClass(infoObj.navContainer, 'invert');
        } else {
            RemoveClass(infoObj.navContainer, 'invert');
        }
    };

    runSlider.events.on('indexChanged', () => {
        lazyBackground();
        invertDetect(runSlider.getInfo());
    });
}

// Case_card slider
const cardSliderElements = document.querySelectorAll('.js-card-slider');
if (cardSliderElements.length > 0) {
    let cardSliders = [];
    cardSliderElements.forEach((cardSlider, key) => {
        let slide = cardSlider.querySelector('.js-card-slider-inner');
        if (!!slide) {
            cardSliders[key] = tns({
                container: slide,
                mode: 'carousel',
                items: 1,
                slideBy: 1,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                autoplayButtonOutput: false,
                nav: false,
                speed: 300,
                lazyload: true,
                useLocalStorage: false,
                swipeAngle: true,
                prevButton: cardSlider.querySelector('.js-card-slider__button_prev'),
                nextButton: cardSlider.querySelector('.js-card-slider__button_next'),
                responsive: {
                    575: {
                        items: 2
                    },
                    935: {
                        items: 3
                    }
                },
                onInit: function(){
                    cardSlider.style.opacity = 1;
                }
            });
            cardSlider.addEventListener('mouseout', () => {
                cardSliders[key].play()
            });
            cardSlider.addEventListener('mouseover', () => {
                cardSliders[key].pause()
            });
        }
    });
}

// Show navigation & top buttom when scroll up
const toTopButton = document.getElementById('toTop');
const headerElement = document.querySelector('.header');
let CurrentScroll = 0;
document.addEventListener('scroll', function (event) {
    let NextScroll = window.pageYOffset;

    // Navigation status
    if (NextScroll > CurrentScroll && NextScroll > 100) {
        RemoveClass(headerElement, 'header--scroll-show');
        AddClass(headerElement, 'header--scroll-hidde');
    } else {
        RemoveClass(headerElement, 'header--scroll-hidde');
        AddClass(headerElement, 'header--scroll-show');
    }

    // Go top button status
    if (toTopButton.classList.contains('go_top_button--fixed')) {
        if (NextScroll < CurrentScroll && NextScroll > (window.pageYOffset * 0.35)) {
            RemoveClass(toTopButton, 'go_top_button--hide');
            AddClass(toTopButton, 'go_top_button--show');
        } else {
            RemoveClass(toTopButton, 'go_top_button--show');
            AddClass(toTopButton, 'go_top_button--hide');
        }
    }

    CurrentScroll = NextScroll;
});

// Tab_content
const contentTabItem = document.querySelectorAll('.content_tab__item');
if (contentTabItem.length > 0) {
    contentTabItem.forEach((item) => {
        let itemTrigger = item.querySelector('.content_tab__trigger'),
            itemContent = item.querySelector('.content_tab__content'),
            contentHeight = itemContent.offsetHeight;
        itemContent.style.height = 0;

        itemTrigger.addEventListener('click', (event) => {
            ToggleClass(itemTrigger, 'open')
            if (itemContent.offsetHeight === 0) {
                itemContent.style.height = contentHeight + 'px';
            } else {
                itemContent.style.height = 0;
            }
            return false;
        });
    });
}

// Toggle mobile navigate
const navigateToggle = document.querySelector('.navigate__toggle');
const navigateHeader = document.getElementById('header');
let navigateHeaderHeight = 0;
if (!!navigateToggle) {
    const nav = document.querySelector('.navigate');
    const html = document.querySelector('html');
    navigateToggle.addEventListener('click', (event) => {
        if (!!navigateHeader) {
            navigateHeaderHeight = OuterHeight(navigateHeader);
        }
        nav.style.top = navigateHeaderHeight + 'px';
        console.log(nav.style.top);
        ToggleClass(event.target, 'navigate__toggle--open');
        ToggleClass(nav, 'active');
        if (html.style.overflow !== 'hidden') {
            html.style.overflow = 'hidden';
        } else {
            html.style.overflow = 'auto';
        }
    });
}

// Search form open/close
const searchForm = document.querySelector('#searchForm');
if (!!searchForm) {
    const searchInput = searchForm.querySelector('input[type=text]'),
        searchButton = searchForm.querySelector('button[type=submit]'),
        formOpenClass = 'open';

    searchForm.addEventListener('submit', (event) => {
        if (searchInput.value === '') {
            event.preventDefault()
        }
    })

    searchInput.addEventListener('focus', () => {
        if (!HasClass(searchForm, formOpenClass))
            AddClass(searchForm, formOpenClass)
    });

    searchInput.addEventListener('blur', () => {
        setTimeout(() => {
            if ((document.activeElement !== searchInput || document.activeElement !== searchButton) && searchInput.value === '') {
                RemoveClass(searchForm, formOpenClass)
            }
        }, 2000);
    });
}


