import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {

    /*
    ========================================
    MOBILE MENU
    ========================================
    */

    const menuButton =
        document.getElementById('mobile-menu-button');

    const mobileMenu =
        document.getElementById('mobile-menu');

    const openIcon =
        document.getElementById('menu-open-icon');

    const closeIcon =
        document.getElementById('menu-close-icon');


    if (menuButton && mobileMenu) {

        menuButton.addEventListener('click', function () {

            const isHidden =
                mobileMenu.classList.contains('hidden');

            mobileMenu.classList.toggle('hidden');

            menuButton.setAttribute(
                'aria-expanded',
                isHidden ? 'true' : 'false'
            );


            if (isHidden) {

                openIcon?.classList.add('hidden');

                closeIcon?.classList.remove('hidden');

            } else {

                openIcon?.classList.remove('hidden');

                closeIcon?.classList.add('hidden');

            }

        });


        /*
        Close mobile menu after clicking a link
        */

        mobileMenu
            .querySelectorAll('a')
            .forEach(function (link) {

                link.addEventListener('click', function () {

                    mobileMenu.classList.add('hidden');

                    menuButton.setAttribute(
                        'aria-expanded',
                        'false'
                    );

                    openIcon?.classList.remove('hidden');

                    closeIcon?.classList.add('hidden');

                });

            });

    }


    /*
    ========================================
    NAVBAR SCROLL SHADOW
    ========================================
    */

    const navbar =
        document.getElementById('main-navbar');


    if (!navbar) {
        return;
    }


    function updateNavbar() {

        if (window.scrollY > 40) {

            navbar.classList.add(
                'navbar-scrolled'
            );

        } else {

            navbar.classList.remove(
                'navbar-scrolled'
            );

        }

    }


    updateNavbar();


    window.addEventListener(
        'scroll',
        updateNavbar,
        {
            passive: true
        }
    );

});