<?php	if (!defined('BASEPATH')) exit('No direct script access allowed');
class Calculator extends CI_Controller {

	public function index()
	{
		// Do stuff
		//echo 'testestest!';
		$this->load->model('calculator_model');
		//print("<pre>" . print_r($this->calculator_model->slides,true) . "</pre>");
		$data['calc_data'] = $this->calculator_model->slides;
		$this->load->view('calcview', $data);
	}

	public function pdf_test_a()
	{
		$this->load->view('report_view_dummy');
	}

	public function pdf_test_b()
	{
		$this->load->library('input');
		$report_html = $this->input->post('');
	}

}
