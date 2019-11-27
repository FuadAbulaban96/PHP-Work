<?php
session_start();
$_SESSION['test'];
if ($_SESSION['test']==3) {
	$_SESSION['test']=4;

	if ($_POST['group']=='PHP') {
	    $_SESSION['ResultTrueAnswers']++;
	}
}
?>



<h1>Question 5 of 10 </h1>

<form action="q6.php" method='post'>
	What we will eat tommorow ? <br>
	<input type='radio' name='group' value='Pizza' required> Pizza <br>
	<input type='radio' name='group' value='Mansaf' required> Mansaf <br>
	<input type='radio' name='group' value='Falafel' required> Falafel <br><br>
	<input type='submit' value='Next' name='submit'>
</form>