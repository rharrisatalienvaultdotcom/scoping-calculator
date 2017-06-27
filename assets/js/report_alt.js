function update_report() {
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
  document.getElementById( 'report_total' ).getElementsByTagName( 'span' )[2].innerHTML = strct[ 'ctotal' ][ 'calc' ];
  document.getElementById( 'report_total' ).getElementsByTagName( 'span' )[3].innerHTML = best_unit( strct[ 'ctotal' ][ 'stor' ] );
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
                row[ e ].innerHTML = best_unit( cvals[ v ] );
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
            row[ e ].innerHTML = best_unit( sum[ v ] );
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
        target.innerHTML = iElem.options[ fid.selectedIndex ].text;
        result = iElem.options[ fid.selectedIndex ].text;
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
            if ( Number( fv.innerHTML.replace( /,/g, '' ) ) > 0 && Number( fv.innerHTML.replace( /,/g, '' ) ) !== 'NaN' ) {
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
