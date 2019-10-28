/* -- Scroll Event Listner -- */
$(window).on("scroll", function (event) {
	thing_reveal();
});

/* -- Le Reveal -- */
function thing_reveal() {

	var $things = $(".js_reveal");
	var $window = $(window);

	if( $window.width() > 640 ) {

		var docViewTop = $window.scrollTop();
		var docViewMiddle = parseInt( docViewTop + ( $window.height() * 0.85 ) );

		$things.each( function ( i, t ) {
			var $thing = $( t );
			var elemTop = $thing.offset().top;

			if ( elemTop <= docViewMiddle && ! $thing.hasClass("js_revealDone") ) {
				$thing.addClass("js_revealDone");
			}
		} );

	}
}/* -- End : Le Reveal -- */