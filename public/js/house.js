    var swiper = new Swiper('.slider-homes', {
        slidesPerView: 3,  // Menampilkan 3 rumah per slide
        spaceBetween: 30,  // Jarak antar slide
        loop: true,        // Looping slide
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        }
    });
