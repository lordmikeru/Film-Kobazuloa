
<?php

	session_start();
	echo $_GET["erab"], " erabiltzailearen sesioa itxi duzu.";
	session_destroy();

	header("Location: ../login.php");

?>