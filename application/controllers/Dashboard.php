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
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
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
	public function user_list()
	{	
	if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
		$data['users'] = $this->ion_auth->get_users();
		$this->load->view('includes/dashboard_header');
		$this->load->view('includes/dashboard_navbar');
		$this->load->view('dashboard/user_list' ,$data);
		$this->load->view('includes/dashboard_footer');
		
	}
	
	public function edit_user($id)	
	{
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
		$data['user'] = $this->ion_auth->get_user($id);
		$this->load->view('includes/dashboard_header');
		$this->load->view('includes/dashboard_navbar');
		$this->load->view('dashboard/edit_user' ,$data);
		$this->load->view('includes/dashboard_footer');
	}
	
		
	
}