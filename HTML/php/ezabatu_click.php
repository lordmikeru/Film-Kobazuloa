<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- SESIOA -->
<?php
   
        session_start();
    
?>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->



<?php

	include("php/DB_Konektatu.php");
    $linka=connectDataBase();

    $orria=$_GET['url'];
	$zer=$_GET['id'];	# formulariotik bidalitako id-a hartzen du
	$taula=$_GET['table'];

	mysqli_query($linka, "DELETE FROM ".$taula." WHERE id = ".$zer."");

	mysqli_close($linka);

	header("Location: ".$orria.".php");

?>