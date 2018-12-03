<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_album_m extends CI_Model {

	public function insert_album($insert_array)
	{
		$this->db->insert('album', $insert_array);
		return true;
	}

}

/* End of file Add_album_m.php */
/* Location: ./application/models/Add_album_m.php */