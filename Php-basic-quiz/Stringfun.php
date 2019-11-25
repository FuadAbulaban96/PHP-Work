<?php
	
	$string1="082307";
	echo "<br>"."No.1:"."<br>";
	echo substr(chunk_split($string1, 2, ':'), 0, -1)."\n\n";

	$string2 = 'www.example.com/public_html/index.php';
	echo "<br>"."No.2:"."<br>";
	$file_name = substr(strrchr($string2, "/"), 1);
	echo $file_name."\n\n"; // "index.php"

	$string3  = 'rayy@example.com';
	echo "<br>"."No.3:"."<br>";
	$user = strstr($string3, '@', true);
	echo $user."\n\n";

	$string4 = 'rayy@example.com';
	echo "<br>"."No.4:"."<br>";
	echo substr($string4, -3)."\n\n";

	function password_generate($chars) 
	{
	  $string5 = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
	  return substr(str_shuffle($string5), 0, $chars);
	}
	echo "<br>"."No.5:"."<br>";
  	echo password_generate(7)."\n\n";
	
	$string6a = 'football';
	$string6b= 'footboll';
	$str_pos = strspn($string6a ^ $string6b, "\0");
	echo "<br>"."No.6:"."<br>";
	printf('First difference between two strings at position %d: "%s" vs "%s"',
	$str_pos, $string6a[$str_pos], $string6b[$str_pos]);
	printf("\n\n\n");

	echo "<hr>";
	$str = "Hello";
	echo sha1($str);

	define("dd", 10);
	echo dd;
	

	const Dept="fff";
	echo "<hr>";
	echo Dept;
	echo "<hr>";

	$str = "Hello";
	echo gettype($str);
	echo "<hr>";
	echo settype($str, "double");
	echo "<hr>";

	$str = "Hello";
	echo is_string($str);
	echo "<hr>";
	echo is_array($str);
	echo "<hr>";
	




	// $cha = 'a';
	// $next_cha = ++$cha; 
	// //The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
	// if (strlen($next_cha) > 1) 
	// {
	//  $next_cha = $next_cha[0];
	//  }
	// echo $next_cha."\n";




  ?>