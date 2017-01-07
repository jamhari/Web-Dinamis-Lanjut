<?php
	if(!isset($_SESSION))
	{
		session_start();
	}	
//if(! ((session_is_registered(SES_USER)) && (session_is_registered(SES_PASS)))) {
if(! ($_SESSION['SES_USER']) && ($_SESSION['SES_PASS'])) {	 	
	$mesage = "<div class='alert alert-info'><strong>Perhatian, </strong>Silahkan Anda Login Dulu!<button type='button' class='close' data-dismiss='alert'>x</button></div>";
	include_once "login.php";
	exit;
}
?>