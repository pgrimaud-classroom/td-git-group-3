<?php

function impot($int){
	echo ($int > 1000 ) ? $int*0.25 : $int*0.1;
}


impot(500);
?>