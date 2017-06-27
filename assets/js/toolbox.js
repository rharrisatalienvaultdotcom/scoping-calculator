var response_code;

function ajax_object(){
   var xhrObject;  // The variable that makes Ajax possible!

   try{
      // Opera 8.0+, Firefox, Safari
      xhrObject = new XMLHttpRequest();
   }catch (e){

      // Internet Explorer Browsers
      try{
         xhrObject = new ActiveXObject("Msxml2.XMLHTTP");
      }catch (e) {
         try{
            xhrObject = new ActiveXObject("Microsoft.XMLHTTP");
         }catch (e){

            // Something went wrong
            alert("Your browser broke!");
            return false;
         }
      }
   }
   return xhrObject;
}

function ajax_request( address = null, data = null, cbfunction = null, method = 'POST' ) {
   if ( !!address ) {
      //console.log('address: ' + address + ';');
      //console.log('cbfunction: ' + cbfunction + ';');
      //console.log('data: ' + data + ';');
      //console.log('method: ' + method + ';');
      var ajaxObj = ajax_object();
      if ( ajaxObj !== false ){
         ajaxObj.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               //console.log( 'readyState: ' + this.readyState + '; status: ' + this.status + ';' );
               //console.log( 'responseText:' );
               //console.log( this.responseText );
               response_code = this.responseText;
               //console.log( '( ajax_tools->ajax_request ) Current response code: ' + response_code + ';' );
               cbfunction();
            }
         }
      } else {
         console.log( 'ERROR - FAILED TO CREATE XHR OBJECT!!' );
      }
      ajaxObj.open("POST", address, true);
      ajaxObj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      ajaxObj.send( data );
   } else {
      console.log( 'UNABLE TO SEND!' );
      return false;
   }
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
function gb_to_b( gb ) {
  return down_order( down_order( down_order( gb ) ) );
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
