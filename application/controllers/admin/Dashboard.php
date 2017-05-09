<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
  	{
    	parent::__construct();

    	if ($this->session->userdata('group') != '1') {
      		$this->session->set_flashdata('error','Maaf, Silahkan login terlebih dahulu!');
      		redirect('login');
    	}
	}

	public function index()
	{
		$this->load->view('backend/dashboard');
	}

}
