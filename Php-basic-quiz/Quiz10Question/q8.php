<?php
session_start();
$_SESSION['test'];
if ($_SESSION['test']==6) {
	$_SESSION['test']=7;

	if ($_POST['group']=='Lion') {
	    $_SESSION['ResultTrueAnswers']++;
	}
}
?>



<h1>Question 8 of 10 </h1>

<form action="q9.php" method='post'>
	What is your favorite Phone? <br>
	<input type='radio' name='group' value='Samsung' required> Samsung <br>
	<input type='radio' name='group' value='Iphone' required> Iphone <br>
	<input type='radio' name='group' value='Hawawie' required> Hawawie <br><br>
	<input type='submit' value='Next' name='submit'>
</form>