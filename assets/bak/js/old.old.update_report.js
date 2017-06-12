function update_report() {
    var report_section = document.getElementById( 'report_wrapper_inner' );
    report_section.innerHTML = '';
    var servers_rep_list = document.createElement( 'ul' );
    servers_rep_list.appendChild( build_slide_title_row( field_values['servers'].title ) );

    for ( var field in field_values['servers']['fields'] ) {
        if( field_values['servers']['fields'][field]['raw'] != 0 ) {
            servers_rep_list.appendChild( build_field_row( field_values['servers']['fields'][field]['title'],
                field_values['servers']['fields'][field]['raw'],
                field_values['servers']['fields'][field]['calc'] ) ) ; } }

    servers_rep_list.appendChild( build_slide_total_row( total_servers, total_servers_eps ) );

    var network_devices_rep_list = document.createElement( 'ul' );

    network_devices_rep_list.appendChild( build_slide_title_row( field_values['network_devices'].title ) );

    for ( var field in field_values['network_devices']['fields'] ) {
        if( Number( field_values['network_devices']['fields'][field]['raw'] ) != 0 ) {
            network_devices_rep_list.appendChild( build_field_row(field_values['network_devices']['fields'][field]['title'],
                field_values['network_devices']['fields'][field]['raw'],
                field_values['network_devices']['fields'][field]['calc'] ) ) ; } }

    network_devices_rep_list.appendChild( build_slide_total_row( total_network_devices, total_network_devices_eps ) );

    var users_rep_list = document.createElement( 'ul' );

    users_rep_list.appendChild( build_slide_title_row( field_values['users'].title,
        'Users',
        '&nbsp;' ) );

    for ( var field in field_values['users']['fields'] ) {
        if( field_values['users']['fields'][field]['raw'] != 0 ) {
            users_rep_list.appendChild( build_field_row( field_values['users']['fields'][field]['title'],
                field_values['users']['fields'][field]['raw'] ) ) ; } }

    users_rep_list.appendChild( build_slide_total_row( total_users ) );
    var devices_rep_list = document.createElement( 'ul' );
    devices_rep_list.appendChild( build_slide_title_row( field_values['devices'].title,
        'Devices',
        '&nbsp;' ) );

    for ( var field in field_values['devices']['fields'] ) {
        if( field_values['devices']['fields'][field]['raw'] != 0 ) {
            devices_rep_list.appendChild( build_field_row( field_values['devices']['fields'][field]['title'],
                field_values['devices']['fields'][field]['raw'] ) ) ; } }

    devices_rep_list.appendChild( build_slide_total_row( total_devices ) );
    var network_data_rep_list = document.createElement( 'ul' );
    network_data_rep_list.appendChild( build_slide_title_row( field_values['network_data'].title,
        'Devices',
        '&nbsp;' ) );

    for ( var field in field_values['network_data']['fields'] ) {
        if( field_values['network_data']['fields'][field]['raw'] != 0 ) {
            network_data_rep_list.appendChild( build_field_row( field_values['network_data']['fields'][field]['title'],
                field_values['network_data']['fields'][field]['raw'] ) ) ; } }

    var misc_rep_list = document.createElement( 'ul' );

    misc_rep_list.style.marginTop = '15px';
    misc_rep_list.appendChild( build_slide_title_row( field_values['misc'].title,
        '&nbsp;',
        '&nbsp;' ) );
    misc_rep_list.appendChild( build_field_row( field_values['misc']['fields']['compression_ratio']['title'],
        field_values['misc']['fields']['compression_ratio']['raw'] + ':1' ) );
    misc_rep_list.appendChild( build_field_row( field_values['misc']['fields']['avg_msg_size']['title'],
        field_values['misc']['fields']['avg_msg_size']['raw'] + ' KB' ) );
    misc_rep_list.appendChild( build_field_row( field_values['misc']['fields']['standard_loggers']['title'],
        field_values['misc']['fields']['standard_loggers']['raw'] ) );

    if( field_values['misc']['fields']['other_eps']['raw'] != 0 ) {
        misc_rep_list.appendChild( build_field_row( field_values['misc']['fields']['other_eps']['title'],
            field_values['misc']['fields']['other_eps']['raw'] ) );
    }

    if( field_values['misc']['fields']['virtual_or_physical']['raw'] == 1 ) {
        misc_rep_list.appendChild( build_field_row( 'Appliance Type',
            'Virtual' ) );
    } else {
        misc_rep_list.appendChild( build_field_row( 'Appliance Type',
            'Phyical' ) );
    }

    if( field_values['misc']['fields']['usage_pattern']['raw'] == 1 ) {
        misc_rep_list.appendChild( build_field_row( 'Usage Pattern',
            '24X7' ) );
    } else {
        misc_rep_list.appendChild( build_field_row( 'Usage Pattern',
            '5X8' ) );
    }

    var eps_table = document.createElement( 'ul' );
    var msg_size = field_values['misc']['fields']['avg_msg_size']['raw'];
    var cratio = field_values['misc']['fields']['compression_ratio']['raw'];

    eps_table.className = 'eps_table_list';
    eps_table.appendChild( build_eps_table_row( '&nbsp;',
        'Est. Events',
        'Est. Storage',
        '&nbsp;',
        true ) );
    eps_table.appendChild( build_eps_table_row( '&nbsp;',
        '&nbsp;',
        'Raw',
        'Compressed' ) );

    eps_table.appendChild( build_eps_table_row( 'Events/Second',
        grand_total_devices_eps,
        round_pretty( kb_to_mb( grand_total_devices_eps * msg_size ) ) + ' MB',
        round_pretty( kb_to_mb( ( grand_total_devices_eps * msg_size ) / cratio ) ) + ' MB' ) );
        console.log(grand_total_devices_eps);

    eps_table.appendChild( build_eps_table_row( 'Events/Hour',
        per_hour( grand_total_devices_eps ),
        round_pretty( kb_to_mb( per_hour( grand_total_devices_eps * msg_size ) ) ) + ' MB',
        round_pretty( kb_to_mb( per_hour( ( grand_total_devices_eps * msg_size ) / cratio ) ) ) + ' MB' ) );

    eps_table.appendChild(build_eps_table_row( 'Events/Day',
        per_day( grand_total_devices_eps ),
        round_pretty( kb_to_gb( per_day( grand_total_devices_eps * msg_size ) ) ) + ' GB',
        round_pretty( kb_to_gb( per_day( ( grand_total_devices_eps * msg_size ) / cratio ) ) ) + ' GB' ) );

    eps_table.appendChild(build_eps_table_row( 'Events/Month',
        per_month( grand_total_devices_eps ),
        round_pretty( kb_to_tb( per_month( grand_total_devices_eps * msg_size ) ) ) + ' TB',
        round_pretty( kb_to_tb( per_month( ( grand_total_devices_eps * msg_size ) / cratio ) ) ) + ' TB' ) );

    eps_table.appendChild(build_eps_table_row( 'Events/Year',
        per_year(grand_total_devices_eps),
        round_pretty( kb_to_tb( per_year( grand_total_devices_eps * msg_size ) ) ) + ' TB',
        round_pretty( kb_to_tb( per_year( ( grand_total_devices_eps * msg_size ) / cratio ) ) ) + ' TB' ) );

    var reco_box = document.createElement( 'ul' );
    var reco_header = document.createElement( 'li' );
    var reco_a = document.createElement( 'li' );
    var reco_b = document.createElement( 'li' );
    var reco_c = document.createElement( 'li' );
    reco_box.id = 'reco_box';
    reco_header.id = 'reco_header';
    reco_a.id = 'reco_a';
    reco_b.id = 'reco_b';
    reco_c.id = 'reco_c';
    reco_header.innerHTML = 'RECOMMENDED SETUP';
    reco_box.appendChild( reco_header );
    reco_a.innerHTML = line1();
    reco_box.appendChild( reco_a );
    reco_b.innerHTML = line2();
    reco_box.appendChild( reco_b );
    report_section.appendChild( servers_rep_list );
    report_section.appendChild( network_devices_rep_list );
    report_section.appendChild( devices_rep_list );
    report_section.appendChild( build_field_row( '&nbsp;',
        '&nbsp;',
        '&nbsp;',
        '&nbsp;' ) );
    report_section.appendChild( build_deployment_total_row( grand_total_devices,
        grand_total_devices_eps ) );
    report_section.appendChild( users_rep_list );
    report_section.appendChild( network_data_rep_list );
    report_section.appendChild( misc_rep_list );
    report_section.appendChild( eps_table );
    report_section.appendChild( reco_box );

    //console.log(grand_total_devices_eps);
}

