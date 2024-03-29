<?php

namespace GoogleForms;

ini_set( "display_errors", 1 );
ini_set( "error_reporting", E_ALL );

// Set the timezone
date_default_timezone_set( 'Asia/Kolkata' );
// Do not let this script timeout
set_time_limit( 0 );









function getFormBoundary () {
	return '----ThisIsNotAWallButABoundaryt1n4W34b';
}

/*
 *
 * Returns a `form-data` formatted string for use in a POST request
 *
 * **NOTE**: Leave the double quotes as is in this function.
 * 	The HTTP request won't work otherwise!
 *
 */
function formatToMultipartFormData ( $data ) {

	$formBoundary = getFormBoundary();
	$eol = "\r\n";
	$fieldMeta = "Content-Disposition: form-data; name=";
	$nameFieldQuote = "\"";
	$dataString = '';

	foreach ( $data as $name => $content ) {
		$dataString .= "--" . $formBoundary . $eol
					. $fieldMeta . $nameFieldQuote . $name . $nameFieldQuote
					. $eol . $eol
					. $content
					. $eol;
	}

	$dataString .= "--" . $formBoundary . "--";

	return $dataString;

}

function getAPIResponse ( $endpoint, $method, $data = [ ] ) {

	$httpRequest = curl_init();
	curl_setopt( $httpRequest, CURLOPT_URL, $endpoint );
	curl_setopt( $httpRequest, CURLOPT_RETURNTRANSFER, true );
	// curl_setopt( $httpRequest, CURLOPT_USERAGENT, '' );
	curl_setopt( $httpRequest, CURLOPT_HTTPHEADER, [
		'Cache-Control: no-cache, no-store, must-revalidate',
		'Content-Type: multipart/form-data; boundary=' . getFormBoundary()
	] );
	curl_setopt( $httpRequest, CURLOPT_POSTFIELDS, formatToMultipartFormData( $data ) );
	curl_setopt( $httpRequest, CURLOPT_CUSTOMREQUEST, $method );
	$response = curl_exec( $httpRequest );
	curl_close( $httpRequest );

	return $response;

}



function submitPerson ( $data ) {

	$endpoint = 'https://docs.google.com/forms/d/e/'
			. '1FAIpQLScq7ZjyrApVgGlMZMXWLEd2GBXzWYkHM8EeuFJOOvrYreYhtA/formResponse';
	$requestBody = [
		'entry.1212525387' => $data[ 'when' ],
		'entry.1565423970' => $data[ 'id' ] ?? '',
		'entry.1578729276' => $data[ 'phoneNumber' ] ?? '',
		'entry.387812352' => $data[ 'name' ] ?? '',
		'entry.233670921' => $data[ 'emailAddress' ] ?? '',
		'entry.1395013542' => $data[ 'sourceMedium' ] ?? '',
		'entry.1119604257' => $data[ 'sourcePoint' ] ?? '',
		'entry.39439247' => $data[ 'interests' ] ?? '',
		'entry.2061318693' => $data[ 'extendedAttributes' ] ?? ''
	];

	$response = getAPIResponse( $endpoint, 'POST', $requestBody );

	return $response;

}



function submitPersonActivity ( $activity, $data ) {

	$endpoint = 'https://docs.google.com/forms/d/e/'
			. '1FAIpQLSdEj7wJ4RIEODQFx-pciwzt5WgzFulkCrlyD1mwokR8h9AT2Q/formResponse';
	$requestBody = [
		'entry.1192185748' => $data[ 'when' ],
		'entry.1605323075' => $activity,
		'entry.1792821482' => $data[ 'id' ] ?? '',
		'entry.487995029' => $data[ 'phoneNumber' ],
		'entry.433341220' => $data[ 'emailAddress' ] ?? '',
		'entry.1025227529' => $data[ 'sourceMedium' ] ?? '',
		'entry.1771467168' => $data[ 'sourcePoint' ] ?? '',
		'entry.1911175480' => $data[ 'interests' ] ?? '',
		'entry.2105119295' => $data[ 'extendedAttributes' ] ?? '',
	];

	$response = getAPIResponse( $endpoint, 'POST', $requestBody );

	return $response;

}
