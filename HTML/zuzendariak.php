<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- SESIOA -->
<?php
   
        session_start();
    
?>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->





<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>FILMEN KOBAZULOA</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>


    </head>

    <body>


    <header class="main-header">


        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> Laguntza:  </li>
                             <li> <i class="fa fa-envelope"></i> <a href="mailto:filmkobazuloa@gmail.com">filmkobazuloa@gmail.com</a> </li>
                       </ul> <!-- /.header-contact  -->

                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="http://www.facebook.com/filmkobazuloa"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="http://www.twitter.com/filmkobazuloa"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="http://www.plus.google.com/+filmkobazuloa"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="http://www.youtube.com/filmkobazuloa"> <i class="fa fa-youtube"></i>  </a> </li>
                       </ul> <!-- /.header-social  -->

                    </div>


                  </div>
              </div>

            </div>

            <div class="navbar-main">

              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>

<!-- LOGOA -->
                  <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/sadaka-logo.png" alt=""></a> -->
                  <a class="navbar-brand" href="index.php#ongietorri"><img src="assets/images/Filmkobazuloa_logoa.png" alt=""></a>

                </div>
<!-- NABIGAZIO MENUA -->
                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a href="index.php">HASIERA</a></li>
                    <li class="has-child"><a href="filmak.php">FILMAK</a>
                      <ul class="submenu">
                         <li class="submenu-item"><a href="filmak.php?mota=akzioa">Akzioa </a></li>
                         <li class="submenu-item"><a href="filmak.php?mota=drama">Drama </a></li>
                         <li class="submenu-item"><a href="filmak.php?mota=fantasia">Fantasia </a></li>
                         <li class="submenu-item"><a href="filmak.php?mota=zientzia_fikzioa">Zientzia-fikzioa </a></li>
                      </ul>
                    </li>
                    <li><a href="aktoreak.php">AKTOREAK</a></li>
                    <li><a class="is-active" href="zuzendariak.php">ZUZENDARIAK</a></li>
                    <?php                     
                        if (isset($_SESSION["logged_user"]))
                        { // LOGEATUTA
                            printf("<li class='konektatu'><a href=\"login.php\">IRTEN (<b>".($_SESSION['logged_user'])."</b>)</a></li>");
                        }
                        else
                        { // LOGEATU GABE
                            printf('<li class="konektatu"><a href="erregistroa.php">ERREGISTRATU</a></li>
                                <li class="konektatu"><a href="login.php">KONEKTATU</a></li>');
                        }
                    ?>

                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->

            </div> <!-- /.navbar-main -->


        </nav>

    </header> <!-- /. main-header -->



<!-- ZUZENDARIAK (DENAK) -->
    <div class="section-home home-reasons">
        <div class="container">
            <div class="row">
              <div class="parrafoa">




<!-- INSERT FORMULARIOA -->

              <?php

                if(isset($_SESSION["logged_user"]))
                {     // LOGEATUTA
                  ?>     
                    

                    <h1> ZUZENDARIA GEHITU </h1>
                            <div class="formularioa">
                              <table>
                                  <form id="f_aktorea_gehitu" action="php/intsertatu_zuzendariak.php" method="post" onsubmit="return balidatu()"> 
                                      <tr>
                                         <td>Izena: </td> <td><input type="text" id ="d_name" name="d_name" value=""></td>
                                      </tr>
                                      <tr>
                                         <td>Abizena: </td> <td><input type="text" id ="d_surname" name="d_surname" value=""></td>
                                      </tr>
                                      <tr>
                                         <td>Adina: </td> <td><input type="number" id ="d_age" name="d_age" value=""></td>
                                      </tr>
                                      <tr>
                                         <td>Bizilekua: </td> <td><input type="text" id ="d_address" name="d_address" value=""></td>
                                      </tr>
                                      <tr>
                                        <td><input type="reset" value="Garbitu"></td>
                                        <td><input type="submit" value="GEHITU"></td>
                                      </tr>
                                  </form>
                              </table>      

                              <h3 id="error"></h3>    
                              <p id="error_izena"></p>    

                            </div>  

                            

              <!-- FORMULARIOA BALIDAZIOA (KLIENTE ALDETIK) -->
                      <script>

                          function balidatu()
                          {
                            // GEHIKUNTZA GAIZKI
                              if( (document.getElementById("d_name").value.length == 0) ||
                                  (document.getElementById("d_surname").value.length == 0) ||
                                  (document.getElementById("d_age").value.length == 0) ||
                                  (document.getElementById("d_address").value.length == 0)
                                )
                                {
                                    alert("Eremu guztiak bete!");
                                    document.getElementById("error").innerHTML = "<u>ERROREA</u>";
                                    document.getElementById("error_izena").innerHTML = "Eremu guztiak bete, mesedez.";
                                    return false;   // Ez da SUBMIT egingo.
                                }
                              if(
                                  (!isNaN(document.getElementById("d_name").value)) ||
                                  (!isNaN(document.getElementById("d_surname").value)) ||
                                  (!isNaN(document.getElementById("d_address").value))
                                  )
                              {                                  
                                  alert("Ez idatzi zenbakirik!");
                                  return false;
                              }

                            // GEHIKUNTZA ONDO
                                  alert("Zuzendari berria gehitu da.");
                                  return true;    // SUBMIT egingo da.
                          }
                      </script>
                      <!-- ./formulario balidazioa -->

             <?php
                  }  // ./if(logeatua)
             ?>

<!-- ./insert formularioa -->




              <!-- BILAKETA FORMULARIOA -->
              <h1> ZUZENDARIA BILATU </h1>
              <div class="formularioa">
                <table>
                    <form action="zuzendariak.php" method="get">	<!-- 'pasahitza' ez ikusteko, POST -->
                        <tr>
                           <td>Zuzendariaren Izena: </td> <td><input type="text" name="bilatu_zuzendaria_izena"></td>
                        </tr>
                        <tr>
                           <td>Zuzendariaren Abizena: </td> <td><input type="text" name="bilatu_zuzendaria_abizena"></td>
                        </tr>
                        <tr>
                          <td><input type="submit" value="BILATU"></td>
                        </tr>
                    </form>
                </table>
              </div>
              <!-- ./bilaketa formularioa -->

              <!-- KONEKTATU DATU BASEAREKIN -->
                <?php
                  include("php/DB_Konektatu.php");
                  $linka=connectDataBase();	# we are calling to the function 'connectDataBase' from the 'DB_Konektatu' php file


                  if (isset($_GET["bilatu_zuzendaria_izena"]) || (isset($_GET["bilatu_zuzendaria_abizena"])))
                  {
                      $zuzendari_kontsulta="bai";
                      if (isset($_GET["bilatu_zuzendaria_izena"]))
                      {
                        $bilatuizen=$_GET["bilatu_zuzendaria_izena"];
                        $iz=true;
                      }
                      if(isset($_GET["bilatu_zuzendaria_abizena"]))
                      { // IZENA ETA ABIZENA BILATU
                        $bilatuabizen=$_GET["bilatu_zuzendaria_abizena"];
                        $ab=true;
                      }

                      if(isset($iz) && isset($ab))
                      {
                        $kontsulta_emaitza=mysqli_query($linka, "SELECT * FROM zuzendaria WHERE Izena='$bilatuizen' && Abizena='$bilatuabizen'"); // or die(mysqli_error());
                      }
                      else
                      {
                        if(isset($iz) && !isset($ab))
                        {
                          $kontsulta_emaitza=mysqli_query($linka, "SELECT * FROM zuzendaria WHERE Izena='$bilatuizen'"); // or die(mysqli_error());
                        }
                        else {
                          $kontsulta_emaitza=mysqli_query($linka, "SELECT * FROM zuzendaria WHERE Abizena='$bilatuabizen'"); // or die(mysqli_error());
                        }
                      }


                  }
                  else
                  {
                        if (isset($_GET["zuzendari_espezifikoa"]))
                        {
                          // ZUZENDARIAREN FILMOGRAFIA KONTSULTATU
                            $zuzendari_kontsulta="ez";
                            $kontsulta_emaitza=mysqli_query($linka, "SELECT * FROM filma WHERE Zuzendaria=".$_GET["zuzendari_espezifikoa"]."");
                            // ZUZENDARIAREN DATUAK
                            $kontsulta_zuzendaria=mysqli_query($linka, "SELECT Izena, Abizena FROM zuzendaria WHERE id=".$_GET["zuzendari_espezifikoa"]."");
                            $kontsulta_zuzendaria_datuak=mysqli_fetch_array($kontsulta_zuzendaria);
                            printf("<h1><u>".$kontsulta_zuzendaria_datuak["Izena"]." ".$kontsulta_zuzendaria_datuak["Abizena"]." -(e)k zuzendutako filmak</u></h1>");
                        }
                        else {
                          // ZUZENDARIAK KONTSULTATU
                            $zuzendari_kontsulta="bai";
                            printf("<h1><u>ZUZENDARIAK</u></h1>");
                            $kontsulta_emaitza=mysqli_query($linka, "SELECT * FROM zuzendaria");
                        }
                   }
                ?>


              <!-- TAULA -->

              <?php

                if(isset($zuzendari_kontsulta) && $zuzendari_kontsulta=="bai")
                {   // ZUZENDARIAREN DATUAK
                  if(isset($_SESSION["logged_user"]))
                  {     // LOGEATUTA
                      printf("<TABLE id='zuzendari_lista'  class='taula'>
                              <tr>
                                <th class='filmografia'></th> <th>Id</th><th>Izena</th><th>Abizena</th><th>Adina</th><th>Bizilekua</th><th class='filmografia'>Filmak</th>
                              </tr>");
                  }
                  else
                  {     // LOGEATU GABE
                      printf("<TABLE id='zuzendari_lista'  class='taula'>
                              <tr>
                                <th>Id</th><th>Izena</th><th>Abizena</th><th>Adina</th><th>Bizilekua</th><th class='filmografia'>Filmak</th>
                              </tr>");
                  }
                }
                else {  // ZUZENDARIAREN FILMOGRAFIA
                  printf("<TABLE id='zuzendari_lista' class='taula'>
                          <tr>
                            <th>Id</th><th>Izena</th><th>Mota</th><th>Zuzendaria</th><th>Protagonista</th><th>Urtea</th><th class='filmografia'>Filmak</th>
                          </tr>");
                }

                  $link_argazki="assets/images/aktoreak/linka_logoa.png";
                  $link_argazki_zaborra="assets/images/zaborra.png";
                  $link_argazki_botoia="assets/images/botoia.png";
                  while($erregistroa = mysqli_fetch_array($kontsulta_emaitza))	# erregistrotan banatu
                  {
                    // ZUZENDARI GUZTIEN KONTSULTA
                    if($zuzendari_kontsulta=="bai")
                    {
                        $zuzenid=$erregistroa["Id"];

                        if(!isset($_SESSION["logged_user"]))
                        { // LOGEATU GABE
                          printf("<tr> <td> %d </td>
                                     <td> %s </td>
                                     <td> %s </td>
                                     <td> %d </td>
                                     <td> %s </td>
                                     <td class='filmografia'> <a href='fitxa_zuzendaria.php?zuzenid=$zuzenid'> <img src=%s width='20px' height='20px'> </a> </td>
                                     <td class='filmografia'> <a href='zuzendariak.php?zuzendari_espezifikoa=$zuzenid'> <img src=%s width='20px' height='20px'> </a> </td>
                                  </tr>",
                                    $erregistroa["Id"],
                                    $erregistroa["Izena"],
                                    $erregistroa["Abizena"],
                                    $erregistroa["Adina"],
                                    $erregistroa["Bizilekua"],                                    
                                    $link_argazki_botoia,
                                    $link_argazki);
                        }
                        else
                        { // LOGEATUTA
                          printf("<tr> 
                                     <td> <a href='php/ezabatu_zuzendariak.php?kill=$zuzenid'> <img src=%s width='20px' height='20px'> </a> </td>
                                     <td> %d </td>
                                     <td> %s </td>
                                     <td> %s </td>
                                     <td> %d </td>
                                     <td> %s </td>
                                     <td class='filmografia'> <a href='fitxa_zuzendaria.php?zuzenid=$zuzenid'> <img src=%s width='20px' height='20px'> </a> </td>
                                     <td class='filmografia'> <a href='zuzendariak.php?zuzendari_espezifikoa=$zuzenid'> <img src=%s width='20px' height='20px'> </a> </td>
                                </tr>",
                                    $link_argazki_zaborra,
                                    $erregistroa["Id"],
                                    $erregistroa["Izena"],
                                    $erregistroa["Abizena"],
                                    $erregistroa["Adina"],
                                    $erregistroa["Bizilekua"],                                    
                                    $link_argazki_botoia,
                                    $link_argazki);
                        }
                        
                    }
                    // ZUZENDARI BATEN FILMOGRAFIA KONTSULTA
                    else{
                      /* ZUZENDARIA */
                      $zuzenid=$erregistroa["Zuzendaria"];
                      $zuzendaria=mysqli_query($linka, "SELECT Izena, Abizena FROM zuzendaria WHERE `Id`=".$zuzenid."");
                      $zuzenizena=mysqli_fetch_array($zuzendaria);  // ZUZENDARIAREN KONTSULTAREN EMAITZA (izena eta abizena)
                      /* AKTOREA */
                      $aktoreid=$erregistroa["Aktore_Protagonista"];
                      $aktorea=mysqli_query($linka, "SELECT Izena, Abizena FROM aktorea WHERE `Id`=".$aktoreid."");
                      $aktoreizena=mysqli_fetch_array($aktorea);  // AKTOREAREN KONTSULTAREN EMAITZA (izena eta abizena)

                      printf("<tr> <td> %d </td>
                                   <td> <b><h2>%s</h2></b> </td>
                                   <td> %s </td>
                                   <td> %s </td>
                                   <td> %s </td>
                                   <td> %d </td>
                                   <td class='filmografia'> <a href='filmak.php?film_espezifikoa=".$erregistroa["Id"]."'> <img src=%s width='20px' height='20px'> </a> </td>
                              </tr>",
                                  $erregistroa["Id"],
                                  $erregistroa["Izena"],
                                  $erregistroa["Mota"],
                                  $zuzenizena[0]. " ".$zuzenizena[1],
                                  $aktoreizena[0]. " ".$aktoreizena[1],
                                  $erregistroa["Urtea"],
                                  $link_argazki);
                    }
                  }
                  mysqli_free_result($kontsulta_emaitza);
                  mysqli_close($linka);
                ?>

                </TABLE>


<!-- ./kontsulta -->
            </div>
            </div>
        </div>
    </div> <!-- /.home-reasons -->
<!-- /. ongi etorria (HASIERA) -->


<!-- FOOTER-A -->
    <footer class="main-footer">

        <div class="footer-top">

        </div>


        <div class="footer-main">
            <div class="container">

                <div class="row">
                  <!-- GURI BURUZ -->
                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">GURI BURUZ <span class="title-under"></span></h4>

                            <div class="footer-content">

                                <p>
                                    <strong>Film kobazuloa</strong> filmen munduari buruzko informazio orrialde bat da.
                                </p>

                                <p>
                                    Informazioa gehitu nahi baduzu, erregistroa atalaren bidez kontu bat egin eta konektatu ondoren film berriak, aktoreak edo zuzendarien informazioa gehi dezakezu web orrialde honetan.
                                </p>

                            </div>

                        </div>

                    </div>
                    <!-- AZKEN TWEET-AK -->
                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">AZKEN TWEET-AK <span class="title-under"></span></h4>

                            <div class="footer-content">
                                <ul class="tweets list-unstyled">
                                    <li class="tweet">

                                        Titanic filmaren informazioa aurkitu dut Film Kobazuloa web orrialdean!  http://t.co/fTSazikPd4

                                    </li>

                                    <li class="tweet">

                                        Film Kobazuloa web orrian erregistratu naiz, oso ondo dago.  http://t.co/fTSazikPd4

                                    </li>

                                    <li class="tweet">

                                        Oraintxe konturatu naiz The Eiger Sanction filmeko zuzendaria eta protagonista Clint Eastwood berbera dela!   http://t.co/fTSazikPd4

                                    </li>

                                </ul>
                            </div>

                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">IDATZ GAITZAZU <span class="title-under"></span></h4>

                            <div class="footer-content">

                                <div class="footer-form">

                                    <div class="footer-form" >

                                    <form action="php/mail.php" class="ajax-form">

                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>

                                         <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                                        </div>

                                        <div class="form-group alerts">

                                            <div class="alert alert-success" role="alert">

                                            </div>

                                            <div class="alert alert-danger" role="alert">

                                            </div>

                                        </div>

                                         <div class="form-group">
                                            <button type="submit" class="btn btn-submit pull-right">Bidali</button>
                                        </div>

                                    </form>

                                </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="clearfix"></div>



                </div>


            </div>


        </div>

        <div class="footer-bottom">

            <div class="container text-right">
                Film Kobazuloa @ copyrights 2017 - by <a href="http://www.twitter.com/mikelcz9" target="_blank">Mikel Castaño</a>
            </div>
        </div>

    </footer> <!-- main-footer -->



    <!--  Scripts
    ================================================== -->

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- owl carouseljavascript file -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Template main javascript -->
    <script src="assets/js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    </body>
</html>
