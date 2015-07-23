<?php

class Admins extends CI_Model {
	public function admin_user($email) {
		$this->load->database();
		return $this->db->query("SELECT * FROM users WHERE email = ?", array($email))->row_array();
	}
	public function add_box($post, $img) {
		$this->load->database();
		$query = "INSERT INTO `sacramento`.`boxes` (`name`, `description`, `price`, `item_amount`, `img`, `created_at`, `updated_at`) VALUES (?, ?, ?, ?, ?, NOW(), NOW());";
		$values = [$post['name'], $post['description'], $post['amount'], $post['item_amount'], $img];
		$this->db->query($query, $values);
	}
	public function add_product($post, $img) {
		$this->load->database();
		$query = "INSERT INTO `sacramento`.`products` (`name`, `description`, `image`, `box`, `created_at`, `updated_at`) VALUES (?, ?, ?, ?, NOW(), NOW())";
		$values = [$post['name'], $post['description'], $img, $post['preselected_box']];
		$this->db->query($query, $values);
	}
	public function boxes_name() {
		$this->load->database();
		return $this->db->query('SELECT * FROM boxes')->result_array();
	}
}




 ?>
