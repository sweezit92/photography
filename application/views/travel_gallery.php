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
                    		<li>
                    			<a>
                    				<img src="<?php echo base_url('images/');?>WEBPAGE-3.jpg" alt="slider" />
                    			</a>
                    		</li>
                    		<li>
                    			<a>
                    				<img src="<?php echo base_url('images/');?>WEBPAGE-6.jpg" alt="slider" />
                    			</a>
                    		</li>
                    		<li>
                    			<a>
                    				<img src="<?php echo base_url('images/');?>PAGE-2-3.jpg" alt="slider" />
                    			</a>
                    		</li>
							<li>
                    			<a>
                    				<img src="<?php echo base_url('images/');?>IMAGE_2.jpg" alt="slider" />
                    			</a>
                    		</li>
							<li>
                    			<a>
                    				<img src="<?php echo base_url('images/');?>FW-SG-00001_f.JPG" alt="slider" />
                    			</a>
                    		</li>
							<li>
                    			<a>
                    				<img src="<?php echo base_url('images/');?>PAGE-3-2.jpg" alt="slider" />
                    			</a>
                    		</li>
							<li>
                    			<a>
                    				<img src="<?php echo base_url('images/');?>CG-003437.JPG" alt="slider" />
                    			</a>
                    		</li>
                    	</ul>
                    </div>
                    <!--Slider Image End-->
                    
                    
                </section>
                <!--Portfolio Image and Details End-->

                    <!--Details Start-->
                    <aside class="portfolio-details">
                    	<h1>Title Title Title Title Title</h1>
                        <div class="portfolio-tag">
                        	<ul>
                            	<li>Designer: <span>Designer name</span></li>
                                <li>Date: <span>20 December 2013</span></li>
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
