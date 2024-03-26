<?php 
require_once('db.php');
$id = $_GET['job_id'];
$select = "SELECT * FROM current_openings WHERE job_id = ".$id;
$result = mysqli_query($con, $select);
$res = mysqli_fetch_assoc($result);
include 'head.php';
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
      <li><a href="Current-Openings.php?job_id=<?php echo $id;?>" class="active"><?php echo $res['job_title'];?></a></li>
    </ul><!--clearfix-->
  </div><!--bread-crumb-->

  <div class="position-data">
    <p class="description-designation"><?php echo $res['job_title'];?></p>
    <p class="small-text-description">Job Description</p>
    <ul class="job-description-details">
      <?php echo $res['detailed_job_description'];?>
    </ul><!--job-description-details-->

     <p class="small-text-description">Requirements</p>
     <ul class="job-description-details">
      <?php echo $res['requirements'];?>
     </ul><!--job-description-details-->
     <p class="apply-btn"><a href="Current-Openings-Application.php?job_id=<?php echo $id;?>" class="apply-form">Apply For this Job</a></p>
  </div><!--position-data-->

</div><!--custom_container-->

<?php include 'lets-talk.php';?>

<?php include 'tail.php';?>
