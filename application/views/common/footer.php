        <!--Footer Start-->
        <footer>
            
            
            <!--Footer Bottom-->
            <section class="footer-bottom">
            	<div class="wrapper">
                	<div class="copyright">
                        Copyright &copy;2018 All Rights Reserved. <a href="http://clickrstop.com">Clickrstop</a>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="<?php echo base_url('home');?>">Home</a></li>
                            <li><a href="<?php echo base_url('about');?>">About Us</a></li>
                            <li><a href="<?php echo base_url('terms');?>">Terms & Policy</a></li>
                            <li><a href="<?php echo base_url('contact');?>">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </section>
            <!--Footer Bottom End-->
            
        </footer>
        <!--Footer End-->

	<!--Go To Top-->
    <a href="#" class="back-to-top"></a>
    <!--End-->

	<script type="text/javascript" src="<?php echo base_url('js/');?>jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('js/');?>jquery-easing-1.3.js"></script>

<!--Flexy Menu Script-->
<script type="text/javascript" src="<?php echo base_url('js/');?>flexy-menu.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>

<!-- MEGAFOLIO PRO GALLERY JS FILES -->
<script type="text/javascript" src="<?php echo base_url('js/');?>jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('js/');?>jquery.themepunch.megafoliopro.js"></script>

<!--LayerSlider Script-->
<script src="<?php echo base_url('js/');?>jquery-transit-modified.js" type="text/javascript"></script>
<script src="<?php echo base_url('js/');?>layerslider.transitions.js" type="text/javascript"></script>
<script src="<?php echo base_url('js/');?>layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>

<!-- THE FANYCYBOX ASSETS -->
<script type="text/javascript" src="<?php echo base_url('js/');?>jquery.fancybox.pack.js?v=2.1.3"></script>

<!-- Optionally add helpers - button, thumbnail and/or media ONLY FOR ADVANCED USAGE-->
<script type="text/javascript" src="<?php echo base_url('js/');?>jquery.fancybox-media.js?v=1.0.5"></script>

<script type="text/javascript">
	jQuery(document).ready(function() {
	  "use strict"; 

	  // FLEXSLIDER SETTING
		$(window).load(function() {
			$('.flexslider').flexslider({
				slideshowSpeed: 4000,
				animationSpeed: 800,
				pauseOnHover: true,
				controlNav: false,
				prevText: "",
				nextText: "",
				//direction: "horizontal",
				smoothHeight: true
			});
		});
   });

   jQuery(document).ready(function() {
	  "use strict"; 
      // MEGAFOLIO PRO GALLERY SETTING
     var api=jQuery('.megafolio-container').megafoliopro(
        {
            filterChangeAnimation:"rotatescale",
            filterChangeSpeed:800,
            filterChangeRotate:99,
            filterChangeScale:0.6,          
            delay:20,
            paddingHorizontal:0,
            paddingVertical:0,
            layoutarray:[8]
         });
 
      // CALL FILTER FUNCTION IF ANY FILTER HAS BEEN CLICKED
      jQuery('.filter').click(function() {
            jQuery('.filter').each(function() { jQuery(this).removeClass("selected")});
            api.megafilter(jQuery(this).data('category'));
            jQuery(this).addClass("selected");
         });
		 
      // THE FANCYBOX PLUGIN INITALISATION
      jQuery(".fancybox").fancybox();
		 
      // FLEXY MENU SETTING
	  $(".flexy-menu").flexymenu({
            align: "right",
            indicator: true
         });
		 
      // LAYERSLIDER SETTING
		$('#layerslider').layerSlider({
			skinsPath : 'layerslider/skins/',
			skin : 'fullwidthdark',
			thumbnailNavigation : 'disabled',
			showCircleTimer : false,
			showBarTimer : false,
    		touchNav : true,
			navStartStop : false,
			navButtons : false,
			animateFirstLayer : true,
			responsive : false,
			responsiveUnder : 984,
			sublayerContainer : 984
		});
		
		// GO TO TOP SETTING
		var offset = 220;
		var duration = 500;
		jQuery(window).scroll(function() {
			if (jQuery(this).scrollTop() > offset) {
				jQuery('.back-to-top').fadeIn(duration);
			} else {
				jQuery('.back-to-top').fadeOut(duration);
			}
		});
		
		jQuery('.back-to-top').click(function(event) {
			event.preventDefault();
			jQuery('html, body').animate({scrollTop: 0}, duration);
			return false;
		})
   });
</script>