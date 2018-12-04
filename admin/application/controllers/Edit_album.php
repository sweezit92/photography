<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_album extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['admin_id']){
            redirect('login');
        }
    }

	public function index()
	{
		$this->load->model('edit_album_m');
		$this->load->model('view_category_m');
		$album_id = $this->uri->segment(2);
		$data['fetch_album'] = $this->edit_album_m->fetch_details($album_id);
		$data['get_cat'] = $this->view_category_m->fetch_details();
		$this->load->view('edit_album',$data);
	}

	public function update_data()
	{
		$this->load->model('edit_album_m');
		$album_id = $this->uri->segment(3);
		$album_cat = $this->input->post('album_cat');
		$album_title = $this->input->post('album_title');
		$album_descp = $this->input->post('album_descp');

		if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'uploads/album_cover/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = rand(999,99999).$_FILES['image']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
					$image = $uploadData['file_name'];
					$records=array(
									'cat_id' => $album_cat,
									'album_cover' => $image,
									'album_title' => $album_title,
									'album_description' => $album_descp
								  );
                }else{
                   $records=array(
									'cat_id' => $album_cat,
					   				'album_title' => $album_title,
									'album_description' => $album_descp
								 );
                }
		}else{
			$records=array(
							'cat_id' => $album_cat,
							'album_title' => $album_title,
							'album_description' => $album_descp
						  );
		}

		$update_album = $this->edit_album_m->update_album($album_id,$records);
		$this->session->set_flashdata("success", "Album updated successfully!");
		redirect('edit_album/'.$album_id);
	}
}

/* End of file Edit_album.php */
/* Location: ./application/controllers/Edit_album.php */