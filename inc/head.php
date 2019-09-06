<?php

/*
 * Get all the links on the site
 */
$defaultLinks = require __DIR__ . '/default-nav-links.php';
$links = getContent( $defaultLinks, 'pages' );

/*
 * Figure out the base URL
 */
$urlPath = strstr( $_SERVER[ 'REQUEST_URI' ], '?', true );
if ( ! $urlPath )
	$urlPath = $_SERVER[ 'REQUEST_URI' ];
$urlFragments = preg_split( '/\//', $urlPath );
	// Pull out the first non-empty fragment
$calculatedBaseSlug = '';
$inferredBaseSlug = $_GET[ '_slug' ] ?? '';
foreach ( $urlFragments as $fragment ) {
	if ( ! empty( $fragment ) ) {
		$calculatedBaseSlug = $fragment;
		break;
	}
}
if ( $inferredBaseSlug == $calculatedBaseSlug )
	$baseURL = '';
else
	$baseURL = '/' . $calculatedBaseSlug . '/';

/*
 * Get the title and URL of the website and current page
 */
// $siteUrl = getSiteUrl();
$siteTitle = getContent( 'Canterbury Castles | A Weekend Home Destination', 'site_title' );
$pageUrl = $siteUrl . $urlPath;
$pageTitle = getCurrentPageTitle( $links, $baseURL, $siteTitle );

?>

<head>

	<!-- Do NOT place anything above this -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">

	<title><?php echo $pageTitle ?></title>


	<?php if ( ! empty( $baseURL ) ) : ?>
		<base href="<?php echo $baseURL ?>">
	<?php endif; ?>

	<!--
	*
	*	Metadata
	*
	- -->
	<!-- Short description of the document (limit to 150 characters) -->
	<!-- This content *may* be used as a part of search engine results. -->
	<meta name="description" content="<?php echo getContent( 'Buy a Plot, Build a Villa, Book a Weekend Getaway or Host an Event. Just 40 minute drive from Bangalore City.', 'description' ); ?>">
	<!-- Short description of your document's subject -->
	<meta name="subject" content="<?php echo getContent( 'Canterbury Castles | A Weekend Home Destination', 'subject' ); ?>">


	<!--
	*
	*	Authors
	*
	- -->
	<!-- Links to information about the author(s) of the document -->
	<meta name="author" content="Lazaro Advertising">
	<link rel="author" href="humans.txt">


	<!--
	*
	*	SEO
	*
	- -->
	<!-- Control the behavior of search engine crawling and indexing -->
	<meta name="robots" content="index,follow"><!-- All Search Engines -->
	<meta name="googlebot" content="index,follow"><!-- Google Specific -->
	<!-- Verify website ownership -->
	<meta name="google-site-verification" content="<?php echo getContent( '', 'google_site_verification_token' ); ?>"><!-- Google Search Console -->


	<!--
	*
	*	UI / Chrome
	*
	- -->
	<!-- Theme Color for Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="<?php echo getContent( '#011126', 'theme_color' ); ?>">

	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="57x57" href="media/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="media/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="media/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="media/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="media/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="media/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="media/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="media/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="media/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="media/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="media/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="media/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="media/favicon/favicon-16x16.png">
	<link rel="manifest" href="media/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#011126">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">


	<!-- ~ iOS ~ -->
	<!-- Disable automatic detection and formatting of possible phone numbers -->
	<meta name="format-detection" content="telephone=no">
	<!-- Launch Screen Image -->
	<!-- <link rel="apple-touch-startup-image" href="/path/to/launch.png"> -->
	<!-- Launch Icon Title -->
	<meta name="apple-mobile-web-app-title" content="<?php echo getContent( 'Brown.ie', 'apple -> ios_app_title' ); ?>">
	<!-- Enable standalone (full-screen) mode -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<!-- Status bar appearance (has no effect unless standalone mode is enabled) -->
	<meta name="apple-mobile-web-app-status-bar-style" content="<?php echo getContent( 'default', 'apple -> ios_status_bar_style' ); ?>">

	<!-- ~ Android ~ -->
	<!-- Add to home screen -->
	<meta name="mobile-web-app-capable" content="yes">
	<!-- More info: https://developer.chrome.com/multidevice/android/installtohomescreen -->


	<!--
	*
	*	Social
	*
	- -->
	<!-- Facebook Open Graph -->
	<meta property="og:url" content="<?php echo $pageUrl ?>">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php echo $pageTitle ?>">
	<meta property="og:image" content="<?php echo getContent( 'http://canterburycastles.com/download/og-cover-image.png' . $ver, 'og -> image' ) ?>">
	<meta property="og:description" content="<?php echo getContent( 'Buy a Plot, Build a Villa, Book a Weekend Getaway or Host an Event. Just 40 minute drive from Bangalore City.', 'og -> description' ) ?>">
	<meta property="og:site_name" content="<?php echo getContent( '', 'site_title' ) ?>">


	<!-- Schema.org / Google+ -->
	<meta itemprop="name" content="<?php echo $pageTitle ?>">
	<meta itemprop="description" content="<?php echo getContent( 'Buy a Plot, Build a Villa, Book a Weekend Getaway or Host an Event. Just 40 minute drive from Bangalore City.', 'schema -> description' ) ?>">
	<meta itemprop="image" content="<?php echo getContent( 'http://canterburycastles.com/download/og-thumbnail-image.png' . $ver , 'schema -> image' ) ?>">


	<!--
	*
	*	Enqueue Files
	*
	- -->
	<!-- Stylesheet -->
	<?php require __DIR__ . '/../style.php'; ?>
	<!-- jQuery 3 -->
	<script type="text/javascript" src="plugins/jquery/jquery-3.0.0.min.js<?php echo $ver ?>"></script>
	<!-- Slick Carousel -->
	<link rel="stylesheet" type="text/css" href="plugins/slick/slick.css<?php echo $ver ?>"/>
	<link rel="stylesheet" type="text/css" href="plugins/slick/slick-theme.css<?php echo $ver ?>"/>

	<!--
	*
	*	Fonts and Icons
	*
	- -->
	<?php echo getContent( <<<ARB
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald|Playfair+Display:400,400i,700"
	rel="stylesheet">
	<!-- Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
ARB
, 'fonts_and_icons' ) ?>


	<?php
		/*
		 * Arbitrary Code ( Bottom of Head )
		 */
		echo getContent( <<<ARB
		<!-- Lazaro : Google Analytics -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-57124254-8', 'auto');
			ga('send', 'pageview');
		</script>
		<!-- End Lazaro : Google Analytics -->

		<!-- Hotjar Tracking Code for http://www.canterburycastles.com/ -->
		<script>
			(function(h,o,t,j,a,r){
				h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
				h._hjSettings={hjid:248224,hjsv:5};
				a=o.getElementsByTagName('head')[0];
				r=o.createElement('script');r.async=1;
				r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
				a.appendChild(r);
			})(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
		</script>
		<!-- End Hotjar Tracking Code for http://www.canterburycastles.com/ -->
ARB
, 'arbitrary_code_head_bottom' ); ?>


</head>
