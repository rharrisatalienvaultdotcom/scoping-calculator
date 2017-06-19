var field_functions = {
  'servers-domain_controller': function ( data ) {
    var result;
    if ( data['slides']['servers']['fields']['domain_controller']['raw'] > 0 ) {
      result = data['slides']['servers']['fields']['domain_controller']['raw'] * 2 + ( data[ 'slides' ][ 'users' ][ 'total' ] - data[ 'slides' ][ 'users' ][ 'fields' ][ 'non_dom_users' ]['raw'] ) / data[ 'slides' ][ 'servers' ][ 'fields' ][ 'domain_controller' ][ 'weight' ];
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'servers-mx_servers': function ( data ) {
    var result;
    if ( data['slides']['servers']['fields']['mx_servers']['raw'] > 0 ) {
      result = data['slides']['servers']['fields']['mx_servers']['raw'] * 2 + ( data[ 'slides' ][ 'users' ][ 'total' ] - data[ 'slides' ][ 'users' ][ 'fields' ][ 'non_dom_users' ]['raw'] ) / data[ 'slides' ][ 'servers' ][ 'fields' ][ 'mx_servers' ][ 'weight' ];
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'servers-file_servers': function ( data ) {
    var result;
    if ( data['slides']['servers']['fields']['file_servers']['raw'] > 0 ) {
      result = data['slides']['servers']['fields']['file_servers']['raw'] * 2 + ( data[ 'slides' ][ 'users' ][ 'total' ] - data[ 'slides' ][ 'users' ][ 'fields' ][ 'non_dom_users' ]['raw'] ) / data[ 'slides' ][ 'servers' ][ 'fields' ][ 'file_servers' ][ 'weight' ];
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'servers-application_servers': function ( data ) {
    var result;
    if ( data['slides']['servers']['fields']['application_servers']['raw'] > 0 ) {
      result = data['slides']['servers']['fields']['application_servers']['raw'] * 2 + ( data[ 'slides' ][ 'users' ][ 'total' ] - data[ 'slides' ][ 'users' ][ 'fields' ][ 'non_dom_users' ]['raw'] ) / data[ 'slides' ][ 'servers' ][ 'fields' ][ 'application_servers' ][ 'weight' ];
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'servers-db_servers': function ( data ) {
    var result;
    if ( data['slides']['servers']['fields']['db_servers']['raw'] > 0 ) {
      result = data['slides']['servers']['fields']['db_servers']['raw'] * 2 + ( data[ 'slides' ][ 'users' ][ 'total' ] - data[ 'slides' ][ 'users' ][ 'fields' ][ 'non_dom_users' ]['raw'] ) / data[ 'slides' ][ 'servers' ][ 'fields' ][ 'db_servers' ][ 'weight' ];
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'servers-web_servers': function ( data ) {
    var result;
    if ( data['slides']['servers']['fields']['web_servers']['raw'] > 0 ) {
      result = data['slides']['servers']['fields']['web_servers']['raw'] * 2 + ( data[ 'slides' ][ 'users' ][ 'total' ]  / data[ 'slides' ][ 'servers' ][ 'fields' ][ 'web_servers' ][ 'weight' ] );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'servers-endpoint_protection': function ( data ) {
    var result;
    if ( data['slides']['servers']['fields']['endpoint_protection']['raw'] > 0 ) {
      result = data['slides']['servers']['fields']['endpoint_protection']['raw'] * 1 + ( data[ 'slides' ][ 'devices' ][ 'total' ] + data[ 'slides' ][ 'users' ][ 'total' ] - data[ 'slides' ][ 'users' ][ 'fields' ][ 'non_dom_users' ]['raw'] ) / data[ 'slides' ][ 'servers' ][ 'fields' ][ 'endpoint_protection' ][ 'weight' ];
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'servers-mail_archiver': function ( data ) {
    var result;
    if ( data['slides']['servers']['fields']['mail_archiver']['raw'] > 0 ) {
      result = data['slides']['servers']['fields']['mail_archiver']['raw'] * 2 + ( data[ 'slides' ][ 'users' ][ 'total' ] - data[ 'slides' ][ 'users' ][ 'fields' ][ 'non_dom_users' ]['raw'] ) / data[ 'slides' ][ 'servers' ][ 'fields' ][ 'mail_archiver' ][ 'weight' ];
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'network_devices-firewalls': function ( data ) {
    var result;
    if ( data['slides']['network_devices']['fields']['firewalls']['raw'] > 0 ) {
      result = data['slides']['network_devices']['fields']['firewalls']['raw'] * 4 + ( data[ 'grand_totals' ][ 'devices' ] / 4 ) + ( data[ 'slides' ][ 'users' ][ 'total' ] / data[ 'slides' ][ 'network_devices' ][ 'fields' ][ 'firewalls' ][ 'weight' ]);
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'network_devices-nips_nids': function ( data ) {
    var result;
    if ( data['slides']['network_devices']['fields']['nips_nids']['raw'] > 0 ) {
      result = data['slides']['network_devices']['fields']['nips_nids']['raw'] * 4 + ( data[ 'grand_totals' ][ 'devices' ] / data[ 'slides' ][ 'network_devices' ][ 'fields' ][ 'nips_nids' ][ 'weight' ] );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'network_devices-vpns': function ( data ) {
    var result;
    if ( data['slides']['network_devices']['fields']['vpns']['raw'] > 0 ) {
      result = data['slides']['network_devices']['fields']['vpns']['raw'] * 5 + ( data[ 'slides' ][ 'users' ][ 'fields' ][ 'external_users' ]['raw'] / data[ 'slides' ][ 'network_devices' ][ 'fields' ][ 'vpns' ][ 'weight' ] );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'network_devices-antispam': function ( data ) {
    var result;
    if ( data['slides']['network_devices']['fields']['antispam']['raw'] > 0 ) {
      result = data['slides']['network_devices']['fields']['antispam']['raw'] * 5 + ( data[ 'grand_totals' ][ 'devices' ] + data[ 'slides' ][ 'users' ][ 'total' ] ) / data[ 'slides' ][ 'network_devices' ][ 'fields' ][ 'antispam' ][ 'weight' ];
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'network_devices-access_control': function ( data ) {
    var result;
    if ( data['slides']['network_devices']['fields']['access_control']['raw'] > 0 ) {
      result = data['slides']['network_devices']['fields']['access_control']['raw'] * 10 + ( data[ 'slides' ][ 'devices' ][ 'total' ] + data[ 'slides' ][ 'servers' ][ 'total' ] ) / data[ 'slides' ][ 'network_devices' ][ 'fields' ][ 'access_control' ][ 'weight' ];
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'network_devices-switches': function ( data ) {
    var result;
    if ( data['slides']['network_devices']['fields']['switches']['raw'] > 0 ) {
      result = data['slides']['network_devices']['fields']['switches']['raw'] * 1 + ( data[ 'grand_totals' ][ 'devices' ] / data[ 'slides' ][ 'network_devices' ][ 'fields' ][ 'switches' ][ 'weight' ] );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'network_devices-routers': function ( data ) {
    var result;
    if ( data['slides']['network_devices']['fields']['routers']['raw'] > 0 ) {
      result = data['slides']['network_devices']['fields']['routers']['raw'] * 1 + ( data[ 'grand_totals' ][ 'devices' ] / data[ 'slides' ][ 'network_devices' ][ 'fields' ][ 'routers' ][ 'weight' ] );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'network_devices-load_balancers': function ( data ) {
    var result;
    if ( data['slides']['network_devices']['fields']['load_balancers']['raw'] > 0 ) {
      result = data['slides']['network_devices']['fields']['load_balancers']['raw'] * 10 + ( data[ 'grand_totals' ][ 'devices' ] / data[ 'slides' ][ 'network_devices' ][ 'fields' ][ 'load_balancers' ][ 'weight' ] );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'network_devices-web_filters': function ( data ) {
    var result;
    if ( data['slides']['network_devices']['fields']['web_filters']['raw'] > 0 ) {
      result = data['slides']['network_devices']['fields']['web_filters']['raw'] * 5 + ( data[ 'grand_totals' ][ 'devices' ] / data[ 'slides' ][ 'network_devices' ][ 'fields' ][ 'web_filters' ][ 'weight' ] );

      //console.log('network_devices-web_filters: ' + data['slides']['network_devices']['fields']['web_filters']['raw'] + ' * 5 + ( ' + data[ 'grand_totals' ][ 'devices' ] + ' / ' + data[ 'slides' ][ 'network_devices' ][ 'fields' ][ 'web_filters' ][ 'weight' ] + ' )' );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'network_devices-nas': function ( data ) {
    var result;
    if ( data['slides']['network_devices']['fields']['nas']['raw'] > 0 ) {
      result = data['slides']['network_devices']['fields']['nas']['raw'] * 5 + ( data[ 'slides' ][ 'servers' ][ 'total' ] / data[ 'slides' ][ 'network_devices' ][ 'fields' ][ 'nas' ][ 'weight' ] );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'cloud_services_aws-cloudtrail': function ( data ) {
    var result,
        avg_event_size = 102400;
    if ( data[ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudtrail' ][ 'raw' ] > 0 ) {
      result = data[ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudtrail' ][ 'raw' ] * avg_event_size;
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'cloud_services_aws-cloudwatch': function ( data ) {
    var result,
        avg_event_size = 102400;
    if ( data[ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudwatch' ][ 'raw' ] > 0 ) {
      result = data[ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'cloudwatch' ][ 'raw' ] * avg_event_size;
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'cloud_services_aws-data_transfered': function ( data ) {
    var result,
        avg_event_size = 102400;
    if ( data[ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'data_transfered' ][ 'raw' ] > 0 ) {
      result = data[ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'data_transfered' ][ 'raw' ] * avg_event_size;
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'cloud_services_aws-elastic_cloud': function ( data ) {
    var result,
        avg_event_size = 102400;
    if ( data[ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_cloud' ][ 'raw' ] > 0 ) {
      result = data[ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_cloud' ][ 'raw' ] * avg_event_size;
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'cloud_services_aws-simple_storage': function ( data ) {
    var result,
        avg_event_size = 102400;
    if ( data[ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'simple_storage' ][ 'raw' ] > 0 ) {
      result = data[ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'simple_storage' ][ 'raw' ] * avg_event_size;
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'cloud_services_aws-elastic_load': function ( data ) {
    var result,
        avg_event_size = 102400;
    if ( data[ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_load' ][ 'raw' ] > 0 ) {
      result = data[ 'slides' ][ 'cloud_services_aws' ][ 'fields' ][ 'elastic_load' ][ 'raw' ] * avg_event_size;
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'cloud_services_azure-analytics': function ( data ) {
    var result,
        avg_event_size = 102400;
    if ( data[ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'analytics' ][ 'raw' ] > 0 ) {
      result = data[ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'analytics' ][ 'raw' ] * avg_event_size;
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'cloud_services_azure-app_insights': function ( data ) {
    var result,
        avg_event_size = 102400;
    if ( data[ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'app_insights' ][ 'raw' ] > 0 ) {
      result = data[ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'app_insights' ][ 'raw' ] * avg_event_size;
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'cloud_services_azure-azure_storage': function ( data ) {
    var result,
        avg_event_size = 102400;
    if ( data[ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'azure_storage' ][ 'raw' ] > 0 ) {
      result = data[ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'azure_storage' ][ 'raw' ] * avg_event_size;
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'cloud_services_azure-load_balancing': function ( data ) {
    var result,
        avg_event_size = 102400;
    if ( data[ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'load_balancing' ][ 'raw' ] > 0 ) {
      result = data[ 'slides' ][ 'cloud_services_azure' ][ 'fields' ][ 'load_balancing' ][ 'raw' ] * avg_event_size;
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'on_prem_summary-usma_domain_controllers': function ( data ) {
    var result,
        avg_event_size = 800,
        avg_epm = 100000;
    if ( data[ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_domain_controllers' ][ 'raw' ] > 0 ) {
      result = data[ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_domain_controllers' ][ 'raw' ] * ( avg_event_size * avg_epm );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'on_prem_summary-usma_windows_systems': function ( data ) {
    var result,
        avg_event_size = 800,
        avg_epm = 100000;
    if ( data[ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_windows_systems' ][ 'raw' ] > 0 ) {
      result = data[ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_windows_systems' ][ 'raw' ] * ( avg_event_size * avg_epm );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'on_prem_summary-usma_linux_systems': function ( data ) {
    var result,
        avg_event_size = 400,
        avg_epm = 100000;
    if ( data[ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_linux_systems' ][ 'raw' ] > 0 ) {
      result = data[ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_linux_systems' ][ 'raw' ] * ( avg_event_size * avg_epm );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'on_prem_summary-usma_firewalls': function ( data ) {
    var result,
        avg_event_size = 800,
        avg_epm = 100000;
    if ( data[ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_firewalls' ][ 'raw' ] > 0 ) {
      result = data[ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_firewalls' ][ 'raw' ] * ( avg_event_size * avg_epm );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'on_prem_summary-usma_switches_routers': function ( data ) {
    var result,
        avg_event_size = 800,
        avg_epm = 100000;
    if ( data[ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_switches_routers' ][ 'raw' ] > 0 ) {
      result = data[ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_switches_routers' ][ 'raw' ] * ( avg_event_size * avg_epm );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'on_prem_summary-usma_other_network_devices': function ( data ) {
    var result,
        avg_event_size = 800,
        avg_epm = 100000;
    if ( data[ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_other_network_devices' ][ 'raw' ] > 0 ) {
      result = data[ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_other_network_devices' ][ 'raw' ] * ( avg_event_size * avg_epm );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'on_prem_summary-usma_users': function ( data ) {
    var result,
        avg_event_size = 800,
        avg_epm = 100000;
    if ( data[ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_users' ][ 'raw' ] > 0 ) {
      result = data[ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_users' ][ 'raw' ] * ( avg_event_size * avg_epm );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'on_prem_summary-usma_non_dom_users': function ( data ) {
    var result,
        avg_event_size = 800,
        avg_epm = 100000;
    if ( data[ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_non_dom_users' ][ 'raw' ] > 0 ) {
      result = data[ 'slides' ][ 'on_prem_summary' ][ 'fields' ][ 'usma_non_dom_users' ][ 'raw' ] * ( avg_event_size * avg_epm );
    } else {
      result = 0;
    }
    return Math.round( result );
  }
}
