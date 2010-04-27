<?php

	$values = $_POST;

	function present($index) {
		global $values;
		// isset() not array_key_exists() because isset() is a lot faster, and I NULL values shouldn't pass anyway.
		return isset($values[$index]) && !empty($values[$index]);
	}

	if (present('name') && present('email') && present('message')) {
		if (!mail('matthias@loitsch.com', 'Message from opentip.org', $values['message'], 'From: ' . $values['name'] .' <'.$values['email'].'>')) {
			die('Something went wrong.');
		}
	} else {
		die('Please fill in all values.');
	}

?>