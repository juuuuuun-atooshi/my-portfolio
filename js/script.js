$(function () {
    // ハンバーガーメニュー
    $(".js-hamburger,.js-drawer a").click(function () {
        $(".js-hamburger").toggleClass("is-active");
        $(".js-drawer").fadeToggle();
    });
});

// スライダー
new Swiper(".mv__slider", {
    loop: true,
    effect: "fade",
    speed: 3000,
    allowTouchMove: false,
    autoplay: {
        delay: 3000,
    },
});


document.querySelectorAll(".works__swiper").forEach((swiperElement) => {
    const slidenum = swiperElement.querySelectorAll(".swiper-slide.work__slide").length;

    const pcFlag = slidenum > 3 ? true : false;
    const mdFlag = slidenum > 2 ? true : false;

    new Swiper(".works__swiper", {
        loop: true,
        allowTouchMove: false,
        speed: 800,
        autoplay: {
            delay: 3000,
        },

        spaceBetween: 50,
        //ページネーション
        pagination: {
            el: ".swiper-pagination",
            type: "progressbar",
        },

        breakpoints: {
            428: {
                loop: false,
                slidesPerView: 2,
                slidesPerGroup: 2,
                // pagination: {
                //     el: ".swiper-pagination",
                //     type: "progressbar",
                // },
            },
            769: {
                loop: false,
                slidesPerView: slidenum,
                // slidesPerGroup: 3,
            }
        }
    });
});

// new Swiper(".works__swiper", {
//     spaceBetween: 50,
//     //ページネーション
//     pagination: {
//         el: ".swiper-pagination",
//         clickable: true,
//     },
//     slidesPerView: 1,
//     slidesPerGroup: 1,
//     breakpoints: {
//         428: {
//             slidesPerView: 2,
//             slidesPerGroup: 2,
//         },
//         769: {
//             slidesPerView: 3,
//             slidesPerGroup: 3
//         }
//     },
// });

$(function () {
    // ヘッダーの高さ分だけコンテンツを下げる
    // ヘッダーの高さ取得
    const headerHeight = $(".js-header").height();
    $("main").css("margin-top", headerHeight);
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

//送信ボタンを押した時のみバリデーションメッセージ表示
jQuery(".form__button-text").click(function () {
    jQuery(".wpcf7-form-control-wrap").addClass("is-show");
});


// スクロールエフェクト
$(window).scroll(function () {
    var scrollAnimationElm = document.querySelectorAll('.scroll_up , .scroll_left , .scroll_right');
    var scrollAnimationFunc = function () {
        for (var i = 0; i < scrollAnimationElm.length; i++) {
            var triggerMargin = 100;
            if (window.innerHeight > scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin) {
                scrollAnimationElm[i].classList.add('on');
            }
        }
    }
    window.addEventListener('load', scrollAnimationFunc);
    window.addEventListener('scroll', scrollAnimationFunc);
});