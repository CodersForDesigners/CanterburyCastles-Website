<?php

class MyTelly {

	public static function parse ( $log ) {
		$call = [ ];

		// If the call is outgoing
		if ( !empty( $log[ 'dcp_requested_id' ] ) )
			exit;

		$call[ 'id' ] = $log[ 'call_id' ];
		$call[ 'ivrNumber' ] = $log[ 'vn' ];

		$call[ 'phoneNumber' ] = trim( $log[ 'caller_number' ] );

		if ( strtolower( $log[ 'call_status' ] ) === 'connected' ) {
			$call[ 'taken' ] = true;
			$call[ 'missed' ] = false;
			$call[ 'wasRouted' ] = true;
			// The phone number of the agent who took the call
			$call[ 'agentPhoneNumber' ] = $log[ 'connected_to' ];
		}
		else if ( empty( $log[ 'connected_to' ] ) ) {
			$call[ 'taken' ] = false;
			$call[ 'missed' ] = false;
			$call[ 'wasRouted' ] = false;
		}
		else {
			$call[ 'taken' ] = false;
			$call[ 'missed' ] = true;
			$call[ 'wasRouted' ] = true;
		}

		$call[ 'startTime' ] = \DateTime::createFromFormat(
			'Y-m-d H:i:s',
			( $log[ 'call_date' ] . $log[ 'call_time' ] ),
			new \DateTimeZone( 'Asia/Kolkata' )
		);
		$call[ 'endTime' ] = ( clone $call[ 'startTime' ] )->add(
			new \DateInterval( 'PT' . $log[ 'call_duration' ] . 'S' )
		);

		// Call duration
		$call[ 'duration' ] = $log[ 'call_duration' ];

		// A link to the recording of the call
		if ( !empty( $log[ 'local_recording_path' ] ) )
			$call[ 'recordingURL' ] = $log[ 'local_recording_path' ];

		return $call;
	}

}
