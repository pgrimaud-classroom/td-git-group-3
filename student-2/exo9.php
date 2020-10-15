<?php

function tree($lines) {​​

	for ($i=1; $i < $lines; $i++) { 
		if ($i <= ($lines /2)) {
			echo str_repeat('a', $i).'\n'; // FIrst Half
		}
		else{
			echo str_repeat('a', $lines-$i).'\n'; // Second half
		}
	}

}

tree(5);