
/*
 *
 * Update the country code label
 * 	whenever a new country code is selected
 *
 */
$( document ).on( "change", ".js_phone_country_code", function ( event ) {
	var $countryCode = $( event.target );
	var countryCode = $countryCode.val().replace( /[^\+\d]/g, "" );
	$countryCode
		.closest( "form" )
		.find( ".js_phone_country_code_label" )
		.val( countryCode );
} );



/*
 *
 * Close the login prompt
 * 	whenever the close symbol is clicked
 *
 */
$( document ).on( "click", ".js_local_modal_close", function ( event ) {

	var $loginSite = $( event.target ).closest( ".qpid_login_site" );

	// Close the trap
	$loginSite.removeClass( "open" );

	// Reset the trap
	var $phoneForm = $loginSite.find( ".js_phone_form" );
	var $otpForm = $loginSite.find( ".js_otp_form" );
		// Re-enable both the forms
	enableForm( $phoneForm );
	enableForm( $otpForm );
		// Show the phone form, hide the OTP form
	$otpForm.hide();
	$phoneForm.show();

} );





/*
 * ------------------------\
 *  Common event handlers
 * ------------------------|
 */
function onOTPSubmit ( event ) {

	var loginPrompt = this;
	var $form = loginPrompt.$OTPForm;

	var formData;
	try {
		formData = getFormData( $form, {
			otp: { type: "OTP", $: "[ name = 'otp' ]" }
		} );
	}
	catch ( e ) {
		// Reflect back sanitized values to the form
		setFormData( $form, e );
		// Trigger the OTP Error event
		loginPrompt.trigger( "OTPError", {
			message: "Please provide a valid OTP."
		} );
		return;
	}

	// Reflect back sanitized values to the form
	setFormData( $form, formData );

	var data = formData.reduce( function ( acc, f ) {
		acc[ f.name ] = f.value;
		return acc;
	}, { } );

	__.tempUser.verifyOTP( data.otp )
		.then( function () {
			__.user = __.tempUser;
			loginPrompt.trigger( "OTPVerified" );
		} )
		.catch( function ( e ) {
			loginPrompt.trigger( "OTPError", e );
		} );

}
function onOTPVerified () {
	var loginPrompt = this;
	// Trigger the login event
	loginPrompt.trigger( "login" );
}
function trackConversion ( loginPrompt ) {
	// Track the conversion
	var conversionUrl = loginPrompt.trackingURL || $( loginPrompt.triggerElement ).data( "c" );
	__.utils.trackPageVisit( conversionUrl );
}
function onLogin () {
	var loginPrompt = this;
	// Set cookie ( for a month )
	__.utils.setCookie( "cupid-user", __.user, 31 * 24 * 60 * 60 );

	// Close all the traps
	$( ".qpid_login_site" ).removeClass( "open" )

	__.utils.getAnalyticsId()
		.then( function ( deviceId ) {
			__.user.hasDeviceId( deviceId );
			__.user.isOnWebsite();
		} )
}





/*
 * ------------------------\
 *  The Login Prompts
 * ------------------------|
 */
var __ = window.__CUPID;
var loginPrompts = { };

/*
 * Investment Potential
 */
