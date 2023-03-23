<?php
	session_start();
	unset($_SESSION[ 'lecturerid']);
	session_destroy();

	header('Location:../index.php');