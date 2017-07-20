var callback = () => {
  // Handler when the DOM is fully loaded
  console.log( 'document.ready() substitute working!' );
  initInputForm();
  initObserver();
};

if (
    document.readyState === "complete" ||
    (document.readyState !== "loading" && !document.documentElement.doScroll)
) {
  callback();
} else {
  document.addEventListener("DOMContentLoaded", callback);
}


var initNumberButtons = ( crement = false ) => {
  if ( crement ) {
    var bttns = toArray( document.getElementsByClassName( crement + '_button' ) );
    for ( var i = 0 , length = bttns.length ; i < length ; i++ ) {
      if ( crement === 'minus' ) {
        bttns[ i ].addEventListener( 'mousedown', function( event ) { /*el.nextElementSibling.stepDown(); */ this.nextElementSibling.value = Number( this.nextElementSibling.value ) - 1 ; }, false );
        //bttns[ i ].addEventListener( 'mousedown', function( event ) { /*el.nextElementSibling.stepDown(); */ this.nextElementSibling.dataset.value = this.nextElementSibling.value; }, false );
        bttns[ i ].addEventListener( 'mouseup', function( event ) { this.nextElementSibling.focus(); }, false );
      } else if ( crement === 'plus' ) {
        bttns[ i ].addEventListener( 'mousedown', function( event ) { /*el.nextElementSibling.stepDown(); */ this.previousElementSibling.value = Number( this.previousElementSibling.value ) + 1 ; }, false );
        //bttns[ i ].addEventListener( 'mousedown', function( event ) { /*el.nextElementSibling.stepDown(); */ this.previousElementSibling.dataset.value = this.previousElementSibling.value; }, false );
        bttns[ i ].addEventListener( 'mouseup', function( event ) { this.previousElementSibling.focus(); }, false );
      }
      bttns[ i ].addEventListener( 'mousedown', function( event ) { update_report(); }, false );
    }
  }
}

var initNumberInputs = () => {
  var nmbrs = toArray( document.getElementsByClassName( 'number_input' ) );
  for ( var i = 0 , length = nmbrs.length ; i < length ; i++ ) {
    //nbmrs[ i ].addEventListener( '', , false );
    nmbrs[ i ].addEventListener( 'focus', function( event ) { this.select(); }, false );
    nmbrs[ i ].addEventListener( 'focus', function( event ) { this.dataset.value = this.value; }, false );
    //nmbrs[ i ].addEventListener( 'change', function( event ) { update_report(); }, false );
    //nmbrs[ i ].addEventListener( 'blur', function( event ) { update_report(); }, false );
    nmbrs[ i ].addEventListener( 'keyup', function( event ) { update_report(); }, false );
  }
}

var initSelectInputs = () => {
  var slct = toArray( document.getElementsByClassName( 'select_input' ) );
  for ( var i = 0 , length = nmbrs.length ; i < length ; i++ ) {
    slct[ i ].addEventListener( 'change', function( event ) { update_report(); }, false );
    slct[ i ].addEventListener( 'change', function( event ) { update_report(); }, false );
  }
}
var initInputForm = () => {
  initNumberButtons( 'minus' );
  initNumberButtons( 'plus' );
  initNumberInputs();
}

var toArray = (collection) => {
   var result = [],
       i = -1;
   while (result[++i] = collection[i]) {};
   result.length--;
   return result;
}

var observer;

var initObserver = () => {
  // select the target node
  var target = document.getElementById( 'field_section' ).getElementsByTagName( 'dl' )[ 0 ];

  // create an observer instance
  observer = new MutationObserver( ( mutations ) => {
    mutations.forEach( ( mutation ) => {
      if( mutation.oldValue !== "0" ) {
        console.log( 'Type: ' + mutation.type + '; Attribute Name: ' + mutation.attributeName + '; Old Value: ' + mutation.oldValue + '; New Value: ' + mutation.target.dataset.value + ';' );
        console.log(  );
        console.log( 'Target: ' );
        console.log( mutation.target );
        //console.log( 'Added Nodes: ' + mutation.addedNodes + ';' );
        //console.log( 'Removed Nodes: ' + mutation.removedNodes + ';' );
        //console.log( 'Previous Sibling: ' + mutation.previousSibling + ';' );
        //console.log( 'Next Sibling: ' + mutation.nextSibling + ';' );
        //console.log( 'Attribute Namespace: ' + mutation.attributeNamespace + ';' );
      }
    });
  });

  // configuration of the observer:
  var config = {
    attributes: true,
    childList: true,
    characterData: true,
    subtree: true,
    attributeOldValue: true,
    characterDataOldValue: true,
    //attributeFilter: []
  };

  // pass in the target node, as well as the observer options
  observer.observe(target, config);
}
// later, you can stop observing
var stopTracking = () => observer.disconnect();

var addGlobalEventHandler = () => {
  window.addEventListener( 'abort', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'animationcancel', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'animationend', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'blur', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'change', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'click', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'close', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'contextmenu', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'dblclick', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'error', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'focus', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'gotpointercapture', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'input', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'keydown', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'keypress', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'keyup', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'load', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'loadend', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'loadstart', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'lostpointercapture', function ( event ) { console.log( event ); }, false );
  //window.addEventListener( 'mousedown', function ( event ) { console.log( event ); }, false );
  //window.addEventListener( 'mousemove', function ( event ) { console.log( event ); }, false );
  //window.addEventListener( 'mouseout', function ( event ) { console.log( event ); }, false );
  //window.addEventListener( 'mouseover', function ( event ) { console.log( event ); }, false );
  //window.addEventListener( 'mouseup', function ( event ) { console.log( event ); }, false );
  //window.addEventListener( 'pointercancel', function ( event ) { console.log( event ); }, false );
  //window.addEventListener( 'pointerdown', function ( event ) { console.log( event ); }, false );
  //window.addEventListener( 'pointerenter', function ( event ) { console.log( event ); }, false );
  //window.addEventListener( 'pointerleave', function ( event ) { console.log( event ); }, false );
  //window.addEventListener( 'pointermove', function ( event ) { console.log( event ); }, false );
  //window.addEventListener( 'pointerout', function ( event ) { console.log( event ); }, false );
  //window.addEventListener( 'pointerover', function ( event ) { console.log( event ); }, false );
  //window.addEventListener( 'pointerup', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'reset', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'resize', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'scroll', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'select', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'submit', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'transitionend', function ( event ) { console.log( event ); }, false );
  window.addEventListener( 'valuechange', function ( event ) { console.log( event ); }, false );
  //window.addEventListener( '', function ( event ) { console.log( event ); }, false );
}
