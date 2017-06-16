<?php if ( !defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );
class Anywhere extends CI_Controller {

  public function index()
  {

    $this->load->model('calculator_model');

    //$data[ 'calc_data' ][ 'slides' ] = $this->calculator_model->slides;


    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'position' ] = 0;
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'sum_raw' ] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'sum_calc' ] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'add_to_total' ] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'add_to_eps_total' ] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'title' ] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'handle' ] = 'cloud_services_aws';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ] = array();

    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudtrail' ]['title'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudtrail' ]['position'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudtrail' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudtrail' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudtrail' ]['default_val'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudtrail' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudtrail' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudtrail' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudtrail' ]['handle'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudtrail' ]['parent_handle'] =  '';


    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudwatch' ]['title'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudwatch' ]['position'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudwatch' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudwatch' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudwatch' ]['default_val'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudwatch' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudwatch' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudwatch' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudwatch' ]['handle'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudwatch' ]['parent_handle'] =  '';


    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'data_transfered' ]['title'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'data_transfered' ]['position'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'data_transfered' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'data_transfered' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'data_transfered' ]['default_val'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'data_transfered' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'data_transfered' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'data_transfered' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'data_transfered' ]['handle'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'data_transfered' ]['parent_handle'] =  '';


    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_cloud' ]['title'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_cloud' ]['position'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_cloud' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_cloud' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_cloud' ]['default_val'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_cloud' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_cloud' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_cloud' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_cloud' ]['handle'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_cloud' ]['parent_handle'] =  '';


    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'simple_storage' ]['title'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'simple_storage' ]['position'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'simple_storage' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'simple_storage' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'simple_storage' ]['default_val'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'simple_storage' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'simple_storage' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'simple_storage' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'simple_storage' ]['handle'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'simple_storage' ]['parent_handle'] =  '';


    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_load' ]['title'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_load' ]['position'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_load' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_load' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_load' ]['default_val'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_load' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_load' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_load' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_load' ]['handle'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_load' ]['parent_handle'] =  '';

    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'position' ] = 1;
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'sum_raw' ] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'sum_calc' ] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'add_to_total' ] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'add_to_eps_total' ] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'title' ] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'handle' ] = 'cloud_services_azure';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ] = array();

    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'subscription_ids' ]['title'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'subscription_ids' ]['position'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'subscription_ids' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'subscription_ids' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'subscription_ids' ]['default_val'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'subscription_ids' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'subscription_ids' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'subscription_ids' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'subscription_ids' ]['handle'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'subscription_ids' ]['parent_handle'] =  '';


    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'analytics' ]['title'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'analytics' ]['position'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'analytics' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'analytics' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'analytics' ]['default_val'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'analytics' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'analytics' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'analytics' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'analytics' ]['handle'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'analytics' ]['parent_handle'] =  '';


    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'app_insights' ]['title'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'app_insights' ]['position'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'app_insights' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'app_insights' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'app_insights' ]['default_val'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'app_insights' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'app_insights' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'app_insights' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'app_insights' ]['handle'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'app_insights' ]['parent_handle'] =  '';


    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'vmachines' ]['title'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'vmachines' ]['position'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'vmachines' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'vmachines' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'vmachines' ]['default_val'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'vmachines' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'vmachines' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'vmachines' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'vmachines' ]['handle'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'vmachines' ]['parent_handle'] =  '';


    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'azure_storage' ]['title'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'azure_storage' ]['position'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'azure_storage' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'azure_storage' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'azure_storage' ]['default_val'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'azure_storage' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'azure_storage' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'azure_storage' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'azure_storage' ]['handle'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'azure_storage' ]['parent_handle'] =  '';


    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'load_balancing' ]['title'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'load_balancing' ]['position'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'load_balancing' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'load_balancing' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'load_balancing' ]['default_val'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'load_balancing' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'load_balancing' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'load_balancing' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'load_balancing' ]['handle'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'load_balancing' ]['parent_handle'] =  '';

    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'position' ] = 2;
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'sum_raw' ] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'sum_calc' ] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'add_to_total' ] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'add_to_eps_total' ] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'title' ] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'handle' ] = 'on_prem_summary';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ] = array();

    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_domain_controllers' ]['title'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_domain_controllers' ]['position'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_domain_controllers' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_domain_controllers' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_domain_controllers' ]['default_val'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_domain_controllers' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_domain_controllers' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_domain_controllers' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_domain_controllers' ]['handle'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_domain_controllers' ]['parent_handle'] =  '';


    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_windows_systems' ]['title'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_windows_systems' ]['position'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_windows_systems' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_windows_systems' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_windows_systems' ]['default_val'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_windows_systems' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_windows_systems' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_windows_systems' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_windows_systems' ]['handle'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_windows_systems' ]['parent_handle'] =  '';


    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_linux_systems' ]['title'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_linux_systems' ]['position'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_linux_systems' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_linux_systems' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_linux_systems' ]['default_val'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_linux_systems' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_linux_systems' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_linux_systems' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_linux_systems' ]['handle'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_linux_systems' ]['parent_handle'] =  '';


    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_firewalls' ]['title'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_firewalls' ]['position'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_firewalls' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_firewalls' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_firewalls' ]['default_val'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_firewalls' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_firewalls' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_firewalls' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_firewalls' ]['handle'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_firewalls' ]['parent_handle'] =  '';


    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_users' ]['title'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_users' ]['position'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_users' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_users' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_users' ]['default_val'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_users' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_users' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_users' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_users' ]['handle'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_users' ]['parent_handle'] =  '';


    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_non_dom_users' ]['title'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_non_dom_users' ]['position'] = '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_non_dom_users' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_non_dom_users' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_non_dom_users' ]['default_val'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_non_dom_users' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_non_dom_users' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_non_dom_users' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_non_dom_users' ]['handle'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_non_dom_users' ]['parent_handle'] =  '';

    //$mod_tmp = $this->calculator_model->slides_mod;
    $mod_temp = array();
    $mod_tmp['cloud_services_aws'] = $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws'];
    $mod_tmp['cloud_services_azure'] = $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure'];
    $mod_tmp['on_prem_summary'] = $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary'];
    $data[ 'def_field_values' ] = json_encode( $mod_tmp );

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


    $this->load->view( 'cloud_services' );

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
