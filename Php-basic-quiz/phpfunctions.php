<?php

function say_welcome($last,$course)
{
	return "Welcom to $course in $last";
}

$x=say_welcome("BAU","Jave");
echo $x;

echo "<br><br><hr>";
//------------------------------------------------------------//
echo "Elearning Q1  : <br><br>";

function primenumber($value)
{
	if (($value%2==0 || $value%3==0) && ($value!=2 && $value!=3)){
		return "No isn't a Prime Number";
	}
	else{
		return "Yes it's a Prime Number";
	}
}
$num=primenumber(3);
echo $num;

echo "<br><br><hr>";
//------------------------------------------------------------//
echo "Elearning Q2  : <br><br>";

function is_str_lowercase($str1)
   {
    for ($sc = 0; $sc < strlen($str1); $sc++) {
	      if (ord($str1[$sc]) >= ord('A') && ord($str1[$sc]) <= ord('Z')) {
      return false;
         }
         }
      return true;
       }
var_dump(is_str_lowercase('abc def ghi'));
var_dump(is_str_lowercase('abc dEf ghi'));

echo "<br><br><hr>";
//------------------------------------------------------------//
echo "Elearning Q3  : <br><br>";


function factorial_number($num)
{
  if($num ==0)
    {
	   return 1;
    }
  else 
    {	
	   return $num * factorial_number($num-1);
    }
	}
$number=factorial_number(5);
echo $number;
echo "<br><br><hr>";
//------------------------------------------------------------//
echo "Elearning Q4  : <br><br>";

function check_type($type)
{
	if (is_array($type)) {
		return "The type is Array";
	}
	elseif (is_string($type)) {
		return "The type is String";
	}
	elseif (is_object($type)) {
		return "The type is Object";	
	}
	else{
		return "The type is a Number";
	}
}
$x= 123;
$The_type=check_type($x);
echo $The_type;

echo "<br><br><hr>";
//------------------------------------------------------------//
echo "Elearning Q5  : <br><br>";


function calculate_tax($num)
{
  if($num >=500)
    {
	   return $num * (0.18/100);
    }
  else 
    {	
	   return $num * (0.16/100);
	}
}
$numberr= calculate_tax(500);
echo $numberr;


echo "<br><br><hr>";
//------------------------------------------------------------//
$x= array(1,10,"Fuad",10.25);
$salary = array("Fuad" =>3000 ,"Yazan"=>2500,"Shadeh"=>2700,"jauosi"=>1500 );
$multi = array(
			array(1,2,3),
			array(4,5,6),
			array(7,8)
		);

echo  "<br>";
echo  "<br>";
foreach($x as $key=> $value)
{
    if (is_array($value))
    {
        foreach ($value as $key2=>$value2)
        {
        	if(is_array($value2)){
        		 foreach ($value2 as $key3=>$value3)
        		{
        			if (is_array($value3)) {
        				echo "Four Dimontional Array";
        			}
        			else{
        				echo "Three Dimontional Array";
        			}
        		}
        	}
        	else{
        		echo "Two Dimontional Array";
        		break;
        	}
            
        }
    } 
    else{
    	echo "One Dimontional Array";
    }
	          
    
}

?>