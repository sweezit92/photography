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
          <h1>Carrier</h1>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="javascript:void(0);">Home</a></li>
            <li><a href="javascript:void(0);">Carrier Description</a></li>
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
		?>
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Carrier Description</h3>
            </div>


            <?php
			foreach($fetch_data->result() as $row){
			?>
			<div class="porlets-content" id="details_div">
				<div class="form-group">
                    <label><b>Carrier Description :</b> <?php echo $row->description;?></label>
                  </div><!--/form-group-->
				<a class="btn btn-primary" href="javascipt:void(0);" onclick="edit_this()">Edit</a>
            </div><!--/porlets-content-->
			<?php
			}
			?>



			
			<?php
			foreach($fetch_data->result() as $row){
			?>
			<div class="porlets-content" style="display:none;" id="edit_div">
              <form method="POST" action="<?php echo base_url();?>carrier/update_details" enctype="multipart/form-data" parsley-validate novalidate>
				<div class="form-group">
                    <label>Service Details</label>
                      <textarea class="form-control ckeditor" name="carrier_description" rows="6"><?php echo $row->description;?></textarea>
                  </div><!--/form-group-->
				<button class="btn btn-primary" type="submit">Submit</button>
              </form>
            </div><!--/porlets-content-->
			<?php
			}
			?>





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
<script>
function edit_this(){
	$("#edit_div").show();
	$("#details_div").hide();
}
</script>


</body>
</html>
