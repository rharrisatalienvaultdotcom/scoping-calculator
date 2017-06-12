<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		//$this->load->view('welcome_message');
    $this->load->view( 'head_open' );
    $this->load->view( 'landing_css' );
    $this->load->view( 'page_title', array( 'page_title' => 'Scoping Calculator :: Select Product' ) );
    $this->load->view( 'std_style' );
    $this->load->view( 'head_close' );
    $this->load->view( 'body_open' );
    $this->load->view( 'landing' );
    $this->load->view( 'landing_offpage_js' );
    $this->load->view( 'script_open' );
    $this->load->view( 'landing_onpage_js' );
    $this->load->view( 'script_close' );
    $this->load->view( 'body_close' );
	}
}
