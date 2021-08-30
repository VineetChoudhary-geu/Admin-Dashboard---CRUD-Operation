<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Action_Controller extends CI_Controller {



 public function __construct()

{
    parent::__construct();

    $this->load->model('Login_Model');
    $this->load->library('form_validation');
	$this->load->model('Manage_Model');
}

public function insertCategory(){


			$id  = empty($this->input->post('id')) ? '' :$this->input->post('id');

			        $config['upload_path'] = './assets/images/category_image/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
					$config['width']    = '150';
					$config['height']   = '150';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('image')){

						$image	= 	$this->upload->data();
						$config['image_library']='gd2';
						$this->load->library('image_lib',$config);
						$this->image_lib->resize();

					}else{

						 $this->upload->display_errors();

					}

				

		$data['image'] = empty($image['file_name']) ? '' :$image['file_name'];

	if ($data['image']=="") {

		$data['image'] = empty($this->input->post('image_old')) ? '' :$this->input->post('image_old');

	}

	$data['category_name'] = empty($this->input->post('category_name')) ? '' :$this->input->post('category_name');
	$data['slug'] = empty($this->input->post('slug')) ? '' :$this->input->post('slug');
	


	$data['description'] = empty($this->input->post('description')) ? '' :$this->input->post('description');
	$data['meta_title'] = empty($this->input->post('meta_title')) ? '' :$this->input->post('meta_title');
	$data['meta_keyword'] = empty($this->input->post('meta_keyword')) ? '' :$this->input->post('meta_keyword');
	$data['meta_desc'] = empty($this->input->post('meta_desc')) ? '' :$this->input->post('meta_desc');

	
	if ($id=="") {

		$this->Manage_Model->insertCategory($data);
		redirect(base_url()."welcome/viewcategory");

	}else{

		$this->Manage_Model->updateCategory($id,$data);
		redirect(base_url()."welcome/viewcategory");

	}

	}

	public function getSlug()
	{

		$product_name = $_REQUEST['product_name'];
		echo $slug = url_title($product_name, 'dash', true);

	}

	public function deleteCategory($id)
	{

		$data = $this->Manage_Model->deleteCategory($id);
		echo json_encode(array("status" => TRUE));
	}

	public function insertSubCategory(){

				$id  = empty($this->input->post('id')) ? '' :$this->input->post('id');
	
						$config['upload_path'] = './assets/images/subcategory_image/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
						$config['width']    = '150';
						$config['height']   = '150';
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						if($this->upload->do_upload('image')){

							$image	= 	$this->upload->data();
							$config['image_library']='gd2';
							$this->load->library('image_lib',$config);
							$this->image_lib->resize();

						}else{
							 $this->upload->display_errors();
						}
	
					
			$data['image'] = empty($image['file_name']) ? '' :$image['file_name'];
		if ($data['image']=="") {
			$data['image'] = empty($this->input->post('image_old')) ? '' :$this->input->post('image_old');
		}
		$data['category_id'] = empty($this->input->post('category_id')) ? '' :$this->input->post('category_id');
		$data['subcategory_name'] = empty($this->input->post('subcategory_name')) ? '' :$this->input->post('subcategory_name');
		$data['slug'] = empty($this->input->post('slug')) ? '' :$this->input->post('slug');
	
		if ($id=="") {
	
			$this->Manage_Model->insertSubCategory($data);
			redirect(base_url()."welcome/viewsubcategory");
		}else{
	
		$this->Manage_Model->updateSubCategory($id,$data);
		redirect(base_url()."welcome/viewsubcategory");
		}
	}

	public function deleteSubCategory($id)
	{

		$data = $this->Manage_Model->deleteSubCategory($id);
		echo json_encode(array("status" => TRUE));
	}

	public function insertSlider(){

		$id  = empty($this->input->post('id')) ? '' :$this->input->post('id');
	
	
	
			$config['upload_path'] = './assets/images/slider/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
			$config['width']    = '150';
			$config['height']   = '150';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('image')){

				$image	= 	$this->upload->data();
				$config['image_library']='gd2';
				$this->load->library('image_lib',$config);
				$this->image_lib->resize();

			}else{

					$this->upload->display_errors();
			}
	
			$data['image'] = empty($image['file_name']) ? '' :$image['file_name'];
			if ($data['image']=="") {

			$data['image'] = empty($this->input->post('image_old')) ? '' :$this->input->post('image_old');

				}
	
		$data['title'] = empty($this->input->post('title')) ? '' :$this->input->post('title');
		$data['content'] = empty($this->input->post('content')) ? '' :$this->input->post('content');
	
		if ($id=="") {

			$this->Manage_Model->insertSlider($data);
			redirect(base_url()."welcome/viewslider");
		}else{

			$this->Manage_Model->updateSlider($id,$data);
			redirect(base_url()."welcome/viewslider");
		}
	
	
		}

		public function deleteSlider($id)
		{

			$data = $this->Manage_Model->deleteSlider($id);
			echo json_encode(array("status" => TRUE));
		}

		public function deleteProduct($id)
		{

			$data = $this->Manage_Model->deleteProduct($id);
			echo json_encode(array("status" => TRUE));
		}
	
}