<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
   $this->load->view("common/metalinks");
?>
</head>
<body class="light_theme  fixed_header left_nav_fixed">
<div class="wrapper">
  <!--\\\\\\\ wrapper Start \\\\\\-->
<?php
   $this->load->view("common/header");
?>

	<div class="inner">

<?php
   $this->load->view("common/sidebar");
?>
    <div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Add Category</h1>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="javascript:void(0);">Home</a></li>
            <li><a href="javascript:void(0);">Add Category</a></li>
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
			if($this->session->flashdata('duplicate')){
		?>
			<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('duplicate');?></strong> </div>
		<?php
			}
		?>
          <div class="block-web">
            <div class="header">
              <h3 class="content-header">Category Details</h3>
            </div>
            <div class="porlets-content">
			
              <form method="POST" action="<?php echo base_url('add_category/add_new');?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Category Name</label>
                  <input class="form-control" type="text" name="cat_name" placeholder="Enter Category name" required>
                </div><!--/form-group-->
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
<!-- Modal -->
<?php
   $this->load->view("common/footer");
?>


</body>
</html>
