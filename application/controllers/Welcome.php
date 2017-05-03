<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//ini_set('memory_limit', '256M');
		$this->load->view('welcome_message');
		//$this->load->library('pdf');
		//$pdf = $this->pdf->load();
		//$html = $this->load->view('welcome_message',null,true);
		//$pdf->WriteHTML($html);
		// write the HTML into the PDF
		//$output = 'itemreport' . date('Y_m_d_H_i_s') . '_.pdf';
		//$pdf->Output("$output", 'I');
	}

	/*public function mypdf() {
		$this->load->library('pdf');
		$pdf = $this->pdf->load();
		$html = $this->load->view('welcome_message',null,true);
		$pdf->WriteHTML($html);
		// write the HTML into the PDF
		$output = 'itemreport' . date('Y_m_d_H_i_s') . '_.pdf';
		$pdf->Output("$output", 'I');
	}*/
	function mypdf(){
		
		$this->load->library('pdf');
		$this->pdf->load_view('mypdf');
		$this->pdf->render();
		$this->pdf->stream("welcome.pdf");
	}
}
