<?php
ob_start();
include 'head.php';
require_once('db.php');
$id = $_GET['job_id'];
$select = "SELECT * FROM current_openings WHERE job_id = ".$id;
$result = mysqli_query($con, $select);
$res = mysqli_fetch_assoc($result);
?>

<section class="home_banner service-original-bg">
  <div class="home_banner_content mrgn">
    <!--<h4> <p><strong>Associate</strong> <br/> Graphic Designer</p></h4>-->
	<?php if($res['job_id']==0){?>
    <h4> <p><strong>Work</strong> With Us</p></h4>
	<?php } else{ ?>
	<h4><p><strong><?php echo $res['job_title'];?></strong></p></h4>
	<?php } ?>
  </div>
</section><!--section home_banner-->

<div class="custom_container">
  <div class="bread-crumb">
    <ul class="clearfix">
      <li><a href="Careers"><strong>Current</strong> Opening</a></li>
	  <?php  if($res['job_id']!=0){ ?>
      <li><a href="Current-Openings.php?job_id=<?php echo $id;?>"><?php echo $res['job_title'];?></strong></a></li>
	  <?php } ?>
      <li><a href="Current-Openings-Application.php?job_id=<?php echo $id;?>" class="active">Application Form</a></li>
    </ul><!--clearfix-->
  </div><!--bread-crumb-->

  <div class="application-form">
    <!--<div class="row">
      <div class="col-md-4">
        <label for="" class="application-heading">Personal Information</label>
        <span class="application-small-info">Tell us something about yourself</span>
        <img src="img/big-logo.png" alt="" class="bin-logo">
      </div>
      <div class="col-md-8 form_sub">
        <?php //include 'career_form.php';?>
      </div>
    </div>-->
	<div class="thank_msg_body_career" style="display:block;">
  <h2>Thank you for your interest <br> in Digital Latte!</h2>
  <p>
    We will get back to you soon. In the meantime,<br>
    you can explore our <a href="best-digital-marketing-case-studies">Digital Marketing case studies</a> <br>
    or update yourself with the latest from the world of <br>
    digital through our <a href="blog">blog.</a>
  </p>
</div>
  </div><!--application-form-->
</div><!--custom_container-->

<?php include 'lets-talk.php';?>

<?php include 'tail.php';?>
