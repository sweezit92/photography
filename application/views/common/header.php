<!--Main Element CSS-->
<link href="<?php echo base_url('css/');?>style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('css/');?>hexagon.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('css/');?>form.css" rel="stylesheet" type="text/css">

<!--Flexy Menu CSS-->
<link href="<?php echo base_url('css/');?>flexy-menu.css" rel="stylesheet" type="text/css">

<!--FlexSlider CSS-->
<link href="<?php echo base_url('css/');?>flexslider.css" rel="stylesheet" type="text/css">

<!--Responsive CSS-->
<link href="<?php echo base_url('css/');?>responsive.css" rel="stylesheet" type="text/css">

<!--LayerSlider CSS-->
<link href="<?php echo base_url('css/');?>layerslider.css" rel="stylesheet" type="text/css">

<!-- MEGAFOLIO PRO GALLERY CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/');?>settings.css" media="screen" />

<!-- THE FANYCYBOX ASSETS -->
<link rel="stylesheet" href="<?php echo base_url('css/');?>jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
<!--Google Fonts-->
<link href='https://fonts.google.com/specimen/Oswald?selection.family=Oswald' rel='stylesheet' type='text/css'>	
<style>
	body{
		font-family: Arial;
	}
	.thick li a{
		font-family: Arial;
		Font-size: 12px;
	}
</style>

	<!--Header Start-->
    <header class="header-section">
    	<div class="wrapper header">
        	
            <div class="logo">
            	<!-- <a href="index.html"><img src="images/logo.png" alt="logo" /></a> --><h1 style="margin-top:22px;color:white;margin-left:-50px;">LOGO</h1>
            </div>
            
            <!--Navigation Menu Start-->
            <ul class="flexy-menu thick" style="margin-right:-110px;">
            	<li class="<?php echo (($this->uri->segment(1) == 'home' || $this->uri->segment(1) == '')?'active':'');?>"><a href="<?php echo base_url('home');?>">Home</a><div class="arrow-down"></div></li>
				<li class="<?php echo (($this->uri->segment(1) == 'editorial_album')?'active':'');?>"><a href="<?php echo base_url('editorial_album');?>">Editorial Fashion</a><div class="arrow-down"></div></li>
				<li class="<?php echo (($this->uri->segment(1) == 'editorial_album')?'active':'');?>"><a href="<?php echo base_url('editorial_album');?>">Portrait</a><div class="arrow-down"></div></li>
				<li class="<?php echo (($this->uri->segment(1) == 'editorial_album')?'active':'');?>"><a href="<?php echo base_url('editorial_album');?>">Stories</a><div class="arrow-down"></div></li>
				<li class="<?php echo (($this->uri->segment(1) == 'editorial_album')?'active':'');?>"><a href="<?php echo base_url('editorial_album');?>">Travel Dairies</a><div class="arrow-down"></div></li>
				<li class="<?php echo (($this->uri->segment(1) == 'editorial_album')?'active':'');?>"><a href="<?php echo base_url('editorial_album');?>">Advertising</a><div class="arrow-down"></div></li>
				<li class="<?php echo (($this->uri->segment(1) == 'editorial_album')?'active':'');?>"><a href="<?php echo base_url('editorial_album');?>">Motion</a><div class="arrow-down"></div></li>
				<li class="<?php echo (($this->uri->segment(1) == 'about')?'active':'');?>"><a href="<?php echo base_url('about');?>">About</a><div class="arrow-down"></div></li>
				<li class="<?php echo (($this->uri->segment(1) == 'contact')?'active':'');?>"><a href="<?php echo base_url('contact');?>">Contact</a><div class="arrow-down"></div></li>
				<!--<li class=""><a href="terms.php">Legal Terms</a><div class="arrow-down"></div></li>-->
            </ul>
            <!--Navigation Menu End-->
            
        </div>
    </header>
    <!--Header End-->