// round_pretty(num) => rounds and limites decimal places to two
function round_pretty( num ) {
    return Math.round( num * 100 ) / 100;
}

// Time conversion functions
function per_hour( num ) {
    return ( num * 60 ) * 60;
}
function per_day( num ) {
    return per_hour( num ) * 24;
}
function per_month( num ) {
    return per_day( num ) * 30;
}
function per_year( num ) {
    return per_day( num ) * 365;
}

// Data size conversion functions

// KB functions
function kb_to_mb( kb ) {
    return kb / 1024;
}
function kb_to_gb( kb ) {
    return kb_to_mb( kb ) / 1024;
}
function kb_to_tb( kb ) {
    return kb_to_gb( kb ) / 1024;
}

// MB functions
function mb_to_gb( mb ) {
    return mb / 1024;
}
function mb_to_tb( mb ) {
    return mb_to_gb( mb ) / 1024;
}
function mb_to_kb( mb ) {
    return mb * 1024;
}

// GB functions
function gb_to_tb( gb ) {
    return gb / 1024;
}
function gb_to_mb( gb ) {
    return gb * 1024;
}
function gb_to_kb( gb ) {
    return gb_to_mb( gb ) * 1024;
}

// TB functions
function tb_to_gb( tb ) {
    return tb * 1024;
}
function tb_to_mb( tb ) {
    return tb_to_gb( tb ) * 1024;
}
function tb_to_kb( tb ) {
    return tb_to_mb( tb ) * 1024;
}

