document
    .addEventListener('DOMContentLoaded', function () {

        //detecting scrolling direction
        var lastScrollTop = 0;
        window.addEventListener("scroll", function () {
            var st = window.pageYOffset || document.documentElement.scrollTop;
            if (st > lastScrollTop) {
                this
                    .document
                    .querySelector('header')
                    .classList
                    .add('hidden');
            } else if (st < lastScrollTop) {
                this
                    .document
                    .querySelector('header')
                    .classList
                    .remove('hidden');

            }
            lastScrollTop = st <= 0
                ? 0
                : st;
        }, false);

        //opening submenu in header menu
        document
            .querySelectorAll('header #menu-header-menu > .menu-item-has-children')
            .forEach(element => {
                element.addEventListener('click', event => {
                    event.stopPropagation();
                    event.preventDefault();

                    element.classList.toggle('opened-sub-menu');
                    element.querySelector('.sub-menu').classList.toggle('visible');
                })
            });

    }, false);