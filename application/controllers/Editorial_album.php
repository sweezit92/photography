<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editorial_album extends CI_Controller {

	public function index()
	{	
		$this->load->model('editorial_album_m');
		$cat_id = $this->uri->segment(2);
		$data['fetch_album'] = $this->editorial_album_m->fetch_details($cat_id);
		$this->load->view('editorial_album',$data);
	}

}

/* End of file Editorial_album.php */
/* Location: ./application/controllers/Editorial_album.php */