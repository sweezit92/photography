
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
    
	<div class="container background backimage2">
    	
        <!--All Content Start-->
        <div class="wrapper boxstyle">
        	
            <!--Page Header Start-->
            <section class="page-header">
            	<h1>About</h1>
            </section>
            <!--Page Header End-->
            
            <!--Feature Image and Details-->
            <section class="box-container">
            	
                <!--Page Navigation-->
                <nav class="pagenav">
                	<ul>
                    	<li><a href="index.html">home</a></li>
                        <li>about</li>
                    </ul>
                </nav>
                
                <!--Feature Image-->
                <figure class="feature-image">
                	<img src="<?php echo base_url('images/');?>self image_crop_VCA_0549.jpg" alt="about us" style="width:100%;"/>
                </figure>
                
                <!--Blockquote-->
                <!-- <blockquote class="quote-pagefullwidth">
                    <p><span class="quote-icon">At vero eos et accusam et justo duo dolores et ea rebum stet clita kasd. Gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet lorem ipsum dolor sit amet consetetur sadipscing.</span></p>
                    <p class="quote-subtext">Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy.</p>
                </blockquote> -->
                
                <!--Text Content Area-->
                <div class="aboutus-content">
					<p class="dropcap">A self - schooled professional photographer, Satyaki Ghosh grew up on a staple diet of meaningful cinema and black & white photography, thanks to his renown photographer father, Nemai Ghosh.</p><br>

					<p>While studying in St' Xavier's College, Kolkata Satyaki assisted his mentor and ace photographer Jyotish Chakraborty. He started his professional career on the film sets of Honorary Oscar awardee Satyajit Ray's "Ghare Bhaire" (Home and the world).</p><br>

					<p>People photography is Satyaki's passion. From the aesthetics of sensual art to rustic appeal of tribal life, Satyaki is a keen observer of the bizarre human life with an abstract focus on reality that allows the viewers to engage deeper.</p><br>

					<p>Satyaki's images have appeared in many international magazines. His work has been critically acclaimed by stalwarts like Henri Cartier-Bresson and has received several international awards including PX3 and spiders.</p><br>

					<p>Although a professional fashion and candid photographer in the field of advertising and magazine assignments, Satyaki is a passionate photographer of human expressions. He craftily manages to fuse art and emotions to tell human stories.</p><br>

					<p>Satyaki is currently based in Mumbai, India.</p><br>

					<p>Photo Courtesy: Pradeep Chandra</p>
                </div>
            </section>
            <!--Feature Image and Details End-->
            
        </div>
        <!--All Content End-->
           
<?php
	$this->load->view('common/footer');
?>
	 </div>
   </body>
</html>
