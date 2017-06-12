<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Log_model extends CI_Model {

  public $log_key;
  public $log_entry;

  public function __construct()
  {
    parent::__construct();
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
    $query = $this->db->query( $sql );;
    return $query->result_array();
  }

  public function insert_log( $id = null, $data = null ) {
    $sql = "INSERT INTO val_log (id, data) VALUES ('" . $id . "','" . $data . "')";
    return $this->db->query( $sql );
  }

  public function update_log( $id = null, $data = null ) {
    $sql = "UPDATE val_log SET data = '" . $data . "' WHERE id = '" . $id ."'";
    return $this->db->query( $sql );
  }

  public function get_slides()
  {
    $query = $this->db->query('SELECT id, title, handle, position, sum_raw, sum_calc, add_to_total, add_to_eps_total FROM slides WHERE active = 1 ORDER BY position');
    foreach ( $query->result() as $row )
    {
      $this->slides[ $row->position ] = array(
        'position' => $row->position,
        'sum_raw' => $row->sum_raw,
        'sum_calc' => $row->sum_calc,
        'add_to_total' => $row->add_to_total,
        'add_to_eps_total' => $row->add_to_eps_total,
        'title' => $row->title,
        'handle' => $row->handle,
        //'id' => $row->id,
        'fields' => array() ) ;
      $this->slides_mod[ $row->handle ] = $this->slides[ $row->position ];
    }
  }

  public function get_fields($slide_name)
  {
    $results = array();
    $query = $this->db->query('SELECT fields.id, fields.title, fields.handle, fields.parent_handle, fields.position, fields.global, fields.tab_order, fields.default_val, weights.value as \'weight\', fields.required, fields.function FROM fields LEFT JOIN weights ON (fields.weight = weights.id) WHERE parent_handle = \'' . $slide_name . '\' AND fields.active = 1 ORDER BY position');
    foreach ( $query->result() as $field )
    {
      //$results[$field->position]['id'] = $field->id;
      $results[$field->position]['title'] = $field->title;
      $results[$field->position]['position'] = $field->position;
      $results[$field->position]['global'] = $field->global;
      $results[$field->position]['tab_order'] = $field->tab_order;
      $results[$field->position]['default_val'] = $field->default_val;
      $results[$field->position]['weight'] = $field->weight;
      $results[$field->position]['required'] = $field->required;
      $results[$field->position]['function'] = $field->function;
      $results[$field->position]['handle'] = $field->handle;
      $results[$field->position]['parent_handle'] = $field->parent_handle;
    }
    //return $query->result();
    return $results;
  }

  public function get_fields_mod($slide_name)
  {
    $results = array();
    $query = $this->db->query('SELECT fields.id, fields.title, fields.handle, fields.parent_handle, fields.position, fields.global, fields.tab_order, fields.default_val, weights.value as \'weight\', fields.required, fields.function FROM fields LEFT JOIN weights ON (fields.weight = weights.id) WHERE parent_handle = \'' . $slide_name . '\' AND fields.active = 1 ORDER BY position');
    foreach ( $query->result() as $field )
    {
      //$results[$field->position]['id'] = $field->id;
      $results[$field->handle]['title'] = $field->title;
      $results[$field->handle]['position'] = $field->position;
      $results[$field->handle]['global'] = $field->global;
      $results[$field->handle]['tab_order'] = $field->tab_order;
      $results[$field->handle]['default_val'] = $field->default_val;
      $results[$field->handle]['weight'] = $field->weight;
      $results[$field->handle]['required'] = $field->required;
      //$results[$field->handle]['function'] = $field->function;
      $results[$field->handle]['function'] = $field->default_val;
      $results[$field->handle]['handle'] = $field->handle;
      $results[$field->handle]['parent_handle'] = $field->parent_handle;
    }
    //return $query->result();
    return $results;
  }
}
