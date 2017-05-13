
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- SESIOA -->
<?php
   
        session_start();
    
?>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->



<?php

  include("DB_Konektatu.php");
  $linka=ConnectDataBase();

  $z_izena = $_POST["d_name"];
  $z_abiz = $_POST["d_surname"];
  $z_adina = $_POST["d_age"];
  $z_bizi = $_POST["d_address"];
            

  $intserzioa= "INSERT INTO `zuzendaria` (`Izena`, `Abizena`, `Adina`, `Bizilekua`) VALUES ('$z_izena', '$z_abiz', '$z_adina', '$z_bizi')";
  mysqli_query($linka, $intserzioa);
  
  if(!mysqli_query)
  {
    echo "gaizki";
  }


  mysqli_close($linka);

  header("Location: ../zuzendariak.php");

?>