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
			$this->load->model('sacramento_model');
			$result = $this->sacramento_model->admin_user($this->input->post('email'));
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
		// var_dump($this->input->post());
		if ($this->input->post()) {
			var_dump($_FILES);
			$target_dir = "assets/uploads/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
		    $check = getimagesize($_FILES["image"]["tmp_name"]);
		    if($check !== false) {
		        // echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        $this->session->set_flashdata('errors', "File is not an image.");
		        $uploadOk = 0;
		    }
			// Check if file already exists
			if (file_exists($target_file)) {
			    $this->session->set_flashdata('errors', "Sorry, file already exists.");
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
				var_dump($this->session->flashdata());
				die();
				// redirect('admin/add_box');
			// if everything is ok, try to upload file
			} else {
			    if (copy($_FILES["image"]["tmp_name"], $target_file)) {
			        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}
		} else {
		var_dump($this->session->flashdata());
		$this->load->view('admin_views/add_box');
		}
	}
	function log_out() {
		$this->session->sess_destroy();
		redirect('../sacramento/');
	}
}





 ?>
