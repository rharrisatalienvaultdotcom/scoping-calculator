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
      console.log('ReadyState: ' + this.readystate + '; Status: ' + this.status + ';');
      if (this.readystate == 4 && this.status == 200) {

      }
   };

   xhr.open("POST", "pdf_test_b", true);
   xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xhr.send("html=" + JSON.stringify(document.documentElement));
}