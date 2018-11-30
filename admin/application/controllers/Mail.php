<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {

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
		$this->load->model('mail_m');
		$data["fetch_mail"] = $this->mail_m->fetch_details();
		$this->load->view("mail", $data);
	}
	public function delete_mail()
	{
		$feedback_id = $this->uri->segment(3);
		$this->load->model('mail_m');
		$delete_data = $this->mail_m->delete_data($feedback_id);
		if($delete_data){
			$this->session->set_flashdata("success", "Success , Your have successfully deleted this mail!");
			redirect('mail');
		}
		else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('mail');
		}
	}
}