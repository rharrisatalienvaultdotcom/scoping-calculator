function ajaxFunction(){
   var ajaxRequest;  // The variable that makes Ajax possible!

   try{
      // Opera 8.0+, Firefox, Safari 
      ajaxRequest = new XMLHttpRequest();
   }catch (e){

      // Internet Explorer Browsers
      try{
         ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      }catch (e) {
         try{
            ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
         }catch (e){

            // Something went wrong
            alert("Your browser broke!");
            return false;
         }
      }
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