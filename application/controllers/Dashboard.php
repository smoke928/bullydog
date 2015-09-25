<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	function __construct()
    {
		parent::__construct();
		
    }
    
	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
		$this->load->view('includes/dashboard_header');
		$this->load->view('includes/dashboard_navbar');
		$this->load->view('dashboard/home');
		$this->load->view('includes/dashboard_footer');
	}
	
	public function upload_chart()
	{
		$this->load->view('includes/dashboard_header');
		$this->load->view('includes/dashboard_navbar');
		$this->load->view('dashboard/upload_chart');
		$this->load->view('includes/dashboard_footer');
	}
	public function login()
	{
		$this->load->view('includes/dashboard_header');
		$this->load->view('dashboard/login');
		
	}
}