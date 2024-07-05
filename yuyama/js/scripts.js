(function ($, root, undefined) {
	
jQuery(function($) {
	$('.navToggle').click(function() {
    $(this).toggleClass('active');
    if ($(this).hasClass('active')) {
      $('.global').addClass('active');
      $('.commonHeader').addClass('is-navOpen');
      $('body').addClass('fixed');
    } else {
      $('.global').removeClass('active');
      $('.commonHeader').removeClass('is-navOpen');
      $('body').removeClass('fixed');
    }
  });
$('a[href^="#"]').click(function(){
    let speed = 500;
    let href= $(this).attr("href");
    let target = $(href == "#" || href == "" ? 'html' : href);
    let position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
	$('.top__slider').slick({
		autoplay: true,
		dots: true,
		infinite: true,
		speed: 1000,
		fade: true,
		cssEase: 'linear',
		arrows: true,
	});
  $(".product-slider").slick({
    arrows: true,
    speed: 1000,
    autoplay: true,
    adaptiveHeight: true,
    centerMode: true,
    centerPadding: "25%",
    dots: true,
  });
  $(".productheader__slider").slick({
    arrows: true,
    speed: 1000,
    autoplay: true,
    adaptiveHeight: true,
    dots: true,
  });
});
//要素を取得
const tabs = document.querySelectorAll('.js-tab');

//繰り返し処理
tabs.forEach((tab) => {
  //要素を取得
  const buttons = tab.querySelectorAll('.js-tab-button'),
    contents = tab.querySelectorAll('.js-tab-content');

  function toggle() {
    //ボタンのクラス削除
    buttons.forEach((button) => {
      button.classList.remove('is-active');
    });

    //コンテンツのクラス削除
    contents.forEach((content) => {
      content.classList.remove('is-active');
    });

    //ボタンにクラス付与
    this.classList.add('is-active');

    //クリックした要素の順番を取得
    const arrayButton = Array.prototype.slice.call(buttons),
      index = arrayButton.indexOf(this);

    //該当するコンテンツを表示
    contents[index].classList.add("is-active");
  }

  //繰り返し処理
  buttons.forEach((button) => {
    //クリックイベント
    button.addEventListener('click', toggle);
  });
});
	
})(jQuery, this);
