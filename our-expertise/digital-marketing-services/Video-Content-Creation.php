<?php include '../../head.php';?>

<!-- breadcrumb schema Start-->
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
    "item": "https://www.digitallatte.in/our-expertise/digital-marketing-services/Video-Content-Creation"
  }]
}
</script>
<!-- breadcrumb schema End-->

<?php include '../../header_include.php'; ?>
<section class="home_banner service-original-bg">
  <div class="home_banner_content mrgn">
    <h1><img src="<?php echo base_url; ?>img/video-content-creation.png"> <p><strong>Video Content</strong> <br/>  Creation</p></h1>
  </div>
</section><!--section home_banner-->

  <div class="service-bio custom_container">
    <div class="bread-crumb">
      <ul class="clearfix">
        <li><a href="<?php echo base_url; ?>what-we-brew"><strong>Our</strong> Experties</a></li>
        <li><a href="<?php echo base_url; ?>our-expertise/Digital-Services"><strong>Digital</strong> Services</a></li>
        <li><a href="#" class="active">Video Content Creation</a></li>
      </ul><!--clearfix-->
    </div><!--bread-crumb-->

    <h1 class="service-main-head">Still think you <br/>can compete without video?</h1>
    <div class="service-bio-copy">
      <p>Faster data speed, upgraded smart phones and  the rise of content distribution network (CDN) have changed
        the way people consume information on the Internet. Video Content is no longer just an addition to an organisation's
        promotional collaterals, but creating engaging and unique video content has become a vital cog of any digital marketing strategy.</p>
      <p>We create shareable video content that builds real value, captivates audiences, inspires action and drives results.
        Videos that are voluntarily shared among a receptive and engaged target audience, amplifying its organic reach while
         building trust and brand loyalty.</p>
      <p>Whether you choose to create product videos, explainer videos, customer testimonial videos, company culture videos,
        training videos, fun/viral videos or event videos, we integrate consumer perspectives and brand relevance seamlessly within the storyline.</p>
      <p>Shoot us an email for a quick discussion about your Video Content Creation.</p>
    </div>
  </div><!--service-bio-->

  <div class="bg-banner">
    <p>
       <strong class="color-orange">Effective video</strong>

  <br>
      is a <span class="color-orange">video that</span> drives action.
    </p>
  </div><!--bg-banner-->

  <div class="recent-work">
    <h2><strong>Recent</strong> Work</h2>

    <div id="recent-work" class="owl-carousel owl-theme owl-padding-slider">
    <div class="item partial_block">
      <img src="<?php echo base_url; ?>img/hockey-recent-work.jpg">
      <a data-toggle="modal" data-target="#videoModal" data-theVideo="<?php echo base_url; ?>img/hockey-recent-work-video.mp4"  href="">
        <div class="hover_overlay">
          <i class="fab fa-youtube"></i>
        </div>
      </a>
    </div>
    <div class="item partial_block">
      <img src="<?php echo base_url; ?>img/raheja-recent-work.jpg">
      <a data-toggle="modal" data-target="#videoModal" data-theVideo="//www.youtube.com/embed/kPIgF8PX5o0"  href="">
        <div class="hover_overlay">
          <i class="fab fa-youtube"></i>
        </div>
      </a>
    </div>
    <div class="item partial_block">
      <img src="<?php echo base_url; ?>img/puneri-paltan-recent-work.jpg">
      <a data-toggle="modal" data-target="#videoModal" data-theVideo="//www.youtube.com/embed/iEEfG9PfPNU"  href="">
        <div class="hover_overlay">
          <i class="fab fa-youtube"></i>
        </div>
      </a>
    </div>
    <div class="item partial_block">
      <img src="<?php echo base_url; ?>img/patna-recent-work.jpg">
      <a data-toggle="modal" data-target="#videoModal" data-theVideo="//www.youtube.com/embed/FvA8SuVJYyQ"  href="">
        <div class="hover_overlay">
          <i class="fab fa-youtube"></i>
        </div>
      </a>
    </div>
    <div class="item partial_block">
      <img src="<?php echo base_url; ?>img/goldiee-recent-work-video.jpg">
      <a data-toggle="modal" data-target="#videoModal" data-theVideo="<?php echo base_url; ?>img/goldiee-recent-work-video.mp4"  href="">
        <div class="hover_overlay">
          <i class="fab fa-youtube"></i>
        </div>
      </a>
    </div>
    <!-- <div class="item partial_block">
      <img src="<?php echo base_url; ?>img/puneri-paltan-recent-work.jpg">
      <a data-toggle="modal" data-target="#videoModal" data-theVideo="//www.youtube.com/embed/wwpa5Bn5LhI"  href="">
        <div class="hover_overlay">
          <i class="fab fa-youtube"></i>
        </div>
      </a>
    </div> -->
    <!-- <div class="item partial_block">
      <img src="<?php echo base_url; ?>img/bengal-warriors-recent-work.jpg">
      <a data-toggle="modal" data-target="#videoModal" data-theVideo="//www.youtube.com/embed/C9fQUVPcD4o"  href="">
        <div class="hover_overlay">
          <i class="fab fa-youtube"></i>
        </div>
      </a>
    </div> -->
    <div class="item partial_block">
      <img src="<?php echo base_url; ?>img/reevive-recent-work.jpg">
      <a data-toggle="modal" data-target="#videoModal" data-theVideo="//www.youtube.com/embed/JMatQZoJGlk"  href="">
        <div class="hover_overlay">
          <i class="fab fa-youtube"></i>
        </div>
      </a>
    </div>
    <div class="item partial_block">
      <img src="<?php echo base_url; ?>img/indigo-recent-work.jpg">
      <a data-toggle="modal" data-target="#videoModal" data-theVideo="//www.youtube.com/embed/yMSBCowG_S8"  href="">
        <div class="hover_overlay">
          <i class="fab fa-youtube"></i>
        </div>
      </a>
    </div>
    </div>
  </div><!--recent-work-->
  <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
    <div class="video_pop">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <div>
                      <iframe width="100%" height="350" src=""></iframe>
                  </div>
              </div>
          </div>
      </div>
    </div>
</div>
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
