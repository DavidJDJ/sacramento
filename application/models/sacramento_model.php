<?php

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
								orders.review_id, orders.status, address.*
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
								orders.review_id, orders.status, address.*
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
}

 ?>
