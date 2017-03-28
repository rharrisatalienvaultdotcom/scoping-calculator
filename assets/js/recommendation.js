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
        locations = field_values['network_data']['locations']['raw'],
        bandwidth = field_values['network_data']['bandwidth']['raw'],
        branch_offices = field_values['network_data']['small_branches']['raw'];
    if ( locations < 1 && grand_total_devices_eps < 1 && bandwidth < 1 ) {
        msg = '&nbsp;';
    } else if ( locations <= 1 && grand_total_devices_eps < 1000 && bandwidth <= 100 ) {
        msg = ' - NO ADDITIONAL SENSORS NEEDED';
    } else if ( locations <= 150 && grand_total_devices_eps < 1000 && bandwidth >= 100 ) {
        msg = ' - ' + locations + ' x STANDARD SENSORS';
    } else if ( locations > 1 && grand_total_devices_eps <= 1000 && bandwidth <= 100 ) {
        msg = ' - ' + (locations - 1) + ' x REMOTE SENSORS';
    } else if ( locations > 1 && grand_total_devices_eps >= 1000 && grand_total_devices_eps < 2500 && branch_office < 1 && bandwidth <= 100 ) {
        msg = ' - ' + locations + ' x REMOTE SENSORS';
    } else if ( locations > 1 && grand_total_devices_eps >= 1000 && grand_total_devices_eps < 2500 && branch_office > 1 && bandwidth <= 100 ) {
        msg = ' - ' + locations + ' x REMOTE SENSORS';
    } else if ( locations > 1 && grand_total_devices_eps <= 1000 &&  branch_office < 1 && bandwidth <= 100 ) {
        msg = locations + ' x STANDARD SENSORS';
    } else if ( locations > 1 && grand_total_devices_eps <= 1000 &&  branch_office > 0 && bandwidth >= 100 && bandwidth <= 1000 ) {
        msg = ' - ' + ( locations - branch_offices ) + ' x STANDARD SENSORS + ' + branch_offices + ' x REMOTE SENSORS';
    } else if ( locations > 1 && grand_total_devices_eps >= 1000 &&  grand_total_devices_eps < 2500 && bandwidth >= 100 && bandwidth <= 1000 && branch_office > 0 ) {
        msg = ' - ' + ( locations - branch_offices ) + ' x STANDARD SENSORS + ' + branch_offices + ' x REMOTE SENSORS';
    } else if ( locations < 1 && grand_total_devices >= 1000 && bandwidth >= 100 ) {
        msg = ' - ' + locations + ' x STANDARD SENSORS';
    } else if ( grand_total_devices < 2500 && grand_total_devices >= 1000 && bandwidth >= 1000 && bandwidth <= 1000 ) {
        msg = ' - ' + locations + ' x STANDARD SENSORS';
    } else if (grand_total_devices_eps >= 2500 &&  grand_total_devices_eps <= 5000 && locations < 3 && bandwidth <= 1000 && branch_office < 1 ) {
        msg = ' - 2 x STANDARD SENSORS';
    } else if (grand_total_devices_eps >= 2500 &&  grand_total_devices_eps <= 5000 && branch_office < 1 ) {
        msg = ' - ' + location + ' x STANDARD SENSORS';
    } else if (grand_total_devices_eps >= 2500 &&  grand_total_devices_eps <= 5000 && branch_office > 0 ) {
        msg = ' - 2 x STANDARD SENSORS + ' + branch_locations + ' x REMOTE SENSORS' ;
    }  else {
        msg = ' - CONTACT YOUR SE FOR SENSOR RECOMMENDATION';
    }

    return msg;
}

function line3() {
    if ( F50 < 1) {

    } else if ( I34 == 1 && H38 == 0 && F50 <= 2500 ){
        msg = (858993459) / K24;
    } else if ( F50 <= 2500 && I34 === 2 && H38 === 0 ) {
        msg = (1610612736) / K24;
    } else if ( I24 === 1 && H38 === 0 && F50 > 2500 ) {
        msg = (1610612736) / K24;
    } else if ( I34 === 2 && H38 === 0 && F50 > 2500 ) {
        msg = (1610612736) / K24;
    } else if ( I34 === 2 && H38 >= 1 && F50 > 2500 ) {
        msg = (1610612736 * H38) / K24;
    } else if ( I34 === 2 && H38 >= 1 && F50 > 2500 ) {
        msg = (1610612736 * H38) / K24;
    } else {
        msg = 'VIRTUAL or HARDWARE OPTION REQUIRED';
    }
    return msg;
}