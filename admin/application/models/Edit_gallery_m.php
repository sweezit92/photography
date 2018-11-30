<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Edit certificate details 

*/

class Edit_gallery_m extends CI_Model 
{
	public function fetch_gallery_details($gallery_id)
	{
		$this->db->where("gallery_id",$gallery_id);
		$query = $this->db->get("galary");
		return $query;
	}
	public function update_details($gallery_id,$records)
	{
		$where  = array('gallery_id' => $gallery_id);
		$this->db->where($where);
		$query = $this->db->update('galary', $records);
		return $query;
	}
}

?>