<?php
	function ConnectDataBase()
	{
		if (!($link = mysqli_connect("localhost", "root", "")))	# if there is no connection, then:
		{
			echo "There is an error in the connection with the DB";
			exit();
		}
		if(!mysqli_select_db($link, "film_proiektua"))
		{
			echo "There is an error selecting the database.";
			exit();
		}
		return $link;	# konektatu bada, dena ondo
	}


?>
