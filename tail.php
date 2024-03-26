<footer  class="posrel">

  <div class="lets-talk clearfix">

    <div class="footer_logo">

      <a href="<?php echo base_url; ?>"><img data-src="<?php echo base_url; ?>img/footer_logo.png" class="lazyload" alt="Digital Latte a creative digital agency"></a>

    </div>

    <div class="footer_navigations">

      <ul>

        <li><a href="<?php echo base_url; ?>our-expertise/Digital-Services" class="active"> Digital Marketing Services</a></li>

        <li><a href="<?php echo base_url; ?>our-expertise/Design-Services" class="scroll">Design Services</a></li>

        <li><a href="<?php echo base_url; ?>our-expertise/Web-Development-Services" class="scroll">Web Development Services</a></li>

        <li><a href="<?php echo base_url; ?>our-expertise/digital-marketing-services/Social-Media-Marketing" class="scroll">Social Media Marketing </a></li>

        <li><a href="<?php echo base_url; ?>our-expertise/digital-marketing-services/Search-Engine-Optimization-SEO" class="scroll">Search Engine Optimization</a></li>

      </ul>

    </div><!--footer navigations-->

    <div class="copyrights">

      <p>Copyright <span class="year"></span>. Digital Latte - <a href="https://digitallatte.in/index">Best Digital Agency Mumbai, India</a>. All rights are reserved. <a href="<?php echo base_url; ?>privacy-policy">Privacy Policy</a> </p>

    </div>

  </div>

</footer>

<link rel="preload" href="https://digitallatte.in/fonts/avant_grade_B.ttf" as="font" crossorigin="anonymous">

<link rel="preload" href="https://digitallatte.in/fonts/avant_grade.ttf" as="font" crossorigin="anonymous">

<link rel="stylesheet" href="<?php echo base_url; ?>css/all.css" />

<link rel="stylesheet" href="<?php echo base_url; ?>css/jquery.fancybox.min.css" />

<link rel="stylesheet" type="" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.14/css/lightgallery.css">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url; ?>css/jquery.fancybox-buttons.css">

<link rel="stylesheet" href="<?php echo base_url; ?>css/jquery.fancybox-thumbs.css">

<link rel="stylesheet" href="<?php echo base_url; ?>css/jquery.fancybox.css">

<!-- <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.css"> -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo base_url; ?>css/owl.carousel.min.css">

<link rel="stylesheet" href="<?php echo base_url; ?>css/owl.theme.default.min.css">

<link rel="stylesheet" href="<?php echo base_url; ?>css/landing-page.css">

<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="<?php echo base_url; ?>css/mycss.css">

<link rel="stylesheet" href="css/responsive.css">



<script type="text/javascript" src="<?php echo base_url; ?>js/latest-jquery.js"></script>

<script type="text/javascript" src="<?php echo base_url; ?>js/lazysizes.js"></script>

<script type="text/javascript" src="<?php echo base_url; ?>js/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- <script type="text/javascript" src="<?php echo base_url; ?>js/bootstrap.js"></script> -->

<script type="text/javascript" src="<?php echo base_url; ?>js/smoothscroll.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->

<script src="<?php echo base_url; ?>js/jquery.fancybox.min.js"></script>

<script src="<?php echo base_url; ?>js/jquery.fancybox.pack.js"></script> 

<!-- Stats-Number-Scroller-Animation-JavaScript -->

<script src="<?php echo base_url; ?>js/jquery.fancybox.pack.js"></script>

<script src="<?php echo base_url; ?>js/jquery.fancybox-buttons.js"></script>

<script src="<?php echo base_url; ?>js/jquery.fancybox-thumbs.js"></script>

<script src="<?php echo base_url; ?>js/owl.carousel.min.js"></script>

<script src="<?php echo base_url; ?>js/jquery.fancybox-media.js"></script>

<script src="<?php echo base_url; ?>js/jquery.mousewheel.pack.js"></script>

<script src="<?php echo base_url; ?>js/waypoints.min.js"></script>

<script src="<?php echo base_url; ?>js/jquery.bxslider.js"></script>

<script src="<?php echo base_url; ?>js/counterup.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.14/js/lightgallery-all.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8_j8qlOlGV6LcV-HnwEPE8k6bPewqJsQ&callback=initMap"></script>

