<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editorial_gallery extends CI_Controller {

	public function index()
	{
		$this->load->model('editorial_gallery_m');
		$album_id = $this->uri->segment(2);
		$data['fetch_gallery'] = $this->editorial_gallery_m->fetch_gallery_img($album_id);
		$this->load->view('editorial_gallery',$data);
	}

}

/* End of file Editorial_gallery.php */
/* Location: ./application/controllers/Editorial_gallery.php */