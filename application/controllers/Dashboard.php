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
			redirect('/auth/login');
		}
		$this->load->view('includes/dashboard_header');
		$this->load->view('includes/dashboard_navbar');
		$this->load->view('dashboard/home');
		$this->load->view('includes/dashboard_footer');
	}
	
	public function upload_chart()
	{
		$data = array('error' => '');
		$this->load->helper('form');
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
		$this->load->view('includes/dashboard_header');
		$this->load->view('includes/dashboard_navbar');
		$this->load->view('dashboard/upload_chart', $data);
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
		$data['users'] = $this->ion_auth->users()->result();
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
		$data['user'] = $this->ion_auth->user($id)->row();
		$this->load->view('includes/dashboard_header');
		$this->load->view('includes/dashboard_navbar');
		$this->load->view('dashboard/edit_user' ,$data);
		$this->load->view('includes/dashboard_footer');
	}
	
	public function parser()
	{
		$this->load->model('charts_model');
		$this->load->helper('form');
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'csv';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->load->library('upload', $config);
		$field_name = "dtr_file";
		if ( ! $this->upload->do_upload($field_name))
		{
			$data = array('error' => $this->upload->display_errors());
			$this->load->view('includes/dashboard_header');
			$this->load->view('includes/dashboard_navbar');
			$this->load->view('dashboard/upload_chart', $data);
			$this->load->view('includes/dashboard_footer');
		}
		else
		{	
			$upload_data = $this->upload->data();
			$destination = $upload_data['full_path'];
			$handle = fopen($destination, 'r');
			$count = 1;
			$id = $_REQUEST['select_package'];
			$name = $_REQUEST['tuner_name'];
			$chart = $this->charts_model->does_chart_exist($id, $name);
			if (!$chart){
				$this->charts_model->create_chart($id, $name);
			}
			
			while(($datasheet = fgetcsv($handle, 5000, ',')) != FALSE){
				
				if ($count > 7 && $count < 57 ){
					$mod = ($datasheet[2]*10)%3;
					if ($mod == 0){
						$this->charts_model->update_set($id, $name, $datasheet[2]*1000, $datasheet[3], $datasheet[4]);
					}
				}
				
				$count += 1;
			}
			fclose($handle);
			if (file_exists($destination)){
				unlink($destination);
			}
			$chart_sets = $this->charts_model->get_chart_set_by_id($id);
				$sets = array();
				foreach ($chart_sets as $chart_set) 
				{
					$sets[] =  array(
						'name' => $chart_set['name'].' Hp',
						'data' => array(
							$chart_set['2400hp'],
							$chart_set['2700hp'],
							$chart_set['3000hp'],
							$chart_set['3300hp'],
							$chart_set['3600hp'],
							$chart_set['3900hp'],
							$chart_set['4200hp'],
							$chart_set['4500hp'],
							$chart_set['4800hp'],
							$chart_set['5100hp'],
							$chart_set['5400hp'],
							$chart_set['5700hp'],
							$chart_set['6000hp'],
							$chart_set['6300hp'],
							$chart_set['6600hp'],
							$chart_set['6900hp'],
							$chart_set['7200hp'],
						)
					);
					$sets[] =  array(
						'name' => $chart_set['name'].' Torque',
						'data' => array(
							$chart_set['2400tq'],
							$chart_set['2700tq'],
							$chart_set['3000tq'],
							$chart_set['3300tq'],
							$chart_set['3600tq'],
							$chart_set['3900tq'],
							$chart_set['4200tq'],
							$chart_set['4500tq'],
							$chart_set['4800tq'],
							$chart_set['5100tq'],
							$chart_set['5400tq'],
							$chart_set['5700tq'],
							$chart_set['6000tq'],
							$chart_set['6300tq'],
							$chart_set['6600tq'],
							$chart_set['6900tq'],
							$chart_set['7200tq'],
						)
						, 'yAxis' => 1
					);
				}
			$data['chartset'] = json_encode($sets, JSON_NUMERIC_CHECK);
			$this->load->view('includes/dashboard_header');
			$this->load->view('includes/dashboard_navbar');
			$this->load->view('dashboard/upload_success', $data);
			$this->load->view('includes/dashboard_footer');
		}
	}
		
		
	
}