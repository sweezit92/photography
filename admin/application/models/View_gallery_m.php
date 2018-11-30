<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Fetching service category details in table

*/

class View_gallery_m extends CI_Model 
{
	public function fetch_gallery_images()
	{
		$query = $this->db->query("select * from galary order by gallery_id desc");
		return $query;
	}
	public function delete_gallery_image($gallery_id)
	{
		$query = $this->db->query("delete from galary where gallery_id='".$gallery_id."'");
		return true;
	}
}
?>