$(document).ready(function () {
  

  $('nav li a').click( function(){
    $('html, body').animate({
      scrollTop : $('#' + $(this).data('value')).offset().top - 130
    }, 800);



  });



});
