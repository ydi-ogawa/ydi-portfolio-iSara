$(function(){

$('.faq-list-item h3').click(function(){
  $(this).next().slideToggle(300);
  $(this).find('.fas').toggleClass('fa-angle-down');
  $(this).find('.fas').toggleClass('fa-angle-up');
});

$('.left').click(function(){
  $(this).next().slideToggle(300);
  $(this).find('.fas').toggleClass('fa-angle-down');
  $(this).find('.fas').toggleClass('fa-angle-up');
});



var pageTop = $('.page-top');
pageTop.hide();

$(window).scroll(function(){
  if($(this).scrollTop() > 100) {
    pageTop.fadeIn();
  }else{
    pageTop.fadeOut();
  }
});


pageTop.click(function(){
  $('body,html').animate({scrollTop: 0},500);
    return false;

});

var documentForm = $('.form');

documentForm.click(function(){
  $('body,html').animate({scrollTop:$('.document-form').offset().top - 50},500);
    return false;
});
// documentForm.click(function(){
//   $('body,html').animate({scrollTop: 0},500);
//     return false;
// });





});
