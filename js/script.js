$(function () {
    // ハンバーガーメニュー
    $(".js-hamburger,.js-drawer a").click(function () {
        $(".js-hamburger").toggleClass("is-active");
        $(".js-drawer").fadeToggle();
    });
});

// スライダー
const swiper = new Swiper(".mv__slider", {
    loop: true,
    effect: "fade",
    speed: 3000,
    allowTouchMove: false,
    autoplay: {
        delay: 3000,
    },
});

const works_swiper = new Swiper(".works__swiper", {
    spaceBetween: 50,
    //ページネーション
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    slidesPerView: 1,
    slidesPerGroup: 1,
    breakpoints: {
        428: {
            slidesPerView: 2,
            slidesPerGroup: 2,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        },
        769: {
            slidesPerView: 3,
            slidesPerGroup: 3
        }
    },
});

$(function () {
    // ヘッダーの高さ分だけコンテンツを下げる
    const height = $(".js-header").height();
    $("main").css("margin-top", height);
    // ヘッダーの高さ取得
    const headerHeight = $(".js-header").height();
    $('a[href^="#"]').click(function () {
        const speed = 600;
        let href = $(this).attr("href");
        let target = $(href == "#" || href == "" ? "html" : href);
        // ヘッダーの高さ分下げる
        let position = target.offset().top - headerHeight;
        $("body,html").animate({ scrollTop: position }, speed, "swing");
        return false;
    });
});