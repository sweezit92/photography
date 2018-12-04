<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Photography</title>
</head>
<body>

<?php
	$this->load->view('common/header');
?>
    
	<div class="container">

        <!--Portfolio Container Start-->
        <section class="portfolio-container" style="margin-top:70px;">
            
            <!--Portfolio Fullwidth Thumbnails-->
            <div class="grid-fullwidth">
            	<div class="megafolio-container noborder norounded">
					  <?php 
						foreach($fetch_album as $album_fetch){
					  ?>
						<!--Thumbnail Start-->
						<div class="mega-entry cat-all cat-one cat-four" id="entry-1" data-src="<?php echo base_url('admin/uploads/album_cover/');?><?php echo $album_fetch->album_cover;?>" data-width="504" data-height="400" style="border:5px solid white;">
							
							<!--Hover Effect Start-->
							<div class="mega-hover alone">
							
								<!--Title and Subtitle-->
								<div class="mega-hovertitle"><a href="<?php echo base_url('editorial_gallery/');?><?php echo $album_fetch->album_id;?>" style="color:white;"><?php echo $album_fetch->album_title;?></a>
								</div>
								
							</div>
							<!--Hover Effect End-->
							
						</div>
						<!--Thumbnail End-->
					<?php
					}
				  ?>
               </div>
            </div>
            <!--Portfolio Fullwidth Thumbnails End-->
            
        </section>
        <!--Portfolio Container End-->
        
<?php
	$this->load->view('common/footer');
?>
  </div>
</body>
</html>
