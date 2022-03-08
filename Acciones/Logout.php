<?php
	session_start();

	if (isset($_SESSION["Id_rol"])) {
		session_unset();
		session_destroy();
		header("location: ../login.php"); 
		die();
	}

?>