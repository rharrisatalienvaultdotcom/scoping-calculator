<?php if ( !defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );
class Log_handler extends CI_Controller {
  public function index() {
    //
    $this->load->model( 'log_model' );
    $logdata = $this->log_model->handle_log();
    echo $logdata;
  }
}
