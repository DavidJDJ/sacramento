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
	public function add_user($post) {}
}

 ?>
