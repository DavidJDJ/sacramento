<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sacramento_model extends CI_Model {
	public function admin_user($email) {
		$this->load->database();
		return $this->db->query("SELECT * FROM users WHERE email = ?", array($email))->row_array();
	}
	public function fetch_boxes() {
	  	$this->load->database();
	  	$query = "SELECT * from boxes";
	  	return $this->db->query($query)->result_array();
	}
	public function products() {
		$this->load->database();
		return $this->db->query('SELECT * FROM products')->result_array();
	}
	public function products_by_box_id($id) {
		$this->load->database();
		return $this->db->query("SELECT * FROM products WHERE box = ?", array($id))->result_array();
	}
	public function get_box($id) {
		$this->load->database();
		return $this->db->query("SELECT * FROM boxes WHERE id = ?", array($id))->result_array();
	}
	public function fetch_all_orders()
	{
		$this->load->database();
		return $this->db->query("SELECT orders.user_id as user_id, orders.id as order_id,
								orders.review_id, orders.status, address.*
								FROM orders left join address
								on orders.user_id =  address.user_id
								order by orders.id
								")->result_array();
	}
	public function fetch_unshipped_orders()
	{
		$this->load->database();
		return $this->db->query("SELECT orders.user_id as user_id, orders.id as order_id,
							 	orders.status, address.*
								FROM orders left join address
								on orders.user_id =  address.user_id
								where orders.status != 'shipped'
								order by orders.id
								")->result_array();
	}

	public function fetch_shipped_orders()
	{
		$this->load->database();
		return $this->db->query("SELECT orders.user_id as user_id, orders.id as order_id,
								 orders.status, address.*
								FROM orders left join address
								on orders.user_id =  address.user_id
								where orders.status = 'shipped'
								order by orders.id
								")->result_array();
	}
	public function mark_as_shipped($order_id)
	{
		$this->load->database();
		$this->db->query("UPDATE orders set status = ? where id = ? ",
				array('shipped', $order_id));
	}

	public function add_suggestion($post)
	{
		$this->load->database();
		$this->db->query("INSERT INTO suggestion (name, suggestion, created_at)
						VALUES (?,?,NOW())", array($post['name'], $post['suggestion']));
	}
	public function add_order($post, $session) {
		$this->load->database();
		$query_user = "INSERT INTO `sacramento`.`users` (`first_name`, `last_name`, `email`, `level`, `token`, `updated_at`, `created_at`) VALUES (?, ?, ?, 'user', ?, NOW(), NOW())";
		$values_user = [$post['first_name'], $post['last_name'], $post['email'], $post['stripeToken']];
		$this->db->query($query_user, $values_user);
		$query_address = "INSERT INTO `sacramento`.`address` (`line_1`, `line_2`, `city`, `state`, `zip`, `user_id`) VALUES (?, ?, ?, ?, ?, (SELECT id FROM users where token = ?))";
		$values_address = [$post['address_1'], $post['address_2'], $post['city'], $post['state'], $post['zip'], $post['stripeToken']];
		$this->db->query($query_address, $values_address);
		$query_orders = "INSERT INTO `sacramento`.`orders` (`user_id`, `status`) VALUES ((SELECT id FROM users where token = ?), 'ordered')";
		$query_values = [$post['stripeToken']];
		$this->db->query($query_orders, $query_values);
		$carts = $this->session->userdata('cart');
		foreach ($carts as $cart => $value) {
			$keys = array_values($value);
			for ($i=3; $i < count($keys); $i++) {
				$query_orders_products = "INSERT INTO `sacramento`.`orders_products` (`order_id`, `product_id`, `box`) VALUES ((SELECT id FROM orders WHERE user_id = (SELECT id FROM users where token = ?)), ?, ?)";
				$values_orders_products = [$post['stripeToken'], $keys[$i], $value['box']];
				$this->db->query($query_orders_products, $values_orders_products);
			}
		}
	}
}

 ?>
