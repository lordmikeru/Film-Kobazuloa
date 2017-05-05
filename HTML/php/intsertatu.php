
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- SESIOA -->
<?php
   
        session_start();
    
?>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->



<?php

  include("DB_Konektatu.php");
  $linka=connectDataBase();

  $orria=$_GET["orrialdea"];
  // ORRIALDEAREN ARABERA OBJETU EZBERDINAK GEHITU TAULAN


  if($orria == "aktoreak")
  {
    $a_izena = $_POST["a_name"];
    $a_abiz = $_POST["a_surname"];
    $a_adina = $_POST["a_age"];
    $a_bizi = $_POST["a_address"];
            
    mysqli_query($linka, "INSERT INTO `aktorea` (`Izena`, `Abizena`, `Adina`, `Bizilekua`) VALUES ('$a_izena', '$a_abiz', '$a_adina', '$a_bizi')");  // ('".$bukaeraHelbidea."')
  }



  // switch ($orria) {

  // // FILMAK
  //   case "filmak":
  //       $f_izena = $_POST["f_name"];
  //       $f_mota = $_POST["f_genre"];
  //       $f_zuzen = $_POST["f_director"];
  //       $f_akt = $_POST["f_actor"];
  //       $f_urtea = $_POST["f_year"];

  //       mysqli_query($linka, "INSERT INTO filmak VALUES ('$f_izena', $f_mota, $f_zuzen, $f_akt, $f_urtea)");

  //       break;

  // // AKTOREAK
  //   case aktoreak:
  //       $a_izena = $_POST["a_name"];
  //       $a_abiz = $_POST["a_surname"];
  //       $a_adina = $_POST["a_age"];
  //       $a_bizi = $_POST["a_address"];
                
  //       mysqli_query($linka, "INSERT INTO aktorea (Izena, Abizena, Adina, Bizilekua) VALUES ('$a_izena', '$a_abiz', '$a_adina', '$a_bizi', )");  // ('".$bukaeraHelbidea."')

  //       break;
  // } // ./switch(orrialdea)

  mysqli_close($linka);

  header("Location: ../filmak.php");

?>