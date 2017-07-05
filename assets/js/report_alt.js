function update_report( save = true ) {
  //console.log( 'update_report() called!' );
  //logoa.src += document.URL.split('/').pop().split('_')[0].replace(/\w\S*/g, function( txt ) { return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase(); } );
  if ( strct ) {
    //console.log( 'Processing inputs!' );
    var fid,
        gid,
        totals;
    strct[ 'rvals' ] = {};
    strct[ 'grvals' ] = {};
    strct[ 'gcvals' ] = {};
    for ( var f = 0 ; f < strct[ 'f' ].length ; f++ ) {
      fid = strct[ 'f' ][ f ][ 'parent' ] + '-' + strct[ 'f' ][ f ][ 'handle' ];
      strct[ 'rvals' ][ fid ] = sync_inputs( fid, strct[ 'f' ][ f ][ 'type' ] );
      strct[ 'rvals' ][ fid ] = ( strct[ 'rvals' ][ fid ] === 'undefined' ) ? 0 : strct[ 'rvals' ][ fid ];
    }
    for ( var g = 0 ; g < strct[ 'g' ].length ; g++ ) {
      if ( strct[ 'g' ][ g ][ 'subtotal' ] === '1' ) {
        strct[ 'grvals' ][ strct[ 'g' ][ g ][ 'handle' ] ] = {};
        strct[ 'grvals' ][ strct[ 'g' ][ g ][ 'handle' ] ] = sum_group( strct[ 'g' ][ g ][ 'handle' ] );
      }
    }
    raw_total();
    calculate();
    for ( var g = 0 ; g < strct[ 'g' ].length ; g++ ) {
      if ( strct[ 'g' ][ g ][ 'subtotal' ] === '1' ) {
        strct[ 'gcvals' ][ strct[ 'g' ][ g ][ 'handle' ] ] = {};
        strct[ 'gcvals' ][ strct[ 'g' ][ g ][ 'handle' ] ] = csum_group( strct[ 'g' ][ g ][ 'handle' ] );
      }
    }
    calc_total();
    check_display();
    prettify_numbers();
    make_recommendation();
    if ( typeof( save_log ) == 'function' && save === true ) {
      save_log();
    }
  }
}

function make_recommendation() {
  var storage = strct[ 'ctotal' ][ 'stor' ] * 1.2,
      instances = strct[ 'rvals' ][ 'amazon_aws-ecc_instances' ] + strct[ 'rvals' ][ 'microsoft_azure-subscription_ids' ],
      locations = strct[ 'rvals' ][ 'on_prem_summary-locations_with_net_access'],
      sensors = instances + locations,
      storage_tier;

      if ( b_to_gb( storage ) < 250 ) {
        storage_tier = '250GB';
      } else if ( b_to_gb( storage ) > 250 && b_to_gb( storage ) < 500 ) {
        storage_tier = '500GB';
      } else if ( b_to_gb( storage ) > 500 && b_to_tb( storage ) < 1 ) {
        storage_tier = '1TB';
      } else if ( b_to_tb( storage ) > 1 && b_to_tb( storage ) < 2 ) {
        storage_tier = '2TB';
      } else if ( b_to_tb( storage ) > 2 && b_to_tb( storage ) < 3 ) {
        storage_tier = '3TB';
      } else if ( b_to_tb( storage ) > 3 && b_to_tb( storage ) < 4 ) {
        storage_tier = '4TB';
      } else if ( b_to_tb( storage ) > 4 && b_to_tb( storage ) < 5 ) {
        storage_tier = '5TB';
      } else if ( b_to_tb( storage ) > 5 && b_to_tb( storage ) < 6 ) {
        storage_tier = '6TB';
      } else if ( b_to_tb( storage ) > 6 && b_to_tb( storage ) < 7 ) {
        storage_tier = '7TB';
      } else if ( b_to_tb( storage ) > 7 && b_to_tb( storage ) < 8 ) {
        storage_tier = '8TB';
      } else if ( b_to_tb( storage ) > 8 && b_to_tb( storage ) < 9 ) {
        storage_tier = '9TB';
      } else if ( b_to_tb( storage ) > 9 && b_to_tb( storage ) < 10 ) {
        storage_tier = '10TB';
      } else {
        storage_tier = best_unit( storage );
      }
      strct[ 'rec' ] = {};
      strct[ 'rec' ][ 'sensors' ] = sensors;
      strct[ 'rec' ][ 'storage_tier' ] = storage_tier;
      if ( document.getElementById( 'reco_sensor_count' ) ) {
        document.getElementById( 'reco_sensor_count' ).innerHTML = sensors;
      }
      if ( document.getElementById( 'reco_storage_tier' ) ) {
        document.getElementById( 'reco_storage_tier' ).innerHTML = storage_tier;
      }
}

