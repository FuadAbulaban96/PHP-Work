<?php
session_start();
$_SESSION['test'];
if ($_SESSION['test']==0) {
	$_SESSION['test']=1;

	if ($_POST['group']=='HTU') {
	
		$_SESSION['ResultTrueAnswers'] = 0;
	    $_SESSION['ResultTrueAnswers']++;
	}
}
?>



<h1>Question 2 of 10 </h1>

<form action="q3.php" method='post'>
	What is your favorite language? <br>
	<input type='radio' name='group' value='Ar' required> Ar <br>
	<input type='radio' name='group' value='En' required> En <br>
	<input type='radio' name='group' value='Fr' required> Fr <br><br>
	<input type='submit' value='Next' name='submit'>
</form>