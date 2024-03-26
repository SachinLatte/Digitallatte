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
    "item": "https://www.digitallatte.in/our-expertise/Digital-Services"
  },{
    "@type": "ListItem",
    "position": 3,
    "name": "Video Content Creation",
    "item": "https://www.digitallatte.in/our-expertise/digital-marketing-services/Google-Analytics"
  }]
}
</script>
<!-- Breadcrumb Schema End -->

<?php include '../../header_include.php'; ?>
<section class="home_banner service-original-bg">
  <div class="home_banner_content mrgn">
    <h1><img src="<?php echo base_url; ?>img/google-analitics.png"> <p><strong>Google Analytics</strong><br/>  & Reporting </p></h1>
  </div>
</section><!--section home_banner-->

  <div class="service-bio custom_container">
    <div class="bread-crumb">
      <ul class="clearfix">
        <li><a href="<?php echo base_url; ?>what-we-brew"><strong>Our</strong> Expertise</a></li>
        <li><a href="<?php echo base_url; ?>our-expertise/Digital-Services"><strong>Digital</strong> Services</a></li>
        <li><a href="#" class="active">Google Analytics & Reporting</a></li>
      </ul><!--clearfix-->
    </div><!--bread-crumb-->

    <h1 class="service-main-head">Data Is Great, <br/> But Not Without Context.</h1>
    <div class="service-bio-copy">
      <p>Whether it's to better understand the effect of a campaign, to deep-dive into the user journey on your
        website or to make strategic decisions, Analytics is the right answer. Nothing prepares your brand for
        success better than turning data into insights. </p>
      <p>Leverage Google Analytics to provide meaningful data to help you make more informed decisions.
        It doesn’t matter how large or small your business is, we can help you with training, implementation,
        customisation, and consulting services to make your websites and marketing campaigns more effective. </p>
      <p>Connect with our analytics experts to transform your data into actionable insights. </p>
    </div>
  </div><!--service-bio-->

<?php include '../../digital-services.php';?>

  <div class="service-show-block">
      <h3><strong>Beyond</strong> Digital</h3>
      <section class="service-section">
        <div class="clearfix">
            <div class="service-block digital-bg">
              <img src="<?php echo base_url; ?>img/design-service.png" alt="">
              <div class="service-block content-block">
                <p class="service-head"><a href="<?php echo base_url; ?>our-expertise/Design-Services">Design</a></p>
                <p class="service-copy"><a href="<?php echo base_url; ?>our-expertise/Design-Services">Design, in every sense, has always been at the heart of what we do; Design that isn't just about what it looks like,
                but about how it works and the experience it creates...</a>
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
              <img src="<?php echo base_url; ?>img/devlopment-service.png" alt="">
              <div class="service-block content-block">
                <p class="service-head"><a href="<?php echo base_url; ?>our-expertise/Web-Development-Services">DEVELOPMENT</a></p>
                <p class="service-copy"><a href="<?php echo base_url; ?>our-expertise/Web-Development-Services">We're a curious bunch of problem solvers helping clients grow through new digital products, platforms, and experiences.
                With scrupulous attention to quality...</a>
               </p>
                <div class="service-lists">
                  <ul>
                    <li><a href="<?php echo base_url; ?>our-expertise/web-development-services/Ecommerce-Solutions">Ecommerce Solutions</a></li>
                    <li><a href="<?php echo base_url; ?>our-expertise/web-development-services/Mobile-Applications">Mobile Apps & Websites</a></li>
                    <li><a href="<?php echo base_url; ?>our-expertise/web-development-services/Website-Microsite">Website & Microsite Development</a></li>
                  </ul>
                  <ul>
                    <li><a href="<?php echo base_url; ?>our-expertise/web-development-services/Website-Maintenance">Website Maintenance & Security</a></li>
                    <li><a href="<?php echo base_url; ?>our-expertise/web-development-services/Content-Management-Systems">Content Management Systems (CMS)</a></li>
                  </ul>
                </div>
              </div><!--custom_container-->
            </div>
        </div><!--clearfix-->
    </section><!--service-section-->
  </div><!--service-show-block-->

<?php include '../../lets-talk.php';?>
<a href="#" id="scroll" style="display: block;"><span></span></a>

<?php include '../../tail.php';?>
