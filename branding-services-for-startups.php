<?php include 'head.php';?>
<?php include 'header_include.php'; ?>
<section class="home_banner branding_bg">
  <div class="mobile_img">
    <img src="img/branding_mobile.png">
  </div>
  <div class="home_banner_content mrgn">
    <h1 class="fnt"><strong>Branding Kit</strong> <br> for Startups</h1>
    <p>Build your brand and make a lasting impression <br> of startup and product.</p>
  </div>
</section><!--section home_banner-->
<section class="who_we_are packages_background">
  <div class="packages_container">
    <div class="who_we_main clearfix">
      <div class="packages_heading">
        <h3> <strong>Let's build</strong> your brand</h3>
      </div>
    </div>
    <div class="branding_kit_main">
      <div class="row brandbgthree">
        <div class="col-sm-4"><h3>Activity</h3></div>
        <div class="col-sm-8"><h3>Description</h3></div>
      </div>
      <div class="row brandbgone">
        <div class="col-sm-4"><h4>Logo Design</h4></div>
        <div class="col-sm-8">
          <p>2 different concepts with 5 iterations.</p>
          <p>Multiple design files to including: JPG, PSD, PNG and PDF.</p>
        </div>
      </div>
      <div class="row brandbgtwo">
        <div class="col-sm-4"><h4>Branding</h4></div>
        <div class="col-sm-8">
          <p>Business Cards</p>
          <p>Letter Heads, Invoice Format, Quotation Format</p>
          <p>Email Template</p>
          <p>Case Study Templates & Presentation Slides</p>
          <p>Brand Manual –  Logo usage, Fonts, Colors Palettes etc</p>
        </div>
      </div>
      <div class="row brandbgone">
        <div class="col-sm-4"><h4>Promotion Material</h4></div>
        <div class="col-sm-8">
          <p>4 Leaflet/Flyer Design * 3 Adaptations for different sizes</p>
        </div>
      </div>
      <div class="row brandbgtwo">
        <div class="col-sm-4"><h4>Social Media</h4></div>
        <div class="col-sm-8">
          <p>Creating Social Media Accounts on Facebook, Instagram, Twitter.</p>
          <p>Creating Google My Business (GMB) & Bing Business Listing.</p>
          <p>1 Cover Photo/Header Image, 1 Profile Picture & 5 Social Media Post across all 3 platforms.</p>
        </div>
      </div>
  <!--     <div class="row brandbgone">
        <div class="col-sm-4"><h4>Commercials</h4></div>
        <div class="col-sm-8"><p>Rs. 45,000/-*</p></div>
      </div> -->
    </div>
    <div class="custom_requirement">
      <a href="" class="startnow"  data-toggle="modal" data-target="#packagesModal">Get a Quote</a>
      <h4>Don’t miss out on the <a href="website-development-for-startups.php">Website Design & Development</a> Package for Start-ups</h4>
    </div>
  </div>
</section>
 <!-- Packages Modal -->
  <div class="modal fade" id="packagesModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> <!-- <strong>WEBSITE</strong> --> ENQUIRY FORM</h4>
        </div>
        <div class="modal-body">
          <form action="" method="post" id="packageFormBrandingServices" name="packageFormBrandingServices" onsubmit="return false;">
            <div class="form-group">
              <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
            </div>
                <div class="form-group">
              <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile" pattern="^(\+\d{1,3}[- ]?)?\d{10}$"  onkeypress=" return restrictCharacters(this, event);" maxlength="10" required>
            </div>
            <div class="form-group">
              <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
            </div>
             <div class="form-group">
              <input type="text" name="company" id="company" class="form-control" placeholder="Company Name">
            </div>
			<input type="hidden" name="pagename" id="pagename" value="Branding Kit for Startups">
            <input type="submit" value="Submit" id="btnSubmit" class='btn  package_enquiry' name="btnSubmit" onClick="saveBrandingServicesForm();" style='margin-left:0px;'>
          </form>
          <!--<button class="btn  package_enquiry">Submit</button>-->
        </div>
        <div class="thank_msg_body_packages">
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
  </div>
  <!-- Packages Modal -->
  <div id="package_scroll">
    <?php include 'lets-talk.php';?>
  </div>

<a href="#" id="scroll" style="display: none;"><span></span></a>

<?php include 'tail.php';?>
<script>
	function saveBrandingServicesForm(){
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
		
		if($('#name').val()!="" && $('#mobile').val()!="" && $('#email').val()!="" && flag == true){
			//alert('inside if');
			$.ajax({
				type:'POST',
				data:$("#packageFormBrandingServices").serialize(),
				url :'form_package_enquiry.php',
				dataType:'json',
				success:function(data){
				  //alert(data);
				  if(data.response==1){
					$('#packageFormBrandingServices').css('display','none');
          $('.modal-header').css('display','none');
					$('.thank_msg_body_packages').css('display','block');
					setTimeout(function() {
						$('#packageFormBrandingServices').css('display','block');
            $('.modal-header').css('display','block');
						$('.thank_msg_body_packages').css('display','none');
					}, 10000);
					$("#packageFormBrandingServices")[0].reset();
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