function prettify_numbers() {
  var rows = document.getElementsByClassName( 'report_row' );
  for ( var r = 0; r < rows.length ; r++ ) {
    var spans = rows[r].getElementsByTagName( 'span' );
    spans[ 1 ].innerHTML = ( ! isNaN( Number( spans[ 1 ].innerHTML ) ) && ! spans[ 1 ].classList.contains( 'empty' ) ) ? commatize( round_pretty( Number( spans[ 1 ].innerHTML ) ) ) : spans[ 1 ].innerHTML;
    spans[ 2 ].innerHTML = ( ! isNaN( Number( spans[ 2 ].innerHTML ) ) && ! spans[ 2 ].classList.contains( 'empty' ) ) ? commatize( round_pretty( Number( spans[ 2 ].innerHTML ) ) ) : spans[ 2 ].innerHTML;
    if ( ! isNaN( Number( spans[ 3 ].innerHTML ) ) && ! spans[ 3 ].classList.contains( 'empty' ) ) {
     if ( spans[ 3 ].classList.contains( 'stor' ) ) {
      spans[ 3 ].innerHTML = best_unit( Number( spans[ 3 ].innerHTML ) );
     } else {
      spans[ 3 ].innerHTML = round_pretty( Number( spans[ 3 ].innerHTML ) );
    }
   }
  }
  rows = document.getElementsByClassName( 'report_subtotal' );
  for ( var r = 0; r < rows.length ; r++ ) {
    var spans = rows[r].getElementsByTagName( 'span' );
    spans[ 1 ].innerHTML = ( ! isNaN( Number( spans[ 1 ].innerHTML ) ) && ! spans[ 1 ].classList.contains( 'empty' ) ) ? commatize( round_pretty( Number( spans[ 1 ].innerHTML ) ) ) : spans[ 1 ].innerHTML;
    spans[ 2 ].innerHTML = ( ! isNaN( Number( spans[ 2 ].innerHTML ) ) && ! spans[ 2 ].classList.contains( 'empty' ) ) ? commatize( round_pretty( Number( spans[ 2 ].innerHTML ) ) ) : spans[ 2 ].innerHTML;
    if ( ! isNaN( Number( spans[ 3 ].innerHTML ) ) && ! spans[ 3 ].classList.contains( 'empty' ) ) {
     if ( spans[ 3 ].classList.contains( 'stor' ) ) {
      spans[ 3 ].innerHTML = best_unit( Number( spans[ 3 ].innerHTML ) )
     } else {
      spans[ 3 ].innerHTML = round_pretty( Number( spans[ 3 ].innerHTML ) );
    }
   }
  }
  rows = document.getElementsByClassName( 'report_total' );
  for ( var r = 0; r < rows.length ; r++ ) {
    var spans = rows[r].getElementsByTagName( 'span' );
    spans[ 1 ].innerHTML = ( ! isNaN( Number( spans[ 1 ].innerHTML ) ) && ! spans[ 1 ].classList.contains( 'empty' ) ) ? commatize( round_pretty( Number( spans[ 1 ].innerHTML ) ) ) : spans[ 1 ].innerHTML;
    spans[ 2 ].innerHTML = ( ! isNaN( Number( spans[ 2 ].innerHTML ) ) && ! spans[ 2 ].classList.contains( 'empty' ) ) ? commatize( round_pretty( Number( spans[ 2 ].innerHTML ) ) ) : spans[ 2 ].innerHTML;
    if ( ! isNaN( Number( spans[ 3 ].innerHTML ) ) && ! spans[ 3 ].classList.contains( 'empty' ) ) {
     if ( spans[ 3 ].classList.contains( 'stor' ) ) {
      spans[ 3 ].innerHTML = best_unit( Number( spans[ 3 ].innerHTML ) )
     } else {
      spans[ 3 ].innerHTML = round_pretty( Number( spans[ 3 ].innerHTML ) );
    }
   }
  }
}

