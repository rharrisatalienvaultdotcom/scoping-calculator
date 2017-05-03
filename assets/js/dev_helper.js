( function() {
	var dev_helper = document.getElementById( 'dev_helper' );

	var pdf_button = document.createElement( 'span' );
	pdf_button.style.color = 'white';
	pdf_button.style.position = 'absolute';
	pdf_button.style.margin = '5px';
	pdf_button.style.top = '0px';
	pdf_button.style.border = '1px solid white';
	pdf_button.style.borderRadius = '5px';
	pdf_button.style.padding = '3px';
	pdf_button.innerHTML = 'click to send';
	pdf_button.addEventListener( 'click', function() { getPdf2(); } );
	dev_helper.appendChild( pdf_button );
} )()