loginPrompts.investment = new __.LoginPrompt( "Brochure", $( ".qpid_login_site.js_investment_section" ) );
loginPrompts.investment.triggerFlowOn( "click", ".js_download_brochure" );
loginPrompts.investment.on( "requirePhone", function ( event ) {
	this.$site.addClass( "open" );
} );
// Since the phone number is already provided in the contact form, simply submit it programmatically
loginPrompts.investment.on( "phoneSubmit", function ( event ) {
	var loginPrompt = this;
	var $form = $( event.target ).closest( "form" );

	// Pull data from the form
	var formData;
	try {
		formData = getFormData( $form, {
			phoneNumber: { type: "phone number", name: "phone number", $: ".js_phone_country_code, [ name = 'phone-number' ]" }
		} );
	}
	catch ( e ) {
		// Reflect back sanitized values to the form
		setFormData( $form, e );
		// Report the message
		alert( "Please provide a phone number." );
		return;
	}

	// Reflect back sanitized values to the form
	setFormData( $form, formData );

	// Get the relevant data
	var phoneNumber = formData[ 0 ].value.join( "" );

	// Create a new (but temporary) Person object
	__.tempUser = new __.Person( phoneNumber, loginPrompt.context );
		// Set the device id
	__.utils.getAnalyticsId()
		.then( function ( deviceId ) {
			__.tempUser.hasDeviceId( deviceId );
		} )
		// Attempt to find the person in the database
		.then( function () {
			return __.tempUser.getFromDB()
				// If the person exists, log in
				.then( function ( person ) {
					// HOWEVER, if the person is **not** verified, then don't!
					if ( person.verification && person.verification.isVerified ) {
						__.user = person;
						loginPrompt.trigger( "login", person );
					}
					else
						throw person;
				} )
				// If the person don't exist, add the person, and send an OTP
				.catch( function ( person ) {
					if ( person instanceof Error || ! person )
						trackConversion( loginPrompt );
					return __.tempUser.add()
						.then( function () {
							loginPrompt.trigger( "requireOTP" );
						} )
						.catch( function () {
							loginPrompt.trigger( "phoneError" );
						} );
				} )
		} );

} );
// When the phone number is to be submitted
loginPrompts.investment.on( "requireOTP", function ( event, phoneNumber ) {
	var loginPrompt = this;
	disableForm( loginPrompt.$phoneForm );
	__.tempUser.requestOTP( loginPrompt.context )
		.then( function ( otpSessionId ) {
			__.tempUser.otpSessionId = otpSessionId;
			// Show OTP form, after hiding the phone form
			loginPrompt.$phoneForm.slideUp( 500, function () {
				loginPrompt.$OTPForm.slideDown();
			} );
		} )
		.catch( function ( e ) {
			alert( e.message );
			enableForm( loginPrompt.$phoneForm );
		} )
} );
// When the OTP is required
loginPrompts.investment.on( "OTPSubmit", onOTPSubmit );
loginPrompts.investment.on( "OTPError", function ( e ) {
	alert( e.message );
} );
loginPrompts.investment.on( "OTPVerified", onOTPVerified );
// When the user is logged in
loginPrompts.investment.on( "login", onLogin );
// Prepare the data
loginPrompts.investment.on( "prepare", function ( event ) {
	var loginPrompt = this;
	var $triggerElement = $( loginPrompt.triggerElement );
	if ( $triggerElement.is( "a" ) )
		$triggerElement.attr( "href", $triggerElement.data( "href" ) );
	__.user.isInterestedIn( "Brochure" );
	__.user.update();
} );





/*
 * -/-/-/-/-/-/-/-
 * Aerial Section
 * -/-/-/-/-/-/-/-
 */
// The following functions are used across 5 phone traps
function aerialRequirePhone ( event ) {
	this.$site.addClass( "open" );
}
function aerialPhoneSubmit ( event ) {
	var loginPrompt = this;
	var $form = $( event.target ).closest( "form" );

	// Pull data from the form
	var formData;
	try {
		formData = getFormData( $form, {
			phoneNumber: { type: "phone number", name: "phone number", $: ".js_phone_country_code, [ name = 'phone-number' ]" }
		} );
	}
	catch ( e ) {
		// Reflect back sanitized values to the form
		setFormData( $form, e );
		// Report the message
		alert( "Please provide a phone number." );
		return;
	}

	// Reflect back sanitized values to the form
	setFormData( $form, formData );

	// Get the relevant data
	var phoneNumber = formData[ 0 ].value.join( "" );

	// Create a new (but temporary) Person object
	__.tempUser = new __.Person( phoneNumber, loginPrompt.context );
		// Set the device id
	__.utils.getAnalyticsId()
		.then( function ( deviceId ) {
			__.tempUser.hasDeviceId( deviceId );
		} )
		// Attempt to find the person in the database
		.then( function () {
			return __.tempUser.getFromDB()
				// If the person exists, log in
				.then( function ( person ) {
					// HOWEVER, if the person is **not** verified, then don't!
					if ( person.verification && person.verification.isVerified ) {
						__.user = person;
						loginPrompt.trigger( "login", person );
					}
					else
						throw person;
				} )
				// If the person don't exist, add the person, and send an OTP
				.catch( function ( person ) {
					if ( person instanceof Error || ! person )
						trackConversion( loginPrompt );
					return __.tempUser.add()
						.then( function () {
							loginPrompt.trigger( "requireOTP" );
						} )
						.catch( function () {
							loginPrompt.trigger( "phoneError" );
						} );
				} )
		} );

}
function aerialRequireOTP ( event, phoneNumber ) {
	var loginPrompt = this;
	disableForm( loginPrompt.$phoneForm );
	__.tempUser.requestOTP( loginPrompt.context )
		.then( function ( otpSessionId ) {
			__.tempUser.otpSessionId = otpSessionId;
			// Show OTP form, after hiding the phone form
			loginPrompt.$phoneForm.slideUp( 500, function () {
				loginPrompt.$OTPForm.slideDown();
			} );
		} )
		.catch( function ( e ) {
			alert( e.message );
			enableForm( loginPrompt.$phoneForm );
		} )
}
function aerialAlert ( e ) {
	alert( e.message );
}
function aerialPrepare ( event ) {
	var loginPrompt = this;
	var $triggerElement = $( loginPrompt.triggerElement );
	if ( $triggerElement.is( "a" ) )
		$triggerElement.attr( "href", $triggerElement.data( "href" ) );
	__.user.isInterestedIn( "Masterplan" );
	__.user.update();
}


