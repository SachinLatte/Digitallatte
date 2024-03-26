




$("#visit_website").click(function() {
  $('html,body').animate({
      scrollTop: $(".home_banner").offset().top},
      'slow');
});

$("#scroll1").click(function() {
  $('html,body').animate({
      scrollTop: $(".swiper-slide-one").offset().top},
      'slow');
});

$("#scroll2").click(function() {
  $('html,body').animate({
      scrollTop: $(".swiper-slide-two").offset().top},
      'slow');
});

$("#scroll3").click(function() {
  $('html,body').animate({
      scrollTop: $(".swiper-slide-three").offset().top},
      'slow');
});

$("#scroll4").click(function() {
  $('html,body').animate({
      scrollTop: $(".home_banner").offset().top},
      'slow');
});

let yes_button = document.getElementById("yes_button");
yes_button.addEventListener("click",function(){
  setTimeout(function() {
    confetti.start()
}, 500); 
setTimeout(function() {
  confetti.stop()
}, 4000); 
});

yes_button.addEventListener("click",function(){
  document.getElementById("scroll_para").style.opacity = "1";
});
yes_button.addEventListener("click",function(){
  document.getElementById("scroll1").style.opacity = "1";
});
// const start = () => {
//   setTimeout(function() {
//       confetti.start()
//   }, 1000); 
// };

//  Stop

// const stop = () => {
//   setTimeout(function() {
//       confetti.stop()
//   }, 20000); 
// };


// stop();