<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Edit service category details 

*/

class Carrier_m extends CI_Model 
{
	public function fetch_details()
	{
		$this->db->where("1=1");
		$query = $this->db->get("carrier");
		return $query;
	}
	public function update_details($records)
	{
		$query = $this->db->update('carrier', $records);
		return $query;
	}
}

?>