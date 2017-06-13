<?php if ( !defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );
class Anywhere extends CI_Controller {

  public function index()
  {

    $this->load->model('calculator_model');

    $data[ 'calc_data' ][ 'slides' ] = $this->calculator_model->slides;

    $data[ 'def_field_values' ] = json_encode( $this->calculator_model->slides_mod );

    $this->load->view( 'head_open' );
    $this->load->view( 'calc_css' );
    $this->load->view( 'page_title', array( 'page_title' => 'USM Anywhere! Scoping Calculator' ) );
    $this->load->view( 'std_style' );
    $this->load->view( 'head_close' );
    $this->load->view( 'body_open' );
    $this->load->view( 'wrapper_open' );
    $this->load->view( 'shadow_box' );
    $this->load->view( 'script_open' );
    $this->load->view( 'product_type', array( 'product_type' => $this->router->fetch_class() ) );
    $this->load->view( 'script_close' );
    $this->load->view( 'slide_wrapper_open' );
    $this->load->view( 'previous_button' );
    $this->load->view( 'calcview', $data );
    $this->load->view( 'next_button' );
    $this->load->view( 'show_hide_button' );
    $this->load->view( 'slide_wrapper_close' );
    $this->load->view( 'report' );
    $this->load->view( 'wrapper_close' );
    $this->load->view( 'calc_offpage_js' );
    $this->load->view( 'script_open' );
    $this->load->view( 'calc_onpage_js' );
    $this->load->view( 'script_close' );
    $this->load->view( 'body_close' );
  }
}
