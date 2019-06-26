$(document).ready(function(){


  $("#girlrand a:contains('Baby Girl Names')").parent().addClass('active');

  $('ul.nav li.dropdown').hover(function(){
  
  $('.dropdown-menu',this).fadeIn();
  }, function(){

    $('.dropdown-menu',this).fadeOut('fast');

  });//Hover


});