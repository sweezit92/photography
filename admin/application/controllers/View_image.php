<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_image extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/welcome
	 *	- or -
	 * 		http://example.com/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['admin_id']){
            redirect('login');
        }
    }

	public function index()
	{
		$this->load->model('view_image_m');
		$data["get_image"] = $this->view_image_m->get_image();
		$this->load->view("view_image",$data);
	}
	public function delete_data()
	{
		$this->load->model('view_image_m');
		$image_id = $this->uri->segment(3);
		$get_image_name = $this->view_image_m->get_image_name($image_id);
		$image_name = $get_image_name->album_img;
		$delete_data = $this->view_image_m->delete_image($image_id);
		if($delete_data){
			unlink("uploads/album_gallery".$image_name);
			$this->session->set_flashdata("success", "Success , Your have successfully deleted this slider image!");
			redirect('view_image');
		}
		else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('view_image');
		}
	}
}
