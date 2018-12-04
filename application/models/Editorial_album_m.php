<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editorial_album_m extends CI_Model {

	public function fetch_details($cat_id)
	{
		$this->db->select('*');
		$this->db->from('album');
		$this->db->where('cat_id', $cat_id);
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Edit_album_m.php */
/* Location: ./application/models/Edit_album_m.php */