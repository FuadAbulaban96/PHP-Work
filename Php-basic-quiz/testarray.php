<?php

$x= array(1,10,"Fuad",10.25);

echo "<pre>";
print_r($x);

$x[100]=99;
$x[]=120;

print_r($x);

$salary = array("Fuad" =>3000 ,"Yazan"=>2500,"Shadeh"=>2700,"jauosi"=>1500 );
$salary[]=6000;
print_r($salary);

$salary = array("Fuad" =>3000 ,"Yazan"=>2500,"Shadeh"=>2700,"jauosi"=>1500 );
foreach ($x as $key => $val) {
	echo $key." ".$val."<br>";	
}
echo "<br><br>";

$salary = array("Fuad" =>3000 ,"Yazan"=>2500,"Shadeh"=>2700,"jauosi"=>1500 );
foreach ($salary as $key => $val) {
	echo $key." ".$val."<br>";	
}
echo "<br><br><hr>";

// /---------------------------------------------------------/ 

$y = array(4,5,9,8,1,2,6,7,5,20);
echo count($y)."<br>";
echo max($y)."<br>";
echo min($y)."<br>"; 
sort($y);
print_r($y)."<br>";
rsort($y);
print_r($y)."<br>";
$string=implode(" * ", $y);
echo $string."<br>";
print_r(explode(" * ", $string));
echo "<br>";
echo in_array(20, $y);
echo "<br>";

// function 1: marge

echo "function 1: marge:  <br>";
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));


// function 2: push

echo "function 2: push:  <br>";
$a=array("red","green");
array_push($a,"white","blue","yellow");
print_r($a);

// function 3: pop

echo "function : pop:  <br>";
$a=array("red","green","blue");
array_pop($a);
print_r($a);

echo "<br><br><hr>";
// /---------------------------------------------------------/ 

$multi = array(
			array(1,2,3),
			array(4,5,6),
			array(7,8)
		);

echo  "<br>";
echo  "<br>";
foreach($salary as $key=> $value)
{
    if (is_array($value))
    {
        foreach ($value as $key2=>$value2)
        {
            echo    $key2 . "  " . $value2. "<br>" ;
        }
    } else {
        echo   $key . "  " . $value  . "<br>" ;   
    }
}

 

echo "<br><br><hr>";
// /---------------------------------------------------------/ 

echo "<br><br>Elearning Q1  : <br><br>";
echo "<pre>";
$json = '{
	"Title": "The Cuckoos Calling",
	"Author": "Robert Galbraith",
	"Detail":
			{ 
				"Publisher": "Little Brown"
 			}
  		}';
$array = json_decode($json,true);
print_r($array);
	foreach($array as $key=> $value)
{
    if (is_array($value))
    {
        foreach ($value as $key2=>$value2)
        {
            echo    $key2 . " : " . $value2  . "<br>" ;
        }
    } else {
        echo   $key . " : " . $value  . "<br>" ;   
    }
}

echo "<br><br><hr>";
// /---------------------------------------------------------/ 

echo "<br><br>Elearning Q2  : <br><br>";

$Q2 = array("Sophia"=>31,"Jacob"=>41,"William"=>39,"Ramesh"=>40);
asort($Q2);
foreach ($Q2 as $key => $val) {
	echo $key." ".$val."<br>";
}
echo "<br><br>";
// -------------------------

ksort($Q2);
foreach ($Q2 as $key => $val) {
	echo $key." ".$val."<br>";
}
echo "<br><br>";
// -------------------------

arsort($Q2);

foreach ($Q2 as $key => $val) {
	echo $key." ".$val."<br>";
}
echo "<br><br>";
// -------------------------

krsort($Q2);
foreach ($Q2 as $key => $val) {
	echo $key." ".$val."<br>";
}
echo "<br><br><hr>";
// /---------------------------------------------------------/ 

$names=array("fuad","shadeh","yazan","sohaib");

	print_r(array_map('strtoupper', $names));
	

?>