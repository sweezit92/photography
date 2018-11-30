<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrier extends CI_Controller {

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
		$this->load->model('carrier_m');
		$data['fetch_data'] = $this->carrier_m->fetch_details();
		$this->load->view('carrier',$data);
	}
	public function update_details()
	{
		$this->load->model('carrier_m');
		$carrier_details = $this->input->post('carrier_description');
		$records=array('description'=>$carrier_details);
		$update_data = $this->carrier_m->update_details($records);
		if($update_data)
		{
			$this->session->set_flashdata("success", "Success , About us details updated successfully!");
			redirect('carrier');
		}else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('carrier');
		}
		
	}
}
