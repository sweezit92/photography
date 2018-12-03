<div class="left_nav">

      <!--\\\\\\\left_nav start \\\\\\-->      
      <div class="left_nav_slidebar">
        <ul>
			<li class="<?php echo(($this->uri->segment(1)=='add_category' || $this->uri->segment(1)=='view_category' || $this->uri->segment(1)=='edit_category')?'left_nav_active theme_border':'left_nav_sidebar');?>">
				<a href="javascript:void(0);"><i class="fa fa-cogs"></i> Category <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
				<ul style="display:<?php echo(($this->uri->segment(1)=='add_category' || $this->uri->segment(1)=='view_category' || $this->uri->segment(1)=='edit_category')?'block':'');?>">
					<li> <a href="<?php echo base_url();?>add_category" class="left_nav_sub_active"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="<?php echo(($this->uri->segment(1)=='add_category')?'theme_color':'');?>">Add Category</b> </a> </li>
					<li> <a href="<?php echo base_url();?>view_category"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="<?php echo(($this->uri->segment(1)=='view_category')?'theme_color':'');?>">View Category</b> </a> </li>
				</ul>
			</li>

			<li class="<?php echo(($this->uri->segment(1)=='add_album' || $this->uri->segment(1)=='view_album' || $this->uri->segment(1)=='edit_album')?'left_nav_active theme_border':'left_nav_sidebar');?>">
				<a href="javascript:void(0);"><i class="fa fa-cog"></i> Album <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
				<ul style="display:<?php echo(($this->uri->segment(1)=='add_album' || $this->uri->segment(1)=='view_album' || $this->uri->segment(1)=='edit_album')?'block':';');?>">
					<li> <a href="<?php echo base_url();?>add_album" class="left_nav_sub_active"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="<?php echo(($this->uri->segment(1)=='add_album')?'theme_color':'');?>">Add Album</b> </a> </li>
					<li> <a href="<?php echo base_url();?>view_album"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="<?php echo(($this->uri->segment(1)=='view_album')?'theme_color':'');?>">View Album</b> </a> </li>
				</ul>
			</li>

			<li class="<?php echo(($this->uri->segment(1)=='add_image' || $this->uri->segment(1)=='view_image' || $this->uri->segment(1)=='edit_image')?'left_nav_active theme_border':'left_nav_sidebar');?>">
				<a href="javascript:void(0);"><i class="fa fa-file"></i> Images <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
				<ul style="display:<?php echo(($this->uri->segment(1)=='add_image' || $this->uri->segment(1)=='view_image' || $this->uri->segment(1)=='edit_image')?'block':';');?>">
					<li> <a href="<?php echo base_url();?>add_image" class="left_nav_sub_active"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="<?php echo(($this->uri->segment(1)=='add_image')?'theme_color':'');?>">Add Image</b> </a> </li>
					<li> <a href="<?php echo base_url();?>view_image"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="<?php echo(($this->uri->segment(1)=='view_image')?'theme_color':'');?>">View Images</b> </a> </li>
				</ul>
			</li>
			<!-- <li class="left_nav_active theme_border"><a href="stat.html"><i class="fa fa-folder-open-o"></i>STATISTICS</a></li> -->
			<li class="<?php echo(($this->uri->segment(1)=='setting')?'left_nav_active theme_border':'left_nav_sidebar');?>"><a href="<?php echo base_url('setting');?>"><i class="fa fa-wrench"></i>Setting</a></li>
			<li class="left_nav_sidebar"><a href="<?php echo base_url('logout');?>"><i class="fa fa-sign-out"></i>Logout</a></li>
        </ul>
      </div>
    </div>
    <!--\\\\\\\left_nav end \\\\\\-->