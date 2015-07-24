<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sacramento extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function contact() {
		$this->load->view('contact');
	}
	public function faq() {
		$this->load->view('faq');
	}
	public function suggestions() {
		$this->load->view('suggestions');
	}
	public function in_the_box() {
		$this->load->model('sacramento_model');
		$result = $this->sacramento_model->products();
		$this->load->view('in_the_box', array('products' => $result));
	}
	public function main() {
		$this->load->view('welcome_message');
	}
	public function shop() {
		//added by reza
    	$this->load->database();
		$this->load->model('sacramento_model');
		$boxes = $this->sacramento_model->fetch_boxes();
		$this->load->view('shop', array('boxes' => $boxes));
	}
		public function show_box($id)
		{
		$this->load->model('sacramento_model');
		$box_result = $this->sacramento_model->get_box($id);
		$product_result = $this->sacramento_model->products();
		$this->load->view('box_content', array('box' => $box_result, 'products' => $product_result));
		}
		public function add_cart() {
			if ($this->input->post()) {
				if (count($this->input->post()) > $this->input->post('item_amount')-3) {
					$this->session->set_flasahdata('erors', "You can only chooose" . $this->input->post('item_amount') . "items.");
				} else {
					$cart = $this->session->userdata('cart');
					$cart[] = $this->input->post();
					$this->session->set_userdata('cart', $cart);
				}
			}
			redirect('../sacramento/cart');
		}
		public function cart() {
			$this->load->model('sacramento_model');
			$boxes_result = $this->sacramento_model->fetch_boxes();
			$products_result = $this->sacramento_model->products();
			$this->load->view('cart', array('boxes' => $boxes_result, 'products' => $products_result));
		}

	public function shop_box() {
		$this->load->model('sacramento_model');
		$result = $this->sacramento_model->get_products();
		$this->load->view('shop_box', array("products" => $result));
	}
	public function admin() {
		if ($this->session->userdata('logged_in') == TRUE) {
			// echo "Admin is logged in";
			// var_dump($this->session->all_userdata());
			redirect('../admin/');
		} else {
		$this->load->view('admin');
		}
	}
	public function confirmation() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('amount', 'amount', "trim|required|is_natural_no_zero");
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('address_1', "Address", 'trim|required');
		$this->form_validation->set_rules('address_2', "Address 2", "trim");
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		$this->form_validation->set_rules('zip', 'Zip', 'trim|required');
		$this->form_validation->set_rules('email', "Email", 'trim|required|valid_email');
		$this->form_validation->set_rules('stripeToken', 'transaction', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('errors', validation_errors());
			redirect('../sacramento/cart');
		} else {
			var_dump($this->session->all_userdata());
			var_dump($this->input->post());
			$this->load->model('sacramento_model');
			// $this->sacramento_model->add_user($this->input->post(); $this->session->all_userdata());
			redirect('/success');
		}
	}


	public function add_suggestion()
	{
		$post = $this->input->post();
		$this->load->model('sacramento_model');
		$this->sacramento_model->add_suggestion($post);
		$this->suggestions();
	}
}
