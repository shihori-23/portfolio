//　画面サイズに合わせてpaddingを取得
const realHeight = window.innerHeight;
const realHeightHarf = realHeight / 2;
const paddingTop = realHeight + 100;
console.log(paddingTop);

//　ウィンドウの縦幅を取得してpaddingを設定
var realHeightGet = function() {
    $(function() {
        $(".content").css("padding-top", paddingTop);
    });
};
realHeightGet();

// スクロール幅に応じてタイトルとスクロールアイコンを非表示に切り替える

/* 定義 */
const sectionTop = {
    about: $(".about").offset().top,
    skill: $(".skill").offset().top,
    portfolio: $(".portfolio").offset().top,
    contact: $(".contact").offset().top
};
const logTop = $(".logo").offset().top;
const scrollIconTop = $(".scroll_icon").offset().top;
// const aboutSection = $(".about").offset().top;
// const skillSection = $(".skill").offset().top;
// const portfolioSection = $(".portfolio").offset().top;
// const contactSection = $(".contact").offset().top;
const wheight = $(window).height();
const elTitle = wheight - logTop;
const elScrollIcon = wheight - scrollIconTop;

$(window).scroll(function() {
    if ($(window).scrollTop() > elTitle) {
        $(".logo").addClass("fade_out");
        $(".logo").addClass("none");
    } else {
        $(".logo").removeClass("fade_out");
        $(".logo").removeClass("none");
    }

    if ($(window).scrollTop() > elScrollIcon) {
        $(".scroll_icon").addClass("fade_out");
        $(".scroll_icon").addClass("none");
    } else {
        $(".scroll_icon").removeClass("fade_out");
        $(".scroll_icon").removeClass("none");
    }
    if ($(window).scrollTop() > realHeightHarf) {
        $(".bg_area").addClass("fade_out");
        $(".bg_area").addClass("none");
    } else {
        $(".bg_area").removeClass("fade_out");
        $(".bg_area").removeClass("none");
    }
    // if ($(window).scrollTop() > wheight - (sectionTop.about + realHeightHarf)) {
    //     $(".bg_area").addClass("bg_about");
    // } else {
    //     $(".bg_area").removeClass("bg_about");
    // }

    // if ($(window).scrollTop() > sectionTop.skill + realHeightHarf) {
    //     $(".bg_area").addClass("bg_skill");
    // } else {
    //     $(".bg_area").removeClass("bg_skill");
    // }

    // if ($(window).scrollTop() > sectionTop.portfolio + realHeightHarf) {
    //     $(".bg_area").addClass("bg_portfolio");
    // } else {
    //     $(".bg_area").removeClass("bg_portfolio");
    // }

    // if ($(window).scrollTop() > sectionTop.contact + realHeightHarf) {
    //     $(".bg_area").addClass("bg_contact");
    // } else {
    //     $(".bg_area").removeClass("bg_contact");
    // }
});

//　ポートフォリオ画像のホバーイベント
$(function() {
    //マウスを乗せたら発動
    $("#portfolioImgBox").hover(function() {
        //マウスを乗せたら色が変わる
        $("#imgHoverBg").addClass("isvisible");
    });
});
