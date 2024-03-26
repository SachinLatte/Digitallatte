<?php include '../../head.php';?>

<!-- Breadcrumb Schema Start -->
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Our Expertise",
    "item": "https://www.digitallatte.in/what-we-brew"
  },{
    "@type": "ListItem",
    "position": 2,
    "name": "Digital Services",
    "item": "https://www.digitallatte.in/our-expertise/Web-Development-Services"
  },{
    "@type": "ListItem",
    "position": 3,
    "name": "Video Content Creation",
    "item": "https://www.digitallatte.in/our-expertise/web-development-services/Content-Management-Systems"
  }]
}
</script>
<!-- Breadcrumb Schema End -->

<?php include '../../header_include.php'; ?>
<section class="home_banner service-original-bg">
  <div class="home_banner_content mrgn">
    <h1><img src="<?php echo base_url; ?>img/cms.png"> <p><strong>Content Management </strong> <br/>Systems (CMS) </p></h1>
  </div>
</section><!--section home_banner-->

  <div class="service-bio custom_container">
    <div class="bread-crumb">
      <ul class="clearfix">
        <li><a href="<?php echo base_url; ?>what-we-brew"><strong>Our</strong> Expertise</a></li>
        <li><a href="<?php echo base_url; ?>our-expertise/Web-Development-Services"><strong>Web</strong> Development Services</a></li>
        <li><a href="#" class="active">Content Management System</a></li>
      </ul><!--clearfix-->
    </div><!--bread-crumb-->

    <h1 class="service-main-head">Every Complex Website  <br/>needs a simple backend! </h1>
    <div class="service-bio-copy">
      <p>Getting your website live is really just the beginning. The task of keeping content up-to-date, adding pages,
        products or posts and modifying existing content is a job in itself.</p>
      <p>Content Management Systems (CMS) allow you to easily update your website without the need for any technical knowledge,
         from any computer with internet access and without installing any software. Update webpage content, change or upload new
         images, add interactive content such as videos, upload documents, or choose bespoke calls to action.</p>
      <p>Whether it is  PHP, Wordpress, Magento or an Open Source Platform, our Content Management Systems are robust & reliable.</p>
      <p>Talk to our team of web development experts to find out which content management system is right for you.</p>
    </div>
  </div><!--service-bio-->

  <?php include '../../development-services.php';?>

<div class="service-show-block">
    <h3><strong>Beyond</strong> Development</h3>
    <section class="service-section">
      <div class="clearfix">
          <div class="service-block digital-bg">
            <img src="<?php echo base_url; ?>img/design-service.png" alt="">
            <div class="service-block content-block">
              <p class="service-head"><a href="<?php echo base_url; ?>our-expertise/Design-Services">Design</a></p>
              <p class="service-copy"><a href="<?php echo base_url; ?>our-expertise/Design-Services">Design, in every sense, has always been at the heart of what we do;
              Design that isn't just about what it looks like, but about how it
              works and the experience it creates...</a>
            </p>
              <div class="service-lists">
                <ul>
                  <li><a href="<?php echo base_url; ?>our-expertise/design-services/User-Experience">User Experience Design</a></li>
                  <li><a href="<?php echo base_url; ?>our-expertise/design-services/Brand-Identity">Brand Identity</a></li>
                  <li><a href="<?php echo base_url; ?>our-expertise/design-services/Print-Designs">Print Design</a></li>
                </ul>
                <ul>
                  <li><a href="<?php echo base_url; ?>our-expertise/design-services/Digital-Designs">Digital Design</a></li>
                  <li><a href="<?php echo base_url; ?>our-expertise/design-services/Logo-Designing">Logo Designing</a></li>
                </ul>
              </div>
            </div><!--custom_container-->
          </div>
          <div class="service-block digital-bg">
            <img src="<?php echo base_url; ?>img/digital-1.png" alt="">
            <div class="service-block content-block">
              <p class="service-head"><a href="<?php echo base_url; ?>our-expertise/Digital-Services">Digital</a></p>
              <p class="service-copy"><a href="<?php echo base_url; ?>our-expertise/Digital-Services">Many firms can build you a website, Mobile App, Digital and Social media presence. But what
              about crafting a great Digital Experience...</a>
            </p>
              <div class="service-lists">
                <ul>
                  <li><a href="<?php echo base_url; ?>our-expertise/digital-marketing-services/Social-Media-Marketing">Social Media Marketing</a></li>
                  <li><a href="<?php echo base_url; ?>our-expertise/digital-marketing-services/Content-Marketing">Content Marketing</a></li>
                  <li><a href="<?php echo base_url; ?>our-expertise/digital-marketing-services/Search-Engine-Optimization-SEO">Search Engine Optimization</a></li>
                  <li><a href="<?php echo base_url; ?>our-expertise/digital-marketing-services/Google-Analytics">Google Analytics & Reporting</a></li>
                </ul>
                <ul>
                  <li><a href="<?php echo base_url; ?>our-expertise/digital-marketing-services/Digital-Media-Planning">Digital Media Planning </a></li>
                  <li><a href="<?php echo base_url; ?>our-expertise/digital-marketing-services/Digital-Strategy-Consulting">Digital Strategy Consulting</a></li>
                  <li><a href="<?php echo base_url; ?>our-expertise/digital-marketing-services/Video-Content-Creation">Video Content Creation</a></li>
                  <li><a href="<?php echo base_url; ?>our-expertise/digital-marketing-services/Influencer-Marketing">Influencer & Celebrity Campaigns</a></li>
                </ul>
              </div>
            </div><!--custom_container-->
          </div>
      </div><!--clearfix-->
  </section><!--service-section-->
</div><!--service-show-block-->

<?php include '../../lets-talk.php';?>
<a href="#" id="scroll" style="display: inline;"><span></span></a>

<?php include '../../tail.php';?>
