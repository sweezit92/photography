<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Edit Slider Image details 

*/

class Setting_m extends CI_Model 
{
	public function fetch_details($admin_id)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('admin_id', $admin_id);
		$query = $this->db->get();
		return $query->row();
	}
	public function update_admin($admin_id,$records)
	{
		$this->db->where('admin_id' , $admin_id);
		$query = $this->db->update('admin', $records);
		return true;
	}
}

?>