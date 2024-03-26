<?php include 'head.php';
require_once('db.php');
$select = "SELECT * FROM current_openings WHERE status IN(1,2) AND is_available = 1";
$result = mysqli_query($con, $select);
$rs = array();
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $rs[] =  $row;
  }
}
?>

<!-- Job Posting Schema Start-->
<script type="application/ld+json"> {
"@context" : "https://schema.org/",
"@type" : "JobPosting",
"title" : "Associate-Graphic Designer",
"description" : "<p>Creating graphics and layouts for Social Media, Websites, Infographics, Mobile Apps, Mobile Websites, Print Collaterals. Illustrating or creating rough sketches of material, discussing them with clients and/or supervisors and making necessary changes. Develop creative programs and design concepts that meet the business objectives of the organisation and that advance our brand strategy.  Working closely with the account team, strategy team, and copywriters to develop concepts and present to management.  Brainstorming with internal teams to generate ideas for pitching and proposal.</p>",
"datePosted" : "2019-06-25",
"validThrough" : "2019-12-25",
"employmentType" : "Full-Time",
"hiringOrganization" : {
  "@type" : "Organization",
  "name" : "Digital Latte",
  "sameAs" : "https://www.digitallatte.in/",
  "logo" : "https://digitallatte.in/img/logo.png"
},
"jobLocation": {
"@type": "Place",
  "address": {
  "@type": "PostalAddress",
  "streetAddress": "D 317, Neelkanth Business Park, Old Nathani Road, Vidyavihar West",
  "addressLocality": "Mumbai",
  "addressRegion": "Maharashtra",
  "postalCode": "400086",
  "addressCountry": "India"
  }
},
"baseSalary": {
  "@type": "MonetaryAmount",
  "currency": "Rupees",
  "value": {
    "@type": "QuantitativeValue",
    "value": 00,
    "unitText": "HOUR"
  }
}
}
</script>

<script type="application/ld+json"> {
"@context" : "https://schema.org/",
"@type" : "JobPosting",
"title" : "Associate-Digital Marketer",
"description" : "<p>Manage day-to-day digital marketing programs, campaigns and processes including budgeting, forecasting, accruals and reporting Development of digital marketing plans, programs and scope of services
Create, curate, and manage all published content (images, video and written).
Work closely with brand design, communications, policy, growth marketing, and other teams to execute coordinated strategic campaigns
Developing and executing a comprehensive social media strategy focused on high-quality content.
Monitor trends in Social Media tools, applications, channels, design and strategy.</p>",
"datePosted" : "2019-06-25",
"validThrough" : "2019-12-25",
"employmentType" : "Full-Time",
"hiringOrganization" : {
  "@type" : "Organization",
  "name" : "Digital Latte",
  "sameAs" : "https://www.digitallatte.in/",
  "logo" : "https://digitallatte.in/img/logo.png"
},
"jobLocation": {
"@type": "Place",
  "address": {
  "@type": "PostalAddress",
  "streetAddress": "D 317, Neelkanth Business Park, Old Nathani Road, Vidyavihar West",
  "addressLocality": "Mumbai",
  "addressRegion": "Maharashtra",
  "postalCode": "400086",
  "addressCountry": "India"
  }
},
"baseSalary": {
  "@type": "MonetaryAmount",
  "currency": "Rupees",
  "value": {
    "@type": "QuantitativeValue",
    "value": 00,
    "unitText": "HOUR"
  }
}
}
</script>

