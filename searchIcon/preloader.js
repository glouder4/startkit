// if need <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
$(document).ready(function(){
  $('.loader').fadeOut('slow');
  $('.loader>.l_main').fadeOut('slow');
  $('header').fadeIn();
  $('body')[0].style.cssText = 'background-image: url("/wp-content/themes/Ronis/img/bg.jpg");';
})