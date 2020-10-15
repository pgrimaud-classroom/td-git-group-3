<?php

$note = rand(0,20);

switch ($note) {
	case ($note <= 10):
		echo "Bof";
		break;
	
	case ($note > 10 && $note <= 12):
		echo "Passable";
		break;

	case ($note > 12 && $note <= 14):
		echo "Assez bnoteen";
		break;

	case ($note > 14 && $note <= 16):
		echo "Bien";
		break;

	default:
		echo ("Tres Bien");
		break;
}

?>