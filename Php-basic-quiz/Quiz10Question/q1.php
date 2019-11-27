<?php
unset($_SESSION);
session_start();
$_SESSION['test']=0;
?>

<h1>Question 1 of 10 </h1>

<form action="q2.php" method='post'>
	What is htu? <br>
	<input type='radio' name='group' value='HTU' required> HTU <br>
	<input type='radio' name='group' value='JU' required> JU <br>
	<input type='radio' name='group' value='BAU' required> BAU <br><br>
	<input type='submit' value='Next' name='submit'>
</form>