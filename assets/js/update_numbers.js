function update_numbers() {
    total_users = 0;
    total_users_eps = 0;
    non_dom_users = 0;
    grand_total_devices = 0;
    grand_total_devices_eps = 0;
    total_devices = 0;
    total_devices_eps = 0;
    total_network_devices = 0;
    total_network_devices_eps = 0;
    total_servers = 0;
    total_servers_eps = 0;
    total_network_data = 0;
    external_users = 0;
    weight = 0;
    for ( var slide in field_values ) {
        for ( var field in field_values[slide] ) {
            if ( field !== 'handle' && field !== 'title' && field !== 'position' ) {
                if( field !== 'virtual_or_physical' && field !== 'usage_pattern' ) {
                    var elem = document.getElementById( 'number-' + field_values[slide][field]['handle'] );
                    field_values[slide][field]['raw'] = elem.valueAsNumber;
                } else {
                    var elem = document.getElementById( field_values[slide][field]['handle'] );
                    field_values[slide][field]['raw'] = Number( elem.options[elem.selectedIndex].value );
                }
                if ( slide !== 'misc' ) {
                    switch ( slide ) {
                        case 'users':
                            total_users += Number( field_values[slide][field]['raw'] );
                            break;
                        case 'servers':
                            total_servers += Number( field_values[slide][field]['raw'] );
                            break;
                        case 'devices':
                            total_devices += Number( field_values[slide][field]['raw'] );
                            break;
                        case 'network_devices':
                            total_network_devices += Number( field_values[slide][field]['raw'] );
                            break;
                        case 'network_data':
                            total_network_data += Number( field_values[slide][field]['raw'] );
                            break;
                    }
                }
                switch ( field ) {
                    case 'non_dom_users':
                        non_dom_users = Number( field_values[slide][field]['raw'] );
                        break;
                    case 'external_users':
                        external_users = Number( field_values[slide][field]['raw']) ;
                        break;
                }
                grand_total_devices = total_servers + total_devices + total_network_devices;
                if( field_values[slide][field]['function'] ) {
                    field_values[slide][field]['calc'] = Number( field_values[slide][field]['function']() );
                } else {
                    field_values[slide][field]['calc'] = Number( field_values[slide][field]['raw'] );
                }
                if ( slide !== 'misc' ) {
                    switch ( slide ) {
                        case 'servers':
                            total_servers_eps += Number( field_values[slide][field]['calc'] );
                            break;
                        case 'network_devices':
                            //console.log('Field: ' + field + '; Val: ' + field_values[slide][field]['calc'] + '; Slide: ' + slide + '; Current total: ' + total_network_devices_eps);
                            total_network_devices_eps += Number( field_values[slide][field]['calc'] );
                            break;
                    }
                }
            }
        }
    }
    grand_total_devices_eps = total_servers_eps  + total_network_devices_eps;
    update_report();
}