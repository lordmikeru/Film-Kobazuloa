<?php

		# HARTU FORMULARIOKO ALDAGAIAK (POST)
	$id = $_POST["izena"];
	$pass = $_POST["pasahitza"];

		# Datu basea konektatu
  include("DB_Konektatu.php");
  $linka=ConnectDataBase();	# we are calling to the function 'connectDataBase' from the 'DB_Konektatu' php file


		# KONTSULTATU EA ERABILTZAILEA EXISTITZEN DEN
	$result=mysqli_query($linka, "SELECT Izena FROM erabiltzailea WHERE Izena = '$id'");


		# EZ DA ERABILTZAILEA AURKITU
	if (mysqli_num_rows($result) == 0)
	{
      if(empty($id) || empty($pass))
      {
          header("Location: ../erregistroa.php?erregistro_erantzuna=gaizki&&hutsik=bai");
      }
      elseif($id == $pass)
      {
          header("Location: ../erregistroa.php?erregistro_erantzuna=gaizki&&pass_bera=bai");
      }
      elseif(strlen($pass) < 8)
      {
          header("Location: ../erregistroa.php?erregistro_erantzuna=gaizki&&pass_motza=bai");
      }
      else {  // ERREGISTROA ONDO
          mysqli_query($linka, "INSERT INTO erabiltzailea (Izena, Pasahitza) VALUES ('$id', '$pass')");
  		    header("Location: ../erregistroa.php?erregistro_erantzuna=ongi&&erab=$id");
      }
	}
		# ERABILTZAILE IZEN BERA AURKITU DA ERREGISTRATUTA
	else
	{
    header("Location: ../erregistroa.php?erregistro_erantzuna=gaizki&&erab_existitu=bai&&erab=$id");
		session_start();
	}


?>
