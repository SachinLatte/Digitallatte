<?php include '../../head.php';?>

<!-- Breadcrumb schema Start -->
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
    "item": "https://www.digitallatte.in/our-expertise/digital-marketing-services/Search-Engine-Optimization-SEO"
  }]
}
</script>

<!-- Breadcrumb schema End -->

<?php include '../../header_include.php'; ?>

<section class="home_banner service-original-bg">
  <div class="home_banner_content mrgn">
    <h1><img src="<?php echo base_url; ?>img/service-search-ico.png"> <p><strong>Search</strong> <br/> Engine Optimisation </p></h1>
  </div>
</section><!--section home_banner-->

  <div class="service-bio custom_container">
    <div class="bread-crumb">
      <ul class="clearfix">
        <li><a href="<?php echo base_url; ?>what-we-brew"><strong>Our</strong> Expertise</a></li>
        <li><a href="<?php echo base_url; ?>our-expertise/Digital-Services"><strong>Digital</strong> Services</a></li>
        <li><a href="#" class="active">Search Engine Optimisation</a></li>
      </ul><!--clearfix-->
    </div><!--bread-crumb-->

    <h1 class="service-main-head">Are you being  found online?</h1>
    <div class="service-bio-copy">
      <p>If you regularly use Google then you've probably realised that when you search for something you
         don't typically scroll past the first page or even the first few results. </p>
      <p>We specialise in developing search campaigns that deliver visibility, traffic, rankings & conversions.
         With well-researched, strategic and brand specific Search Engine Optimization, we help resurrect your
         brand and elevate your online presence. Be it Keyword research, On-page optimisation, Off-page optimisation,
         Link building, Submissions or Content generation, we leave no stone unturned.</p>
      <p>Write to us, for a free SEO analysis of your website.</p>
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
