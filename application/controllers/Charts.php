<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('charts_model');
            
    }
        
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/navbar');
		$this->load->view('includes/slider');
		$this->load->view('bigrig/home');
		$this->load->view('includes/footer');
	}
	public function get_chart_sets_by_id($id)
	{
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
			);
		}
		echo json_encode($sets);//{'name':'HP Stock', 'data':[141,179,211,238,271,303,326,358,379,388,410,420,433,441]}
	}
}
