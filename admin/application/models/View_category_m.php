<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Fetching service category details in table

*/

class View_category_m extends CI_Model 
{
	public function fetch_details()
	{
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
	}
	public function delete_cat($cat_id)
	{
		$this->db->where('category_id', $cat_id);
		$this->db->delete('category');
		return true;
	}
}


?>