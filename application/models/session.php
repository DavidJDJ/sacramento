<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Session extends CI_Model {

  public function register($post, $level) {

    $query = "INSERT INTO users (first_name, last_name, email, level, password, created_at, updated_at)
              VALUES (?,?,?,?,?,?,?)";
    $values = array($post['first_name'], $post['last_name'], $post['email'], $level,
                    md5($post['password']), date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
    $id = $this->db->insert_id($this->db->query($query, $values));
    // $result = $this->db->query($query, $values)->row_array();
    if ($id == NULL)
      {
        return NULL;
      }
      else 
      {
        $this->session->set_userdata('first_name' , $post['first_name']);
        return $id;
      }
  }

  // public function login($post) {
  //   $query = "SELECT * FROM users WHERE email = ? and password=?";
  //   $values = array($post['email'], md5($post['password']));
  //   $result = $this->db->query($query, $values)->row_array();
  //   if ($result == NULL)
  //     {
  //       return NULL;
  //     }
  //     else 
  //     {
  //       $id = $result ['id'];
  //       $this->session->set_userdata('first_name' , $result['first_name']);
  //       return $id;
  //     }
  // }

  // public function validate_login($post)
  // {
  //   $this->load->library('form_validation');
  //   $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
  //   $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
  //   if($this->form_validation->run())
  //   {
  //    return 'valid';
  //   }
  //   else
  //   {
  //     return array(validation_errors());
  //   }
  // }

  // public function validate_registration($post) {
  //   $this->load->library('form_validation');
  //   // $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique');
  //   $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
  //   $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
  //   $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
  //   $this->form_validation->set_rules('password', 'Password', 'trim|min_length[8]|matches[password_confirmation]');
  //   $this->form_validation->set_rules('password_confirmation', 'Password Confirmation', 'trim');

  //   if($this->form_validation->run()) 
  //   {
  //     return "valid";
  //   } 
  //   else 
  //   {
  //     return array(validation_errors());
  //   }
  // } 

  public function validate_guest($post) {
    $this->load->library('form_validation');
    // $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique');
    $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
    $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
    // $this->form_validation->set_rules('password', 'Password', 'trim|min_length[8]|matches[password_confirmation]');
    // $this->form_validation->set_rules('password_confirmation', 'Password Confirmation', 'trim');

    if($this->form_validation->run()) 
    {
      return "valid";
    } 
    else 
    {
      return array(validation_errors());
    }
  }
}
