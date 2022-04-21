
/**
 |
 | Contact Form
 |
 |
 */
$( function () {

// Imports
let BFSForm = window.__THIS.exports.BFSForm

// Set up the namespace
window.__THIS = window.__THIS || { };
window.__THIS.UI = window.__THIS.UI || { };





let theForm = new BFSForm( ".js_contact_form" );
window.__THIS.UI.contactForm = theForm

// Set up the form's input fields, data validators and data assemblers
	// Name
theForm.addField( "name", [ "[ name = 'name' ]" ], function ( values ) {
	let [ name ] = values
	return BFSForm.validators.name( name )
}, "Name" );

	// Phone number
theForm.addField( "phoneNumber", [ ".js_phone_country_code", "[ name = 'phone-number' ]" ], function ( values ) {
	let [ phoneCountryCode, phoneNumberLocal ] = values
	return BFSForm.validators.phoneNumber( phoneCountryCode, phoneNumberLocal )
}, "Phone number" );
// When programmatically focusing on this input field, which of the (two, in this case) input elements to focus on?
theForm.fields[ "phoneNumber" ].defaultDOMNodeFocusIndex = 1

	// Email address
theForm.addField( "emailAddress", [ "[ type = 'email' ]" ], function ( values ) {
	let [ emailAddress ] = values
	return BFSForm.validators.emailAddress( emailAddress )
}, "Email address" );

	// Budget
theForm.addField( "budget", [ "[ name = 'budget' ]" ], function ( values ) {
	let [ budget ] = values
	return BFSForm.validators.string( budget )
}, "Budget" );


theForm.submit = function submit ( data ) {
	let person = Cupid.getCurrentPerson( data.phoneNumber )
	person.setSourcePoint( "Contact Form" )

	person.setName( data.name )
	person.setEmailAddress( data.emailAddress )
	Cupid.logPersonIn( person, { trackSlug: "enquire-now" } )

	person.setExtendedAttributes( { budget: data.budget } )
	Cupid.savePerson( person )
	PersonLogger.submitData( person )

	return Promise.resolve( person )
}



/**
 | Form submission handler
 |
 */
$( document ).on( "submit", ".js_contact_form", function ( event ) {

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
			theForm.disable()
			theForm.giveFeedback( "We'll get in touch shortly" )
		} )

} );



/**
 |
 | Helper functions
 |
 | (None as of now)
 |
 */





} );
