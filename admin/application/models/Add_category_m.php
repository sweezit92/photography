<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Add Service Category model class

*/

class Add_category_m extends CI_Model 
{
	public function check_duplicate($cat_name)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_name', $cat_name);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function insert_category($records)
	{
		$this->db->insert('category', $records);
		return true;
	}

}
?>	