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
          $get_result[ 'code' ] = 5;
          return json_encode( $get_result );
        } else {
          if ( $this->update_log( $plog_key, $plog_data ) == TRUE ) {
            $get_result = $this->get_log( $plog_key );
            $get_result[ 'code' ] = 2;
            return json_encode( $get_result );
          } else {
            return json_encode( array( 'code' => 3 ) );
          }
        }
      } else {
        if ( is_null( $plog_data ) == TRUE ) {
          return json_encode( array( 'code' => 0 ) );
        } else {
          if ( $this->insert_log( $plog_key, $plog_data ) === TRUE ) {
            $get_result = $this->get_log( $plog_key );
            $get_result[ 'code' ] = 1;
            return json_encode( $get_result );
          } else {
            return json_encode( array( 'code' => 4 ) );
          }
        }
      }
    }
  }

  public function get_log( $id = null ) {
    $sql = "SELECT ";
    $sql .= "id, ";
    $sql .= "SUBSTRING_INDEX( created, ' ', 1) as 'created', ";
    #$sql .= "SUBSTRING_INDEX( updated, ' ', 1) as 'updated', ";
    $sql .= "updated, ";
    $sql .= "data ";
    $sql .= "FROM ";


    $sql .= "val_log ";
    $sql .= "WHERE ";
    $sql .= "id = '" . $id . "'";
    $query = $this->dbcon->query( $sql );
    $result = $query->result_array();
    if ( sizeof( $result ) ) {
      $result = $result[ 0 ];
    }
    return $result;
  }

  public function insert_log( $id = null, $data = null ) {
    $sql = "INSERT INTO ";
    $sql .= "val_log ";
    $sql .= "( ";
    $sql .= "id, ";
    $sql .= "data ";
    $sql .= ") ";
    $sql .= "VALUES ";
    $sql .= "( ";
    $sql .= "'" . $id . "','" . $data . "' ";
    $sql .= ")";
    return $this->dbcon->query( $sql );
  }

  public function update_log( $id = null, $data = null ) {
    $sql = "UPDATE ";
    $sql .= "val_log ";
    $sql .= "SET ";
    $sql .= "data = '" . $data . "', ";
    $sql .= "updated = NOW() ";
    $sql .= "WHERE ";
    $sql .= "id = '" . $id ."'";
    return $this->dbcon->query( $sql );
  }
}
