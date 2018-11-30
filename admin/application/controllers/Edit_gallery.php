<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_gallery extends CI_Controller {

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
	public function fetch_data()
	{
		$gallery_id = $this->uri->segment(3);
		$this->load->model('edit_gallery_m');
		$data["gallery_data"] = $this->edit_gallery_m->fetch_gallery_details($gallery_id);
		$this->load->view('edit_gallery',$data);
	}
	public function update_gallery()
	{
		$this->load->model('edit_gallery_m');
		$gallery_id = $this->input->post('gallery_id');
		$heading = $this->input->post('gallery_title');

		if(!empty($_FILES['gallery_image']['name'])){
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = rand(999,99999).$_FILES['gallery_image']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('gallery_image')){
                    $uploadData = $this->upload->data();
					$image = $uploadData['file_name'];
					$records=array('file'=>$image,'file_name'=> $heading);
                }else{
                    $image = '';
					$records=array('file_name'=> $heading);
                }
		}else{
			$records=array('file_name'=> $heading);
		}

		$update_data = $this->edit_gallery_m->update_details($gallery_id,$records);
		if($update_data)
		{
			$this->session->set_flashdata("success", "Success , Your slider image updated successfully!");
			redirect('edit_gallery/fetch_data/'.$gallery_id);
		}else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('edit_gallery/fetch_data/'.$gallery_id);
		}
		
	}
}
