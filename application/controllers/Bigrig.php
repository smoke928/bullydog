<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bigrig extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('products_model');
            
    }
        
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
	public function categories()
	{
		$data['categories'] = $this->products_model->get_product_categories_by_type('BigRig');
		$this->load->view('includes/header');
		$this->load->view('includes/navbar');
		$this->load->view('includes/slider');
		$this->load->view('bigrig/categories', $data);
		$this->load->view('includes/footer');
	}
	public function products($cat)
	{
		$data['products'] = $this->products_model->get_products_by_category($cat);
		$this->load->view('includes/header');
		$this->load->view('includes/navbar');
		$this->load->view('includes/slider');
		$this->load->view('bigrig/products', $data);
		$this->load->view('includes/footer');
	}
}
