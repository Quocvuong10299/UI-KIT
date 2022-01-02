document.addEventListener( 'DOMContentLoaded', function () {
    var elms = document.getElementsByClassName( 'splide' );
    for ( var i = 0, len = elms.length; i < len; i++ ) {
        new Splide( elms[ i ] ).mount();
    }

    // var splide_thumbnails = document.getElementById('splide-thumbnails');
    // var splide_primary = document.getElementById('splide-primary');
    // if (splide_thumbnails && splide_primary){
    //     var thumbnailsSplide = new Splide('#splide-thumbnails', {
    //         rewind: true,
    //         fixedWidth: 112,
    //         fixedHeight: 112,
    //         isNavigation: true,
    //         gap: 20,
    //         focus: 'center',
    //         pagination: false,
    //         cover: true,
    //         arrows: false,
    //         breakpoints: {
    //             '768':{
    //                 fixedWidth: 80,
    //                 fixedHeight: 80,
    //                 focus: 'center'
    //             },
    //         }
    //     }).mount();
    //     var primarySplide = new Splide('#splide-primary', {
    //         type: 'fade',
    //         pagination: false,
    //         arrows: true,
    //         cover: true,
    //     });
    //     primarySplide.sync(thumbnailsSplide).mount();
    // }



    // const swiper = new Swiper('.swiper', {
    //     // Optional parameters
    //     direction: 'horizontal',
    //     loop: false,
    //     slidesPerView: 1,
    //     centeredSlides: false,
    //     slidesPerGroupSkip: 1,
    //     spaceBetween: 27,
    //     freeMode: true,
    //     grabCursor: true,
    //     keyboard: {
    //         enabled: true,
    //     },
    //     // If we need pagination
    //     pagination: {
    //         el: '.swiper-pagination',
    //     },
    //
    //     // Navigation arrows
    //     navigation: {
    //         nextEl: '.swiper-button-next',
    //         prevEl: '.swiper-button-prev',
    //     },
    //
    //     // And if we need scrollbar
    //     scrollbar: {
    //         el: '.swiper-scrollbar',
    //     },
    // });

    var menu = new MmenuLight(
        document.querySelector('#menu'),
        'all'
    );

    var navigator = menu.navigation({
        // selectedClass: 'Selected',
        // slidingSubmenus: true,
        theme: 'light',
        // title: 'Menu'
    });

    var drawer = menu.offcanvas({
        // position: 'left'
    });



    var menu = new MmenuLight(
        document.querySelector('#menu'),
        'all'
    );

    var navigator = menu.navigation({
        // selectedClass: 'Selected',
        // slidingSubmenus: true,
        theme: 'light',
        title: ''
    });

    var drawer = menu.offcanvas({
        // position: 'left'
    });

    document.querySelector('a[href="#menu"]')
        .addEventListener('click', evnt => {
            evnt.preventDefault();
            drawer.open();
        });
    window.addEventListener('resize', function () {
        drawer.close();
    });
} );