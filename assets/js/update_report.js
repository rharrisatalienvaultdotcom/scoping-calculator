
function update_report() {
  if ( field_values ) {
    var wrapper = document.getElementById( 'report_wrapper_inner' ),
      numberedSlides = [];

    wrapper.innerHTML = '';

    for ( var slide in field_values[ 'slides' ] ) {
      numberedSlides[ field_values[ 'slides' ][ slide ][ 'position' ] ] = slide;
    }

    for ( var n = 0 ; n < numberedSlides.length ; n++ ) {
      var slide = numberedSlides[ n ],
        this_slide = field_values[ 'slides' ][ numberedSlides[ n ] ];
      //console.log( slide );
      if ( this_slide[ 'add_to_total' ] == 1 && this_slide[ 'total' ] > 0 ) {
        wrapper.appendChild( build_section( slide ) );
      }
    }
    if ( field_values[ 'grand_totals' ][ 'devices' ] !== 0 ) {
      wrapper.appendChild( grand_total_row() );
    }


    for ( var n = 0 ; n < numberedSlides.length ; n++ ) {
      var slide = numberedSlides[ n ];
      if ( field_values[ 'slides' ][ slide ][ 'add_to_total' ] == 0 && field_values[ 'slides' ][ slide ][ 'total' ] > 0 ) {
        wrapper.appendChild( build_section( slide ) );
      }
    }
    if ( !field_values[ 'slides' ][ 'cloud_services_aws' ]) {
      wrapper.appendChild( build_eps_table() );
      wrapper.appendChild( recommends() );
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
  b = field_values[ 'grand_totals' ][ 'commatized_devices' ];
  c = field_values[ 'grand_totals' ][ 'commatized_eps' ];
  tmp = srow( a, b, c );
  tmp.classList.add( 'grand_total' );
  tmp.id = 'report-grand_total';
  ul.classList.add( 'report_slide' );

  li.appendChild( tmp );
  ul.appendChild( li );

  return ul;

}

function build_section( slide ) {
  var ul = document.createElement( 'ul' ),
    header = document.createElement( 'li' ),
    total = document.createElement( 'li' ),
    numberedFields = [],
    this_slide = field_values[ 'slides' ][ slide ],
    tmp, a, b, c, d;

  for ( var field in this_slide[ 'fields' ] ) {
    numberedFields[ this_slide[ 'fields' ][ field ][ 'position' ] ] = field;
  }

  ul.classList.add( 'report_slide' );
  ul.id = 'report-' + this_slide[ 'handle' ];

  a = this_slide[ 'title' ];
  if ( this_slide[ 'add_to_total' ] == 1 ) {
    if ( this_slide[ 'handle' ] == 'cloud_services_aws' || this_slide[ 'handle' ] == 'cloud_services_azure') {
      b = 'EPM';
    } else {
      b = 'Devices';
    }
  } else {
    b = '&nbsp;';
  }

  if ( this_slide[ 'add_to_eps_total' ] == 1 ) {
    if ( this_slide[ 'handle' ] == 'cloud_services_aws' || this_slide[ 'handle' ] == 'cloud_services_azure' || this_slide[ 'handle' ] == 'on_prem_summary') {
      c = 'Est. Storage';
    } else {
      c = 'EPS';
    }
  } else {
    c = '&nbsp;';
  }
  tmp = srow( a, b, c );
  tmp.classList.add( 'header' );
  tmp.id = 'report-header-' + this_slide[ 'handle' ];
  header.appendChild( tmp );
  ul.appendChild( header );

  for ( var i = 0 ; i < numberedFields.length ; i++ ) {
    //var field = numberedFields[ i ];
    var this_field = this_slide[ 'fields' ][ numberedFields[ i ] ];
    //a = this_slide[ 'fields' ][ field ][ 'title' ];
    a = this_field[ 'title' ];
    //b = this_slide[ 'fields' ][ field ][ 'raw' ];
    b = this_field[ 'commatized_raw' ];
    if ( b > 0 || ( typeof b === 'string' && b !== '0' && b !== '' && b !== '&nbsp;' ) ) {
      if ( this_slide[ 'add_to_eps_total' ] == 1 ) {
        //c = this_slide[ 'fields' ][ field ][ 'calc' ];
        c = this_field[ 'commatized_calc' ];
      } else {
        c = '&nbsp;';
      }
      tmp = document.createElement( 'li' );
      tmp.appendChild( srow( a, b, c ) );
      tmp.firstElementChild.id = 'report-' + slide + '-' + field;
      ul.appendChild( tmp );
    }
  }

  if ( this_slide[ 'sum_raw' ] == 1 || this_slide[ 'sum_calc' ] ) {
    a = 'Total:';
  if ( this_slide[ 'sum_raw' ] == 1 ) {
    b = this_slide[ 'commatized_total' ];
  } else {
    b = '&nbsp;';
  }
  if ( this_slide[ 'sum_calc' ] == 1 ) {
    c = this_slide[ 'commatized_total_eps' ];
  } else {
    c = '&nbsp;';
  }
  if ( ( typeof b === 'number' && b > 0 ) || ( typeof c === 'number' && c > 0 ) || ( typeof b === 'string' && b !== '0' ) || ( typeof c === 'string' && c !== '0' ) ) {
    tmp = srow( a, b, c );
    tmp.id = 'report-' + slide + '-total';
    tmp.classList.add( 'total' );
    total.appendChild( tmp );
    ul.appendChild( total );
  }
  }
  //console.log( ul );
  return ul;
}

function build_eps_table() {
  var ul = document.createElement( 'ul' ),
    li = document.createElement( 'li' ),
    tmp, a, b, c, d;

  if ( field_values[ 'eps_vals '] ) {
    ul.classList.add( 'eps_table' );

    tmp = srow( '&nbsp;', 'Est. Events', 'Est. Storage' );
    tmp.classList.add( 'header' );
    li.appendChild( tmp );
    ul.appendChild( li );

    tmp = srow( '&nbsp;', '&nbsp;', 'Raw', 'Compressed' );
    tmp.classList.add( 'subheader' );
    li = document.createElement( 'li' );
    li.appendChild( tmp );
    ul.appendChild( li );

    a = 'Events/Second';
    b = field_values[ 'eps_vals' ][ 'per_second' ][ 'events' ] || 0;
    c = field_values[ 'eps_vals' ][ 'per_second' ][ 'uncompressed' ] || 0;
    d = field_values[ 'eps_vals' ][ 'per_second' ][ 'compressed' ] || '0';
    li = document.createElement( 'li' );
    li.appendChild( srow( a, b, c, d ) );
    ul.appendChild( li );

    a = 'Events/Hour&nbsp;&nbsp;&nbsp;&nbsp;';
    b = field_values[ 'eps_vals' ][ 'per_hour' ][ 'events' ] || 0;
    c = field_values[ 'eps_vals' ][ 'per_hour' ][ 'uncompressed' ] || 0;
    d = field_values[ 'eps_vals' ][ 'per_hour' ][ 'compressed' ] || '0';
    li = document.createElement( 'li' );
    li.appendChild( srow( a, b, c, d ) );
    ul.appendChild( li );

    a = 'Events/Day&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
    b = field_values[ 'eps_vals' ][ 'per_day' ][ 'events' ] || 0;
    c = field_values[ 'eps_vals' ][ 'per_day' ][ 'uncompressed' ] || 0;
    d = field_values[ 'eps_vals' ][ 'per_day' ][ 'compressed' ] || '0';
    li = document.createElement( 'li' );
    li.appendChild( srow( a, b, c, d ) );
    ul.appendChild( li );

    a = 'Events/Month&nbsp;&nbsp;';
    b = field_values[ 'eps_vals' ][ 'per_month' ][ 'events' ] || 0;
    c = field_values[ 'eps_vals' ][ 'per_month' ][ 'uncompressed' ] || 0;
    d = field_values[ 'eps_vals' ][ 'per_month' ][ 'compressed' ] || '0';
    li = document.createElement( 'li' );
    li.appendChild( srow( a, b, c, d ) );
    ul.appendChild( li );

    a = 'Events/Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
    b = field_values[ 'eps_vals' ][ 'per_year' ][ 'events' ] || 0;
    c = field_values[ 'eps_vals' ][ 'per_year' ][ 'uncompressed' ] || 0;
    d = field_values[ 'eps_vals' ][ 'per_year' ][ 'compressed' ] || '0';
    li = document.createElement( 'li' );
    li.appendChild( srow( a, b, c, d ) );
    ul.appendChild( li );
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

function recommends() {
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
  return reco_box;
  }
