<div class="careers_form">
<form action="career_form_action.php" method="POST" id="career_form" name="career_form" enctype="multipart/form-data" onsubmit="return Validate(this);">
  <input type="text" name="name" value="" class="application-input" placeholder="Full name*" required>
  <input type="email" name="email" value="" class="application-input" placeholder="Email Address*" required>
  <input type="text" name="contact" value="" class="application-input"  pattern="^(\+\d{1,3}[- ]?)?\d{10}$" placeholder="Phone number*" required maxlength="10" onkeypress=" return restrictCharacters(this, event);">
  <p class="input-sub-text">Photo</p>
  <input type="file" value="" onchange="display_file_name(this)" name="photo" class="application-input" required>
  <label class="custom-file-label"></label>
  <p class="input-sub-text">CV/Resume</p>
 
  <input type="file" value=""  onchange="display_file_name(this)" name="cv" class="application-input" required>
  <label class="custom-file-label"></label>
  <input type="hidden" value="<?php if(isset($id)){echo $id;}else{echo 0;} ?>" name="job_id" class="application-input" required>
  <p class="input-sub-text">Cover Letter</p>
  <textarea class="cover-letter" placeholder="Insert your cover letter here"  name="cover_letter" required ></textarea>
 
 <p><input type="submit" value="Submit application" class="apply-form"></p>
 <small class="text-danger" id="cv_type_error"></small>
 </form>
</div>
<div class="thank_msg_body_career">
  <h2>Thank you for your interest <br> in Digital Latte!</h2>
  <p>
    We will get back to you soon. In the meantime,<br>
    you can explore our <a href="best-digital-marketing-case-studies">Digital Marketing case studies</a> <br>
    or update yourself with the latest from the world of <br>
    digital through our <a href="blog">blog.</a>
  </p>
</div>
<script>
function display_file_name(e){
	var file_name = e.value.substring(e.value.lastIndexOf('\\') + 1);
	e.nextElementSibling.innerHTML = file_name;
}

var _validFileExtensions = [".pdf"];    
function Validate(oForm) {
    var arrInputs = oForm.querySelectorAll("input[name='cv']");
    //console.log(arrInputs);
    for (var i = 0; i < arrInputs.length; i++) {
        var oInput = arrInputs[i];
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }
                
                if (!blnValid) {
                   // alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                   $('#cv_type_error').html("Sorry, Resume File is Invalid, Only PDF file is allowed!");
                   return false;
                }
            }
        }
    }
  
    return true;
}
</script>
