
/**
 |
 | Brochure Form
 |
 |
 */
$( function () {

// Imports
let BFSForm = window.__THIS.exports.BFSForm

// Set up the namespace
window.__THIS = window.__THIS || { };
window.__THIS.UI = window.__THIS.UI || { };





let theForm = new BFSForm( ".js_brochure_form" );
window.__THIS.UI.brochureForm = theForm

// Set up the form's input fields, data validators and data assemblers
	// Phone number
theForm.addField( "phoneNumber", [ ".js_phone_country_code", "[ name = 'phone-number' ]" ], function ( values ) {
	let [ phoneCountryCode, phoneNumberLocal ] = values
	return BFSForm.validators.phoneNumber( phoneCountryCode, phoneNumberLocal )
}, "Phone number" );
// When programmatically focusing on this input field, which of the (two, in this case) input elements to focus on?
theForm.fields[ "phoneNumber" ].defaultDOMNodeFocusIndex = 1



theForm.submit = function submit ( data ) {
	let person = Cupid.getCurrentPerson( data.phoneNumber )
	person.setSourcePoint( "Brochure Form" )

	Cupid.logPersonIn( person, { trackSlug: "buy-brochure" } )

	let interest = "Brochure"
	if ( ! person.hasInterest( interest ) ) {
		person.setInterests( interest )
		Cupid.savePerson( person )
		PersonLogger.registerInterest( person )
	}

	return Promise.resolve( person )
}



/**
 | Form submission handler
 |
 */
$( document ).on( "submit", ".js_brochure_form", function ( event ) {

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
	theForm.submit( data )
		.then( function ( response ) {
			closeForm()
			unlockBrochure()
		} )

} );


/**
 |
 |  Intercept the downloading of the brochure with the form
 |
 |
 */
$( ".js_download_brochure" ).on( "click", function ( event ) {
	if ( Cupid.personIsLoggedIn() ) {
		recordInterestInBrochure()
		unlockBrochure()
	}
	else {
		interceptActionWithForm( event )
	}
} )
$( ".js_investment_section .js_local_modal_close" ).on( "click", function () {
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
function recordInterestInBrochure () {
	let interest = "Brochure"
	recordInterest( Cupid.getCurrentPerson(), interest )
}
function getContainingSection () {
	return theForm.getFormNode().closest( ".js_investment_section" )
}
function revealForm () {
	getContainingSection().addClass( "open" )
}
function closeForm () {
	getContainingSection().removeClass( "open" )
}
function interceptActionWithForm ( event ) {
	event.preventDefault()
	revealForm()
}
function unlockBrochure () {
	let $brochureDownloadButton = getContainingSection().find( ".js_download_brochure" )
	$brochureDownloadButton.attr(
		"href",
		$brochureDownloadButton.data( "href" )
	)
}





} );
