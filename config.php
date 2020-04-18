<?php
error_reporting(E_ALL);

define('SILENTC_TOKEN', '1251422381:AAEJ1wiQ-NqpLRxfrdeZX0GkGFNFKXWwZh4');
$db_data = ['sqlite:silentc.db'];

$cfg = [
	# Users that can use the special commands
	'sudoers' => [
		641069470,
	],
];

# User that will receive the error reports
define('SILENTC_ADMIN', 641069470);