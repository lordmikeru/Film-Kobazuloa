
<?php

	include("DB_Konektatu.php");
    $linka=ConnectDataBase();	# we are calling to the function 'connectDataBase' from the 'DB_Konektatu' php file

	$aktorea=$_GET['kill'];	#formularioko name hartzen du

	mysqli_query($linka, "DELETE FROM aktorea WHERE Id = '$aktorea'");

	mysqli_close($linka);

	header("Location: ../aktoreak.php#aktore_lista");

?>