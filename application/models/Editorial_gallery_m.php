<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editorial_gallery_m extends CI_Model {

	public function fetch_gallery_img($album_id)
	{
		$this->db->select('*');
		$this->db->from('album_image');
		$this->db->where('album_id', $album_id);
		$query = $this->db->get();
		return $query->result();
	}
	public function fetch_album($album_id)
	{
		$this->db->select('*');
		$this->db->from('album');
		$this->db->where('album_id', $album_id);
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Edit_album_m.php */
/* Location: ./application/models/Edit_album_m.php */