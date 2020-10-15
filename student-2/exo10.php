<?php

$user =[
	"firstname " => "pierre",
	"lastname" => "grimaud",
	"age" => "30",
	"job" => "teacher"
];

foreach ($user as $key => $value) {
	echo "$key = $value<br>";
}