// The "Download Masterplan" button
loginPrompts.downloadMasterplan = new __.LoginPrompt( "Masterplan", $( ".qpid_login_site.js_aerial_section" ) );
loginPrompts.downloadMasterplan.triggerFlowOn( "click", ".js_download_masterplan" );
loginPrompts.downloadMasterplan.on( "requirePhone", function ( event ) {
	loginPrompts.downloadMasterplan.trackingURL = "buy-masterplan";
	this.$site.find( ".js_trap_heading" ).text( "Download PDF Masterplan" );
	this.$OTPForm.find( "[ type = 'submit' ]" ).text( "Download" );
	this.$site.addClass( "open" );
} );
	// Since the phone number is already provided in the contact form, simply submit it programmatically
loginPrompts.downloadMasterplan.on( "phoneSubmit", aerialPhoneSubmit );
	// When the phone number is to be submitted
loginPrompts.downloadMasterplan.on( "requireOTP", aerialRequireOTP );
	// When the OTP is required
loginPrompts.downloadMasterplan.on( "OTPSubmit", onOTPSubmit );
loginPrompts.downloadMasterplan.on( "OTPError", aerialAlert );
loginPrompts.downloadMasterplan.on( "OTPVerified", onOTPVerified );
	// When the user is logged in
loginPrompts.downloadMasterplan.on( "login", onLogin );
	// Prepare the data
loginPrompts.downloadMasterplan.on( "prepare", aerialPrepare );


// The "Get Quote for Plot 886" button
loginPrompts.quoteFor886 = new __.LoginPrompt( "Quote for Plot 886", $( ".qpid_login_site.js_aerial_section" ) );
loginPrompts.quoteFor886.triggerFlowOn( "click", ".js_request_quote[ data-unit = '886' ]" );
loginPrompts.quoteFor886.on( "requirePhone", function ( event ) {
	loginPrompts.downloadMasterplan.trackingURL = $( ".js_request_quote[ data-unit = '886' ]" ).data( "c" );
	loginPrompts.downloadMasterplan.$site.find( ".js_trap_heading" ).text( "Request Quote for #886" );
	loginPrompts.downloadMasterplan.$OTPForm.find( "[ type = 'submit' ]" ).text( "Request Quote" );
	loginPrompts.downloadMasterplan.$site.addClass( "open" );
} );


// The "Get Quote for Plot 910" button
loginPrompts.quoteFor910 = new __.LoginPrompt( "Quote for Plot 910", $( ".qpid_login_site.js_aerial_section" ) );
loginPrompts.quoteFor910.triggerFlowOn( "click", ".js_request_quote[ data-unit = '910' ]" );
loginPrompts.quoteFor910.on( "requirePhone", function ( event ) {
	loginPrompts.downloadMasterplan.trackingURL = $( ".js_request_quote[ data-unit = '910' ]" ).data( "c" );
	loginPrompts.downloadMasterplan.$site.find( ".js_trap_heading" ).text( "Request Quote for #910" );
	loginPrompts.downloadMasterplan.$OTPForm.find( "[ type = 'submit' ]" ).text( "Request Quote" );
	loginPrompts.downloadMasterplan.$site.addClass( "open" );
} );


// The "Get Quote for Plot 902" button
loginPrompts.quoteFor902 = new __.LoginPrompt( "Quote for Plot 902", $( ".qpid_login_site.js_aerial_section" ) );
loginPrompts.quoteFor902.triggerFlowOn( "click", ".js_request_quote[ data-unit = '902' ]" );
loginPrompts.quoteFor902.on( "requirePhone", function ( event ) {
	loginPrompts.downloadMasterplan.trackingURL = $( ".js_request_quote[ data-unit = '902' ]" ).data( "c" );
	loginPrompts.downloadMasterplan.$site.find( ".js_trap_heading" ).text( "Request Quote for #902" );
	loginPrompts.downloadMasterplan.$OTPForm.find( "[ type = 'submit' ]" ).text( "Request Quote" );
	loginPrompts.downloadMasterplan.$site.addClass( "open" );
} );