<script type="application/ld+json"> {
"@context" : "https://schema.org/",
"@type" : "JobPosting",
"title" : "Associate Content Strategist",
"description" : "<p>Develop unique and engaging content to meet in-house and clients multiple requirements
Directly responsible for writing on variety of unique topics for the web pages, websites, newletters, blogs, video scripts in an effective storytelling ways.
Plan Digital campaigns driven by content,  Identify areas of growth and implement strategies with the Digital team.</p>",
"datePosted" : "2019-06-25",
"validThrough" : "2019-12-25",
"employmentType" : "Full-Time",
"hiringOrganization" : {
  "@type" : "Organization",
  "name" : "Digital Latte",
  "sameAs" : "https://www.digitallatte.in/",
  "logo" : "https://digitallatte.in/img/logo.png"
},
"jobLocation": {
"@type": "Place",
  "address": {
  "@type": "PostalAddress",
  "streetAddress": "D 317, Neelkanth Business Park, Old Nathani Road, Vidyavihar West",
  "addressLocality": "Mumbai",
  "addressRegion": "Maharashtra",
  "postalCode": "400086",
  "addressCountry": "India"
  }
},
"baseSalary": {
  "@type": "MonetaryAmount",
  "currency": "Rupees",
  "value": {
    "@type": "QuantitativeValue",
    "value": 00,
    "unitText": "HOUR"
  }
}
}
</script>
<script type="application/ld+json"> {
"@context" : "https://schema.org/",
"@type" : "JobPosting",
"title" : "Senior SEO Analyst",
"description" : "<p>Perform keyword research in coordination with client business objectives to optimize existing content and uncover new opportunities.
Provide SEO analysis and recommendations in coordination with elements and structure of websites and web pages.
Provide recommendations and execute strategies for content development in coordination with SEO goals general and keyword specific.</p>",
"datePosted" : "2019-06-25",
"validThrough" : "2019-12-25",
"employmentType" : "Full-Time",
"hiringOrganization" : {
  "@type" : "Organization",
  "name" : "Digital Latte",
  "sameAs" : "https://www.digitallatte.in/",
  "logo" : "https://digitallatte.in/img/logo.png"
},
"jobLocation": {
"@type": "Place",
  "address": {
  "@type": "PostalAddress",
  "streetAddress": "D 317, Neelkanth Business Park, Old Nathani Road, Vidyavihar West",
  "addressLocality": "Mumbai",
  "addressRegion": "Maharashtra",
  "postalCode": "400086",
  "addressCountry": "India"
  }
},
"baseSalary": {
  "@type": "MonetaryAmount",
  "currency": "Rupees",
  "value": {
    "@type": "QuantitativeValue",
    "value": 00,
    "unitText": "HOUR"
  }
}
}
</script>
<!-- Job Posting Schema End-->

<?php include 'header_include.php'; ?>
<section class="home_banner careers_bg">
  <div class="mobile_img_careers">
    <img src="img/career-bg.webp">
  </div>
  <div class="home_banner_content mrgn">
    <h1><strong>BReW Fresh Ideas</strong><br/> With US!</h1>
    <p>We're brewing fresh ideas every day to ensure that we come </br> with something beyond ordinary. Whether it's building beautiful<br/> Websites, Apps or leveraging Social Media, there's plenty to sink<br/> your teeth into.</p>
  </div>
</section><!--section home_banner-->

<section class="careers-block">
  <div class="custom_container">
    <h1><strong>Current</strong> Openings</h1>
    <div class="career-block-child">
      <ul class="">
	  <?php foreach($rs as $res){ ?>
        <li>
          <p class="position-head"><?php echo $res['job_title'];?></p>
            <div class="experince-block">
              <p class="experince-head"><span><img src="img/case.png"></span><?php echo $res['expected_experience'];?></p>
              <p class="experince-head"><span><img src="img/nib.png" style="text-align:center;display:block;margin:0 auto;"></span><?php echo $res['technical_skills'];?></p>
            </div>
          <a href="Current-Openings.php?job_id=<?php echo $res['job_id'];?>" class="apply-now-career">Apply Now</a>
        </li>
      <?php } ?>
      </ul><!--clearfix-->
    </div><!--career-block-child-->
    <h4>Didn't find a job of your interest?</h4>
    <h5>Submit your resume <a href="submit-resume">here</a> & let us find the right one for you!</h5>
  </div>
</section><!--careers-block-->

<?php include 'lets-talk.php';?>

<a href="#" id="scroll" style="display: none;"><span></span></a>

<?php include 'tail.php';?>
