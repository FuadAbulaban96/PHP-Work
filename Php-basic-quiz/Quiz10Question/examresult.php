<?php
session_start();
$_SESSION['test'];
if ($_SESSION['test']==9) {
	$_SESSION['test']=10;

	if ($_POST['group']=='Travelling') {
	    $_SESSION['ResultTrueAnswers']++;
	}
}
?>
<?php

$grade= $_SESSION['ResultTrueAnswers']; 
if ($grade==10) {
	echo "<h1>Your Grade is<br>$grade/10</h1><br>";
	echo "<h2 >Excellent</h2>";		
}elseif($grade>=5 && $grade<10 ){
	echo "<h1>Your Grade is<br> $grade/10</h1><br>";
	echo "<h2 >Excellent</h2>";
}elseif ($grade<5) {
	echo "<h1>Your Grade is<br> $grade/10</h1><br>";
	echo "<h2 >Failed</h2>";		
}
elseif ($grade>10) {	
	echo "<h1>Something went wrong</h1>";
}
?>
<form action="q1.php" method='post'>
	<input type='submit' value='Again' name='submit'>
</form>