// The "Get Quote for Plot 202" button
loginPrompts.quoteFor202 = new __.LoginPrompt( "Quote for Plot 202", $( ".qpid_login_site.js_aerial_section" ) );
loginPrompts.quoteFor202.triggerFlowOn( "click", ".js_request_quote[ data-unit = '202' ]" );
loginPrompts.quoteFor202.on( "requirePhone", function ( event ) {
	loginPrompts.downloadMasterplan.trackingURL = $( ".js_request_quote[ data-unit = '202' ]" ).data( "c" );
	loginPrompts.downloadMasterplan.$site.find( ".js_trap_heading" ).text( "Request Quote for #202" );
	loginPrompts.downloadMasterplan.$OTPForm.find( "[ type = 'submit' ]" ).text( "Request Quote" );
	loginPrompts.downloadMasterplan.$site.addClass( "open" );
} );





/*
 * Contact Form
 */
loginPrompts.contact = new __.LoginPrompt( "Contact Form", $( ".qpid_login_site.js_contact_form_section" ) );
loginPrompts.contact.triggerFlowOn( "submit", ".js_contact_form" );
loginPrompts.contact.on( "requirePhone", function ( event ) {
	this.trigger( "phoneSubmit", event );
} );
// Since the phone number is already provided in the contact form, simply submit it programmatically
loginPrompts.contact.on( "phoneSubmit", function ( event ) {
	var loginPrompt = this;
	var $form = $( event.target ).closest( "form" );

	// Pull data from the form
	var formData;
	try {
		formData = getFormData( $form, {
			name: { type: "name", $: "[ name = 'name' ]" },
			phoneNumber: { type: "phone number", name: "phone number", $: ".js_phone_country_code, [ name = 'phone-number' ]" },
			budget: { type: "select", $: "[ name = 'budget' ]" }
		} );
	}
	catch ( e ) {
		// Reflect back sanitized values to the form
		setFormData( $form, e );
		// Prepare the error message
		var message = e.reduce( function ( message, issue ) {
			return message + "\n"
				+ ( issue.name[ 0 ].toUpperCase() + issue.name.slice( 1 ) );
		}, "" );
		message = "Please provide valid information for the following fields:" + message;
		// Report the message
		alert( message );
		return;
	}

	// Reflect back sanitized values to the form
	setFormData( $form, formData );

	// Get the relevant data
	var phoneNumber = formData[ 1 ].value.join( "" );

	// Create a new (but temporary) Person object
	__.tempUser = new __.Person( phoneNumber, loginPrompt.context );
		// Set the device id
	__.utils.getAnalyticsId()
		.then( function ( deviceId ) {
			__.tempUser.hasDeviceId( deviceId );
		} )
		// Attempt to find the person in the database
		.then( function () {
			return __.tempUser.getFromDB()
				// If the person exists, log in
				.then( function ( person ) {
					if ( person.verification && person.verification.isVerified ) {
						__.user = person;
						loginPrompt.trigger( "login", person );
					}
					else
						throw person;
				} )
				// If the person don't exist, add the person, and send an OTP
				.catch( function ( person ) {
					if ( person instanceof Error || ! person )
						trackConversion( loginPrompt );
					return __.tempUser.add()
						.then( function () {
							loginPrompt.trigger( "requireOTP" );
						} )
						.catch( function () {
							loginPrompt.trigger( "phoneError" );
						} );
				} )
		} );

} );
// When the phone number is to be submitted
loginPrompts.contact.on( "requireOTP", function ( event, phoneNumber ) {
	var loginPrompt = this;
	var $contactForm = loginPrompt.$site.find( ".js_contact_form" );
	disableForm( $contactForm, "Sending....." );
	__.tempUser.requestOTP( loginPrompt.context )
		.then( function ( otpSessionId ) {
			__.tempUser.otpSessionId = otpSessionId;
			// Show OTP form, after hiding the Contact form
			var $otpForm = loginPrompt.$site.find( ".js_otp_form" );
			$contactForm.slideUp( 500, function () {
				$otpForm.slideDown();
			} );
		} )
		.catch( function ( e ) {
			alert( e.message );
			enableForm( $contactForm, "Enquire Now" );
		} )
} );
// When the OTP is required
loginPrompts.contact.on( "OTPSubmit", onOTPSubmit );
loginPrompts.contact.on( "OTPError", function ( e ) {
	alert( e.message );
} );
loginPrompts.contact.on( "OTPVerified", onOTPVerified );
// When the user is logged in
loginPrompts.contact.on( "login", onLogin );
loginPrompts.contact.on( "login", function () {
	var loginPrompt = this;
	var $contactForm = loginPrompt.$site.find( ".js_contact_form" );
	$( loginPrompt.$OTPForm ).slideUp( 500, function () {
		$contactForm.slideDown( 500 );
	} );
	$( loginPrompt.triggerElement ).trigger( loginPrompt.triggerEvent );
} );
