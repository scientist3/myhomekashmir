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
    $this->load->library('session');
    $this->load->database();
  }

  public function index()
  {
    $data['input'] = [
      'inputEmail' => $this->session->userdata('email'),
      'inputPasswotd' => $this->session->userdata('psd')
    ];

    $this->load->view('login/login_view', $data);
  }

  public function register()
  {
    $data['page'] = "Register";
    $inputPostData = [
      'u_id'      => NULL,
      'u_name'      => $this->input->post('name'),
      'u_phone'     => $this->input->post('phone'),
      'u_email'     => $this->input->post('email'),
      'u_username'  => $this->input->post('username'),
      'u_password'  => $this->input->post('password'),
      'u_doc'       => date('d-m-Y H:m:s'),
      'u_dou'       => date('d-m-Y H:m:s'),
      'u_status'    => 1
    ];

    $data['input'] = (object) $inputPostData;

    $this->login->insert($inputPostData);

    $data['users'] = $this->login->getAllUsers();

    print_r($data['users']);
    $this->load->view('login/register_view', $data);
  }

  public function checklogin()
  {
    //  Prepare data
    $data = [
      'email' => $this->input->post('email'),
      'psd'   => $this->input->post('pswd'),
      'saveme' => $this->input->post('reminder')
    ];

    // Saving the input data on session
    $this->session->set_userdata($data);

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
