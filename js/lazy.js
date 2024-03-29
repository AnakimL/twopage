$(function () {

    let
        // lazyArr = [].slice.call(document.querySelectorAll('.lazy')),
        // lazyArr = [].slice.call(querySelectorAllLive(document, '.lazy')),
        active = false,
        threshold = 200
    ;

    const lazyLoad = function (e) {
        if (active === false) {
            active = true;
            let lazyArr = [].slice.call(document.querySelectorAll('.lazy'));

            setTimeout(function () {
                lazyArr.forEach(function (lazyObj) {
                    if ((lazyObj.getBoundingClientRect().top <= window.innerHeight + threshold && lazyObj.getBoundingClientRect().bottom >= -threshold) && getComputedStyle(lazyObj).display !== 'none') {

                        if (lazyObj.dataset.src) {
                            let
                                img = new Image(),
                                src = lazyObj.dataset.src
                            ;
                            img.src = src;
                            img.onload = function () {
                                if (!!lazyObj.parent) {
                                    lazyObj.parent.replaceChild(img, lazyObj);
                                } else {
                                    lazyObj.src = src;
                                }
                            }
                            lazyObj.removeAttribute('data-src');
                        }

                        if (lazyObj.dataset.srcset) {
                            lazyObj.srcset = lazyObj.dataset.srcset;
                            lazyObj.removeAttribute('data-srcset');
                        }

                        lazyObj.classList.remove('lazy');
                        lazyObj.classList.add('lazy-loaded');

                        lazyArr = lazyArr.filter(function (obj) {
                            return obj !== lazyObj;
                        });

                        if (lazyArr.length === 0) {
                            document.removeEventListener('scroll', lazyLoad);
                            window.removeEventListener('resize', lazyLoad);
                            window.removeEventListener('orientationchange', lazyLoad);
                        }
                    }
                });

                active = false;
            }, 1);
        }
    };

});