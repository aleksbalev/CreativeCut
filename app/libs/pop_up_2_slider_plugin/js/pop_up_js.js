(function( $ ){

    $.fn.rdmSlider = function( options ) {

        // Создаём настройки по-умолчанию, расширяя их с помощью параметров, которые были переданы
        var settings = $.extend( {
            slide: '.gallery__item',
            bg: '#portfolioWrap',
            img: '#portfolioImg',
            fadeDown: 'fadeDown',
            fadeIn: 'fadeIn',
            close: '#closeItem',
            prev: '#prevItem',
            next: '#nextItem',
            popUp: $('<div/>',
                {
                    id:     'portfolioWrap',
                    class:  'gallery__wrap fadeDown',
                    html:   '<div class="gallery__popup fadeIn" id="portfolioOpen">\n' +
                            '    <div class="gallery__arrow gallery__arrow--preview" id="prevItem"></div>\n' +
                            '    <img id="portfolioImg" src="">\n' +
                            '    <div class="gallery__arrow gallery__arrow--next" id="nextItem"></div>\n' +
                            '    <span class="gallery__close" id="closeItem"></span>\n' +
                            '</div>'
                })
        }, options);

        return this.each(function() {
            // CREATE THML STRUCTURE --------------------------------------------
            settings.popUp.appendTo(this);

            // variable
            // Global variables
            var n_Html = $('html');
            // Portfolio preview
            var sliderItem = $(settings.slide),
                sliderWrap = $(settings.bg),
                sliderImg = $(settings.img),
                fadeDown = settings.fadeDown,
                fadeIn = settings.fadeIn,
                closeItem = $(settings.close),
                sliderPrev = $(settings.prev),
                sliderNext = $(settings.next),
                sliderOpen = sliderImg.parent();




            // FUNCTIONS -------------------------------------------------------

            // portfolio fade out when close
            function sliderFadeOut() {
                sliderWrap.fadeOut(200);
                $('.fadeIn').addClass(fadeIn);
                setTimeout(function () {
                    sliderWrap.addClass(fadeDown);
                }, 300);
                n_Html.css('overflow-y', 'scroll');
                sliderImg.attr('src', '');
            }

            function idxImgChange(el) {
                var sliderImgAttr = parseInt(el.attr('idx')),
                    sliderImgSrc = sliderItem[sliderImgAttr].getAttribute('data-portfolio-item');

                sliderImg.attr('src', sliderImgSrc);
                if (sliderImgAttr <= 0) {
                    sliderPrev.attr('idx', sliderItemLength - 1);
                    sliderNext.attr('idx', parseInt(sliderImgAttr) + 1);
                } else if (sliderImgAttr >= sliderItemLength - 1) {
                    sliderPrev.attr('idx', parseInt(sliderImgAttr) - 1);
                    sliderNext.attr('idx', 0);
                } else {
                    sliderPrev.attr('idx', parseInt(sliderImgAttr) - 1);
                    sliderNext.attr('idx', parseInt(sliderImgAttr) + 1);
                }

                sliderImg.removeClass(fadeIn).css('opacity', 0);
                setTimeout(function () {
                    sliderImg.addClass(fadeIn);
                }, 100);

                // work with pop-up wrap
                if (sliderWrap.hasClass(fadeDown)) {
                    sliderWrap.fadeIn(10);
                    sliderWrap.removeClass(fadeDown);
                    setTimeout(function () {
                        sliderWrap.removeClass(fadeIn);
                    }, 300);
                    n_Html.css('overflow-y', 'hidden');
                    n_Html.on('touchmove', function (e) {
                        e.preventDefault();
                    });
                }
            }
            

            // ACTIONS ----------------------------------------

            // close btn
            closeItem.on('click', function () {
                sliderFadeOut();
            });

            // wrap close
            sliderWrap.on('click', function (e) {
                if (!$(e.target).is(sliderOpen)) {
                    // not stuff in here
                } else {
                    sliderFadeOut();
                }
            });


            // slide & opens elements
            var sliderItemLength = sliderItem.length;
            for (i = 0; sliderItem[i].setAttribute("idx", i), ++i < sliderItemLength;) ;

            // Open element
            sliderItem.on('click', function () {
                idxImgChange($(this));
            });
            // preview button
            sliderPrev.on('click', function () {
                idxImgChange($(this));
            });
            // Next button
            sliderNext.on('click', function () {
                idxImgChange($(this));
            });


            $(document).keyup(function (e) {
                if (!sliderWrap.hasClass(fadeDown)) {
                    if (e.which === 37) {
                        idxImgChange(sliderPrev);
                    }
                    if (e.which === 39) {
                        idxImgChange(sliderNext);
                    }
                    if (e.which === 32 || e.which === 27) {
                        sliderFadeOut();
                    }
                }
            });

        });

    };
})( jQuery );