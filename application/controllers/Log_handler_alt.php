<?php if ( !defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );
class Log_handler_alt extends CI_Controller {
  public function index() {
    //
    $this->load->model( 'log_alt_model' );
    $logdata = $this->log_alt_model->handle_log();
    echo $logdata;
  }
}
