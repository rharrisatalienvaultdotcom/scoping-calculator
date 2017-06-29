<div id="op_key_requester" class="hidden">
  <div id="op_key_inner_box">
    <img <img src="/assets/img/USM-<?php echo $product; ?>-Typography.DarkGray.small.png" alt="USM <?php echo $product; ?> Link" >
    <div class="message">Please enter SalesForce opportunity URL.</div>
    <input type="url" placeholder="Example: https://ab01.salesforce.com/23456789cdef101" onkeyup="( function() { handleEnter( event ); } )( this )">
    <div id="op_key_error" class="error">&nbsp;</div>
    <input class="cancel" type="button" value="Cancel" onclick="( function ( el ) { location = document.URL.split(/\/[^/]*$/)[0]; } )( this )">
    <input class="submit" type="button" value="Submit" onclick="( function( el ) { verify_op_key( el.previousElementSibling.previousElementSibling.previousElementSibling.value ); } )( this )" >
  </div>
</div>
