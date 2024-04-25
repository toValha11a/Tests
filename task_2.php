<?php
$incomingArray = [
	[
		'date' => '2019-12',
		'event' => 'name1'
	],

	[
		'date' => '2019-12',
		'event' => 'name2'
	],

	[
		'date' => '2019-11',
		'event' => 'name3'
	],

	[
		'date' => '2019-11',
		'event' => 'name4'
	],

	[
		'date' => '2020-10',
		'event' => 'name5'
	],

	[
		'date' => '2020-10',
		'event' => 'name6'
	],

	[
		'date' => '2020-11',
		'event' => 'name5'
	],

	[
		'date' => '2020-11',
		'event' => 'name6'
	],

	[
		'date' => '2020-12',
		'event' => 'name7'
	],

	[
		'date' => '2020-12',
		'event' => 'name8'
	],

	[
		'date' => '2020-12',
		'event' => 'name9'
	],
];
foreach ($incomingArray as $event) {
	$year = substr($event['date'], 0, 4);
	$month = substr($event['date'], -2);
	$arrResult[$year][$month][] = $event['event'];

}