<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fetch_cat_m extends CI_Model 
{
	public function get_all_cat()
	{
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
	}
}

?>