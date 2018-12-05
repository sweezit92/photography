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
    
	<div class="container background backimage3">
        
        <!--All Content Start-->
        <div class="wrapper boxstyle">
            <div class="box-container">
            	
                <!--Page Navigation-->
                <nav class="pagenav">
                	<ul>
                    	<li><a href="#">Home</a></li>
                        <li><a href="#">Gallery</a></li>
                    </ul>
                </nav>
                
                <!--Portfolio Image and Details-->
                <section class="portfolio-content">
                    
                    <!--Slider Image-->
                    <div class="flexslider">
                    	<ul class="slides">
						<?php
						foreach($get_gallery as $fetch_gallery ){
						?>
                    		<li>
                    			<a>
                    				<img src="<?php echo base_url('admin/uploads/album_gallery/');?><?php echo $fetch_gallery->album_img;?>" alt="slider" />
                    			</a>
                    		</li>
						<?php
						}
						?>
                    	</ul>
                    </div>
                    <!--Slider Image End-->
                    
                    
                </section>
                <!--Portfolio Image and Details End-->

                    <!--Details Start-->
                    <aside class="portfolio-details">
                    	<h1><?php echo $get_album->album_title;?> </h1>
                        <div class="portfolio-tag"  style="width:900px;">
                        	<ul>
                            	<li>Description: <span><?php echo $get_album->album_description;?></span></li>
                                <li>Date: <span><?php echo date('d/m/Y',$get_album->album_date);?></span></li>
                            </ul>
                        </div>
                    </aside>
                    <!--Details End-->

            </div>
        </div>
        <!--All Content End-->
 
<?php
	$this->load->view('common/footer');
?>
    
    </div>
    

</body>
</html>
