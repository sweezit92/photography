<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Edit Slider Image details 

*/

class Edit_image_m extends CI_Model 
{
	public function fetch_details($image_id)
	{
		$this->db->select('*');
		$this->db->from('album_image a'); 
		$this->db->join('album b', 'b.album_id=a.album_id', 'left');
		$this->db->join('category c', 'c.category_id=a.cat_id', 'left');
		$this->db->where('a.album_image_id',$image_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_album($cat_id)
	{
		$this->db->select('*');
		$this->db->from('album'); 
		$this->db->where('cat_id',$cat_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function update_details($image_id,$records)
	{
		$where  = array('album_image_id' => $image_id);
		$this->db->where($where);
		$query = $this->db->update('album_image', $records);
		return true;
	}
}

?>