function build_eps_table_row( col1, col2, col3, col4, combined = false ) {
    var li = document.createElement( 'li' );
    var col1_span = document.createElement( 'span' );
    col1_span.className = 'eps_col1';
    col1_span.innerHTML = col1;
    var col2_span = document.createElement( 'span' );
    col2_span.className = 'eps_col2';
    col2_span.innerHTML = col2;
    li.appendChild( col1_span );
    li.appendChild( col2_span );
    var col3_span = document.createElement( 'span' );
    col3_span.innerHTML = col3;
    if( combined == false ) {
        var col4_span = document.createElement( 'span' );
        col3_span.className = 'eps_col3';
        col4_span.className = 'eps_col4';
        col4_span.innerHTML = col4;
        li.appendChild( col3_span );
        li.appendChild( col4_span );
    } else {
        li.appendChild( col3_span );
        col3_span.className = 'eps_col3_coMBined';
    }
    return li;
}
function build_deployment_total_row( raw, calc = '&nbsp;' ) {
    var li = document.createElement( 'li' );
    var label_span = document.createElement( 'span' );
    var raw_span = document.createElement( 'span' );
    var calc_span = document.createElement( 'span' );
    var note_span = document.createElement( 'span' );
    label_span.className = 'report_total_label';
    raw_span.className = 'report_total_number';
    calc_span.className = 'report_total_number';
    label_span.innerHTML = 'Deployment Total:';
    raw_span.innerHTML = raw;
    calc_span.innerHTML = calc;
    note_span.innerHTML = '&nbsp;';
    li.style.marginBottom = '30px';
    li.style.borderTop = '1px solid black';
    li.style.paddingTop = '15px';
    li.style.borderBottom = '1px solid black';
    li.style.paddingBottom = '15px';
    li.appendChild( label_span );
    li.appendChild( raw_span );
    li.appendChild( calc_span );
    li.appendChild( note_span );
    return li;
}
function build_field_row( label, raw, calc = '&nbsp;', note = '&nbsp;' ) {
    var li = document.createElement( 'li' );
    var label_span = document.createElement( 'span' );
    var raw_span = document.createElement( 'span' );
    var calc_span = document.createElement( 'span' );
    var note_span = document.createElement( 'span' );
    li.className = 'report_field_row_li';
    label_span.className = 'report_field_label';
    raw_span.className = 'report_field_number';
    calc_span.className = 'report_field_number';
    label_span.innerHTML = label;
    raw_span.innerHTML = raw;
    calc_span.innerHTML = calc;
    note_span.innerHTML = note;
    li.appendChild( label_span );
    li.appendChild( raw_span );
    li.appendChild( calc_span );
    li.appendChild( note_span );
    return li;
}
function build_slide_title_row( label, raw = 'Devices', calc = 'EPS', note = '&nbsp;' ) {
    var li = document.createElement( 'li' );
    var label_span = document.createElement( 'span' );
    var raw_span = document.createElement( 'span' );
    var calc_span = document.createElement( 'span' );
    var note_span = document.createElement( 'span' );
    li.className = 'report_slide_li';
    label_span.className = 'report_slide_label';
    raw_span.className = 'report_slide_header';
    calc_span.className = 'report_slide_header';
    label_span.innerHTML = label;
    raw_span.innerHTML = raw;
    calc_span.innerHTML = calc;
    /*note_span.innerHTML = note;*/
    li.appendChild( label_span );
    li.appendChild( raw_span );
    li.appendChild( calc_span );
    li.appendChild( note_span );
    return li;
}
function build_slide_total_row( raw, calc = '&nbsp;' ) {
    var li = document.createElement( 'li' );
    var label_span = document.createElement( 'span' );
    var raw_span = document.createElement( 'span' );
    var calc_span = document.createElement( 'span' );
    var note_span = document.createElement( 'span' );
    label_span.className = 'report_slide_total_label';
    raw_span.className = 'report_slide_total_number';
    calc_span.className = 'report_slide_total_number';
    label_span.innerHTML = 'Total:';
    raw_span.innerHTML = raw;
    calc_span.innerHTML = calc;
    note_span.innerHTML = '&nbsp;';
    li.style.marginBottom = '20px';
    li.appendChild( label_span );
    li.appendChild( raw_span );
    li.appendChild( calc_span );
    li.appendChild( note_span );
    return li;
}