<!--photoshoot / videography custom cursor effect script-->
<script>
    let prevPortfolio = document.querySelector(".prev-portfolio");
    let mItem = document.querySelectorAll(".vid_gallery");
    let videoPlay = document.querySelectorAll(".video-play");
    let nextPortfolio = document.querySelector(".next-portfolio");
    let playBtn = document.querySelector(".common-class");
    let playBtn1 = document.querySelector(".common-class1");
    prevPortfolio.addEventListener("mouseenter",function(){
        if(playBtn.classList.contains('puneri-paltan')) {
            gsap.to(playBtn,{
            scale:1,
            opacity:1
        });
        }
        else if(playBtn.classList.contains('j-hampstead')) {
            gsap.to(playBtn,{
            scale:1,
            opacity:1
        });
        }
        else if(playBtn.classList.contains('j-hampstead-new')) {
            gsap.to(playBtn,{
            scale:1,
            opacity:1
        });
        }
        else if(playBtn.classList.contains('rentio-tea')) {
            gsap.to(playBtn,{
            scale:1,
            opacity:1
        });
        }
    });
    prevPortfolio.addEventListener("mouseleave",function(){
        gsap.to(playBtn,{
            scale:0,
            opacity:0
        });
    });
    prevPortfolio.addEventListener("mousemove",function(dets){
        gsap.to(playBtn,{
            left:dets.x - 600,
            top:dets.y - 400
        })
    });

    for(let i = 0; i<mItem.length;i++){
      mItem[i].addEventListener("mouseover",function(){
          gsap.to(this.lastElementChild,{
            scale:1,
            opacity:1
          })
    });
    mItem[i].addEventListener("mouseleave",function(){
      gsap.to(this.lastElementChild,{
            scale:0,
            opacity:0
          })
    });
    mItem[i].addEventListener("mousemove",function(dets){
      gsap.to(this.lastElementChild,{
            left:dets.x -80,
            top:dets.y -50
          })
    });
    }

    nextPortfolio.addEventListener("mouseenter",function(){
        if(playBtn1.classList.contains('puneri-paltan')) {
            gsap.to(playBtn1,{
            scale:1,
            opacity:1
        });
        }
        else if(playBtn1.classList.contains('j-hampstead')) {
            gsap.to(playBtn1,{
            scale:1,
            opacity:1
        });
        }
        else if(playBtn1.classList.contains('j-hampstead-new')) {
            gsap.to(playBtn1,{
            scale:1,
            opacity:1
        });
        }
        else if(playBtn1.classList.contains('rentio-tea')) {
            gsap.to(playBtn1,{
            scale:1,
            opacity:1
        });
        }
    });
    nextPortfolio.addEventListener("mouseleave",function(){
        gsap.to(playBtn1,{
            scale:0,
            opacity:0
        });
    });
    nextPortfolio.addEventListener("mousemove",function(dets){
        gsap.to(playBtn1,{
            left:dets.x - 600,
            top:dets.y - 550
        })
    });
</script>
<!-- Photoshoot / Videography Carousel -->
<script>
$('#owlHero').owlCarousel({
    items:3,
    lazyLoad:true,
    loop:true,
    margin: 0,
    nav: true,
    navText: ["<img src='img/left-arrow-white.png'>","<img src='img/right-arrow-white.png'>"],
    autoplay:true,
    dots: false,
    responsiveRefreshRate: 10,
    autoplayTimeout: 7000,
    smartSpeed: 800,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        768:{
            items:1,
        },
        1280:{
            items:3,
            
        },
        1445:{
            items:3,
        }
    }
});
</script>
<script>
  $(document).ready(() => {
  $("#creative-gallery-lightgallery").lightGallery({
    pager: true
  });
  $('.creative-video-lightgallery').lightGallery(); 
  $('.static-thumbnails-lightgallery').lightGallery({
    animateThumb: false,
    zoomFromOrigin: false,
    thumbnail: false
  }); 
});
</script>
<script>
  $(".text-limit p").text(function(index, currentText) {
  var maxLength = $(this).parent().attr('data-maxlength');
  if(currentText.length >= maxLength) {
    return currentText.substr(0, maxLength) + "...";
  } else {
    return currentText
  } 
});
</script>
<script>
  AOS.init();
</script>
<script>
  function myFunction(x) {
    if (x.matches) {
        document.getElementById("new_expertise").setAttribute("href","javascript:void(0)");
    } else {
       document.getElementById("new_expertise").setAttribute("href","<?php echo base_url; ?>what-we-brew");
    }
}
var x = window.matchMedia("(max-width: 768px)")
myFunction(x) 
x.addListener(myFunction) 
</script>

