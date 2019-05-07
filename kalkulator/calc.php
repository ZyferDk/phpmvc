<?php 

	require_once "calculate.php";

	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$cal  = $_POST['cal'];


	$calculate = new Calc($num1, $num2, $cal);
	echo $calculate->panggil();

 ?>