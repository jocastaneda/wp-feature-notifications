<?php

class Test_WPNotify_WpdbNotificationRepository extends WPNotify_TestCase {

	/** @dataProvider data_provider_it_returns_false_on_invalid_ids */
	public function test_it_returns_false_on_invalid_ids( $id ) {
		$testee = new WPNotify_WpdbNotificationRepository();
		$result = $testee->find_by_id( $id );
		$this->assertFalse( $result );
	}

	public function data_provider_it_returns_false_on_invalid_ids() {
		return array(
			array( - 1 ),
			array( 0 ),
			array( 'nonsense' ),
			array( array() ),
			array( new stdClass() ),
		);
	}
}
