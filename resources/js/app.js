import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {

    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const openIcon = document.getElementById('menu-open-icon');
    const closeIcon = document.getElementById('menu-close-icon');

    if (!menuButton || !mobileMenu) {
        return;
    }

    menuButton.addEventListener('click', function () {

        mobileMenu.classList.toggle('hidden');

        if (mobileMenu.classList.contains('hidden')) {
            openIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        } else {
            openIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
        }

    });

    const mobileLinks = mobileMenu.querySelectorAll('a');

    mobileLinks.forEach(function (link) {

        link.addEventListener('click', function () {

            mobileMenu.classList.add('hidden');

            openIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');

        });

    });

});
