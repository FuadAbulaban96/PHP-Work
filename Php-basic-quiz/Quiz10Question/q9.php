<?php
session_start();
$_SESSION['test'];
if ($_SESSION['test']==7) {
	$_SESSION['test']=8;

	if ($_POST['group']=='Iphone') {
	    $_SESSION['ResultTrueAnswers']++;
	}
}
?>


<h1>Question 9 of 10 </h1>

<form action="q10.php" method='post'>
	What is your favorite Drink? <br>
	<input type='radio' name='group' value='SoftDrink' required> Soft Drink <br>
	<input type='radio' name='group' value='Tea' required> Tea <br>
	<input type='radio' name='group' value='Coffe' required> Coffe <br><br>
	<input type='submit' value='Next' name='submit'>
</form>