function calc_total() {
  strct[ 'ctotal' ] = {};
  for ( var f in strct[ 'rvals' ] ) {
    if ( strct[ 'f' ][ strct[ 'fk' ][ f ] ][ 'gsum' ] === '1' ) {
      for( var v in strct[ 'cvals' ][ f ] ) {
        if ( ! strct[ 'ctotal' ][ v ] ) {
          strct[ 'ctotal' ][ v ] = 0;
        }
        strct[ 'ctotal' ][ v ] += strct[ 'cvals' ][ f ][ v ];
      }
    }
  }
  if( ! strct[ 'ctotal' ][ 'calc' ] ) {
    strct[ 'ctotal' ][ 'calc' ] = 0;
  }
  if( ! strct[ 'ctotal' ][ 'stor' ] ) {
    strct[ 'ctotal' ][ 'stor' ] = 0;
  }
  if( strct[ 'ctotal' ][ 'raw' ] ) {
    strct[ 'ctotal' ][ 'calc' ] += strct[ 'ctotal' ][ 'raw' ];
  }
  document.getElementById( 'report_total' ).getElementsByTagName( 'span' )[2].innerHTML = strct[ 'ctotal' ][ 'calc' ];
  document.getElementById( 'report_total' ).getElementsByTagName( 'span' )[3].innerHTML = strct[ 'ctotal' ][ 'stor' ];
}

function raw_total() {
  strct[ 'rtotal' ] = 0;
  for ( var f in strct[ 'rvals' ] ) {
    if ( strct[ 'f' ][ strct[ 'fk' ][ f ] ][ 'gsum' ] === '1' && strct[ 'f' ][ strct[ 'fk' ][ f ] ][ 'parent' ] == 'on_prem_summary' ) {
      strct[ 'rtotal' ] += strct[ 'rvals' ][ f ];
    }
  }
  document.getElementById( 'report_total' ).getElementsByTagName( 'span' )[1].innerHTML = strct[ 'rtotal' ];
}

function calculate() {
  var cvals,
      row;
  strct[ 'cvals' ] = {};
  for( var f in strct[ 'rvals' ] ) {
    if ( strct[ 'rvals' ][ f ] !== 0 && typeof( strct[ 'rvals' ][ f ] ) !== 'string' ) {
      if ( calculators[ f ] ) {
        cvals = calculators[ f ]();
        strct[ 'cvals' ][ f ] = cvals;
        if ( document.getElementById( 'report_' + f ) !== null ) {
          row = document.getElementById( 'report_' + f ).getElementsByTagName( 'span' );;
          for ( var e = 0 ; e < row.length ; e++ ) {
            for ( var v in cvals ) {
              if ( row[ e ].classList.contains( v ) ) {
                row[ e ].innerHTML = cvals[ v ];
              }
            }
          }
        }
      }
    }
  }
}

function sum_group( gid = null ) {
  if ( gid !== null && strct[ 'rvals' ] !== null ) {
    var sum = 0,
        fids = strct[ 'gfk' ][ strct[ 'gk' ][ gid ] ],
        fkey,
        row,
        val;
    for ( var k = 0 ; k < fids.length ; k++ ) {
      if ( strct[ 'f' ][ fids[ k ] ][ 'sum' ] === '1' ) {
        key = gid + '-' + strct[ 'f' ][ fids[ k ] ][ 'handle' ];
        val = strct[ 'rvals' ][ key ];
        if ( val !== 'NaN' && val !== 'undefined' ) {
          sum += Number( val );
        }
      }
    }
    if ( document.getElementById( 'report_sub_' + gid ) !== null ) {
      row = document.getElementById( 'report_sub_' + gid ),
      fname = strct[ 'g' ][ strct[ 'gk' ][ gid ] ][ 'columns' ][ strct[ 'g' ][ strct[ 'gk' ][ gid ] ][ 'fcolumns' ].indexOf( 'raw' ) ].toLowerCase(),
      field = row.getElementsByClassName( fname )[0];
      if ( field !== null ) {
        field.innerHTML = sum;
      }
    }
    return sum;
  }
}

