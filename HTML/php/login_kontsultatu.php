<?php
		# HARTU FORMULARIOKO ALDAGAIAK (POST)
	$id = $_POST["izena"];
	$pass = $_POST["pasahitza"];

		# Datu basea konektatu
  include("DB_Konektatu.php");
  $linka=ConnectDataBase();	# we are calling to the function 'connectDataBase' from the 'DB_Konektatu' php file


		# KONTSULTATU EA ERABILTZAILEA EXISTITZEN DEN
	$result=mysqli_query($linka, "SELECT Izena, Pasahitza FROM erabiltzailea WHERE Izena = '$id' && Pasahitza = '$pass'");


		# login GAIZKI
	if (mysqli_num_rows($result) == 0)
	{
      header("Location: ../login.php?login_erantzuna=gaizki");
	}
		# login ONGI
	else
	{
    	header("Location: ../login.php?login_erantzuna=ongi&&erab=$id");
    	session_start();
	}


?>
