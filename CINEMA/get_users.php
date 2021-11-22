<?php

	header("Content-Type: application/json");
	header("Access-Control-Allow-Origin: *	");

	$users=[
		[

			"name" = "Jonathan",
			"age" = "21",
			"ocupation" = "Student"

		]
	];

echo json_encode($users, JSON_PRETTY_PRINT);

?>