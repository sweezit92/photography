<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_image extends CI_Controller {

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
		$this->load->model('view_category_m');
		$data["get_cat"] = $this->view_category_m->fetch_details();
		$this->load->view('add_image',$data);
	}

	public function ajax_fetch_album()
	{
		$this->load->model('add_image_m');
		$cat_id = $this->input->post("cat_id");
		$get_album = $this->add_image_m->fetch_album($cat_id);
	?>
		<option selected disabled>Choose Album</option>
	<?php
		foreach($get_album as $fetch_album){
	?>
		<option value="<?php echo $fetch_album->album_id;?>"><?php echo $fetch_album->album_title;?></option>
	<?php
		}
	}

	public function add_new()
	{
		$this->load->model('add_image_m');

		$cat = $this->input->post('cat');
		$album = $this->input->post('album');
		$designer_name = $this->input->post('designer_name');
		$title = $this->input->post('title');
		$date = time();

		if(!empty($_FILES['image']['name'])){
			$config['upload_path'] = 'uploads/album_gallery/';
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
								'cat_id' => $cat,
								'album_id' => $album,
								'album_img' => $image,
								'designer_name' => $designer_name,
								'title' => $title,
								'image_date' => $date,
							 );


		$insert_data = $this->add_image_m->insert_image($insert_array);
		$this->session->set_flashdata("success", "Image uploaded successfully!");
		redirect('add_image');	
	}
}
