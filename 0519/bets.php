<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 9',
		'union' => '1, 5, 7, 8',//count: 4
		'inter' => '1',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '5, 7, 10, 11',
		'union' => '1, 2, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count: 11
		'inter' => '5, 7, 10, 11',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 3, 4, 5, 6',
		'win($20)' => '2, 3, 4, 5, 6',
		'win($20)' => '3, 4',
		'qin/trio($10)' => '2, 3, 4, 5, 6',
		'union' => '1, 2, 3, 4, 5, 6',//count: 6
		'inter' => '2, 3, 4, 5, 6',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 2',
		'union' => '1, 2, 3, 4, 5, 10, 11, 12',//count: 8
		'inter' => '1, 2',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '2, 4, 6',
		'win($20)' => '2, 4, 6',
		'win($20)' => '4, 6',
		'qin/trio($10)' => '2, 4, 6',
		'union' => '2, 3, 4, 6, 7, 8, 9, 10, 11',//count: 9
		'inter' => '2, 4, 6',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 10',
		'union' => '1, 3, 5, 6, 7, 8, 10',//count: 7
		'inter' => '3, 10',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 5, 8, 10',
		'possible win' => '3, 5, 10',
		'possible win' => '5, 8, 10',
		'union' => '1, 2, 3, 5, 7, 8, 9, 10, 12',//count: 9
		'inter' => '3, 5, 8, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 7, 8',
		'win($20)' => '1, 7, 8',
		'win($20)' => '7, 8',
		'qin/trio($10)' => '1, 7, 8',
		'union' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12',//count: 11
		'inter' => '1, 7, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '3, 4, 6',
		'union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count: 12
		'inter' => '3, 4, 6',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '4, 8, 10',
		'union' => '7, 8, 9, 11, 12',//count: 5
		'inter' => '8',
	],
];
