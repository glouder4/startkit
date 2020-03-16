// if need <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
$(document).ready(function(){
  $('#pageHeader>.site-branding>.row>.col-lg-8>div>#searchDropdown').click(function(){
     $('#searcher').toggleClass('searcherShow');
  })
  $('#pageHeader>#searcher>form>#searchClose').click(function(){
     $('#searcher').toggleClass('searcherShow');
  })
})