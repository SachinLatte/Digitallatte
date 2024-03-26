<section class="say_hello" id="say_hello">
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
          <form action="" method="post" id="letsTalkForm" name="letsTalkForm" onsubmit="return false;">
      			<div class="contact-agile">
              <div class="row">
                <div class="col-lg-12 col-sm-12">
                  <div class="col-sm-12 contact-form">
                    <label><i class="far fa-user icon-white"></i></label>
                    <input type="text" name="name" id="fname" placeholder="Name*" required>
                  </div>
                  <div class="col-md-6 contact-form">
                    <label><i class="fas fa-phone icon-white"></i></label>
                    <input type="text" name="contact" pattern="^(\+\d{1,3}[- ]?)?\d{10}$"  onkeypress=" return restrictCharacters(this, event);" maxlength="10" id="contact" placeholder="Contact*" class="contact-width" required >
                  </div>
                  <div class="col-md-6 contact-form">
                    <label><i class="far fa-envelope icon-white"></i></label>
                    <input type="email" name="email" id="emailid" placeholder="Email*" required>
                  </div>
                  <div class="col-md-12 contact-form">
                    <label><i class="far fa-comments icon-white"></i></label>
                     <input type="text" name="message" id="message" placeholder="Message*" required>
                  </div>
                  <div class="send-button w3layouts">
                    <input type="submit" value="Send Message" id="btnSubmit" name="btnSubmit" onClick="saveForm();">
                  </div>
                  </div>
                </div>
              </div>
			      </form>
            <ul class="social_media dsplnone">
               <li><a href="https://www.facebook.com/AgencyDigitalLatte" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
               <li><a href="https://twitter.com/Digitallatte" target="_blank"><i class="fab fa-twitter"></i></a></li>
               <li><a href="https://www.linkedin.com/company/digital-latte/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
               <li><a href="https://www.instagram.com/digitallatte/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>

		<div class="thank_msg_body">
      <h2>Thank you for getting in touch!</h2>
			<p>
				We will get back to you soon. In the meantime,<br>
        you can explore our <a href="<?php echo base_url; ?>best-digital-marketing-case-studies">Digital Marketing case studies</a> <br>
        or update yourself with the latest from the world of <br>
        digital through our <a href="<?php echo base_url; ?>blog">blog.</a>
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
				//	console.log(data);
				  if(data.response==1){
					// $('#letsTalkForm').css('display','none');
					// $('.thank_msg_body').css('display','block');
					// setTimeout(function() {
					// 	$('#letsTalkForm').css('display','block');
					// 	$('.thank_msg_body').css('display','none');
					// }, 5000);
					// $("#letsTalkForm")[0].reset();
					var url = "<?php echo base_url; ?>thank-you";
                    $(location).attr('href',url);
				   }
				   if(data.response==0){
                   //console.log(2);
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
