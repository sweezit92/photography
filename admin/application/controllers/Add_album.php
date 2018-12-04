<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_album extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['admin_id']){
            redirect('login');
        }
    }
    
	public function index()
	{
		$this->load->model('view_category_m');
		$data['get_cat'] = $this->view_category_m->fetch_details();
		$this->load->view('add_album',$data);
	}

	public function create_album()
	{
		$this->load->model('add_album_m');
		$album_cat = $this->input->post('album_cat');
		$album_title = $this->input->post('album_title');
		$album_descp = $this->input->post('album_descp');
		$date = time();
		if(!empty($_FILES['image']['name'])){
			$config['upload_path'] = 'uploads/album_cover/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = rand(999,99999).$_FILES['image']['name'];
			
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('image')){
				 $uploadData = $this->upload->data();
				 $image = $uploadData['file_name'];
				
			}else{
				$image = '';
			}
		}
		else{
			$image = '';
		}
		$insert_array = array(
								'cat_id' => $album_cat,
								'album_cover' => $image,
								'album_thumb' => '',
								'album_title' => $album_title,
								'album_description' => $album_descp,
								'album_date' => $date
							 );
		$insert_album = $this->add_album_m->insert_album($insert_array);
		$this->session->set_flashdata("success", "Album created successfully!");
	    redirect('add_album');
	}

}

/* End of file Add_album.php */
/* Location: ./application/controllers/Add_album.php */