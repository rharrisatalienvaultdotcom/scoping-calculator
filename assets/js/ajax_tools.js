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

function getPdf () {
   var xhr = new XMLHttpRequest();
   xhr.onreadystatechange = function() {
      console.log('ReadyState: ' + this.readyState + '; Status: ' + this.status + ';');
      if (this.readyState == 4 && this.status == 200) {
         console.log('responseText:');
         console.log(this.responseText);
         document.getElementById('wrapper').innerHTML = this.responseText;
      }
   };

   xhr.open("POST", "calculator/pdf_test_c", true);
   xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   //xhr.send("html=" + JSON.stringify(document.getElementById('report_wrapper')));
   xhr.send( 'field_values=' + JSON.stringify(field_values) );// + '&calc_totals=' + JSON.stringify(calc_totals) );
}

function getPdf2 () {
   /*var iframe = document.createElement('iframe');
   iframe.style.position = 'fixed';
   iframe.style.zIndex = '50';
   iframe.style.height = '90%';
   iframe.style.width = '90%';
   iframe.style.margin = '5%';
   iframe.src = 'calculator/pdf_test_b?field_values=' + JSON.stringify(field_values) + '&calc_totals=' + JSON.stringify(calc_totals);
   document.getElementById('wrapper').appendChild(iframe);*/
   document.getElementById('wrapper').innerHTML = 'field_values=' + JSON.stringify(field_values);// + '&calc_totals=' + JSON.stringify(calc_totals);
}
