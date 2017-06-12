function line1() {
    var msg;
    if ( grand_total_devices < 1 && grand_total_devices_eps < 1 ) {
        msg = '&nbsp;';
    } else if ( grand_total_devices <= 75 && grand_total_devices_eps < 1000 ) {
        msg = ' - USM AIO 75 ASSET LICENSE';
    } else if ( grand_total_devices <= 150 && grand_total_devices_eps < 1000 ) {
        msg = ' - USM AIO 150 LICENSE';
    } else if ( grand_total_devices <= 1000 ) {
        msg = ' - USM AIO UA LICENSE';
    } else if ( grand_total_devices_eps >= 1000 && grand_total_devices_eps < 2500 ) {
        msg = ' - USM AIO UA - SENSOR DISABLED';
    } else if ( grand_total_devices_eps >= 2500 && grand_total_devices_eps < 5000 ) {
        msg = ' - USM STANDARD';
    }  else {
        msg = ' - FEDERATED OR ENT. DEPLOYMENT - VALIDATE SCOPE WITH SE';
    }

    return msg;
}

function line2() {
    var msg,
        locations = field_values[ 'slides' ][ 'network_data' ][ 'fields' ][ 'locations' ][ 'raw' ],
        bandwidth = field_values[ 'slides' ][ 'network_data' ][ 'fields' ][ 'bandwidth' ][ 'raw' ],
        branch_offices = field_values[ 'slides' ][ 'network_data' ][ 'fields' ][ 'small_branches' ][ 'raw' ];
    if ( locations < 1 && grand_total_devices_eps < 1 && bandwidth < 1 ) {
        msg = '&nbsp;';
    } else if ( locations <= 1 && grand_total_devices_eps < 1000 && bandwidth <= 100 ) {
        msg = ' - NO ADDITIONAL SENSORS NEEDED';
    } else if ( locations <= 150 && grand_total_devices_eps < 1000 && bandwidth >= 100 ) {
        msg = ' - ' + locations + ' x STANDARD SENSORS';
    } else if ( locations > 1 && grand_total_devices_eps <= 1000 && bandwidth <= 100 ) {
        msg = ' - ' + ( locations - 1 ) + ' x REMOTE SENSORS';
    } else if ( locations > 1 && grand_total_devices_eps >= 1000 && grand_total_devices_eps < 2500 && branch_offices < 1 && bandwidth <= 100 ) {
        msg = ' - ' + locations + ' x REMOTE SENSORS';
    } else if ( locations > 1 && grand_total_devices_eps >= 1000 && grand_total_devices_eps < 2500 && branch_offices > 1 && bandwidth <= 100 ) {
        msg = ' - ' + locations + ' x REMOTE SENSORS';
    } else if ( locations > 1 && grand_total_devices_eps <= 1000 &&  branch_offices < 1 && bandwidth <= 100 ) {
        msg = locations + ' x STANDARD SENSORS';
    } else if ( locations > 1 && grand_total_devices_eps <= 1000 &&  branch_offices > 0 && bandwidth >= 100 && bandwidth <= 1000 ) {
        msg = ' - ' + ( locations - branch_offices ) + ' x STANDARD SENSORS + ' + branch_offices + ' x REMOTE SENSORS';
    } else if ( locations > 1 && grand_total_devices_eps >= 1000 &&  grand_total_devices_eps < 2500 && bandwidth >= 100 && bandwidth <= 1000 && branch_offices > 0 ) {
        msg = ' - ' + ( locations - branch_offices ) + ' x STANDARD SENSORS + ' + branch_offices + ' x REMOTE SENSORS';
    } else if ( locations < 1 && grand_total_devices >= 1000 && bandwidth >= 100 ) {
        msg = ' - ' + locations + ' x STANDARD SENSORS';
    } else if ( grand_total_devices < 2500 && grand_total_devices >= 1000 && bandwidth >= 1000 && bandwidth <= 1000 ) {
        msg = ' - ' + locations + ' x STANDARD SENSORS';
    } else if ( grand_total_devices_eps >= 2500 &&  grand_total_devices_eps <= 5000 && locations < 3 && bandwidth <= 1000 && branch_offices < 1 ) {
        msg = ' - 2 x STANDARD SENSORS';
    } else if ( grand_total_devices_eps >= 2500 &&  grand_total_devices_eps <= 5000 && branch_offices < 1 ) {
        msg = ' - ' + locations + ' x STANDARD SENSORS';
    } else if ( grand_total_devices_eps >= 2500 &&  grand_total_devices_eps <= 5000 && branch_offices > 0 ) {
        msg = ' - 2 x STANDARD SENSORS + ' + branch_locations + ' x REMOTE SENSORS' ;
    }  else {
        msg = ' - CONTACT YOUR SE FOR SENSOR RECOMMENDATION';
    }

    return msg;
}

