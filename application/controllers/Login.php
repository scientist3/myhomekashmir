<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    // Single model load without renaming it
    // $this->load->model('Login_model');
    // single model load but with renaming
    $this->load->model(['login/Login_model' => 'login']);
    $this->load->helper('url');
  }

  public function index()
  {
    $this->load->view('login/login_view');
  }

  public function checklogin()
  {
    //  Prepare data
    $data = [
      'email' => $this->input->post('email'),
      'psd'   => $this->input->post('pswd'),
      'saveme' => $this->input->post('reminder')
    ];

    //  Call the model and check the return result
    $isValid = $this->login->checkuser($data);

    if ($isValid == true) {
      echo "Welcome message";
    } else {
      // $this->index();
      redirect('login/index');
    }
  }
}
