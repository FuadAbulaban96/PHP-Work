<?php

session_start();
if ($_SESSION['test']==1) {
	$_SESSION['test']=2;
	
	if ($_POST['group']=='En') {
		 $_SESSION['ResultTrueAnswers']++;
	}
}
?>



<h1>Question 3 of 10 </h1>

<form action="q4.php" method='post'>
	What is your favorite Color? <br>
	<input type='radio' name='group' value='Blue' required> Blue <br>
	<input type='radio' name='group' value='Green' required> Green <br>
	<input type='radio' name='group' value='White' required> White <br><br>
	<input type='submit' value='Next' name='submit'>
</form>