<?php
	session_start();
	unset($_SESSION[ 'Studentid']);
	session_destroy();

	header('Location:../index.php');