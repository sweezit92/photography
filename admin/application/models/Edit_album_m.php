<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_album_m extends CI_Model {

	public function fetch_details($album_id)
	{
		$this->db->select('*');
		$this->db->from('album'); 
		$this->db->where('album_id',$album_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_album($album_id,$records)
	{
		$where  = array('album_id' => $album_id);
		$this->db->where($where);
		$query = $this->db->update('album', $records);
		return true;
	}

}

/* End of file Edit_album_m.php */
/* Location: ./application/models/Edit_album_m.php */