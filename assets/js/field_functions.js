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

            console.log('network_devices-web_filters: ' + data['slides']['network_devices']['fields']['web_filters']['raw'] + ' * 5 + ( ' + data[ 'grand_totals' ][ 'devices' ] + ' / ' + data[ 'slides' ][ 'network_devices' ][ 'fields' ][ 'web_filters' ][ 'weight' ] + ' )' );
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
}