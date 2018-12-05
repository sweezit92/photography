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
            	<a href="#"><img src="<?php echo base_url('images/');?>Imagezs-logo-for-web-transparent.png" alt="logo" style="height:60px;"/></a><!-- <h1 style="margin-top:22px;color:white;margin-left:-50px;">LOGO</h1> -->
            </div>
            
            <!--Navigation Menu Start-->
            <ul class="flexy-menu thick">
            	<li class="<?php echo (($this->uri->segment(1) == 'home' || $this->uri->segment(1) == '')?'active':'');?>"><a href="<?php echo base_url('home');?>">Home</a><div class="arrow-down"></div></li>
				
				<?php
				 $ci =&get_instance();
				 $ci->load->model('fetch_cat_m');
				 $get_cat = $ci->fetch_cat_m->get_all_cat();
				 foreach($get_cat as $fetch_cat){
					
				?>
				<li class="<?php echo (($this->uri->segment(2) == $fetch_cat->category_id)?'active':'');?>"><a href="<?php echo base_url('editorial_album/');?><?php echo $fetch_cat->category_id;?>"><?php echo $fetch_cat->category_name;?></a><div class="arrow-down"></div></li>
				<?php
				 }
				?>
            </ul>
            <!--Navigation Menu End-->
            
        </div>
    </header>
    <!--Header End-->