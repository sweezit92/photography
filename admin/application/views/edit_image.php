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
          <h1>Edit Image</h1>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="javascript:void(0);">Home</a></li>
            <li><a href="javascript:void(0);">Edit Image</a></li>
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
              <h3 class="content-header">Edit Image</h3>
            </div>
            <div class="porlets-content">
			
              <form method="POST" action="<?php echo base_url('edit_image/edit_data/');?><?php echo $this->uri->segment(2);?>" enctype="multipart/form-data">
			  	<div class="form-group">
                  <label>Category</label>
                  <select class="form-control" name="cat" onchange="get_album(this.value);" required>
					<option>Choose Category</option>
					<?php
					foreach($get_cat as $fetch_cat){
					?>
					<option value="<?php echo $fetch_cat->category_id;?>" <?php echo(($fetch_cat->category_id == $fetch_image->cat_id)?'selected':'');?>><?php echo $fetch_cat->category_name;?></option>
					<?php
					}
					?>
				  </select>
                </div>
				<div class="form-group">
                  <label>Album</label>
                  <select class="form-control album_class" name="album" required>
					<option selected disabled>Choose Album</option>
					<?php
					foreach($get_album as $fetch_album){
					?>
					<option value="<?php echo $fetch_album->album_id;?>" <?php echo(($fetch_album->album_id == $fetch_image->cat_id)?'selected':'');?>><?php echo $fetch_album->album_title;?></option>
					<?php
					}
					?>
				  </select>
                </div>
				<div class="form-group">
				  <label>Select Image</label>
				  <div class="fileupload fileupload-new" data-provides="fileupload">
					  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					  <?php
					  if($fetch_image->album_img != '')
					  {
					  ?>
						  <img style="height:150px;" src= "<?php echo base_url('uploads/album_gallery/');?><?php echo $fetch_image->album_img;?>" alt="">
					  <?php
					  }else{
					  ?>
						  <img style="height:150px;" src= "http://via.placeholder.com/190x140" alt="">
					  <?php
					  }
					  ?>
					  </div>
					  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
					  <div>
					   <span class="btn btn-white btn-file" style="margin-left:1px;">
					   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
					   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
					   <input type="file" name="image" class="default">
					   </span>
					  </div> 
				  </div>
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
<!-- Modal -->
<?php
   $this->load->view("common/footer");
?>
<script>
	function get_album(cat_id){
      $.ajax({
      url: '<?php echo base_url();?>add_image/ajax_fetch_album',
      data: {'cat_id': cat_id},
      type: "post",
      success: function(response){
        $('.album_class').html(response);
      }
      }); 
    }
</script>

</body>
</html>
