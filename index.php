<?php





$documentRoot = $_SERVER[ 'DOCUMENT_ROOT' ];
$requestPath = $_SERVER[ 'REDIRECT_URL' ] ?? preg_replace( '/\?[^\?]*/', '', $_SERVER[ 'REQUEST_URI' ] );
$requestPath = preg_replace( '/\/+/', '/', trim( $requestPath, '/' ) );

/*
 * Routes
 */
try {

	// Home page
	if ( $requestPath == '' )
		return require_once $documentRoot . '/pages/buy.php';

	// Every other page
	$_GET[ '_slug' ] = $requestPath;
	return require_once $documentRoot . '/pages/' . $requestPath . '.php';

}
catch ( \Exception $e ) {
	// header();
	return require_once $documentRoot . '/pages/buy.php';
}
