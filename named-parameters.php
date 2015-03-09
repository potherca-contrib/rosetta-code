<?php

// named parameters task - http://rosettacode.org/wiki/Named_parameters#PHP
// PHP dosen't support named parameters but you can simulate the behavior with PHP arrays.

function named($args) {
	$args += ["gbv" => 2,
				"motor" => "away",
				"teenage" => "fbi"];
	echo $args["gbv"] . " men running " . $args['motor'] . " from the " . $args['teenage'];
}

named(["teenage" => "cia", "gbv" => 10]);

//output "10 men running away from the cia"