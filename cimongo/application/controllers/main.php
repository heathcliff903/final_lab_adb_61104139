<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	// function __construct()
    // {
	// 	parent::__construct();
	// 	$this->load->model('product_model');
    // }
	public function index()
	{
		// $data['lab'] = $this->product_model->findAll(); 
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('layout/left');
		$this->load->view('layout/content');
		$this->load->view('layout/footer');
	}
}
