<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PlaceOrders extends CI_Controller {

// this is the default control that takes care of placing orders

  public function place_order() 
  {
      $post = $this->input->post();
      $this->load->model('PlaceOrder');

      // $user_id = $this->session->userdata('user_id');
      $user_id =1;
      $order_id = $this->PlaceOrder->place_order($user_id);

      //get product list from the form here
      $product_list = $post['product'];
      $this->place_products($order_id, $product_list);

      redirect('/PlaceOrders/');
  }


  public function place_products($order_id, $product_list) 
  {
      $post = $this->input->post();
      $this->load->model('PlaceOrder');
      // $user_id = $this->session->userdata('user_id');
      $user_id = 1;
      $box_id =  $post['box_id'];
      $this->PlaceOrder->place_products($order_id, $product_list);
      redirect('/PlaceOrders/');
  }

  public function index()
  {
    $this->load->view('/');
  }

  public function show_box($box_id)
  {
    $this->load->view('/this_box_content'.$box_id, array('box_id' => $box_id));
  }

}