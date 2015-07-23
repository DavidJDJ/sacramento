<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PlaceOrder extends CI_Model {

  public function place_order($user_id) 
  {
    $this->load->database();
    $query = "INSERT INTO orders (user_id, status)
              VALUES (?,?)";

    $values = array($user_id, 'placed');
    $id = $this->db->insert_id($this->db->query($query, $values));
    // $result = $this->db->query($query, $values)->row_array();
    if ($id == NULL)
      {
        return NULL;
      }
      else 
      {
        return $id;
      }
  }

  public function place_products($order_id, $product_list)
  {
    $query = "INSERT INTO orders_products (order_id, product_id)
              VALUES (?,?)";

    foreach($product_list as $product_id)
    { 
      $values = array($order_id, $product_id);
      $this->db->query($query, $values);
    }
  } 

  public function fetch_boxes()
  {
    $query = "SELECT * from boxes";
    return $this->db->query($query)->result_array();
  }
}
