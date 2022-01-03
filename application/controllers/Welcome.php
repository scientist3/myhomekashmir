<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->view('welcome_message.php');
	}

	public function soon($inputData = null)
	{
		// Load the model
		// $this->load->model('welcome_model');
		// Fetch data from model
		$data['days'] = $this->welcome_model->getData();
		$data['complexData'] = $this->welcome_model->getComplexData();


		// Load view and display the data
		$this->load->view('commingsoon', $data);
	}
}
