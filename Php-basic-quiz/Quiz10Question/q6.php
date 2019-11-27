<?php
session_start();
$_SESSION['test'];
if ($_SESSION['test']==4) {
	$_SESSION['test']=5;

	if ($_POST['group']=='Mansaf') {
	    $_SESSION['ResultTrueAnswers']++;
	}
}
?>




<h1>Question 6 of 10 </h1>

<form action="q7.php" method='post'>
	What is your favorite Car ? <br>
	<input type='radio' name='group' value='Mercedes' required> Mercedes <br>
	<input type='radio' name='group' value='BMW' required> BMW <br>
	<input type='radio' name='group' value='Mini' required> Mini <br><br>
	<input type='submit' value='Next' name='submit'>
</form>