function update_numbers() {
  total_servers = 0,
  total_servers_eps = 0,
  total_network_devices = 0,
  total_network_devices_eps = 0,
  total_devices = 0,
  total_devices_eps = 0,
  grand_total_devices = 0,
  grand_total_devices_eps = 0,
  total_users = 0,
  total_users_eps = 0,
  non_dom_users = 0,
  total_network_data = 0,
  external_users = 0,
  weight = 0;


  field_values[ 'grand_totals' ] = {};
  for ( var slide in field_values[ 'slides' ] ) {
    var this_slide = field_values[ 'slides' ][ slide ];
    this_slide[ 'total' ] = 0;
    this_slide[ 'commatized_total' ] = '';
    for ( var field in this_slide[ 'fields' ] ) {
      var this_field = this_slide[ 'fields' ][ field ];
      if( field !== 'virtual_or_physical' && field !== 'usage_pattern' ) {
        var elem = document.getElementById( 'number-' + field );
        this_field[ 'raw' ] = elem.valueAsNumber;
        this_field[ 'commatized_raw' ] = commatize( this_field[ 'raw' ] );
      } else {
        var elem = document.getElementById( field );
        this_field[ 'raw' ] = elem.options[ elem.selectedIndex ].text;
        this_field[ 'commatized_raw' ] = this_field[ 'raw' ];
      }
      if ( this_slide[ 'sum_raw' ] == 1 ) {
        window[ 'total_' + slide ] += this_field[ 'raw' ];
      }
      if ( typeof this_field[ 'raw' ] !== 'string' ){
        this_slide[ 'total' ] += this_field[ 'raw' ];
        window[ 'total_' + this_slide[ 'handle' ] ] = this_slide[ 'total' ];
      }

      if ( this_field[ 'global' ] == 1 ) {
        window[ this_field[ 'handle' ] ] = this_field[ 'raw' ];
        other_globals[ this_field[ 'handle' ] ] = this_field[ 'raw' ];
      }
    }
    if ( this_slide[ 'add_to_total' ] == 1 ) {
      grand_total_devices += this_slide[ 'total' ];
    }
    this_slide[ 'commatized_total' ] = commatize( this_slide[ 'total' ] );
    field_values[ 'grand_totals' ][ 'devices' ] = grand_total_devices;
    field_values[ 'grand_totals' ][ 'commatized_devices' ] = commatize( grand_total_devices );
  }
  for ( var slide in field_values[ 'slides' ] ) {
    var this_slide = field_values[ 'slides' ][ slide ];
    this_slide[ 'total_eps' ] = 0;
    this_slide[ 'commatized_total_eps' ] = '';
    for ( var field in this_slide[ 'fields' ] ) {
      var this_field = this_slide[ 'fields' ][ field ];

      if( field_functions[ slide + '-' + field ] ) {
        this_field[ 'calc' ] = field_functions[ slide + '-' + field ]( field_values );
        this_field[ 'commatized_calc' ] = commatize( this_field[ 'calc' ] );
      } else {
        this_field[ 'calc' ] = this_field[ 'raw' ];
        this_field[ 'commatized_calc' ] = commatize( this_field[ 'calc' ] );
      }
      if ( this_slide[ 'sum_calc' ] == 1 ) {
        window[ 'total_' + slide + '_eps' ] += this_field[ 'calc' ];
        this_slide[ 'total_eps' ] = window[ 'total_' + slide + '_eps' ];
        this_slide[ 'commatized_total_eps' ] = commatize( this_slide[ 'total_eps' ] );
      }
    }

    if ( this_slide[ 'add_to_eps_total' ] == 1 ) {
      grand_total_devices_eps += this_slide[ 'total_eps' ];
    }
  }
  grand_total_devices_eps += field_values[ 'slides' ][ 'misc' ][ 'fields' ][ 'other_eps' ][ 'raw' ];
  field_values[ 'grand_totals' ][ 'eps' ] = grand_total_devices_eps;
  field_values[ 'grand_totals' ][ 'commatized_eps' ] = commatize( grand_total_devices_eps );
  update_eps_vals();
  update_recommendations();
  update_report();
  console.log( field_values );
  //console.clear();
  /*
  console.log( grand_total_devices );
  console.log( field_values );
  console.table( field_values['slides'] );
  console.table( field_values['grand_totals'] );
  console.table( field_values['eps_vals'] );
  console.table( field_values['recommendations'] );
  console.table( field_values );
  */
}

