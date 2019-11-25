<?php
	$start=0;
	$end=0;
	$total=0;
	$start=microtime();
	echo "<br>";
	echo "Start-Time :  ".$start."<br>";

	for ($i=0; $i<100000000; $i++) { 
	}

	$end=microtime();
	echo"End-Time :  ". $end;
	$total=floatval($end) - floatval($start);
	echo "<br><br>"."Total Time :  ". ($total/1000000) ."  second";
?>
