
function update_report() {
    if ( field_valuess && calc_totals ) {
        var wrapper = document.getElementById( 'report_wrapper_inner' ),
            numberedSlides = {};
        for ( var slide in field_values ) {
            numberedSlides[ field_values[ slide ][ 'position' ] ] = slide;
        }

        for ( var n = 0 ; n < numberedSlides.length ; n++ ) {
            var slide = numberedSlides[ n ];
            if ( field_values[ slide ][ 'add_to_total' ] == 1 && calc_totals[ 'total_' + slide ] > 0 ) {
                wrapper.appendChild( build_section( slide ) );
            }
        }

        wrapper.appendChild( grand_total_row() );

        for ( var n = 0 ; n < numberedSlides.length ; n++ ) {
            var slide = numberedSLides[ n ];
            if ( field_values[ slide ] == 0 ) {
                wrapper.appendChild( build_section( slide ) );
            }
        }
    } else {
        return void(0);
    }
}

function grand_total_row() {
    var ul = document.createElement( 'ul' ),
        li = document.createElement( 'li' ),
        tmp, a, b, c;

    a = 'Deployment Total:';
    b = calc_totals[ 'grand_total_devices' ];
    c = calc_totals[ 'grand_total_devices_eps' ];
    tmp = srow( a, b, c );
    tmp.classList.add( 'grand_total' );
    ul.classList.add( 'report_slide' );

    li.appendChild( tmp );
    ul.appendChild( li );

    return ul;

}
function build_section( slide ) {
    var ul = document.createElement( 'ul' ),
        header = document.createElement( 'li' ),
        total = document.createElement( 'li' ),
        numberedFields = {},
        tmp, a, b, c, d;

    for ( var field in field_values[ slide ][ 'fields' ] ) {
        numberedFields[ field_values[ slide ][ 'fields' ][ field ][ 'position' ] ] = field;
    }

    ul.classList.add( 'report_slide' );

    a = field_values[ slide ][ 'title' ];
    b = 'Devices';
    if ( field_values[ slide ][ 'add_to_eps_total' ] == 1 ) {
        c = 'EPS';
    } else {
        c = '&nbsp;';
    }
    tmp = srow( a, b, c );
    tmp.classList.add( 'header' );
    header.appendChild( tmp );
    ul.appendChild( header );

    for ( var i = 0 ; i < numberedFields.length ; i++ ) {
        var field = numberedFields[ i ];
        a = field_values[ slide ][ 'fields' ][ field ][ 'title' ];
        b = field_values[ slide ][ 'fields' ][ field ][ 'raw' ];
        if ( b > 0 ) {
            if ( field_values[ slide ][ 'add_to_eps_total' ] == 1 ) {
                c = calc_totals[ 'total_' + slide + '_eps' ];
            } else {
                c = '&nbsp;';
            }
            ul.appendChild( srow( a, b, c ) );
        }
    }

    a = 'Total:';
    if ( field_values[ slide ][ 'sum_raw' ] == 1 ) {
        b = calc_totals[ 'total_' + slide ];
    } else {
        b = '&nbsp;';
    }
    if ( field_values[ slide ][ 'sum_calc' ] == 1 ) {
        c = calc_totals[ 'total_' + slide + '_eps' ];
    } else {
        c = '&nbsp;';
    }
    if ( b > 0 || c > 0 ) {
        tmp = srow( a, b, c );
        total.appendChild( tmp );
        ul.appendChild( tmp );
    }

    return ul;
}

function srow( a = '&nsbp;', b = '&nbsp;', c = '&nbsp;', d ) {
    var ul = document.createElement( 'ul' ),
        lbl = simpli( a );
    lbl.classList.add( 'label' );
    ul.appendChild( lbl );
    ul.appendChild( simpli( b ) );
    ul.appendChild( simpli( c ) );
    if ( d ) {
        ul.appendChild( simpli( d ) );
    }
    return ul;
}

function simpli ( a = '&nbsp;' ) {
    var li = document.createElement('li');
    li.innerHTML = a;
    return li;
}
