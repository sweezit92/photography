<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_album extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['admin_id']){
            redirect('login');
        }
    }

	public function index()
	{
		$this->load->model('view_album_m');
		$data['get_album'] = $this->view_album_m->get_album();
		$this->load->view('view_album',$data);
	}

	public function delete_data()
	{
		$this->load->model('view_album_m');
		$album_id = $this->uri->segment(3);

		$delete_query = $this->view_album_m->delete_query($album_id);
		$this->session->set_flashdata("success", "Album deleted successfully");
		redirect('view_album');	
	}

}

/* End of file View_album.php */
/* Location: ./application/controllers/View_album.php */