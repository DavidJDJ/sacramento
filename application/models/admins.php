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

	public function fetch_suggestions()
	{
		$this->load->database();
		return $this->db->query("SELECT * FROM suggestion order by created_at")->result_array();
	}
	public function remove_product($post) {
		$this->load->database();
		$this->db->query("DELETE FROM `sacramento`.`products` WHERE `id`=?", array($post['id']));
	}
	public function remove_box($post) {
		$this->load->database();
		$this->db->query("DELETE FROM `sacramento`.`boxes` WHERE `id`=?", array($post['id']));
	}
	public function get_product($id) {
		$this->load->database();
		return $this->db->query("SELECT * FROM products WHERE id = ?", array($id))->row_array();
	}
	public function update($post) {
		$this->load->database();
		$query = "UPDATE `sacramento`.`products` SET `name`=?, `description`=?, `box`=?, `updated_at`= NOW() WHERE `id`=?";
		$values = [$post['name'], $post['description'], $post['preselected_box'], $post['id']];
		$this->db->query($query, $values);
	}
}
 ?>
