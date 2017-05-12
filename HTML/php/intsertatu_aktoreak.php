
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- SESIOA -->
<?php
   
        session_start();
    
?>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->



<?php

  include("DB_Konektatu.php");
  $linka=ConnectDataBase();

  $a_izena = $_POST["a_name"];
  $a_abiz = $_POST["a_surname"];
  $a_adina = $_POST["a_age"];
  $a_bizi = $_POST["a_address"];
            

  $intserzioa= "INSERT INTO `aktorea` (`Izena`, `Abizena`, `Adina`, `Bizilekua`) VALUES ('$a_izena', '$a_abiz', '$a_adina', '$a_bizi')";
  mysqli_query($linka, $intserzioa);
  
  if(!mysqli_query)
  {
    echo "gaizki";
  }


  mysqli_close($linka);

  header("Location: ../aktoreak.php");

?>