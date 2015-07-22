<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sacramento extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function cart() {
		$this->load->view('cart');
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
	public function box_content() {
		$this->load->view('boxcontent');
	}
	public function main() {
		$this->load->view('welcome_message');
	}
	public function shop() {
		$this->load->view('shop');
	}
	public function shop_box() {
		$this->load->model('sacramento_model');
		$result = $this->sacramento_model->get_products();
		$this->load->view('shop_box', array("products" => $result));
	}
	public function admin() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 'admin') {
			// echo "Admin is logged in";
			// var_dump($this->session->all_userdata());
			redirect('../admin/');
		} else {
		$this->load->view('admin');
		}
	}
}
