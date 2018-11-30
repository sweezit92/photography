<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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

	 /*function __construct()
	 {
	   parent::__construct();
	   $this->load->model('login_m','',TRUE);
	  }*/

	public function index()
	{
		$this->load->view('login');
	}
	public function login_check(){
		$this->load->model('login_m');

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$check_login = $this->login_m->check_login($username,$password);
		if(sizeof($check_login) > 0){
			$session_data = array(
									'admin_id' => $check_login->admin_id,
								 );
			$this->session->set_userdata('logged_in', $session_data);
			redirect('setting');
		}else{
			$this->session->set_flashdata("failed", "Invalid email or password");
			redirect('login');
		}
	}

}
