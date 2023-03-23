<?php
	session_start();
	unset($_SESSION[ 'registraid']);
	session_destroy();

	header('Location:../index.php');