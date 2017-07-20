(function() {
  if ( check_storage_compatibility() ) {
    if ( check_for_op_key() ) {
      //notification( 'Scoping data loaded for record url ' + current_scoping_id + '.' );
    } else {
      ask_for_op_key();
    }
  } else {
    console.log('Storage object unavailable. Logging unavailable.');
  }
})()

var current_scoping_id;

function check_storage_compatibility() {
  var result;
  if ( typeof( Storage ) !== 'undefined' ) {
    result =  true;
  } else {
    result =  false;
  }
  return result;
}

function check_for_op_key() {
  var op_keys,
      result = false;

  if ( sessionStorage[ 'op_keys_' + product_type ] ) {
    op_keys = JSON.parse( sessionStorage[ 'op_keys_' + product_type ] );
    if ( ! Array.isArray( op_keys ) ) {
      op_keys = [];
    }
    if ( op_keys[0] !== 'undefined' && op_keys[0] !== '' ) {
      current_scoping_id = op_keys[0];
      check_for_existing_scope( current_scoping_id );
      result =  true;
    }
  } else {
    sessionStorage[ 'op_keys_' + product_type ] = '';
  }
  return result;
}

function ask_for_op_key( error = null ) {
  document.getElementById( 'op_key_requester' ).classList.remove( 'hidden' );
  document.getElementById( 'wrapper' ).classList.add( 'blur' );
  document.getElementById( 'tophat' ).classList.add( 'blur' );
}

function showError( error = null ) {
  document.getElementById( 'op_key_error' ).innerHTML = error ;
}

function save_op_key( key ) {
  var op_keys = ( sessionStorage[ 'op_keys_' + product_type ] ) ? JSON.parse( sessionStorage[ 'op_keys_' + product_type ] ) : [],
      result = false;
  if ( ! Array.isArray( op_keys ) ) {
    console.log( 'Not counting as array.' );
    op_keys = [];
  }
  if ( op_keys.length > 0 ) {
    console.log( 'op_keys.length > 0' );
    console.log( op_keys );
    console.log( key );
    if ( op_keys.indexOf( key ) !== -1 ) {
      op_keys.splice( op_keys.indexOf( key ), 1 );
    }
  }
    console.log( op_keys );
  if ( op_keys[0] !== '' ) {
    op_keys.unshift( key );
  } else {
    op_keys[0] = key;
  }
  if ( ! sessionStorage.op_keys ) {
    sessionStorage.op_keys = '';
  }
  sessionStorage[ 'op_keys_' + product_type ] = JSON.stringify( op_keys );
  if ( JSON.parse( sessionStorage[ 'op_keys_' + product_type ] )[0] === key ) {
    current_scoping_id = key;
    check_for_existing_scope( key );
    result = true;
  }
  return result;
}

function check_for_existing_scope( key = null ) {
  if ( !!key ) {
    ajax_request( 'log_handler_alt', 'scope_id=' + key + '&', response_handler );
  }
}

function response_handler() {
    //console.log( '( logging->response_handler ) Current response code: ' + response_code + ' (' + typeof( response_code ) + ');' );
    response_code = JSON.parse( response_code );
    if ( Number( response_code[ 'code' ] ) == 0 ) {
      console.log( 'No entry exists for this scoping id, but no data provided.' );
      clear_field_values();
      update_report();
    } else if ( Number( response_code[ 'code' ] ) == 1 ) {
      console.log( 'Entry created for this scoping id successfully' );
      destroyPopup();
      if ( current_scoping_id.indexOf( 'salesforce.com' ) !== -1 ) {
        current_scoping_id = '<a href="' + current_scoping_id.replace( '-' + product_type, '' ) + '" target="_blank">' + current_scoping_id + '</a>';
      }
      notification( 'Current Scope: ' + current_scoping_id + ' :: <a href="#" id="change_link" onclick="( function( el ) { change_op_key(); } )( this )">(Change)</a><br />Created: '  + response_code[ 'created' ] + ' -- Updated: ' + response_code[ 'updated' ] );
    } else if ( Number( response_code[ 'code' ] ) == 2 ) {
      console.log( 'Entry updated for this scoping id successfully' );
      destroyPopup();
      if ( current_scoping_id.indexOf( 'salesforce.com' ) !== -1 ) {
        current_scoping_id = '<a href="' + current_scoping_id.replace( '-' + product_type, '' ) + '" target="_blank">' + current_scoping_id + '</a>';
      }
      notification( 'Current Scope: ' + current_scoping_id + ' :: <a href="#" id="change_link" onclick="( function( el ) { change_op_key(); } )( this )">(Change)</a><br />Created: '  + response_code[ 'created' ] + ' -- Updated: ' + response_code[ 'updated' ] );
    } else if ( Number( response_code[ 'code' ] ) == 3 ) {
      console.log( 'Unable create this scoping id successfully' );
      destroyPopup();
    } else if ( Number( response_code[ 'code' ] ) == 4 ) {
      console.log( 'Unable to update this scoping id successfully' );
      destroyPopup();
    } else if( Number( response_code[ 'code' ] ) == 5 ) {
      //response_code = response_code.replace('\\','');
      //response_code = JSON.parse( response_code );
      //console.log( '( logging->response_handler ) Current response code: ' + response_code + ' (' + typeof( response_code ) + ');' );
      //console.log( response_code );
      //console.log( JSON.parse( response_code[0]['data'] ) );
      strct[ 'rvals' ] = JSON.parse( response_code[ 'data' ]);
      populate_field_values();
      update_report( false );;
      console.log( 'Existing data for ' + current_scoping_id + ' found!' );
      destroyPopup();
      if ( current_scoping_id.indexOf( 'salesforce.com' ) !== -1 ) {
        current_scoping_id = '<a href="' + current_scoping_id.replace( '-' + product_type, '' ) + '" target="_blank">' + current_scoping_id + '</a>';
      }
      notification( 'Current Scope: ' + current_scoping_id + ' :: <a href="#" id="change_link" onclick="( function( el ) { change_op_key(); } )( this )">(Change)</a><br />Created: '  + response_code[ 'created' ] + ' -- Updated: ' + response_code[ 'updated' ] );
    }
    //console.log( field_values );
}

