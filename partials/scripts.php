 <script src="assets/js/jquery-3.6.0.min.js"></script>
 <script src="assets/js/bootstrap.bundle.min.js"></script>
 <script src="assets/js/mean-menu.js"></script>
 <script src="assets/js/aos.js"></script>
 <script src="assets/js/venobox.min.js"></script>
 <script src="assets/js/jquery.countdown.min.js"></script>
 <script src="assets/js/nice-select.js"></script>
 <script src="assets/js/owl.carousel.min.js"></script>
 <script src="assets/js/ui-slider.js"></script>
 <script src="assets/js/slick.min.js"></script>
 <script src="assets/js/slick.js"></script>
 <script src="assets/js/main.js"></script>
 <script src="assets/js/about.js"></script>
 <script>
    

     $(function() {
         $(".cashDelivery").click(function() {
             if ($("input[name=payment]").is(":checked")) {
                 $(".collapse1").show();
             } else {
                 $(".collapse1").hide();
             }
         });
     });

     $('.product-slider-wrap').owlCarousel({
         loop: true,
         margin: 10,
         autoplay: true,
         slideSpeed: 300,
         responsiveClass: true,
         autoplayTimeout: 3000,
         autoplayHoverPause: true,
         transitionStyle: "goDown",
         dots: true,
         nav: false,
         responsive: {
             0: {
                 items: 1,
             },
             600: {
                 items: 1,
             },
             1000: {
                 items: 1,
                 dots: true,
             }
         }
     });
 </script>