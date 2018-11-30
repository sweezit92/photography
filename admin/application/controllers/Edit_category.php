<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_category extends CI_Controller {

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
		$cat_id = $this->uri->segment(2);
		$this->load->model('edit_category_m');
		$data["cat_data"] = $this->edit_category_m->fetch_details($cat_id);
		$this->load->view('edit_category',$data);
	}
	public function update_cat()
	{
		$this->load->model('edit_category_m');
		$cat_id = $this->uri->segment(3);
		$cat_name = $this->input->post('cat_name');
		
		$check_duplicate = $this->edit_category_m->check_duplicate($cat_id,$cat_name);
		if(sizeof($check_duplicate) > 0)
		{
			$this->session->set_flashdata("duplicate", "This category alreday exist!");
			redirect('edit_category/'.$cat_id);
		}else{
			$records=array('category_name'=>$cat_name);
			$update_data = $this->edit_category_m->update_cat($cat_id,$records);
			$this->session->set_flashdata("success", "Success , Your service category updated successfully!");
			redirect('edit_category/'.$cat_id);
		}
	}
}
