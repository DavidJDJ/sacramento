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
		public function cart() {
			if ($this->input->post()) {
				$cart = $this->session->userdata('cart');
				$cart[] = $this->input->post();
				$this->session->set_userdata('cart', $cart);
			}
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
		var_dump($this->input->post());
	}
}
