<?php include 'head.php';?>

<?php include 'header_include.php'; ?>
<section class="home_banner service-original-bg">
  <div class="home_banner_content mrgn">
    <h4> <p><strong>Work</strong> With Us</p></h4>
  </div>
</section><!--section home_banner-->

<div class="custom_container">
  <div class="bread-crumb">
    <ul class="clearfix">
      <li><a href="Careers.php"><strong>Careers</strong></a></li>
      <li><a href="submit-resume.php" class="active">Application Form</a></li>
    </ul><!--clearfix-->
  </div><!--bread-crumb-->

  <div class="application-form">
    <div class="row">
      <div class="col-md-4">
        <label for="" class="application-heading">Personal Information</label>
        <span class="application-small-info">Tell us something about yourself</span>
        <img src="img/big-logo.png" alt="" class="bin-logo">
      </div>
      <div class="col-md-8">
        <?php include 'career_form.php';?>
      </div>
    </div>

  </div><!--application-form-->
</div><!--custom_container-->

<?php include 'lets-talk.php';?>

<?php include 'tail.php';?>
