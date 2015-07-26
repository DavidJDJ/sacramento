<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sessions extends CI_Controller {

// this is the default control that takes care of registration,
// login, and logout.
// it loads the main login registration page.
// CALLS:
// it calls the model Session.

  public function register() 
  {
      $post = $this->input->post();
      $this->load->model('Session');

      // if ($post['password'])
      //   {
      //     $level = "user";
      //     $result = $this->Session->validate_registration($post);
      //   }
      //   else 
      //   {
          $level = "guest";
          $result = $this->Session->validate_guest($post);
      //   }
      // }

      if($result == "valid") 
      {
        $user_id = $this->Session->register($post, $level);
        // $success[] = 'Your registration was successful!';
        // $this->session->set_flashdata('success', $success);
        $this->session->set_userdata('user_id', $user_id);
        redirect('/place/');
      } 
      else 
      {
        $errors = array(validation_errors());
        $this->session->set_flashdata('errors', $errors);
        // $this->load->view('/sessions/failure');
        redirect('/');
      }
  }

  // public function login() 
  // {

  //   $this->load->model('Session');
  //   $result = $this->Session->validate_login($this->input->post());

  //   if($result == "valid") 
  //   {
  //     $id = $this->Session->login($this->input->post());
  //     if ($id != NULL)
  //     {
  //       $success[] = 'Welcome! Your Login was successful!';
  //       $this->session->set_flashdata('success', $success);
  //       $this->session->set_userdata('user_id', $id);
  //       redirect('/user_home/');
  //     }
  //     else
  //     {
  //       $errors = ['The login and password combination is incorrect. Please try again.'];
  //     }
  //   } 
  //   else 
  //   {
  //     $errors = array(validation_errors());
  //   }

  //     $this->session->set_flashdata('errors', $errors);
  //     // $this->load->view('/sessions/failure');
  //     redirect('/');

  // }

  public function index() 
  {
    $this->load->view('sessions/home_sessions');
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('/');
  }
}