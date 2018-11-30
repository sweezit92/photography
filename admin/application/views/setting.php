<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
   $this->load->view("common/metalinks");
?>
		<style>
		.field-icon {
		  float: right;
		  margin-right: 5px;
		  margin-top: -25px;
		  position: relative;
		  font-size:18px;
		  z-index: 2;
		}
		</style>
</head>
<body class="light_theme  fixed_header left_nav_fixed">
<div class="wrapper">
  <!--\\\\\\\ wrapper Start \\\\\\-->
<?php
   $this->load->view("common/header");
?>
  <!--\\\\\\\ header end \\\\\\-->
  <div class="inner">
    <!--\\\\\\\ inner start \\\\\\-->
<?php
   $this->load->view("common/sidebar");
?>
    <!--\\\\\\\left_nav end \\\\\\-->
    <div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>SETTINGS</h1>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="form.php">SETTINGS</a></li>
          </ol>
        </div>
      </div>
      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
            
      <div class="row">
        <div class="col-md-12">
            <?php
      if($this->session->flashdata('success')){
    ?>
      <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
    <?php
      }
      if($this->session->flashdata('failed')){
    ?>
      <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
    <?php
      }
      if($this->session->flashdata('pass_error')){
    ?>
      <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('pass_error');?></strong> </div>
    <?php
      }
    ?>
          <div class="block-web">
            <div class="header">
              
              <h3 class="content-header">Change Settings</h3>
            </div>
            <div class="porlets-content">
              
              <form action="<?php echo base_url('setting/change_setting');?>" method="post" >
                <div class="form-group">
                  <label>Email</label>
                  <input class="form-control" type="text" name="email"  value="<?php echo $admin_details->admin_email;?>"  required>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input class="form-control" type="password"  name="password" id="password-field" value="<?php echo $admin_details->admin_password;?>" required>
				  <span toggle="#password-field" class="fa fa-eye field-icon toggle-password"></span>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
                <button class="btn btn-default" type="reset">Cancel</button>
              </form>
              
            </div><!--/porlets-content-->
          </div><!--/block-web--> 
        </div><!--/col-md-6-->

      </div><!--/row-->
   
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
  </div>
  <!--\\\\\\\ inner end\\\\\\-->
</div>
<!--\\\\\\\ wrapper end\\\\\\-->

<?php
   $this->load->view("common/footer");
?>
		<script>
		$(".toggle-password").click(function() {

		  $(this).toggleClass("fa-eye-slash");
		  var input = $($(this).attr("toggle"));
		  if (input.attr("type") == "password") {
			input.attr("type", "text");
		  } else {
			input.attr("type", "password");
		  }
		});
		</script>
</body>
</html>
