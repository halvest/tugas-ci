<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


	public function index()
	{
		$data['title'] = 'Register Page';
		$this->load->view('admin/head', $data);
        $this->load->view('Admin/Register');
		$this->load->view('admin/footer');
	}
}
