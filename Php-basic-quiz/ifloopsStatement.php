<?php

	$string6a = "football";

	if ($string6a == "football") {
		
		echo "Your Game is football";
	}

		echo "Your Game is football is wrong <hr>";



		$num = 3;

		if ($num == 3) {
		
		echo "Your Game is 3";
	}
	else{
		echo "Your Game is football is true";
	}

	 echo "<hr>";

	$Mark = -2;

		if ($Mark >90 && $Mark <= 100) {
		
		echo "Your GPA is A";
	}
		elseif ($Mark >80 && $Mark <= 89) {
		
		echo "Your GPA is B";
	}
	elseif ($Mark >70 && $Mark <= 79) {
		
		echo "Your GPA is C";
	}
	
	elseif ($Mark >50 && $Mark <= 69) {
		
		echo "Your GPA is D";
	}
	elseif ($Mark <49 && $Mark >=0 ) {
		
		echo "Your GPA is F";
	}
	else{
		echo "Your Mark isn't Valid";
	}
	
	echo "<hr>";

	$i=1;

	while ($i <= 5) {

		echo "The number is".$i."<br>";

		$i++;

	}
	echo "<hr>";

	$i=1;

	while ($i <= 100) {

		echo "The number is".$i."<br>";

		$i+=2;

	}
	echo "<hr>";

	$i=2;

	while ($i <= 100) {

		echo "The number is".$i."<br>";

		$i+=2;

	}
	echo "<hr>";

	$i=5;

	while ($i <= 100) {

		echo "The number is".$i."<br>";

		$i+=5;

	}
	echo "<hr>";

	$i=10;

	while ($i <= 100) {

		echo "The number is".$i."<br>";

		$i+=10;

	}
	echo "<hr>";
	for ($i=1; $i <=5 ; $i++) { 
		echo "The number is".$i."<br>";
	}
	echo "<hr>";
	$count=0;
	for ($i=477.75; $i>0 ; $i-=0.25) { 
		$count++;
		
	}
	echo "The Days are ".$count."<br>";
	echo "<hr>";

	$k=0;
	for ($i=1; $i<=5 ; $i++) {

		for ($j=1; $j<=$i ; $j++) { 
			echo ++$k." ";
	 	}
	 	echo "<br>";
	}
	
	echo "<hr>";
	echo "<br>";
	echo "<br>";

	
	for ($i=0; $i<=8 ; $i++) { 

		for ($j=0; $j<=8 ; $j++) {
			$y=$i+$j;
			if ($y%2==0) {
				echo "<div style='width:50px;height: 50px;background-color:black; display: inline-block;'></div>";
			}
			else{
				echo "<div style='width:50px;height: 50px;background-color:white; border:1px solid black; display: inline-block;'></div>";
			}

	 	}
	 	echo "<br>";
	}
	echo "<br>";
	echo "<br>";
	echo "<hr>";

	for ($i=1; $i <=10; $i++) { 
		if ($i>4 && $i%2!=0) {
			continue;
		}
		echo $i." ";
	}
	echo "<hr>";


	$sum=0;
	for ($i=1; $i <=100; $i++) {
		
		if ($sum>=100) {
			break;
		}
		$sum=$sum+$i;
	}
	echo "Number is : ".$i." "."<br>";
	echo "sum is : ".$sum." ";
	echo "<hr>";


	$z=0;
	for ($i=250; $i>13; $i-=13) {
		$z++;
	}
	echo "We have 13 in 250 : ".$z." "."<br>";
	echo "<hr>";


	$T=0;
	for ($i=1024*1024; $i>=1; $i-=8) {
		$T++;
	}
	echo "We have 8MB in 1TB : ".$T." "."<br>";
	echo "<hr>";


?>