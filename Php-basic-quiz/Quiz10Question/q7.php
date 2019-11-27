<?php
session_start();
$_SESSION['test'];
if ($_SESSION['test']==5) {
	$_SESSION['test']=6;

	if ($_POST['group']=='Mercedes') {
	    $_SESSION['ResultTrueAnswers']++;
	}
}
?>



<h1>Question 7 of 10 </h1>

<form action="q8.php" method='post'>
	What is your favorite Animal? <br>
	<input type='radio' name='group' value='Fish' required> Fish <br>
	<input type='radio' name='group' value='Cat' required> Cat <br>
	<input type='radio' name='group' value='Lion' required> Lion <br>
	<input type='submit' value='Next' name='submit'>
</form>