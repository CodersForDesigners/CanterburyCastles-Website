
/**
 |
 | Masterplan and Quotes Form
 |
 |
 */
$( function () {

// Imports
let BFSForm = window.__THIS.exports.BFSForm

// Set up the namespace
window.__THIS = window.__THIS || { };
window.__THIS.UI = window.__THIS.UI || { };





let theForm = new BFSForm( ".js_masterplan_and_quotes_form" );
window.__THIS.UI.masterplanAndQuoteForm = theForm

// Set up the form's input fields, data validators and data assemblers
	// Phone number
theForm.addField( "phoneNumber", [ ".js_phone_country_code", "[ name = 'phone-number' ]" ], function ( values ) {
	let [ phoneCountryCode, phoneNumberLocal ] = values
	return BFSForm.validators.phoneNumber( phoneCountryCode, phoneNumberLocal )
}, "Phone number" );
// When programmatically focusing on this input field, which of the (two, in this case) input elements to focus on?
theForm.fields[ "phoneNumber" ].defaultDOMNodeFocusIndex = 1



theForm.submit = function submit ( data, context ) {
	let person = Cupid.getCurrentPerson( data.phoneNumber )

	let sourcePoint;
	let trackSlug;
	if ( context.source === "masterplan" ) {
		sourcePoint = "Masterplan Form"
		trackSlug = "buy-masterplan"
	}
	else if ( context.source === "quote" ) {
		sourcePoint = "Request for Quote Form"
		trackSlug = "buy-get-a-quote"
	}

	person.setSourcePoint( sourcePoint )
	Cupid.logPersonIn( person, { trackSlug } )

	let interest;
	if ( context.source === "quote" ) {
		recordInterestInUnit( context.unitNumber )
		// interest = "Unit #" + context.unitNumber
	}
	else if ( context.source === "masterplan" ) {
		interest = "Masterplan"
		if ( ! person.hasInterest( interest ) ) {
			person.setInterests( interest )
			Cupid.savePerson( person )
			PersonLogger.registerInterest( person )
		}
	}


	return Promise.resolve( person )
}



/**
 | Form submission handler
 |
 */
$( document ).on( "submit", ".js_masterplan_and_quotes_form", function ( event ) {

	/*
	 | Prevent default browser behaviour
	 */
	event.preventDefault();

	/*
	 | Prevent interaction with the form
	 */
	theForm.disable();

	/*
	 | Provide feedback to the user
	 */
	theForm.giveFeedback( "Sending..." );

	/*
	 | Extract data (and report issues if found)
	 */
	var data;
	try {
		data = theForm.getData();
	} catch ( error ) {
		let feedbackMessage = "There are issues with the information you've provided:"
		for ( let issue of error.issues ) {
			feedbackMessage += `\n${ issue.e.fieldLabel || issue.key }: ${issue.e.message}`
		}
		theForm.fields[ error.issues[ 0 ].key ].focus()
		alert( feedbackMessage )
		theForm.setSubmitButtonLabel();
		theForm.enable()
		return;
	}

	/*
	 | Submit data
	 */
	theForm.submit( data, theForm.context )
		.then( function ( response ) {
			if ( theForm.context.source === "masterplan" )
				unlockMasterplan()
			else if ( theForm.context.source === "quote" ) {
				giveFeedbackOnRequestingForQuote( theForm.context.$trigger )
			}
			closeForm()
		} )

} );


/**
 |
 |  Intercept the downloading of the masterplan with the form
 |
 |
 */
$( document ).on( "click", ".js_request_quote:not(.js_requested)", function ( event ) {

	// Store references
		// The quote that was clicked on
	let $quote = $( event.target ).closest( ".js_request_quote" );
	let unitNumber = $quote.data( "unit" )
	let context = { source: "quote", $trigger: $quote, unitNumber }

	if ( Cupid.personIsLoggedIn() ) {
		recordInterestInUnit( unitNumber )
		giveFeedbackOnRequestingForQuote( $quote )
	}
	else {
		interceptActionWithForm( event, context, "Request Quote for #" + unitNumber )
	}

} )
$( document ).on( "click", ".js_download_masterplan", function ( event ) {

	// Store references
		// The quote that was clicked on
	// let $masterplanDownloadButton = $( event.target ).closest( ".js_download_masterplan" );
	let context = { source: "masterplan" }

	if ( Cupid.personIsLoggedIn() ) {
		recordInterestInMasterplan()
		unlockMasterplan()
	}
	else {
		interceptActionWithForm( event, context, "Download PDF Masterplan" )
	}

} )
$( ".js_aerial_section .js_local_modal_close" ).on( "click", function () {
	closeForm()
} )



/**
 |
 | Helper functions
 |
 */
function recordInterest ( person, interest ) {
	if ( person.hasInterest( interest ) )
		return;

	person.setInterests( interest )
	Cupid.savePerson( person )
	PersonLogger.registerInterest( person )
}
function getContainingSection () {
	return theForm.getFormNode().closest( ".js_aerial_section" )
}
function revealForm ( context, header ) {
	getContainingSection()
		.find( ".js_form_heading" )
		.text( header )
		theForm.context = context
		getContainingSection().addClass( "open" )
	}
function closeForm () {
	getContainingSection().removeClass( "open" )
	getContainingSection()
		.find( ".js_form_heading" )
		.text( "" )
	theForm.context = null
}
function interceptActionWithForm ( event, context, formHeader ) {
	event.preventDefault()
	revealForm( context, formHeader )
}
function unlockMasterplan () {
	let $masterplanDownloadButton = getContainingSection().find( ".js_download_masterplan" )
	$masterplanDownloadButton.attr(
		"href",
		$masterplanDownloadButton.data( "href" )
	)
}
function giveFeedbackOnRequestingForQuote ( $quote ) {
	$quote
		.addClass( "requested js_requested" )
		.text( "Quote Requested" )
}
function recordInterestInMasterplan () {
	let interest = "Masterplan"
	recordInterest( Cupid.getCurrentPerson(), interest )
}
function recordInterestInUnit ( unit ) {
	let interest = "Unit #" + unit
	recordInterest( Cupid.getCurrentPerson(), interest )
}





} );
