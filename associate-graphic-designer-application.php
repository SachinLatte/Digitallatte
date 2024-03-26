<?php include 'head.php';
require_once('db.php');
$id = $_GET['job_id'];
$select = "SELECT * FROM current_openings WHERE job_id = ".$id;
$result = mysqli_query($con, $select);
$res = mysqli_fetch_assoc($result);

?>

<?php include 'header_include.php'; ?>
<section class="home_banner service-original-bg">
  <div class="home_banner_content mrgn">
    <!--<h4> <p><strong>Associate</strong> <br/> Graphic Designer</p></h4>-->
	<h4><p><strong><?php echo $res['job_title'];?></strong></p></h4>
  </div>
</section><!--section home_banner-->

<div class="custom_container">
  <div class="bread-crumb">
    <ul class="clearfix">
      <li><a href="Careers"><strong>Current</strong> Opening</a></li>
      <li><a href="associate-graphic-designer.php?job_id=<?php echo $id;?>"><?php echo $res['job_title'];?></strong></a></li>
      <li><a href="associate-graphic-designer-appliction.php?job_id=<?php echo $id;?>" class="active">Application Form</a></li>
    </ul><!--clearfix-->
  </div><!--bread-crumb-->

  <div class="application-form">
    <div class="row">
      <div class="col-md-4">
        <label for="" class="application-heading">Personal Information</label>
        <span class="application-small-info">Tell us something about yourself</span>
        <img src="img/big-logo.png" alt="" class="bin-logo">
      </div>
      <div class="col-md-8 form_sub">
        <?php include 'career_form.php';?>
      </div>
    </div>

  </div><!--application-form-->
</div><!--custom_container-->

<?php include 'lets-talk.php';?>

<?php include 'tail.php';?>
