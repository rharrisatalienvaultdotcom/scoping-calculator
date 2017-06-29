<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Log_alt_model extends CI_Model {

  public $log_key;
  public $log_entry;
  private $dbcon;

  public function __construct()
  {
    parent::__construct();
    $this->dbcon = $this->load->database( 'log', TRUE );
    //
  }

  public function handle_log() {
    //https://na56.salesforce.com/0063100000hWsUf
    $plog_key = $this->input->post( 'scope_id', TRUE );
    $plog_data = $this->input->post( 'scope_data', TRUE );
    if ( is_null( $plog_key ) == FALSE ) {
      $get_result = $this->get_log( $plog_key );
      if ( sizeof( $get_result ) > 0 ) {
        if ( is_null( $plog_data ) == TRUE ) {
          return json_encode( $get_result );
        } else {
          if ( $this->update_log( $plog_key, $plog_data ) == TRUE ) {
            return 2;
          } else {
            return 3;
          }
        }
      } else {
        if ( is_null( $plog_data ) == TRUE ) {
          return 0;
        } else {
          if ( $this->insert_log( $plog_key, $plog_data ) === TRUE ) {
            return 1;
          } else {
            return 4;
          }
        }
      }
    }
  }

  public function get_log( $id = null ) {
    $sql = "SELECT id, timestamp, data FROM val_log WHERE id = '" . $id . "'";
    $query = $this->dbcon->query( $sql );;
    return $query->result_array();
  }

  public function insert_log( $id = null, $data = null ) {
    $sql = "INSERT INTO val_log (id, data) VALUES ('" . $id . "','" . $data . "')";
    return $this->dbcon->query( $sql );
  }

  public function update_log( $id = null, $data = null ) {
    $sql = "UPDATE val_log SET data = '" . $data . "' WHERE id = '" . $id ."'";
    return $this->dbcon->query( $sql );
  }
}
