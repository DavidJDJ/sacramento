<?php

class sacramento_model extends CI_Model {
	public function admin_user($email) {
		$this->load->database();
		return $this->db->query("SELECT * FROM users WHERE email = ?", array($email))->row_array();
	}
	public function add_product($post) {
		
	}
}

 ?>
