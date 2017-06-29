<?php if ( !defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );
class Anywhere_alt extends CI_Controller {

  public function index()
  {
    $this->load->model( 'calculator_alt_model' );

    $strct = $this->calculator_alt_model->get_structure();
    //echo "<pre>";
    //print_r( $strct );
    //echo "</pre>";
    /*echo '<script type="text/javascript">';
    echo 'var strct = ' . json_encode( $strct ) . ';';
    echo 'console.log( strct );';
    echo '</script>';*/

    $this->load->view( 'head_open' );
    $this->load->view( 'favicon' );
    $this->load->view( 'page_title', array( 'page_title' => 'USM Anywhere! Scoping Calculator' ) );
    $this->load->view( 'onpage_css' );
    $this->load->view( 'offpage_css' );
    $this->load->view( 'head_close' );
    $this->load->view( 'body_open' );
    $this->load->view( 'tophat' );
    $this->load->view( 'wrapper_open' );
    $this->load->view( 'script_open' );
    $this->load->view( 'product_type', array( 'product_type' => $this->router->fetch_class() ) );
    $this->load->view( 'script_close' );
    $this->load->view( 'field_section_start' );
    $this->load->view( 'field_list_start' );
    foreach ( $strct[ 'g' ] as $g ) {
      $this->load->view( 'group_start', $g );
      foreach ( $strct[ 'gfk' ][ $g[ 'position' ] ] as $gfk ) {
        $this->load->view( 'field_start' );
        $this->load->view( 'field_' . $strct[ 'f' ][ $gfk ][ 'type' ], $strct[ 'f' ][ $gfk ] );
        $this->load->view( 'field_stop' );
      }
      $this->load->view( 'group_stop' );
    }
    $this->load->view( 'field_list_stop' );
    $this->load->view( 'field_section_stop' );
    $this->load->view( 'report_section_start' );
    $this->load->view( 'report_header', array( 'product' => 'A' . substr( $this->router->fetch_class(), 1, ( strpos( $this->router->fetch_class(), '_' ) - 1 ) ) ) );
    $gtotal_headers = array( 0 => '', 1 => '', 2 => '');
    foreach ( $strct[ 'g' ] as $g ) {
        $this->load->view( 'report_group_title', $g );
        foreach ( $strct[ 'gfk' ][ $g[ 'position' ] ] as $gfk ) {
            if ( $strct[ 'f' ][ $gfk ][ 'sum' ] == 0 ) {
                $this->load->view( 'report_column_row', array( 'group' => $g, 'field' => $strct[ 'f' ][ $gfk ] ) );
            }
        }
        if ( mb_strlen( implode( '', $g['columns' ] ) ) > 0 ) {
            $this->load->view( 'report_column_headers', array( 'group' => $g ) );
        }
        foreach ( $strct[ 'gfk' ][ $g[ 'position' ] ] as $gfk ) {
            if ( $strct[ 'f' ][ $gfk ][ 'sum' ] == 1 ) {
                $this->load->view( 'report_column_row', array( 'group' => $g, 'field' => $strct[ 'f' ][ $gfk ] ) );
            }
        }
        if ( $g[ 'subtotal' ] == 1 ) {
            $this->load->view( 'report_subtotal_row', array( 'group' => $g ) );
        }
        if ( $g[ 'gtotal' ] == 1 ) {
            $i = 0;
            foreach ( $g[ 'columns' ] as $col ) {
                $gtotal_headers[ $i ] = ( $gtotal_headers[ $i ] == '' ) ? $col : $gtotal_headers[ $i ];
                $i++;
            }
        }
    }
    $this->load->view( 'report_grand_total', array( 'headers' => $gtotal_headers ) );
    //$this->load->view( 'appliance_eps_table' );
    $this->load->view( 'anywhere_recommend_box' );
    $this->load->view( 'report_section_stop' );
    $this->load->view( 'wrapper_close' );
    $this->load->view( 'opportunity_getter', array( 'product' => 'A' . substr( $this->router->fetch_class(), 1, ( strpos( $this->router->fetch_class(), '_' ) - 1 ) ) ) );
    $this->load->view( 'onpage_js', array( 'strct' => json_encode( $strct ) ) );
    $this->load->view( 'offpage_js' );
    $this->load->view( 'body_close' );

  }
}