<script>
let nav_img = document.getElementById("nav_img");
let degital_nav = document.getElementById("digital_nav");
let design_nav = document.getElementById("design_nav");
let development_nav = document.getElementById("development_nav")
let degital_nav_img = "<?php echo base_url; ?>img/digital-services.png";
let design_nav_img =  "<?php echo base_url; ?>img/design-service.png";
let development_nav_img =  "<?php echo base_url; ?>img/devlopment-service.png";

window.addEventListener("load", () => {
let UrlPath = window.location.href;
if(UrlPath.includes("digital-marketing-services")){
nav_img.src = degital_nav_img;
}else if(UrlPath.includes("design-services")){
  nav_img.src = design_nav_img;
}else if(UrlPath.includes("web-development-services")){
  nav_img.src = development_nav_img;
}
});


  
</script>

<script>
    $(document).ready(function() {
    if ($(window).width() > 768) {
      document.querySelector(".dndesk").style.display = "none";
    }else{
      document.querySelector(".dndesk").style.display = "block";
    }
});
</script>
<script>
  $(document).ready(function() {
  "use strict";

  $('.main-nav > ul > li:has( > ul)').addClass('menu-dropdown-icon');
  $('.main-nav > ul > li > ul:not(:has(ul))').addClass('normal-sub');
  $(".main-nav > ul > li").hover(function(e) {
    if ($(window).width() > 943) {
      $(this).children("ul").stop(true, false).fadeToggle(150);
      e.preventDefault();
    }
  });
  $(".main-nav > ul > li").click(function() {
    if ($(window).width() <= 943) {
      $(this).children("ul").fadeToggle(150);
    }
  });
  $(".menu-mobile").click(function(e) {
    $(".main-nav > ul").toggleClass('show-on-mobile');
    e.preventDefault();
  });
});
</script>


  <script>

// when the DOM is ready

document.addEventListener("DOMContentLoaded", function() { 

	const yrSpan = document.querySelector('.year');

	const currentYr = new Date().getFullYear();

	yrSpan.textContent = currentYr;

});

</script>



<script type="text/javascript">

 google.maps.event.addDomListener(window, 'load', init);

 function init() {

     var mapOptions = {

         zoom: 15,

         scrollwheel: false,

         center: new google.maps.LatLng(19.08067561733589, 72.89880158273479),

         styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#e1e1e1"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#a3a3a3"},{"visibility":"on"}]}]

     };

     var mapElement = document.getElementById('map');

     var map = new google.maps.Map(mapElement, mapOptions);

     var marker = new google.maps.Marker({

         position: new google.maps.LatLng(19.08067561733589, 72.89880158273479),

         map: map,

         zoom:15,

         icon: 'img/location-pin-img-new.png'

     });

 }

</script>




<script>

  $(document).ready(function(){



                    $('.package_slider').bxSlider({

                        minSlides: 1,

                        maxSlides: 1,

                        controls: true,

                        pager: false,

                        slideWidth: 800,

                        useCSS: false,

                        slideMargin: 60,

                        auto: false,

                        touchEnabled: false,

                    }); 

//                     var maaxSlides,
//     Newwidth = $(window).width();

// if (Newwidth < 430) {
//     maaxSlides = 1;
// } else if (Newwidth < 1445) {
//     maaxSlides = 2; 
// } 

// else {
//     maaxSlides = 3;
// }
                    
//   $(".landing-case-study").bxSlider({
//     mode: "horizontal", 
//     speed: 500, 
//     slideMargin: 40, 
//     slideWidth: 600, 
//     maxSlides: maaxSlides, 
//     moveSlides: 1,
//     pager: false, 
//     auto: true, 
//     pause: 4000, 
//     autoHover: false,
//     autoDelay: 0 
//   });

  $('#landing-case-study').owlCarousel({
    loop:true,
    margin:30,
    responsiveClass:true,
    nav:false,
    navText : ["<i class='left-arrow'></i>","<i class='right-arrow'></i>"],
    dots:false,
    autoplay:true,
    autoplayTimeout: 3000,
    smartSpeed: 1500,
    animateIn: 'linear',
    animateOut: 'linear',
    responsive:{
        0:{
            items:1,
        },
        768:{
            items:1,
        },
        1280:{
            items:2,
            
        },
        1445:{
            items:3,
        }
    }
  });

  // $('#landing-case-study').owlCarousel({
  //   loop:true,
  //   margin:30,
  //   responsiveClass:true,
  //   nav:false,
  //   navText : ["<i class='left-arrow'></i>","<i class='right-arrow'></i>"],
  //   dots:false,
  //   autoplay:true,
  //   autoplayTimeout: 3000,
  //   smartSpeed: 1500,
  //   animateIn: 'linear',
  //   animateOut: 'linear',
  //   responsive:{
  //       0:{
  //           items:1,
  //       },
  //       1280:{
  //           items:2,
  //       },
  //       1445:{
  //           items:3,
  //       }
  //   }
  // });
  $('#creative-video-gallery').owlCarousel({
    loop:true,
    margin:30,
    responsiveClass:true,
    nav:true,
    navText : ["<i class='left-arrow'></i>","<i class='right-arrow'></i>"],
    dots:false,
    autoplay:true,
    autoplayTimeout: 3000,
    smartSpeed: 1500,
    animateIn: 'linear',
    animateOut: 'linear',
    responsive:{
        0:{
            items:2,
            margin:10
        },
        768:{
            items:2,
            margin:10
        },
        1280:{
            items:2,
        },
        1445:{
            items:3,
        }
    }
  });

  });

