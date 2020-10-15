<?php

function sumFor($int){
	$somme = 0;
	for ($i=1; $i <= $int; $i++) { 
		$somme = $somme +$i;
	}
	return $somme;
}

function sumWhile($int){
	$somme = 0;
	$i = 1;
	while($i <= $int):
		$somme = $i + $somme;
		$i++;
	endwhile;

	return $somme;
}
