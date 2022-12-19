function myscript() {
?>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"
      integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"
      integrity="sha512-NiWqa2rceHnN3Z5j6mSAvbwwg3tiwVNxiAQaaSMSXnRRDh5C2mk/+sKQRw8qjV1vN4nf8iK2a0b048PnHbyx+Q=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script>
      jQuery(document).ready(function () {
        jQuery(".carousel").carousel({
            indicators: true,
			numVisible: 3,
        });
      });
    </script>
<script>
jQuery('#project_carousel').owlCarousel({
    loop:true,
    margin:0,
	dots: false,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
});

</script>
<?php
}
add_action( 'wp_footer', 'myscript' );

function owl_carousel_css() {
?>
<link href = "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
      integrity="sha512-UJfAaOlIRtdR+0P6C3KUoTDAxVTuy3lnSXLyLKlHYJlcSU8Juge/mjeaxDNMlw9LgeIotgz5FP8eUQPhX1q10A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
<?php
}
add_action( 'wp_head' , 'owl_carousel_css' );
