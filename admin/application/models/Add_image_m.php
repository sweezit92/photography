<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Add Home Page image

*/

class Add_image_m extends CI_Model 
{
	public function fetch_album($cat_id)
	{
		$this->db->select('*');
		$this->db->from('album');
		$this->db->where('cat_id', $cat_id);
		$query = $this->db->get();
		return $query->result();		
	}
	
	public function insert_image($insert_array)
	{
		$this->db->insert('album_image', $insert_array);
		return true;
	}

}
?>	