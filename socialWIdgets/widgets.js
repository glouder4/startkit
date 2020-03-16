// if need <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" defer>
		var toggler = 0;
		$('#ShareWidget').click(function(){
			if(toggler == 0){
				if($( window ).width() > 500){
					$('#WidgetVK').animate({
						bottom:"55px"
					});
					$('#WidgetInstagram').animate({
						bottom:"105px"
					});
					$('#WidgetWatsApp').animate({
						bottom:"155px"
					});
					$('#WidgetTelegram').animate({
						bottom:"205px"
					}, 500, function() {
						toggler = 1;
					  });
				}
				else{
					$('#WidgetVK').animate({
						bottom:"130px"
					});
					$('#WidgetInstagram').animate({
						bottom:"180px"
					});
					$('#WidgetWatsApp').animate({
						bottom:"230px"
					});
					$('#WidgetTelegram').animate({
						bottom:"280px"
					}, 500, function() {
						toggler = 1;
					  });
				}
			}
			if(toggler == 1){
				if($( window ).width() > 500){
					$('#WidgetVK,#WidgetInstagram,#WidgetWatsApp,#WidgetTelegram').animate({
						bottom:"5px"
					}, 500, function(){
						toggler = 0;
					  });
				}
				else{
					$('#WidgetVK,#WidgetInstagram,#WidgetWatsApp').animate({
						bottom:"90px"
					}, 500, function(){
						toggler = 0;
					  });
				}
			}
		});

</script>