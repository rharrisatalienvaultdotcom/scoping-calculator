var calculators = {
  'servers-domain_controller': function (  ) {
    var result;
    if ( strct[ 'rvals' ]['servers-domain_controller'] > 0 ) {
      result = strct[ 'rvals' ]['servers-domain_controller'] * 2 + ( strct[ 'grvals' ][ 'users' ] - strct[ 'rvals' ][ 'users-non_dom_users' ] ) / 6;
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'servers-mx_servers': function (  ) {
    var result;
    if ( strct[ 'rvals' ]['servers-mx_servers'] > 0 ) {
      result = strct[ 'rvals' ]['servers-mx_servers'] * 2 + ( strct[ 'grvals' ][ 'users' ] - strct[ 'rvals' ][ 'users-non_dom_users' ] ) / 8;
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'servers-file_servers': function (  ) {
    var result;
    if ( strct[ 'rvals' ]['servers-file_servers'] > 0 ) {
      result = strct[ 'rvals' ]['servers-file_servers'] * 2 + ( strct[ 'grvals' ][ 'users' ] - strct[ 'rvals' ][ 'users-non_dom_users' ] ) / 8;
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'servers-application_servers': function (  ) {
    var result;
    if ( strct[ 'rvals' ]['servers-application_servers'] > 0 ) {
      result = strct[ 'rvals' ]['servers-application_servers'] * 2 + ( strct[ 'grvals' ][ 'users' ] - strct[ 'rvals' ][ 'users-non_dom_users' ] ) / 8;
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'servers-db_servers': function (  ) {
    var result;
    if ( strct[ 'rvals' ]['servers-db_servers'] > 0 ) {
      result = strct[ 'rvals' ]['servers-db_servers'] * 2 + ( strct[ 'grvals' ][ 'users' ] - strct[ 'rvals' ][ 'users-non_dom_users' ] ) / 6;
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'servers-web_servers': function (  ) {
    var result;
    if ( strct[ 'rvals' ]['servers-web_servers'] > 0 ) {
      result = strct[ 'rvals' ]['servers-web_servers'] * 2 + ( strct[ 'grvals' ][ 'users' ]  / 8 );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'servers-endpoint_protection': function (  ) {
    var result;
    if ( strct[ 'rvals' ]['servers-endpoint_protection'] > 0 ) {
      result = strct[ 'rvals' ]['servers-endpoint_protection'] * 1 + ( strct[ 'grvals' ][ 'devices' ] + strct[ 'rrvals' ][ 'users' ] - strct[ 'rvals' ][ 'users-non_dom_users' ] ) / 25;
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'servers-mail_archiver': function (  ) {
    var result;
    if ( strct[ 'rvals' ]['servers-mail_archiver'] > 0 ) {
      result = strct[ 'rvals' ]['servers-mail_archiver'] * 2 + ( strct[ 'grvals' ][ 'users' ] - strct[ 'rvals' ][ 'users-non_dom_users' ] ) / 8;
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'network_devices-firewalls': function (  ) {
    var result;
    if ( strct[ 'rvals' ]['network_devices-firewalls'] > 0 ) {
      result = strct[ 'rvals' ]['network_devices-firewalls'] * 4 + ( strct[ 'rtotal' ] / 4 ) + ( strct[ 'grvals' ][ 'users' ] / 8);
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'network_devices-nips_nids': function (  ) {
    var result;
    if ( strct[ 'rvals' ]['network_devices-nips_nids'] > 0 ) {
      result = strct[ 'rvals' ]['network_devices-nips_nids'] * 4 + ( strct[ 'rtotal' ] / 4 );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'network_devices-vpns': function (  ) {
    var result;
    if ( strct[ 'rvals' ]['network_devices-vpns'] > 0 ) {
      result = strct[ 'rvals' ]['network_devices-vpns'] * 5 + ( strct[ 'rvals' ][ 'users-external_users' ] / 4 );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'network_devices-antispam': function (  ) {
    var result;
    if ( strct[ 'rvals' ]['network_devices-antispam'] > 0 ) {
      result = strct[ 'rvals' ]['network_devices-antispam'] * 5 + ( strct[ 'rtotal' ] + strct[ 'grvals' ][ 'users' ] ) / 8;
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'network_devices-access_control': function (  ) {
    var result;
    if ( strct[ 'rvals' ]['network_devices-access_control'] > 0 ) {
      result = strct[ 'rvals' ]['network_devices-access_control'] * 10 + ( strct[ 'grvals' ][ 'devices' ] + strct[ 'grvals' ][ 'servers' ] ) / 8;
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'network_devices-switches': function (  ) {
    var result;
    if ( strct[ 'rvals' ]['network_devices-switches'] > 0 ) {
      result = strct[ 'rvals' ]['network_devices-switches'] * 1 + ( strct[ 'rtotal' ] / 25 );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'network_devices-routers': function (  ) {
    var result;
    if ( strct[ 'rvals' ]['network_devices-routers'] > 0 ) {
      result = strct[ 'rvals' ]['network_devices-routers'] * 1 + ( strct[ 'rtotal' ] / 25 );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'network_devices-load_balancers': function (  ) {
    var result;
    if ( strct[ 'rvals' ]['network_devices-load_balancers'] > 0 ) {
      result = strct[ 'rvals' ]['network_devices-load_balancers'] * 10 + ( strct[ 'rtotal' ] / 25 );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'network_devices-web_filters': function (  ) {
    var result;
    if ( strct[ 'rvals' ]['network_devices-web_filters'] > 0 ) {
      result = strct[ 'rvals' ]['network_devices-web_filters'] * 5 + ( strct[ 'rtotal' ] / 8 );

    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'network_devices-nas': function (  ) {
    var result;
    if ( strct[ 'rvals' ]['network_devices-nas'] > 0 ) {
      result = strct[ 'rvals' ]['network_devices-nas'] * 5 + ( strct[ 'grvals' ][ 'servers' ] / 25 );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'amazon_aws-cloudtrail_events': function (  ) {
    var result = {}
        es = 2048;
    result[ 'stor' ] = 0;
    if ( strct[ 'rvals' ][ 'amazon_aws-cloudtrail_events' ] > 0 ) {
      result[ 'stor' ] = calculators[ 'estimate_storage' ]( strct[ 'rvals' ][ 'amazon_aws-cloudtrail_events' ], es );
    }
    return result;
  },
  'amazon_aws-ecc_requests': function (  ) {
    var result = {},
        es = 340;
        result[ 'stor' ] = 0;
    if ( strct[ 'rvals' ][ 'amazon_aws-ecc_requests' ] > 0 ) {
      result[ 'stor' ] = calculators[ 'estimate_storage' ]( strct[ 'rvals' ][ 'amazon_aws-ecc_requests' ], es );
    }
    return result;
  },
  'amazon_aws-sss_requests': function (  ) {
    var result = {},
        es = 800;
        result[ 'stor' ] = 0;
    if ( strct[ 'rvals' ][ 'amazon_aws-sss_requests' ] > 0 ) {
      result[ 'stor' ] = calculators[ 'estimate_storage' ]( strct[ 'rvals' ][ 'amazon_aws-sss_requests' ], es );
    }
    return result;
  },
  'amazon_aws-elb_requests': function (  ) {
    var result = {},
        es = 800;
        result[ 'stor' ] = 0;
    if ( strct[ 'rvals' ][ 'amazon_aws-elb_requests' ] > 0 ) {
      result[ 'stor' ] = calculators[ 'estimate_storage' ]( strct[ 'rvals' ][ 'amazon_aws-elb_requests' ], es );
    }
    return result;
  },
  /*'amazon_aws_cloudwatch-cloudwatch_sources': function (  ) {
    var result,
        avg_event_size = 102400;
    if ( strct[ 'rvals' ][ 'amazon_aws_cloudwatch-cloudwatch_sources' ] > 0 ) {
      result = strct[ 'rvals' ][ 'amazon_aws_cloudwatch-cloudwatch_sources' ] * avg_event_size;
    } else {
      result = 0;
    }
    return Math.round( result );
  },*/
  'microsoft_azure-log_analytics_requests': function (  ) {
    var result = {},
        es = 800;
        result[ 'stor' ] = 0;
    if ( strct[ 'rvals' ][ 'microsoft_azure-log_analytics_requests' ] > 0 ) {
      result[ 'stor' ] = calculators[ 'estimate_storage' ]( strct[ 'rvals' ][ 'microsoft_azure-log_analytics_requests' ], es );
    }
    return result;
  },
  'microsoft_azure-application_insights_requests': function (  ) {
    var result = {},
        es = 800;
        result[ 'stor' ] = 0;
    if ( strct[ 'rvals' ][ 'microsoft_azure-application_insights_requests' ] > 0 ) {
      result[ 'stor' ] = calculators[ 'estimate_storage' ]( strct[ 'rvals' ][ 'microsoft_azure-application_insights_requests' ], es );
    }
    return result;
  },
  'microsoft_azure-storage_events': function (  ) {
    var result = {},
        es = 800;
        result[ 'stor' ] = 0;
    if ( strct[ 'rvals' ][ 'microsoft_azure-storage_events' ] > 0 ) {
      result[ 'stor' ] = calculators[ 'estimate_storage' ]( strct[ 'rvals' ][ 'microsoft_azure-storage_events' ], es );
    }
    return result;
  },
  'microsoft_azure-load_balancing_events': function (  ) {
    var result = {},
        es = 800;
        result[ 'stor' ] = 0;
    if ( strct[ 'rvals' ][ 'microsoft_azure-load_balancing_events' ] > 0 ) {
      result[ 'stor' ] = calculators[ 'estimate_storage' ]( strct[ 'rvals' ][ 'microsoft_azure-load_balancing_events' ], es );
    }
    return result;
  },
  'on_prem_summary-domain_controllers': function (  ) {
    var result = {},
        es = 800;
        result[ 'calc' ] = 0;
        result[ 'stor' ] = 0;
    if ( strct[ 'rvals' ][ 'on_prem_summary-domain_controllers' ] > 0 ) {
      result[ 'calc' ] = strct[ 'rvals' ][ 'on_prem_summary-domain_controllers' ];
      result[ 'stor' ] = calculators[ 'estimate_storage' ]( result[ 'calc' ], es );
    }
    return result;
  },
  'on_prem_summary-domain_controllers-epm': function (  ) {
    var result;
    result = strct[ 'rvals' ][ 'on_prem_summary-domain_controllers' ] * 2 + strct[ 'rvals' ][ 'on_prem_summary-users'] / 6;
    return result;
  },
  'on_prem_summary-windows_servers': function (  ) {
    var result = {},
        es = 800;
        result[ 'calc' ] = 0;
        result[ 'stor' ] = 0;
    if ( strct[ 'rvals' ][ 'on_prem_summary-windows_servers' ] > 0 ) {
      result[ 'calc' ] = strct[ 'rvals' ][ 'on_prem_summary-windows_servers' ];
      result[ 'stor' ] = calculators[ 'estimate_storage' ]( result[ 'calc' ], es );
    }
    return result;
  },
  'on_prem_summary-windows_servers-epm': function (  ) {
    var result;
    result = strct[ 'rvals' ][ 'on_prem_summary-windows_servers' ] * 2 + strct[ 'rvals' ][ 'on_prem_summary-users'] / 6;
    return result;
  },
  'on_prem_summary-linux_servers': function (  ) {
    var result = {},
        es = 400;
        result[ 'calc' ] = 0;
        result[ 'stor' ] = 0;
    if ( strct[ 'rvals' ][ 'on_prem_summary-linux_servers' ] > 0 ) {
      result[ 'calc' ] = strct[ 'rvals' ][ 'on_prem_summary-linux_servers' ];
      result[ 'stor' ] = calculators[ 'estimate_storage' ]( result[ 'calc' ], es );
    }
    return result;
  },
  'on_prem_summary-linux_servers-epm': function (  ) {
    var result;
    result = strct[ 'rvals' ][ 'on_prem_summary-linux_servers' ] * 2 + strct[ 'rvals' ][ 'on_prem_summary-users'] / 8;
    return result;
  },
  'on_prem_summary-application_servers': function (  ) {
    var result = {},
        es = 800;
        result[ 'calc' ] = 0;
        result[ 'stor' ] = 0;
    if ( strct[ 'rvals' ][ 'on_prem_summary-application_servers' ] > 0 ) {
      result[ 'calc' ] = strct[ 'rvals' ][ 'on_prem_summary-application_servers' ];
      result[ 'stor' ] = calculators[ 'estimate_storage' ]( result[ 'calc' ], es );
    }
    return result;
  },
  'on_prem_summary-application_servers-epm': function (  ) {
    var result;
    result = strct[ 'rvals' ][ 'on_prem_summary-application_servers' ] * 2 + strct[ 'rvals' ][ 'on_prem_summary-users'] / 8;
    return result;
  },
  'on_prem_summary-firewalls': function (  ) {
    var result = {},
        es = 800;
        result[ 'calc' ] = 0;
        result[ 'stor' ] = 0;
        es = 800;
    if ( strct[ 'rvals' ][ 'on_prem_summary-firewalls' ] > 0 ) {
      result[ 'calc' ] = strct[ 'rvals' ][ 'on_prem_summary-firewalls' ];
      result[ 'stor' ] = calculators[ 'estimate_storage' ]( result[ 'calc' ], es );
    }
    return result;
  },
  'on_prem_summary-firewalls-epm': function (  ) {
    var result,
        fw = strct[ 'rvals' ][ 'on_prem_summary-firewalls' ],
        dc = strct[ 'rvals' ][ 'on_prem_summary-domain_controllers' ],
        ws = strct[ 'rvals' ][ 'on_prem_summary-windows_servers' ],
        ls = strct[ 'rvals' ][ 'on_prem_summary-linux_servers' ],
        as = strct[ 'rvals' ][ 'on_prem_summary-application_servers-epm' ],
        ond = 0,
        wst = strct[ 'rvals' ][ 'on_prem_summary-workstations' ];
    result = fw * 4 + ( dc + ws + ls + as + ond / 4 ) + (wst / 8 );
    return result;
  },
  'on_prem_summary-switches_routers': function (  ) {
    var result = {},
        es = 800;
        result[ 'calc' ] = 0;
        result[ 'stor' ] = 0;
    if ( strct[ 'rvals' ][ 'on_prem_summary-switches_routers' ] > 0 ) {
      result[ 'calc' ] = strct[ 'rvals' ][ 'on_prem_summary-switches_routers' ];
      result[ 'stor' ] = calculators[ 'estimate_storage' ]( result[ 'calc' ], es );
    }
    return result;
  },
  'on_prem_summary-switches_routers-epm': function (  ) {
    var result;
    result = strct[ 'rvals' ][ 'on_prem_summary-switches_routers' ] * 4 + ( strct[ 'rtotal' ] / 4 );
    return result;
  },
  'on_prem_summary-other_network_devices': function (  ) {
    var result,
        avg_epm = 100000;
        avg_event_size = 800;
    if ( strct[ 'rvals' ][ 'on_prem_summary-other_network_devices' ] > 0 ) {
      result = strct[ 'rvals' ][ 'on_prem_summary-other_network_devices' ] * ( avg_event_size * avg_epm );
    } else {
      result = 0;
    }
    return Math.round( result );
  },
  'estimate_storage': function ( eps = null, es = null ) {
    if ( eps !== null && es !== null ) {
      var result,
          tf = ( strct[ 'rvals' ][ 'on_prem_summary-usage_pattern' ] == 1) ? 86400 : 43200 ;
      result = ( ( ( eps * es ) / 1024 ) * tf ) * 30 ;
    } else {
      result = null;
    }
    return Math.round( result );
  }
}
