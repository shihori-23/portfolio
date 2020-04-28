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
const logTop = $(".logo").offset().top;
const scrollIconTop = $(".scroll_icon").offset().top;
const wh = $(window).height();
const elTitle = wh - logTop;
const elScrollIcon = wh - scrollIconTop;

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
});
