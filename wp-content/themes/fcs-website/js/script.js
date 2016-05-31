jQuery(document).ready(function($) {

  $('.menu-wrap-2 form.searchform input#s').attr('placeholder', 'Пошук');
  $('.menu-wrap-2 form.searchform input#searchsubmit').attr('value', 'Шукати');

  $('.news-piece-block p').addClass('new-excerpt');

  $('.page-content').has('ul.side-menu').addClass('with-side-menu');

  $('.menu-wrap li.menu-item-has-children').mouseenter(function() {
    $(this).children('ul.sub-menu').slideDown('0.2');
   }).mouseleave(function() {
    $(this).children('ul.sub-menu').slideUp('0.2');
  });

  $('ul.sub-menu').mouseenter(function() {
    $(this).css('display', 'block');
  });

  $('.show-menu-wrap p, .show-menu').click(function() {
    $('.header-menus-mob-wrap').slideToggle('0.5');
  });

  $('.show-side-menu-btn').click(function() {
    $('ul.side-menu').slideToggle('0.5');
  });

  $(window).load(function(){

    var $container = $('.news-wrap');
    $container.masonry({
      itemSelector: '.news-piece-block',
      columnWidth: 208,
      percentPosition: true,
      isResizable: true,
      gutter: 14
    });
    /// call the layout method after all elements have been loaded
    $container.masonry();

  });

  $('ul#menu-contact-page-side-menu a').click(function(){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
  });
    
});