function csum_group( gid = null ) {
  if ( gid !== null && strct[ 'rvals' ] !== null ) {
    var sum = {},
        fids = strct[ 'gfk' ][ strct[ 'gk' ][ gid ] ],
        fkey,
        row,
        vals;
    for ( var k = 0 ; k < fids.length ; k++ ) {
      if ( strct[ 'f' ][ fids[ k ] ][ 'sum' ] === '1' ) {
        key = gid + '-' + strct[ 'f' ][ fids[ k ] ][ 'handle' ];
        vals = strct[ 'cvals' ][ key ];
        for ( var v in vals ) {
          if ( ! sum[ v ] ) {
            sum[ v ] = 0;
          }
          if ( vals[ v ] !== 'NaN' && vals[ v ] !== 'undefined' ) {
            sum[ v ] += Number( vals[ v ] );
          }
        }
      }
    }
    if ( document.getElementById( 'report_sub_' + gid ) !== null ) {
      row = document.getElementById( 'report_sub_' + gid ).getElementsByTagName( 'span' );
      for ( var e = 0; e < row.length ; e++) {
        for ( var v in sum ) {
          fname = strct[ 'g' ][ strct[ 'gk' ][ gid ] ][ 'columns' ][ strct[ 'g' ][ strct[ 'gk' ][ gid ] ][ 'fcolumns' ].indexOf( v ) ].toLowerCase().replace( /\./g, '' ).replace( /\ /g, '_');
          if ( row[ e ].classList.contains( fname ) ) {
            row[ e ].innerHTML = sum[ v ];
          }
        }
      }
    }
    return sum;
  }
}

function sync_inputs( fid = null, type = null ) {
  if ( fid !== null && type !== null ) {
    var iElem = document.getElementById( fid ),
        target = document.getElementById( 'report_' + fid + '_raw' ),
        result = false;
    if ( target ) {
      if ( type == 'number' ) {
        target.innerHTML = iElem.valueAsNumber;
        result = iElem.valueAsNumber;
      } else if ( type == 'select' ) {
        target.innerHTML = iElem.options[ iElem.selectedIndex ].text;
        result = iElem.options[ iElem.selectedIndex ].text;
      }
    }
  }
    return result;
}

function check_display() {
  var b = 0;
  for ( var g = 0 ; g < strct[ 'gfk' ].length ; g++ ) {
    var t = 0,
        h = 0,
        s = 0,
        gn = strct[ 'g' ][ g ][ 'handle' ];
    for ( var f = 0 ; f < strct[ 'gfk' ][ g ].length ; f++ ) {
      var fid = strct[ 'gfk' ][ g ][ f ],
          fn = strct[ 'f' ][ fid ][ 'handle' ],
          fv = document.getElementById( 'report_' + gn + '-' + fn + '_raw' );
          if( fv !== null ) {
            if ( ( Number( fv.innerHTML.replace( /,/g, '' ) ) > 0 && ! isNaN(Number( fv.innerHTML.replace( /,/g, '' ) ) ) ) || strct[ 'f' ][ fid ][ 'type' ] == 'select' ){
              document.getElementById( 'report_' + gn + '-' + fn ).classList.remove( 'hidden' );
              t = 1;
              if ( strct[ 'f' ][ fid ][ 'sum' ] == '1' ) {
                h = 1;
              }
            } else {
              document.getElementById( 'report_' + gn + '-' + fn ).classList.add( 'hidden' );
            }
          } else {
          }
        }
    if ( t === 1 ) {
        document.getElementById( gn + '_title' ).classList.remove( 'hidden' );
        if ( strct[ 'g' ][ g ][ 'subtotal' ] === '1' && h === 1 ) {
          s = 1;
        }
        b += 1;
    } else {
        h = 0;
        s = 0;
        document.getElementById( gn + '_title' ).classList.add( 'hidden' );
    }
    if ( h === 1 ) {
      document.getElementById( 'report_' + gn + '_headers' ).classList.remove( 'hidden' );;
    } else {
      document.getElementById( 'report_' + gn + '_headers' ).classList.add( 'hidden' );;
    }
    if ( document.getElementById( 'report_sub_' + gn ) !== null ) {
      if ( s === 1 ) {
        document.getElementById( 'report_sub_' + gn ).classList.remove( 'hidden' );;
      } else {
        document.getElementById( 'report_sub_' + gn ).classList.add( 'hidden' );;
      }
    }

  }
  if ( b > 0 ) {
    document.getElementById( 'report_inner_wrapper' ).classList.remove( 'blur' );
  } else {
    document.getElementById( 'report_inner_wrapper' ).classList.add( 'blur' );
  }
}

update_report();
