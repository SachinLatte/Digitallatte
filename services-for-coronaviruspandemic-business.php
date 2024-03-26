<?php include 'head.php';?>
<?php include 'header_include.php'; ?>
<section class="home_banner covid-bg">
  <div class="home_banner_content mrgn">
    <h1 class="covidfnt"> <strong>Creativity</strong> in times of Crisis</h1>
  </div>
</section><!--section home_banner-->
<section class="who_we_are packages_background">
  <div class="packages_container covid">
    <p>The <strong>Corona Virus</strong> pandemic and the subsequent Lockdown has affected 
<strong>Start-Ups, Small Businesses & SME's</strong> in a variety of ways. <br>From the loss of business to remote work, things are changing fast during the COVID-19 outbreak and businesses are being forced to adapt. </p>
      <p>Digital Latte would like to extend a helping hand to these businesses by offering its
services at a minimal cost. Moreover,  <br>all the proceeds from this initiative will be <strong style="color:#ff9000;">donated to the  PM-CARES fund</strong> to aid the fight against Corona Virus. </p>
<div class="covid-services">
  <div class="covid-services-box">
      <div class="covid-box" style="background:#16110f;">
        <img src="img/seo.png">
        <h4>SEO Audit of Website</h4>
        <p>Compiled report of your website optimization
          problem & suggestions to improve your rankings.</p>
          <span>Rs.500/-*</span>
      </div>
      <div class="covid-box" style="background:#28201d;">
        <img src="img/website.png">
        <h4>Website Analysis <br> & Review</h4>
        <p>Detailed analysis of your website to find out navigation
        issues, technical problems & overall site health.</p>
        <span>Rs.500/-*</span>
      </div>
      <div class="covid-box" style="background:#28201d;">
        <img src="img/chat.png">
        <h4>1-to-1 Digital Strategy <br>
          Consultation</h4>
          <p>A 30 minute review, feedback & strategy discussion
          with our Founder & Director Mr. Chintan Vora.</p>
          <span>Rs.1500/-*</span>
      </div>
      <div class="covid-box" style="background:#16110f;">
        <img src="img/google-ad.png">
        <h4>Google Ad Set up</h4>
        <p>Create and optimize your Google Ads campaigns
        to reach out your customers.</p>
        <span>Rs.1000/-*</span>
      </div>
  </div>
  <div class="covid-form">
    <h3>Book your slot</h3>
      <form action="#" method="post">
          <div class="input-group">
            <input type="text" placeholder="Full Name" required=""> 
          </div>
          <div class="input-group">
            <input type="email" placeholder="Email" required=""> 
          </div>
          <div class="input-group">
            <input type="number" placeholder="Number" required="">
          </div>
          <div class="input-group">
            <input type="text" placeholder="Company" required=""> 
          </div>
          <div class="input-group">
            <select class="form-control ser">
              <option>Services</option>
              <option>SEO Audit</option>
              <option>Website Analysis</option>
              <option>1-to-1 Consultation Google Ads Setup</option>
            </select>
          </div>    
          <div class="input-group">
            <input type="text" placeholder="Message" required="" class="msgheight">
          </div>        
            <button class="one" type="submit">Submit</button>                
      </form>
  </div>
</div>
<div class="covidheading">
  <h5> Let's fight COVID-19 responsibly</h5>
</div>
  </div>
</section>
<a href="#" id="scroll" style="display: none;"><span></span></a>

<?php include 'tail.php';?>
<script>
	function savePackageForm(){
		//alert('clicked');
		var mob_val = $("#mobile").val();
        var email_val = $("#email").val();
		var mob_regex = /^(\+\d{1,3}[- ]?)?\d{10}$/;
        var email_regex = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
		var flag = true;
		
		if(!mob_val.match(mob_regex)){
			flag = false;
		}
        if(!email_val.match(email_regex)){
			flag = false;
		}
		
		if($('#name').val()!="" && $('#mobile').val()!="" && $('#email').val()!="" && $('#package').val()!="" && flag == true){
			//alert('inside if');
			$.ajax({
				type:'POST',
				data:$("#packageForm").serialize(),
				url :'form_package_enquiry.php',
				dataType:'json',
				success:function(data){
				  //alert(data);
				  if(data.response==1){
					$('#packageForm').css('display','none');
          $('.modal-header').css('display','none');
					$('.thank_msg_body_packages').css('display','block');
					setTimeout(function() {
						$('#packageForm').css('display','block');
            $('.modal-header').css('display','block');
						$('.thank_msg_body_packages').css('display','none');
					}, 10000); 
					$("#packageForm")[0].reset();
				   }
				   if(data.response==0){
					alert("Something went wrong! Please try again.");
				   }
				   //return false;
				}
			});
		}else{
			//alert('Something went wrong!!!!!');
			return false;
		}
	}
</script>