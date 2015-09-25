<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lightduty extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/navbar');
		$this->load->view('includes/slider');
		$this->load->view('bigrig/home');
		$this->load->view('includes/footer');
	}
	public function about()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/navbar');
		$this->load->view('includes/slider');
		$this->load->view('bigrig/about');
		$this->load->view('includes/footer');
	}
	public function products()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/navbar');
		$this->load->view('includes/slider');
		$this->load->view('light_duty/products');
		$this->load->view('includes/footer');
	}
}
