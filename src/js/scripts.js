document
    .addEventListener('DOMContentLoaded', function () {

        //detecting scrolling direction
        var lastScrollTop = 0;
        window.addEventListener("scroll", function () {
            document.querySelectorAll('.menu-item-has-children.opened-sub-menu').forEach(e => e.classList.remove('opened-sub-menu'));
            document.querySelectorAll('.sub-menu.visible').forEach(e => e.classList.remove('visible'));
            var st = window.pageYOffset || document.documentElement.scrollTop;
            if (st > lastScrollTop) {

                document
                    .querySelector('header')
                    .classList
                    .add('hidden');
                    
            } else if (st < lastScrollTop) {
                document
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

                    element
                        .classList
                        .toggle('opened-sub-menu');
                    element
                        .querySelector('.sub-menu')
                        .classList
                        .toggle('visible');
                })
            });

        //hiding extra info top bare depending on local storage
        const hideFlag = localStorage.getItem("hidetopinfobar");
        if(hideFlag != null && hideFlag === 'true') {
            document.querySelector('header').classList.add('extra-info-hidden');
        }
        document.querySelector('header .extra-notification-close').addEventListener('click', event => {
            event.target.closest('header').classList.add('extra-info-hidden');
            localStorage.setItem("hidetopinfobar", "true");
        });

    }, false);