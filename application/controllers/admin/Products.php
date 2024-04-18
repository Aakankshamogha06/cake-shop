<?php
defined('BASEPATH') or exit('No direct script access allowed');

class products extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('pagination');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->helper('cookie');
		$this->load->library('form_validation');
		$this->load->library('encryption');
		$this->load->model('admin/products_model', 'products_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_products()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/products/add_products';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function products_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				$config['upload_path'] = 'uploads/product_images';
				$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('image'))
				{
					$uploadData = $this->upload->data();
					$image = $uploadData['file_name'];
				}
				else
				{
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}
				if ($this->products_model->products_data_submit($data,$image) == true) {

					redirect("admin/products/products_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function products_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['products_view'] = $this->products_model->products_view();
					$data['view'] = 'admin/products/view_products';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function products_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_products'] = $this->products_model->products_edit($id);
					$data['view'] = 'admin/products/edit_products';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function products_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();
                        $config['upload_path'] = 'uploads/product_images';
                        $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
                        $config['encrypt_name'] = TRUE;
                        $this->load->library('upload',$config);
                        $this->upload->initialize($config);
                        if($this->upload->do_upload('image'))
                        {
                            $uploadData = $this->upload->data();
                            $image = $uploadData['file_name'];
                        }
                        else
                        {
                            $error = array('error' => $this->upload->display_errors());
                            print_r($error);
                        }

						if ($this->products_model->products_update_data($data,$image) == true) {

							redirect("products/view_products");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function products_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->products_model->products_delete($id) == true) {

							redirect("products/view_products");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
	public function index() {
        $this->load->model('products_model');
        $category = 'blog_category';
        $data['blogs'] = $this->products_model->get_recent_blogs($category);
        $this->load->view('blog_view', $data);
    }
}
?>