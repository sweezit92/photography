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
          <h1>Edit Album</h1>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="javascript:void(0);">Home</a></li>
            <li><a href="javascript:void(0);">Edit Album</a></li>
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
		?>
			
          <div class="block-web">
            <div class="header">
              <h3 class="content-header">Album</h3>
            </div>
            <div class="porlets-content">
			
              <form method="POST" action="<?php echo base_url('edit_album/update_data/');?><?php echo $this->uri->segment(2);?>" enctype="multipart/form-data">
			  <div class="form-group">
                  <label>Album Ctegory</label>
                  <select class="form-control" name="album_cat" required>
				  	  <option selected disabled>Choose Category</option>
				  <?php
				  foreach($get_cat as $fetch_cat)
				  {
				  ?>
					  <option value="<?php echo $fetch_cat->category_id;?>" <?php echo (($fetch_cat->category_id == $fetch_album->cat_id)?'selected':'');?>><?php echo $fetch_cat->category_name;?></option>
				  <?php
				  }
				  ?>
				  </select>
                </div>
			  <div class="form-group">
				  <label>Select Album Cover</label>
				  <div class="fileupload fileupload-new" data-provides="fileupload">
					  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					  <?php
					  if($fetch_album->album_cover != '')
					  {
					  ?>
						  <img style="height:150px;" src= "<?php echo base_url('uploads/album_cover/');?><?php echo $fetch_album->album_cover;?>" alt="">
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
                <div class="form-group">
                  <label>Album Title</label>
                  <input class="form-control" type="text" name="album_title"  value="<?php echo $fetch_album->album_title;?>"  required>
                </div>
				<div class="form-group">
                  <label>Album Description</label>
                  <textarea class="form-control" name="album_descp"  required><?php echo $fetch_album->album_description;?></textarea>
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
