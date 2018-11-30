<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

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
		$this->load->view('gallery');
	}
	public function add_new()
	{
		$this->load->model('gallery_m');

		$yo_name = $this->input->post('yo_name');

		if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|mp4|3gp';
                $config['file_name'] = rand(999,99999).$image_files;
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
					$image = $uploadData['file_name'];
					$records=array('file'=>$image,'file_name'=> $yo_name);
                }else{
                    $image = '';
					$records=array('file_name'=> $yo_name);
                }
		}else{
			$records=array('file_name'=> $yo_name);
		}

		$insert_data = $this->gallery_m->insert_gallery($records);
		if($insert_data)
		{
			$this->session->set_flashdata("success", "File uploaded successfully!");
			redirect('gallery');	
		}
		else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('gallery');	
		}
	}
}