// EPS table values being made a part of the virtual dom structure
function update_eps_vals() {
  var eps_table = {},
    msg_size = field_values[ 'slides' ][ 'misc' ][ 'fields' ][ 'avg_msg_size' ][ 'raw' ],
    cratio = field_values[ 'slides' ][ 'misc' ][ 'fields' ][ 'compression_ratio' ][ 'raw' ];

    eps_table = {
      'per_second': {
        'events': commatize( grand_total_devices_eps ),
        'raw': (grand_total_devices_eps * msg_size),
        'uncompressed': best_unit( grand_total_devices_eps * msg_size ),
        'compressed': best_unit( ( grand_total_devices_eps * msg_size ) / cratio )
      },
      'per_hour': {
        'events': commatize( per_hour( grand_total_devices_eps ) ),
        'raw': per_hour( grand_total_devices_eps * msg_size ),
        'uncompressed': best_unit( per_hour( grand_total_devices_eps * msg_size ) ),
        'compressed': best_unit( per_hour( ( grand_total_devices_eps * msg_size ) / cratio ) )
      },
      'per_day': {
        'events': commatize( per_day( grand_total_devices_eps ) ),
        'raw': per_day( grand_total_devices_eps * msg_size ),
        'uncompressed': best_unit( per_day( grand_total_devices_eps * msg_size ) ),
        'compressed': best_unit( per_day( ( grand_total_devices_eps * msg_size ) / cratio ) )
      },
      'per_month': {
        'events': commatize( per_month( grand_total_devices_eps ) ),
        'raw': per_month( grand_total_devices_eps * msg_size ),
        'uncompressed': best_unit( per_month( grand_total_devices_eps * msg_size ) ),
        'compressed': best_unit( per_month( ( grand_total_devices_eps * msg_size ) / cratio ) )
      },
      'per_year': {
        'events': commatize( per_year(grand_total_devices_eps) ),
        'raw': per_year( grand_total_devices_eps * msg_size ),
        'uncompressed': best_unit( per_year( grand_total_devices_eps * msg_size ) ),
        'compressed': best_unit( per_year( ( grand_total_devices_eps * msg_size ) / cratio ) )
      }
    };

    field_values[ 'eps_vals' ] = eps_table;
}

function update_recommendations() {
  var recommendations = {};

  recommendations = {
    'line_1': line1(),
    'line_2': line2()
  };

  field_values[ 'recommendations' ] = recommendations;
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

// B functions
function b_to_kb( b ) {
  return up_order( b );
}
function b_to_mb( b ) {
  return up_order( up_order( b ) );
}
function b_to_gb( b ) {
  return up_order( up_order( up_order( b ) ) );
}
function b_to_tb( b ) {

}
// KB functions
function kb_to_mb( kb ) {
  return up_order( kb );
}
function kb_to_gb( kb ) {
  return up_order( up_order( kb ) );
}
function kb_to_tb( kb ) {
  return up_order( up_order( up_order( kb ) ) );
}

// MB functions
function mb_to_gb( mb ) {
  return up_order( mb );
}
function mb_to_tb( mb ) {
  return up_order( up_order( mb ) );
}
function mb_to_kb( mb ) {
  return down_order( mb );
}

// GB functions
function gb_to_tb( gb ) {
  return up_order( gb );
}
function gb_to_mb( gb ) {
  return down_order( gb );
}
function gb_to_kb( gb ) {
  return down_order( down_order( gb ) );
}

// TB functions
function tb_to_gb( tb ) {
  return down_order( tb );
}
function tb_to_mb( tb ) {
  return down_order( down_order( tb ) );
}
function tb_to_kb( tb ) {
  return down_order( down_order( down_order( tb ) ) );
}

function up_order( num ) {
  return num / 1024;
}

function down_order( num ) {
  return num * 1024;
}

function best_unit( num ) {
  if ( num ) {
    var units = [];
    units[ 0 ] = 'B';
    units[ 1 ] = 'KiB',
    units[ 2 ] = 'MiB',
    units[ 3 ] = 'GiB',
    units[ 4 ] = 'TiB',
    units[ 5 ] = 'PiB',
    units[ 6 ] = 'EiB',
    units[ 7 ] = 'ZiB',
    units[ 8 ] = 'YiB';
    for ( var i = 0 ; i < units.length ; i++ ) {
      if ( num > 1024 ) {
        num = up_order( num );
      } else {
        num = round_pretty( num ) + ' ' + units[ i ];
        break;
      }
    }
    return num;
  }
}

function commatize( num = 0 ) {
  var num_array = String( num ).split( '' ),
    res = '',
    n = 0;
  if ( typeof ( num ) === 'number' ) {
    while ( num_array.length > 0 ) {
      if ( n === 3 ) {
        res = ',' + res;
        n = 1;
      } else {
        n += 1;
      }
      res = num_array.pop() + String( res );
    }
  } else {
    res = num;
  }
  return res;
}
