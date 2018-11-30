<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Edit service category details 

*/

class Edit_category_m extends CI_Model 
{
	public function fetch_details($cat_id)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_id',$cat_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function check_duplicate($cat_id,$cat_name)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_id !=',$cat_id);
		$this->db->where('category_name',$cat_name);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_cat($cat_id,$records)
	{
		$where  = array('category_id' => $cat_id);
		$this->db->where($where);
		$query = $this->db->update('category', $records);
		return true;
	}
}

?>