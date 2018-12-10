<?php
$array = [
	1,
	5,
	null,
	3,
	null
];

$array = array_filter( $array );
print_r( $array );