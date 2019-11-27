<?php
session_start();
$_SESSION['test'];
if ($_SESSION['test']==2) {
	$_SESSION['test']=3;

	if ($_POST['group']=='Green') {
	    $_SESSION['ResultTrueAnswers']++;
	}
}
?>



<h1>Question 4 of 10 </h1>

<form action="q5.php" method='post'>
	What is your favorite Programming Language ? <br>
	<input type='radio' name='group' value='Java' required> Java <br>
	<input type='radio' name='group' value='PHP' required> PHP <br>
	<input type='radio' name='group' value='Asp' required> Asp <br><br>
	<input type='submit' value='Next' name='submit'>
</form>