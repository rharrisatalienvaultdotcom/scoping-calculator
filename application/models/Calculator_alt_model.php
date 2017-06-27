<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Calculator_alt_model extends CI_Model {

  public $slides;
  public $slides_mod;
  public $strct;
  private $dbcon;
  private $debug = true;

  public function __construct()
  {
    parent::__construct();
    $this->dbcon = $this->load->database( $this->router->fetch_class(), TRUE );
  }

  public function get_structure() {
    $this->get_groups();
    $this->get_fields();
    return $this->strct;
  }

  public function get_fields() {
    $query = "SELECT ";
    $query .= "a.title, ";
    $query .= "a.handle, ";
    $query .= "b.handle as 'parent', ";
    $query .= "a.position, ";
    $query .= "a.tab_order, ";
    $query .= "a.default_vals, ";
    $query .= "a.sum, ";
    $query .= "a.gsum, ";
    $query .= "a.calc, ";
    $query .= "a.columns, ";
    $query .= "a.type, ";
    $query .= "a.options ";
    $query .= "FROM ";
    $query .= "fields a ";
    $query .= "LEFT JOIN ";
    $query .= "groups b ";
    $query .= "ON (";
    $query .= "a.parent = b.id) ";
    $query .= "WHERE ";
    $query .= "a.active = '1' ";
    $query .= "AND ";
    $query .= "b.active = '1' ";
    $query .= "ORDER BY ";
    $query .= "a.tab_order ";

    #$this->db->db_select( $this->router->fetch_class() . '_calc' );

    $result = $this->dbcon->query( $query );
    if ( $this->debug === true ) {
      $i = 0;
      $this->strct[ 'debug' ][ 'query_result_raw' ][ 'f' ] = $result->result_array();
    }
    $n = 0;
    foreach ( $result->result_array() as $row )
    {
      //$this->strct[ 'gfk' ] = ;
      $this->strct[ 'f' ][ $n ] = $row;
      $this->strct[ 'f' ][ $n ][ 'tab_order' ] = $n;
      $this->strct[ 'f' ][ $n ][ 'columns' ] = explode( '|', $row[ 'columns' ] );
      $this->strct[ 'f' ][ $n ][ 'default_vals' ] = explode( '|', $row[ 'default_vals' ] );
      $this->strct[ 'fk' ][ $row[ 'parent' ] . "-" . $row[ 'handle' ] ] = $n;
      $this->strct[ 'gfk' ][ $this->strct[ 'gk' ][ $row[ 'parent' ] ] ][ $row[ 'position' ] ] = $n;
      $this->strct[ 'fgk' ][ $n ] = $this->strct[ 'gk' ][ $row[ 'parent' ] ];
      if ( $this->debug === true ) {
        $this->strct[ 'debug' ][ $i ][ 'f' ][ 'tab_order' ] = $row[ 'tab_order' ];
        $this->strct[ 'debug' ][ $i ][ 'f' ] = $this->strct[ 'f' ][ $n ];
        $this->strct[ 'debug' ][ $i ][ 'f' ][ 'parent' ] = $row[ 'parent' ];
        $this->strct[ 'debug' ][ $i ][ 'f' ][ 'handle' ] = $row[ 'handle' ];
        $this->strct[ 'debug' ][ $i ][ 'f' ][ 'fk' ] = $this->strct[ 'fk' ][ $row[ 'parent' ] . "-" . $row[ 'handle' ] ];
        $this->strct[ 'debug' ][ $i ][ 'f' ][ 'position' ] = $row[ 'position' ];
        $this->strct[ 'debug' ][ $i ][ 'f' ][ 'gk' ] = $this->strct[ 'gk' ][ $row[ 'parent' ] ];
        $this->strct[ 'debug' ][ $i ][ 'f' ][ 'gk_state' ] = $this->strct[ 'gk' ];
        $this->strct[ 'debug' ][ $i ][ 'f' ][ 'gfk' ] = $this->strct[ 'gfk' ][ $this->strct[ 'gk' ][ $row[ 'parent' ] ] ][ $row[ 'position' ] ];
        $this->strct[ 'debug' ][ $i ][ 'f' ][ 'gfk_state' ] = $this->strct[ 'gfk' ];
        $this->strct[ 'debug' ][ $i ][ 'f' ][ 'gfk_key' ] = $this->strct[ 'gk' ][ $row[ 'parent' ] ];
        $this->strct[ 'debug' ][ $i ][ 'f' ][ 'fgk' ] = $this->strct[ 'fgk' ][ $n ];
        $this->strct[ 'debug' ][ $i ][ 'f' ][ 'fgk_state' ] = $this->strct[ 'fgk' ];
        $this->strct[ 'debug' ][ $i ][ 'f' ][ 'query' ] = $query;
        $i++;
      }
      $n++;
    }
    return $this->strct;
  }

  public function get_groups() {
    $query = "SELECT ";
    $query .= "title, ";
    $query .= "handle, ";
    $query .= "position, ";
    $query .= "columns, ";
    $query .= "fcolumns, ";
    $query .= "subtotal, ";
    $query .= "gtotal ";
    $query .= "FROM ";
    $query .= "groups ";
    $query .= "WHERE ";
    $query .= "active = '1' ";
    $query .= "ORDER BY ";
    $query .= "position ";
    //$query .= "LIMIT 5";

    #$this->db->db_select( $this->router->fetch_class() . '_calc' );

    $result = $this->dbcon->query( $query );
    if ( $this->debug === true ) {
      $this->strct[ 'debug' ][ 'query_result_raw' ][ 'g' ] = $result->result_array();
      $i = 0;
    }
    $n = 0;
    foreach ( $result->result_array() as $row )
    {
      $this->strct[ 'g' ][ $n ] = $row;
      $this->strct[ 'g' ][ $n ][ 'position' ] = $n;
      $this->strct[ 'g' ][ $n ][ 'columns' ] = explode( '|', $row[ 'columns' ] );
      $this->strct[ 'g' ][ $n ][ 'fcolumns' ] = explode( '|', $row[ 'fcolumns' ] );
      $this->strct[ 'gk' ][ $row[ 'handle' ] ] = $n;
      if ( $this->debug === true ) {
        $this->strct[ 'debug' ][ $i ][ 'g' ][ 'g' ] = $this->strct[ 'g' ][ $n ];
        $this->strct[ 'debug' ][ $i ][ 'g' ][ 'g_state' ] = $this->strct[ 'g' ];
        $this->strct[ 'debug' ][ $i ][ 'g' ][ 'handle' ] = $row[ 'handle' ];
        $this->strct[ 'debug' ][ $i ][ 'g' ][ 'position' ] = $n;
        $this->strct[ 'debug' ][ $i ][ 'g' ][ 'gk' ] = $this->strct[ 'gk' ][ $row[ 'handle' ] ];
        $this->strct[ 'debug' ][ $i ][ 'g' ][ 'gk_state' ] = $this->strct[ 'gk' ];
        $this->strct[ 'debug' ][ 'query' ][ 'g' ] = $query;
        $i++;
      }
      $n++;
    }
    return $this->strct;
  }
}
