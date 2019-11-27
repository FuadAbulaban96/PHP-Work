<?php
session_start();
$_SESSION['test'];
if ($_SESSION['test']==8) {
	$_SESSION['test']=9;

	if ($_POST['group']=='Coffe') {
	    $_SESSION['ResultTrueAnswers']++;
	}
}
?>



<h1>Question 10 of 10 </h1>

<form action="examresult.php" method='post'>
	What will your do after 10 years ? <br>
	<input type='radio' name='group' value='MakeOwnBussiness' required> Make Own Bussiness <br>
	<input type='radio' name='group' value='Travelling' required> Travelling <br>
	<input type='radio' name='group' value='SittingHome' required> Sitting Home <br><br>
	<input type='submit' value='Next' name='submit'>
</form>