function populate_field_values() {
  //console.log( 'Populating fields with loaded values' );
  //console.log( strct[ 'rvals' ] );
  for ( var f in strct[ 'rvals' ] ) {
    var elem = document.getElementById( f );
    if ( isNaN( Number( strct[ 'rvals' ][ f ] ) ) ) {
      for ( var o = 0 ; o < elem.options.length ; o++ ) {
        if ( elem.options[ o ].text == strct[ 'rvals' ][ f ] ) {
          elem.options[ o ].selected ='true';
          elem.dataset.value = o;
        }
      }
    } else {
      elem.value = Number( strct[ 'rvals' ][ f ] );
      elem.dataset.value = Number( strct[ 'rvals' ][ f ] );
    }
  }
}

function clear_field_values() {
  console.log( 'Clearing field values' );
  for ( var f in strct[ 'rvals' ] ) {
    strct[ 'rvals' ][ f ] = strct[ 'f' ][ strct[ 'fk' ][ f ] ][ 'default_vals' ][ strct[ 'f' ][ strct[ 'fk' ][ f ] ][ 'columns' ].indexOf( 'raw' ) ];
  }
  populate_field_values();
  update_report( false );
}

function clear_local_op_keys() {
  var result = false;
  if ( sessionStorage[ 'op_keys_' + product_type ] ) {
    sessionStorage[ 'op_keys_' + product_type ] = '';
    result = true;
  }
  clear_field_values();
  ask_for_op_key();
  //return result;
}

function change_op_key() {
  var op_keys = (sessionStorage[ 'op_keys_' + product_type ] ) ? JSON.parse( sessionStorage[ 'op_keys_' + product_type ] ) : [],
      result = false;
  if ( op_keys[0] && op_keys[0] != '' ) {
    op_keys.unshift('');
    sessionStorage[ 'op_keys_' + product_type ] = JSON.stringify( op_keys );
    result = true;
  } else {

  }
  clear_field_values();
  console.log(sessionStorage.op_keys);
  ask_for_op_key();
  return true;
}

function verify_op_key( url ) {
  var sfRegex = /^https\:\/\/[a-zA-Z0-9]{4}\.salesforce\.com\/[a-zA-Z0-9]{15}$/,
      saRegex = /^(rharris|vobando|cgarcia|kthompson|smace|mallen|jizquierdo|swood|agoller)\/[a-zA-Z0-9_\-]{0,30}$/,
      banHammer = /[\<\>\{\}\!\*\%\\\&\$\#\@]/g,
      //key = document.getElementById( 'op_key_input' ).value;
      key = url;
  if ( sfRegex.test( key ) || saRegex.test( key ) ) {
    key = key + '-' + product_type;
    console.log( 'New scope id ( ' + key + ' ) in local storage: ' + save_op_key( key ) );
  } else if ( key === '' ){
    showError( 'Input is blank.' );
  } else if ( banHammer.test( key ) ) {
    console.log('BANHAMMER!!!!!!');
    console.log( logTimeStamp() );
  } else {
    showError( 'Input is invalid.' );
  }
}

function handleEnter( ev ) {
  if ( ! ev ) {
    ev = window.event;
  }
  var keypressed = ev.keyCode || ev.which;
  if ( keypressed == 13 ) {
    verify_op_key( document.querySelectorAll( 'input[ type="url" ]' )[0].value );
  }
}

function save_log() {
  ajax_request( 'log_handler_alt', 'scope_id=' + current_scoping_id + '&' + 'scope_data=' + JSON.stringify( strct[ 'rvals' ] ) + '&', response_handler );
}

function destroyPopup() {
  document.getElementById( 'op_key_requester' ).classList.add( 'hidden' );
  document.getElementById( 'wrapper' ).classList.remove( 'blur' );
  document.getElementById( 'tophat' ).classList.remove( 'blur' );
}

function notification( message = null, show_change_link = true ) {
  var msg = document.getElementById( 'message_area' );
  if ( !! message ) {
    msg.innerHTML = message;
  }
}

function cancel_button() {
  if ( sessionStorage[ 'op_keys_' + product_type ] ) {
    var op_keys = JSON.parse( sessionStorage[ 'op_keys_' + product_type ] );
    if ( op_keys[ 0 ] == '' ) {
      op_keys.shift();
    }
    if ( op_keys.length > 0 ) {
      sessionStorage[ 'op_keys_' + product_type ] = JSON.stringify( op_keys );
      check_for_op_key();
    } else {
      location = document.URL.split(/\/[^/]*$/)[0];
    }
  } else {
    location = document.URL.split(/\/[^/]*$/)[0];
  }
}
