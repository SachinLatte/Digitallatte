<script>
  fbq('track', 'Lead', {
    value: 1,
    currency: '1',
  });
</script>
<!-- Event snippet for Lead conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-1003125856/KKO-CJGUlMABEOD4qd4D'});
</script>
<section class="say_hello customPadding">
  <div class="lets-talk">
      <div class="say_hello_main">
        <div class="say_hello_main_left">
          <h4>Let's Talk <br><span id="changing" class="typing"></span></h4>
          <h5>Let's discuss your project at <a href="mailto:ideas@digitallatte.in">ideas@digitallatte.in</a></h5>
           <ul class="social_media">
              <li><a href="https://www.facebook.com/AgencyDigitalLatte" target="_blank" title="="Facebook""><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://twitter.com/Digitallatte" target="_blank"><i class="fab fa-twitter"></i></a></li>
              <li><a href="https://www.linkedin.com/company/digital-latte/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
              <li><a href="https://www.instagram.com/digitallatte/" target="_blank"><i class="fab fa-instagram"></i></a></li>
           </ul>
        </div>
        <div class="say_hello_main_right">
        </div>

		<div class="thank_msg_body displayBlock">
      <h2>Thank you for getting in touch!</h2>
			<p>
				We will get back to you soon. In the meantime,<br>
        you can explore our <a href="<?php echo base_url; ?>best-digital-marketing-case-studies">Digital Marketing case studies</a> <br>
        or update yourself with the latest from the world of <br>
        digital through our <a href="<?php echo base_url; ?>blog">blog.</a> <br>
       Go To <a href="<?php echo base_url; ?>index">Home</a> 
			</p>
		</div>
      </div>
  </div>
</section><!--say hello section-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
<script src="<?php echo base_url; ?>js/autochange-text.js"></script>
<script type="text/javascript">
var digitsOnly = /[1234568790]/g;

		function restrictCharacters(myfield, e) {
			if (!e) var e = window.event
			if (e.keyCode) code = e.keyCode;
			else if (e.which) code = e.which;
			var character = String.fromCharCode(code);
			if (code==27) { this.blur(); return false; }
			if (!e.ctrlKey && code!=9 && code!=8 && code!=36 && code!=37 && code!=38 && (code!=39 || (code==39 && character=="'")) && code!=40) {
				if (character.match(digitsOnly)) {
					return true;
				} else {
					return false;
				}
			}
		}

jQuery(document).ready(function( $ ) {
	startChangingText(['Digital', 'Strategy', 'Business', 'Creative', 'Ideas'], 1.5);
});

	function saveForm(){
		//console.log('clicked');
		var mob_val = $("#contact").val();
        var email_val = $("#emailid").val();
		var mob_regex = /^(\+\d{1,3}[- ]?)?\d{10}$/;
        var email_regex = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
		var flag = true;
		if(!mob_val.match(mob_regex)){
			flag = false;
		}
			if(!email_val.match(email_regex)){
			flag = false;
		}
		//console.log($('#fname').val() +' : '+ $('#contact').val() +' : '+ $('#emailid').val() +' : '+ $('#message').val() +' : '+ flag);
		if($('#fname').val()!="" && $('#contact').val()!="" && $('#emailid').val()!="" && $('#message').val()!="" && flag==true){
			//console.log('inside if');
			/*$('#name').val();
			$('#contact').val();
			$('#email').val();
			$('#message').val();*/
			$.ajax({
				type:'POST',
				data:$("#letsTalkForm").serialize(),
				url :'form_process.php',
				dataType:'json',
				success:function(data){
					//alert(data);
				  if(data.response==1){
					$('#letsTalkForm').css('display','none');
					$('.thank_msg_body').css('display','block');
					setTimeout(function() {
						$('#letsTalkForm').css('display','block');
						$('.thank_msg_body').css('display','none');
					}, 5000);
					$("#letsTalkForm")[0].reset();
				   }
				   if(data.response==0){
					alert("Something went wrong! Please try again.");
				   }
				   //return false;
				}
			});
		}else{
			//console.log('inside else');
			return false;
		}
	}
</script>
