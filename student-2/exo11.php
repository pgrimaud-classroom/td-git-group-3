<?php

$array =[];
for ($i=0; $i < 100; $i++) { 
	$array[] = rand(10,1000);
}

for($j = 0; $j < count($array); $j ++) {
    for($i = 0; $i < count($array)-1; $i ++){

        if($array[$i] > $array[$i+1]) {
            $temp = $array[$i+1];
            $array[$i+1]=$array[$i];
            $array[$i]=$temp;
        }       
    }
}


foreach ($array as $key) {
	echo $key.'<br>';
}