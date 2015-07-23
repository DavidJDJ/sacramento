<?php

class admin extends CI_Controller {
	function index() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 'admin') {
			// echo "Admin is logged in";
			// var_dump($this->session->all_userdata());
			$this->load->view('admin_views/dashboard');
		} else {
		$this->load->view('sacramento/admin');
		}
	}
	function login() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules("email", 'email', "trim|required|valid_email");
		$this->form_validation->set_rules("password", 'password', "trim|required");
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('errors', validation_errors());
			redirect('../sacramento/admin');
		} else {
			$this->load->model('admin_model');
			$result = $this->admin_model->admin_user($this->input->post('email'));
			// var_dump($result);
			// echo md5($this->input->post('password') . '' . $result['salt']);
			if ($result['password'] == md5($this->input->post('password') . '' . $result['salt'])) {
				$this->session->set_userdata($result);
				$this->session->set_userdata('logged_in', TRUE);
				redirect('admin/');
			} else {
				$this->session->set_flashdata('errors', "Incorrect password");
				redirect('../sacramento/admin');
			}
		}
	}
	function ordered() {
		$this->load->view('admin_views/orders');
	}
	function shipped() {
		$this->load->view('admin_views/shipped');
	}
	function products() {
		$this->load->view('admin_views/products');
	}
	function add_product() {
		if ($this->input->post()) {
			var_dump($this->input->post());
			$this->load->model('sacramento_model');
			// $this->sacramento_model->add_product($this->input->post())
		} else {
		$this->load->view('admin_views/add_product');
		}
	}
	function add_box() {
		if ($this->input->post()) {
			$errors = [];
			// var_dump($this->input->post());
			// die();

			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', "Name", "trim|required");
			$this->form_validation->set_rules("description", "Description", "trim|required");
			$this->form_validation->set_rules("amount", "Amount", "trim|required|integer");
			$this->form_validation->set_rules("item_amount", "Amount of Items", "trim|required|integer");
			// $this->form_validation->set_rules('image', "Image", "required");
			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('validation_errors', validation_errors());
				redirect('../admin/add_box');
			} else {
				if ($_FILES["image"]["tmp_name"]) {

					$target_dir = "assets/uploads/";
					$target_file = $target_dir . basename($_FILES["image"]["name"]);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					// Check if image file is a actual image or fake image
				    $check = getimagesize($_FILES["image"]["tmp_name"]);
				    if($check !== false) {
				        $uploadOk = 1;
				    } else {
				        $errors[] = "<p>File is not an image.</p>";
				        $uploadOk = 0;
				    }
					// Check if file already exists
					if (file_exists($target_file)) {
					    $errors[] = "<p>Sorry, file already exists.</p>";
					    $uploadOk = 0;
					}
					// Allow certain file formats
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
						// echo "inside the not image validation";
					    $errors[] = "<p>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</p>";
					    $uploadOk = 0;
					}
					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
						$this->session->set_flashdata('errors', $errors);
						redirect('../admin/add_box');
					// if everything is ok, try to upload file
					} else {
					    if (copy($_FILES["image"]["tmp_name"], $target_file)) {
					        $errors[] = "<p style='color: green'>The file ". basename( $_FILES["image"]["name"]). " has been succesfully uploaded.</p>";
							$this->load->model('admins_model');
							$this->session->set_flashdata('errors', $errors);
							redirect('../admin/add_box');
					    } else {
					        $errors[] = "<p>Sorry, there was an error uploading your file.</p>";
							$this->session->set_flashdata('errors', $errors);
							redirect('../admin/add_box');
					    }
					}
				} else {
					$errors[] = '<p style="color: red">A image file is required</p>';
					$this->session->set_flashdata('errors', $errors);
					redirect('../admin/add_box');
				}
			}
		} else {
		$this->load->view('admin_views/add_box');
		}
	}
	function log_out() {
		$this->session->sess_destroy();
		redirect('../sacramento/');
	}
}





 ?>
