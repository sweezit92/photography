<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
   $this->load->view("common/metalinks");
?>
<style>
#fa{
	font-size:20px;
}
</style>
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
          <h1>Image Listing</h1>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="javascript:void(0);">Home</a></li>
            <li><a href="javascript:void(0);">Image Listing</a></li>
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
              <h3 class="content-header">Image Listing</h3>
            </div>
            <div class="porlets-content">
			
              <div class="table-responsive">
				  <table class="table table-bordered">
					<thead>
					  <tr>
						<th>Sl No</th>
						<th>Category Name</th>
						<th>Album Name</th>
						<th>Image</th>
						<th>date</th>
						<th>Action</th>
					  </tr>
					</thead>
					<tbody>
					 <?php 
						$i = 1;
						foreach($get_image as $fetch_image){
					  ?>
					  <tr>
						<td><?php echo $i;?></td>
						<td><?php echo $fetch_image->category_name;?></td>
						<td><?php echo $fetch_image->album_title;?></td>
						<td><img src="<?php echo base_url('uploads/album_gallery/');?><?php echo $fetch_image->album_img;?>" style="height:100px;"></td>
						<td><?php echo date('d/m/Y',$fetch_image->date);?></td>
						<td>
							<a href="<?php echo base_url('edit_image/');?><?php echo $fetch_image->album_image_id;?>" title="Edit"><i id="fa" class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="<?php echo base_url('view_image/delete_data/');?><?php echo $fetch_image->album_image_id;?>" title="Delete"><i id="fa" class="fa fa-minus-circle" style="color:red;"></i></a>
						</td>
					  </tr>
					  <?php
						$i++;
						}
					  ?>
					</tbody>
				  </table>
				</div>
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
