<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_image extends CI_Controller {

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
		$this->load->model('edit_image_m');
		$this->load->model('view_category_m');
		$image_id = $this->uri->segment(2);
		$data["get_cat"] = $this->view_category_m->fetch_details();
		$data["fetch_image"] = $this->edit_image_m->fetch_details($image_id);
		$cat_id = $data["fetch_image"]->cat_id;
		$data['get_album'] = $this->edit_image_m->fetch_album($cat_id);
		$this->load->view('edit_image',$data);
	}
	public function edit_data()
	{
		$this->load->model('edit_image_m');
		$image_id = $this->uri->segment(3);
		$cat = $this->input->post('cat');
		$album = $this->input->post('album');
		$designer_name = $this->input->post('designer_name');
		$title = $this->input->post('title');

		if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'uploads/album_gallery/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = rand(999,99999).$_FILES['image']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
					$image = $uploadData['file_name'];
					$records=array(
									'cat_id' => $cat,
									'album_id' => $album,
									'album_img' => $image,
									'designer_name' => $designer_name,
									'title' => $title
								  );
                }else{
                   $records=array(
									'cat_id' => $cat,
									'album_id' => $album,
									'designer_name' => $designer_name,
									'title' => $title
								 );
                }
		}else{
			$records=array(
							'cat_id' => $cat,
							'album_id' => $album,
							'designer_name' => $designer_name,
							'title' => $title
						  );
		}

		$update_data = $this->edit_image_m->update_details($image_id,$records);
		$this->session->set_flashdata("success", "Image updated successfully!");
		redirect('edit_image/'.$image_id);
		
	}
}
