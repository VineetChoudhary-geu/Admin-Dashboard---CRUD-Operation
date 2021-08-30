<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
public function __construct()
{
	parent::__construct();
	$this->load->model('Manage_Model');
}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function viewcategory()
	{
		$this->load->view('template/header');
		$this->load->view('viewcategory');
		$this->load->view('template/footer');
	}
	public function addcategory()
	{
		$this->load->view('template/header');
		$this->load->view('addcategory');
		$this->load->view('template/footer');
	}
	public function viewsubcategory()
	{
		$this->load->view('template/header');
		$this->load->view('viewsubcategory');
		$this->load->view('template/footer');
	}
	public function addsubcategory()
	{
		$this->load->view('template/header');
		$this->load->view('addsubcategory');
		$this->load->view('template/footer');
	}
	public function viewslider()
	{
		$this->load->view('template/header');
		$this->load->view('viewslider');
		$this->load->view('template/footer');
	}
	public function addslider()
	{
		$this->load->view('template/header');
		$this->load->view('addslider');
		$this->load->view('template/footer');
	}
}