</script>

	<script>

jQuery(document).ready(function( $ ) {



      

	var url = window.location.pathname;

    var activePage = url.substring(url.lastIndexOf('/') + 1);

        $('.nav li a').each(function () {

            var linkPage = this.href.substring(this.href.lastIndexOf('/') + 1);

            if (activePage == linkPage) {

                $(this).addClass('active');

            }



			if(activePage == '' || activePage == 'digital_latte' || url == ''){

				$('#home_li').addClass('active');

			}

        });





var curr_url = window.location.pathname;

var url_arr = curr_url.split('/');

if(url_arr[url_arr.length-1] == '/' || url_arr[url_arr.length-1] == '' || url_arr[url_arr.length-1] == 'index.php' || url_arr[url_arr.length-1] == 'index'  ){

	if($(window).width() >= 800){

		$('#grayButton').addClass('dis_block');

	}







	$('.input_file').change(function(){

		alert(1);

                var fileName = $(this).val();

				alert(fileName);

                $(this).next('.custom-file-label').html(fileName);

            });

}









     autoPlayYouTubeModal();

  function autoPlayYouTubeModal() {

    var trigger = $("body").find('[data-toggle="modal"]');

    trigger.click(function () {

        var theModal = $(this).data("target"),

            videoSRC = $(this).attr("data-theVideo"),

            videoSRCauto = videoSRC + "?autoplay=1";

        $(theModal + ' iframe').attr('src', videoSRCauto);

        $(theModal + ' button.close').click(function () {

            $(theModal + ' iframe').attr('src', videoSRC);

        });

    });

}



			$('.counter').counterUp({

				delay: 10,

				time: 1000

			});



      $(function() {

  var $select = $('.js-my-select'),

      $images =  $('.js-my-image');



  $select.on('change', function() {

    var value = '.' + $(this).val();

    $images.show().not(value).hide();

  });

});

  // startChangingText(['Digital.', 'Design.', 'Development.'], 2.5)

  $(".fancybox").fancybox();
  $(".creative-image-gallery-fancybox").fancybox();



  <!-- //color scheme changer js -->

      $("#grayButton").click(function(){

        $(".home_banner").toggleClass("gray");

        $(".on-btn").toggleClass("off-btn");

        $(".bg-gif").toggleClass("bg-brown-gif");

        $(".bgclrone").toggleClass("coffee");

        $(".bgclrone h4").toggleClass("textclrcoffee");

        $(".bgclrtwo").toggleClass("Our-Expertise");

        $(".bgclrtwo h4").toggleClass("textclrcoffee");

        $(".bgclrthree").toggleClass("coffee");

        $(".bgclrthree h4").toggleClass("textclrcoffee");

        $(".who_we_are").toggleClass("coffee");

        $(".home_banner_content h2").toggleClass("textclrwht");

        $(".home_banner_content h2 span").toggleClass("textclrwht");

        $(".home_banner_content p").toggleClass("textclrwht");

        $(".home_banner_content button").toggleClass("textclrwhtbtn");

        $(".home_banner_content button a").toggleClass("textclrwht");

        $(".who_we_main_left h3").toggleClass("textclrcoffee");

        $(".who_we_main_left h4").toggleClass("textclrcoffee");

        $(".md_grid h4").toggleClass("textclrcoffee");

        $(".case_study").toggleClass("gray");

        $(".case_study_right h4").toggleClass("textclrwht");

        $(".case_button").toggleClass("case_button-white");

        $(".our_expertise").toggleClass("gray");

        $(".say_hello").toggleClass("coffee");

        $(".say_hello h4").toggleClass("textclrcoffee");

        $(".say_hello h4 p").toggleClass("textclrcoffee");

        $(".contact-agile").toggleClass("bg-change-agile");

        $(".stats").toggleClass("stats-change-bg");

        $(".toggle").toggleClass("toggle-new");

        $(".digital_section h4").toggleClass("textclrwht");

        $(".digital_section p").toggleClass("textclrwht");

        $(".contact-agile label .icon-white").toggleClass("textclrcoffee");

        $(".say_hello_main_left h5").toggleClass("textclrcoffee");

      });

  <!-- //color scheme changer js -->



  <!--scroll to top js-->

  $(window).scroll(function(){

      if ($(this).scrollTop() > 100) {

          $('#scroll').fadeIn();

      } else {

          $('#scroll').fadeOut();

      }

  });

  $('#scroll').click(function(){

      $("html, body").animate({ scrollTop: 0 }, 600);

      return false;

  });

  <!--scroll to top js-->



  $('#our-clients').owlCarousel({
    loop:true,
    margin:50,
    responsiveClass:true,
    nav:false,
    dots:false,
    autoplay:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:5,
            navText : ["<i class='left-arrow'></i>","<i class='right-arrow'></i>"]
        },
        1000:{
            items:6,
        }
    }
  });







  $('#other-services').owlCarousel({

    loop:true,

    margin:100,

    responsiveClass:true,

    nav:false,

    dots:false,

    navText : ["<i class='left-arrow'></i>","<i class='right-arrow'></i>"],

    autoplay:true,

    responsive:{

        0:{

            items:1,

        },

        600:{

            items:5,

        },

        1000:{

            items:6,

        }

    }

  });



  $('.clientele-slider-group').owlCarousel({

    loop:true,

    margin:50,

    responsiveClass:true,

    nav:false,

    dots:false,

    navText : ["<i class='left-arrow'></i>","<i class='right-arrow'></i>"],

    autoplay:false,

    responsive:{

        0:{

            items:1,

        },

        600:{

            items:5,

        },

        1000:{

            items:5,

        }

    }

  });

  $('#recent-work').owlCarousel({

    loop:true,

    margin:50,

    responsiveClass:true,

    nav:true,

    navText : ["<i class='left-arrow'></i>","<i class='right-arrow'></i>"],

    dots:false,

    autoplay:false,

    responsive:{

        0:{

            items:1,

        },

        1000:{

            items:3,

        }

    }

  });



    $('#Other-case-study').owlCarousel({

      loop:true,

      margin:10,

      responsiveClass:true,

      nav:true,

      navText : ["<i class='left-arrow'></i>","<i class='right-arrow'></i>"],

      dots:false,

      autoplay:true,

      responsive:{

          0:{

              items:1,

              nav:false

          },

          1000:{

              items:4,

          }

      }

    });

});

	</script>

