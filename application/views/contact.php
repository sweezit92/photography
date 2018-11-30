
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Photography</title>
<body>

	<?php
		$this->load->view('common/header');
	?>
    
	<div class="container background backimage1">
    	
        <!--All Content Start-->
        <div class="wrapper boxstyle">
        	
            <!--Page Header Start-->
            <section class="page-header">
            	<h1>Contact</h1>
            </section>
            <!--Page Header End-->
            
            <!--Map and Details-->
            <section class="box-container">
            	
                <!--Page Navigation-->
                <nav class="pagenav">
                	<ul>
                    	<li><a href="index.html">home</a></li>
                        <li>contact</li>
                    </ul>
                </nav>
                
                <!--Contact Area-->
                <div class="contact-area">
                
                	<!--Send Message Start-->
                	<div class="send-message">
                    	<h2>send a message</h2>
                        <div class="comment-fieldbox">
                            <form id="form_contact">
                                <input id="name" class="input-name" type="text" name="name" placeholder="Your name *" required />
                                <input id="email" class="input-email" type="text" name="email" placeholder="Your email *" required />
                                <input id="mysubject" class="input-subject" type="text" name="mysubject" placeholder="Subject *" required />
                                <textarea id="comments" class="input-textarea" name="comment" placeholder="Your message *" required></textarea>
                                <div class="comment-active">
                                    <span>All fields are mandatory.</span>
                                    <input id="email_submit" class="submit-button" type="submit" value="SEND MESSAGE"/>
                                </div>
                                <div class="email_success">
                                    <div id="reply_message" class="email_loading" ></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--Send Message End-->
                    
                    <!--Contact Info Start-->
                    <div class="contact-info">
                    	<h2>contact information</h2>
                        
                        <!--Contact Details-->
                        <div class="contact-details">
                        	<ul>
                            	<li>address: <span>559 Lilac Lane Statesboro, Mumbai</span></li>
                                <li>phone: <span>111-123-456-999</span></li>
                                <li>email: <span>satyakighosh.photography@gmail.com</span></li>
								<li>Instagram: <span>@satyakig</span></li>
                            </ul>
                        </div>
                        
                        <!--Text Area-->
                        <div class="contact-textarea">
                            <figure>
                            	<img src="<?php echo base_url('images/');?>self image_crop_VCA_0549.jpg" alt="contact info" style="width:100%;" />
                            </figure>
                            <p>A self - schooled professional photographer, Satyaki Ghosh grew up on a staple diet of meaningful cinema and black & white photography, thanks to his renown photographer father, Nemai Ghosh. Although a professional fashion and candid photographer in the field of advertising and magazine assignments, Satyaki is a passionate photographer of human expressions.</p>
                        </div>
                        
                    </div>
                    <!--Contact Info End-->
                    
                </div>
                <!--Content Area End-->
                
            </section>
            <!--Map and Details End-->

        </div>
        <!--All Content End-->
           
<?php
	$this->load->view('common/footer');
?>
</div>


</body>
</html>
