<?php if ( !defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );
class Anywhere extends CI_Controller {

  public function index()
  {
    //header( 'Location: calculator/anywhere');
    // Do stuff
    //echo 'testestest!';
    $this->load->model('calculator_model');
    //print("<pre>" . print_r($this->calculator_model->slides,true) . "</pre>");
    $data[ 'calc_data' ][ 'slides' ] = $this->calculator_model->slides;
    //$data[ 'def_field_values' ] = json_encode( $data[ 'calc_data' ] );
    $data[ 'def_field_values' ] = json_encode( $this->calculator_model->slides_mod );
    //$data[ 'def_field_values' ] = $data[ 'calc_data' ];

    //echo $data[ 'def_field_values' ];
    $this->load->view( 'anywherecalcview', $data );
  }
}