<script>

   $('.toggle').on('click', function() {

    $('.menu').toggleClass('open');

    $('.nav').toggleClass('show-nav');

    $('.nav a').toggleClass('show-nav-link');

    $('.toggle').toggleClass('close');

   });

</script>

<script>

   $('.toggle1').on('click', function() {

    $('.menu').toggleClass('open');

    $('.nav').toggleClass('show-nav');

    $('.nav a').toggleClass('show-nav-link');

    // $('.toggle1').toggleClass('close');

   });

</script>



<!-- //menu js -->


<!-- team show hide js-->

<script type="text/javascript">

_linkedin_partner_id = "338083";

window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];

window._linkedin_data_partner_ids.push(_linkedin_partner_id);

</script><script type="text/javascript">

(function(){var s = document.getElementsByTagName("script")[0];

var b = document.createElement("script");

b.type = "text/javascript";b.async = true;

b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";

s.parentNode.insertBefore(b, s);})();

</script>

<noscript>

<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=338083&fmt=gif" />

</noscript>

</body>



<script type="text/javascript">

_linkedin_partner_id = "338083";

window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];

window._linkedin_data_partner_ids.push(_linkedin_partner_id);

</script><script type="text/javascript">

(function(l) {

if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};

window.lintrk.q=[]}

var s = document.getElementsByTagName("script")[0];

var b = document.createElement("script");

b.type = "text/javascript";b.async = true;

b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";

s.parentNode.insertBefore(b, s);})(window.lintrk);

</script>

<noscript>

<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=338083&fmt=gif" />



</html>

