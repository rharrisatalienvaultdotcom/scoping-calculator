<?php if ( !defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );
class Anywhere extends CI_Controller {

  public function index()
  {

    $this->load->model('calculator_model');

    //$data[ 'calc_data' ][ 'slides' ] = $this->calculator_model->slides;


    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'position' ] = 0;
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'sum_raw' ] = '1';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'sum_calc' ] = '1';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'add_to_total' ] = '1';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'add_to_eps_total' ] = '1';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'title' ] = 'Cloud Services: AWS';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'handle' ] = 'cloud_services_aws';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ] = array();

    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudtrail' ]['title'] = 'CloudTrail event total (monthly)';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudtrail' ]['position'] = '0';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudtrail' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudtrail' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudtrail' ]['default_val'] =  '0';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudtrail' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudtrail' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudtrail' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudtrail' ]['handle'] =  'cloudtrail';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudtrail' ]['parent_handle'] =  'cloud_services_aws';


    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudwatch' ]['title'] = 'CloudWatch event total (monthly)';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudwatch' ]['position'] = '1';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudwatch' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudwatch' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudwatch' ]['default_val'] =  '0';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudwatch' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudwatch' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudwatch' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudwatch' ]['handle'] =  'cloudwatch';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudwatch' ]['parent_handle'] =  'cloud_services_aws';


    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'data_transfered' ]['title'] = 'Data Transfered (in GB) (monthly)';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'data_transfered' ]['position'] = '2';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'data_transfered' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'data_transfered' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'data_transfered' ]['default_val'] =  '0';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'data_transfered' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'data_transfered' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'data_transfered' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'data_transfered' ]['handle'] =  'data_transfered';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'data_transfered' ]['parent_handle'] =  'cloud_services_aws';


    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_cloud' ]['title'] = 'Elastic Cloud Compute Request Total (monthly)';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_cloud' ]['position'] = '3';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_cloud' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_cloud' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_cloud' ]['default_val'] =  '0';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_cloud' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_cloud' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_cloud' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_cloud' ]['handle'] =  'elastic_cloud';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_cloud' ]['parent_handle'] =  'cloud_services_aws';


    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'simple_storage' ]['title'] = 'Simple Storage Service Request Total (monthly)';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'simple_storage' ]['position'] = '4';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'simple_storage' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'simple_storage' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'simple_storage' ]['default_val'] =  '0';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'simple_storage' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'simple_storage' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'simple_storage' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'simple_storage' ]['handle'] =  'simple_storage';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'simple_storage' ]['parent_handle'] =  'cloud_services_aws';


    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_load' ]['title'] = 'Elastic Load Balancer Request Total (monthly)';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_load' ]['position'] = '5';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_load' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_load' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_load' ]['default_val'] =  '0';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_load' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_load' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_load' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_load' ]['handle'] =  'elastic_load';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_load' ]['parent_handle'] =  'cloud_services_aws';

    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'position' ] = 1;
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'sum_raw' ] = '1';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'sum_calc' ] = '1';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'add_to_total' ] = '1';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'add_to_eps_total' ] = '1';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'title' ] = 'Cloud Services: Azure';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'handle' ] = 'cloud_services_azure';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ] = array();

    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'subscription_ids' ]['title'] = 'Total Subscription IDs';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'subscription_ids' ]['position'] = '0';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'subscription_ids' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'subscription_ids' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'subscription_ids' ]['default_val'] =  '0';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'subscription_ids' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'subscription_ids' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'subscription_ids' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'subscription_ids' ]['handle'] =  'subscription_ids';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'subscription_ids' ]['parent_handle'] =  'cloud_services_azure';


    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'analytics' ]['title'] = 'Azure Log Analytics Request Total (monthly)';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'analytics' ]['position'] = '1';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'analytics' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'analytics' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'analytics' ]['default_val'] =  '0';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'analytics' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'analytics' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'analytics' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'analytics' ]['handle'] =  'analytics';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'analytics' ]['parent_handle'] =  'cloud_services_azure';


    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'app_insights' ]['title'] = 'Azure Application Insights Request Total (monthly)';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'app_insights' ]['position'] = '2';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'app_insights' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'app_insights' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'app_insights' ]['default_val'] =  '0';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'app_insights' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'app_insights' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'app_insights' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'app_insights' ]['handle'] =  'app_insights';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'app_insights' ]['parent_handle'] =  'cloud_services_azure';


    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'vmachines' ]['title'] = 'Total Virtual Machines';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'vmachines' ]['position'] = '3';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'vmachines' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'vmachines' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'vmachines' ]['default_val'] =  '0';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'vmachines' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'vmachines' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'vmachines' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'vmachines' ]['handle'] =  'vmachines';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'vmachines' ]['parent_handle'] =  'cloud_services_azure';


    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'azure_storage' ]['title'] = 'Azure Storage (Blobs, Tables, Queues, Files) Events (monthly)';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'azure_storage' ]['position'] = '4';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'azure_storage' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'azure_storage' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'azure_storage' ]['default_val'] =  '0';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'azure_storage' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'azure_storage' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'azure_storage' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'azure_storage' ]['handle'] =  'azure_storage';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'azure_storage' ]['parent_handle'] =  'cloud_services_azure';


    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'load_balancing' ]['title'] = 'Azure Load Balancing Events (monthly)';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'load_balancing' ]['position'] = '5';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'load_balancing' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'load_balancing' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'load_balancing' ]['default_val'] =  '0';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'load_balancing' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'load_balancing' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'load_balancing' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'load_balancing' ]['handle'] =  'load_balancing';
    $data[ 'calc_data' ][ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'load_balancing' ]['parent_handle'] =  'cloud_services_azure';

    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'position' ] = 2;
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'sum_raw' ] = '1';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'sum_calc' ] = '0';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'add_to_total' ] = '1';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'add_to_eps_total' ] = '0';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'title' ] = 'On Prem Summary';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'handle' ] = 'on_prem_summary';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ] = array();

    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_domain_controllers' ]['title'] = 'Total Domain Controllers';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_domain_controllers' ]['position'] = '0';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_domain_controllers' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_domain_controllers' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_domain_controllers' ]['default_val'] =  '0';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_domain_controllers' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_domain_controllers' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_domain_controllers' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_domain_controllers' ]['handle'] =  'usma_domain_controllers';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_domain_controllers' ]['parent_handle'] =  'cloud_services_azure';


    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_windows_systems' ]['title'] = 'Total Windows Systems';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_windows_systems' ]['position'] = '1';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_windows_systems' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_windows_systems' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_windows_systems' ]['default_val'] =  '0';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_windows_systems' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_windows_systems' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_windows_systems' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_windows_systems' ]['handle'] =  'usma_windows_systems';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_windows_systems' ]['parent_handle'] =  'cloud_services_azure';


    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_linux_systems' ]['title'] = 'Total Linux Systems';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_linux_systems' ]['position'] = '2';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_linux_systems' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_linux_systems' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_linux_systems' ]['default_val'] =  '0';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_linux_systems' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_linux_systems' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_linux_systems' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_linux_systems' ]['handle'] =  'usma_linux_systems';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_linux_systems' ]['parent_handle'] =  'cloud_services_azure';


    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_firewalls' ]['title'] = 'Total Firewalls';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_firewalls' ]['position'] = '3';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_firewalls' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_firewalls' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_firewalls' ]['default_val'] =  '0';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_firewalls' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_firewalls' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_firewalls' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_firewalls' ]['handle'] =  'usma_firewalls';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_firewalls' ]['parent_handle'] =  'cloud_services_azure';


    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_users' ]['title'] = 'Total Users';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_users' ]['position'] = '4';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_users' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_users' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_users' ]['default_val'] =  '0';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_users' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_users' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_users' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_users' ]['handle'] =  'usma_users';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_users' ]['parent_handle'] =  'cloud_services_azure';


    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_non_dom_users' ]['title'] = 'Total Non-Domain Users';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_non_dom_users' ]['position'] = '5';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_non_dom_users' ]['global'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_non_dom_users' ]['tab_order'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_non_dom_users' ]['default_val'] =  '0';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_non_dom_users' ]['weight'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_non_dom_users' ]['required'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_non_dom_users' ]['function'] =  '';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_non_dom_users' ]['handle'] =  'usma_non_dom_users';
    $data[ 'calc_data' ][ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_non_dom_users' ]['parent_handle'] =  'cloud_services_azure';

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
