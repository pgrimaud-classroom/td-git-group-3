<?php


for ($i=1; $i < 100 ; $i++) { 
	if ($i % 3 == 0 ) {
		echo 'fizz <br>';
	}
	elseif ($i % 5 == 0) {
		echo 'buzz <br>';	
	}
	elseif ($i % 15 ==0) {	
		echo 'fizzbuzz <br>';
	}
	else{
		echo $i.'<br>';
	}
}