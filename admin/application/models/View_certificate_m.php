<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Fetching service category details in table

*/

class View_certificate_m extends CI_Model 
{
	public function fetch_details()
	{
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
	}
	
}


?>