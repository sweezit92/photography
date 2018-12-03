<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Fetching service category details in table

*/

class View_image_m extends CI_Model 
{
	public function get_image()
	{
		$this->db->select('*');
		$this->db->from('album_image a'); 
		$this->db->join('album b', 'b.album_id=a.album_id', 'left');
		$this->db->join('category c', 'c.category_id=a.cat_id', 'left');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_image_name($image_id)
	{
		$this->db->select('*');
		$this->db->from('album_image a'); 
		$this->db->where('album_image_id', $image_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function delete_image($image_id)
	{
		$this->db->where('album_image_id', $image_id);
		$this->db->delete('album_image');
		return true;
	}
}


?>