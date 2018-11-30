<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_category extends CI_Controller {

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
		$this->load->view('add_category');
	}
	public function add_new()
	{
		$this->load->model('add_category_m');

		$cat_name = $this->input->post('cat_name');
		$date = time();

		$check_duplicate = $this->add_category_m->check_duplicate($cat_name);
		if($check_duplicate > 0){
			$this->session->set_flashdata("duplicate", "This category already exist!");
			redirect('add_category');	
		}else{
			$records = array('category_name' => $cat_name , 'date' => $date);
			$insert_data = $this->add_category_m->insert_category($records);
			$this->session->set_flashdata("success", "Service category created successfully!");
			redirect('add_category');	
		}
	}
}
