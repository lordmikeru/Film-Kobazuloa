
<?php

	include("DB_Konektatu.php");
    $linka=ConnectDataBase();	# we are calling to the function 'connectDataBase' from the 'DB_Konektatu' php file

	$zuzendaria=$_GET['kill'];	#formularioko name hartzen du

	mysqli_query($linka, "DELETE FROM zuzendaria WHERE Id = '$zuzendaria'");

	mysqli_close($linka);

	header("Location: ../zuzendaria.php#zuzendari_lista");

?>