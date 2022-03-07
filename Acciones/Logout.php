<?php
	session_start();

	if (isset($_SESSION["Id_rol"])) {
		session_destroy();
		header("location: ../login.php"); //estemos donde estemos nos redirije al index
		die();
	}

?>