function line3() {
    if ( grand_total_devices_eps < 1) {

    } else if ( field_values[ 'slides' ][ 'misc' ][ 'fields' ][ 'virtual_or_physical' ][ 'math_value' ] == 1 && field_values[ 'slides' ][ 'misc' ][ 'fields' ][ 'compression_ratio' ][ 'raw' ] == 0 && grand_total_devices_eps <= 2500 ){
        msg = ( 858993459 ) / field_values[ 'eps_vals' ][ 'per_month' ][ 'compressed' ];
    } else if ( grand_total_devices_eps <= 2500 && field_values[ 'slides' ][ 'misc' ][ 'fields' ][ 'virtual_or_physical' ][ 'math_value' ] === 2 && field_values[ 'slides' ][ 'misc' ][ 'fields' ][ 'compression_ratio' ][ 'raw' ] === 0 ) {
        msg = ( 1610612736 ) / field_values[ 'eps_vals' ][ 'per_month' ][ 'compressed' ];
    } else if ( field_values[ 'slides' ][ 'misc' ][ 'fields' ][ 'virtual_or_physical' ][ 'math_value' ] === 1 && field_values[ 'slides' ][ 'misc' ][ 'fields' ][ 'compression_ratio' ][ 'raw' ] === 0 && grand_total_devices_eps > 2500 ) {
        msg = ( 1610612736 ) / field_values[ 'eps_vals' ][ 'per_month' ][ 'compressed' ];
    } else if ( field_values[ 'slides' ][ 'misc' ][ 'fields' ][ 'virtual_or_physical' ][ 'math_value' ] === 2 && field_values[ 'slides' ][ 'misc' ][ 'fields' ][ 'compression_ratio' ][ 'raw' ] === 0 && grand_total_devices_eps > 2500 ) {
        msg = ( 1610612736 ) / field_values[ 'eps_vals' ][ 'per_month' ][ 'compressed' ];
    } else if ( field_values[ 'slides' ][ 'misc' ][ 'fields' ][ 'virtual_or_physical' ][ 'math_value' ] === 2 && field_values[ 'slides' ][ 'misc' ][ 'fields' ][ 'compression_ratio' ][ 'raw' ] >= 1 && grand_total_devices_eps > 2500 ) {
        msg = ( 1610612736 * field_values[ 'slides' ][ 'misc' ][ 'fields' ][ 'virtual_or_physical' ][ 'standard_loggers' ] ) / K24;
    } else if ( field_values[ 'slides' ][ 'misc' ][ 'fields' ][ 'virtual_or_physical' ][ 'math_value' ] === 2 && field_values[ 'slides' ][ 'misc' ][ 'fields' ][ 'compression_ratio' ][ 'raw' ] >= 1 && grand_total_devices_eps > 2500 ) {
        msg = ( 1610612736 * field_values[ 'slides' ][ 'misc' ][ 'fields' ][ 'virtual_or_physical' ][ 'standard_loggers' ] ) / K24;
    } else {
        msg = 'VIRTUAL or HARDWARE OPTION REQUIRED';
    }
    return msg;
}
