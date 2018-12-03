<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_album_m extends CI_Model {

	public function get_album()
	{
		$this->db->select('*');
		$this->db->from('album');
		$this->db->join('category', 'category.category_id = album.cat_id');
		$query = $this->db->get();
		return $query->result();
	}

	public function delete_query($album_id)
	{
		$this->db->where('album_id', $album_id);
		$this->db->delete('album');

		$this->db->where('album_id', $album_id);
		$this->db->delete('album_image');
		return true;
	}

}

/* End of file View_album_m.php */
/* Location: ./application/models/View_album_m.php */