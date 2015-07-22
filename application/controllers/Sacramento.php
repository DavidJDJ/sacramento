<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sacramento extends CI_Controller {

	public function index()
	{
		$this->load->view('landing_page');
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
	public function shop_box($id) {
		$this->load->model('sacramento_model');
		$result = $this->sacramento_model->get_products();
		$this->load->view('shop_box', array("products" => $result));
	}
}
