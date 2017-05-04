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
                    <li class="has-child"><a class="is-active" href="filmak.php">FILMAK</a>
                      <ul class="submenu">
                         <li class="submenu-item"><a href="filmak.php?mota=akzioa">Akzioa </a></li>
                         <li class="submenu-item"><a href="filmak.php?mota=drama">Drama </a></li>
                         <li class="submenu-item"><a href="filmak.php?mota=fantasia">Fantasia </a></li>
                         <li class="submenu-item"><a href="filmak.php?mota=zientzia fikzioa">Zientzia-fikzioa </a></li>
                      </ul>
                    </li>
                    <li><a href="aktoreak.php">AKTOREAK</a></li>
                    <li><a href="zuzendariak.php">ZUZENDARIAK</a></li>
                    <li class="konektatu"><a href="erregistroa.php">ERREGISTRATU</a></li>
                    <?php
                        if (isset($_SESSION["logged_user"]))
                        { // LOGEATUTA
                            printf("<li class='konektatu'><a href=\"login.php\">IRTEN (<b>".($_SESSION['logged_user'])."</b>)</a></li>");
                        }
                        else
                        { // LOGEATU GABE
                            printf('<li class="konektatu"><a href="login.php">KONEKTATU</a></li>');
                        }
                    ?>
                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->

            </div> <!-- /.navbar-main -->


        </nav>

    </header> <!-- /. main-header -->



<!-- FILMAK (DENAK) -->
    <div class="section-home home-reasons">
        <div class="container">
            <div class="row">
              <div class="parrafoa">
<!-- KONTSULTA -->
              <!-- KONEKTATU DATU BASEAREKIN -->
                <?php
                  include("php/DB_Konektatu.php");
                  $linka=connectDataBase(); # we are calling to the function 'connectDataBase' from the 'DB_Konektatu' php file
                ?>


<!-- INSERT FORMULARIOA -->

              <!-- <?php

                // if(isset($_SESSION["logged_user"]))
                {     // LOGEATUTA
                  ?>
                   -->
                    <!-- 
                    <h1> FILMA GEHITU </h1>
                            <div class="formularioa">
                              <table>
                                  <form action="filmak.php" method="post"> 
                                      <tr>
                                         <td>Izena: </td> <td><input type="text" name="name"></td>
                                      </tr>
                                      <tr>
                                         <td>Filmaren Izena: </td> <td><input type="text" name="name"></td>
                                      </tr>
                                      <tr>
                                        <td><input type="submit" value="BILATU"></td>
                                      </tr>
                                  </form>
                              </table>
                            </div>   -->

                  <!-- <?php
                }
              ?> -->
<!-- ./insert formularioa -->




<!-- BILAKETA FORMULARIOA -->
              <h1> FILMA BILATU </h1>
              <div class="formularioa">
                <table>
                    <form action="filmak.php" method="get">  <!-- 'pasahitza' ez ikusteko, POST -->
                        <tr>
                           <td>Filmaren Izena: </td> <td><input type="text" name="bilatu_filma_izena"></td>
                        </tr>
                        <tr>
                          <td><input type="submit" value="BILATU"></td>
                        </tr>
                    </form>
                </table>
              </div>
              <!-- ./bilaketa formularioa -->



                <?php

                  if (isset($_GET["bilatu_filma_izena"]))
                  {
                    $film_bila=$_GET["bilatu_filma_izena"];                    
                    $kontsulta_emaitza=mysqli_query($linka, "SELECT * FROM filma WHERE Izena='$film_bila'");
                  }
                  else
                  {
                        /* MOTAREN ARABERA KONTSULTA EZBERDINA ERAKUTSI! */
                        if (isset($_GET["mota"]))
                        {
                            switch ($_GET["mota"])
                            {
                                case "akzioa":
                                    $kontsulta_emaitza=mysqli_query($linka, "SELECT * FROM filma WHERE Mota='Akzioa'");
                                    printf("<h1><u>AKZIO FILMAK</u></h1>");
                                    break;
                                case "drama":
                                    $kontsulta_emaitza=mysqli_query($linka, "SELECT * FROM filma WHERE Mota='Drama'");
                                    printf("<h1><u>DRAMA FILMAK</u></h1>");
                                    break;
                                case "fantasia":
                                    $kontsulta_emaitza=mysqli_query($linka, "SELECT * FROM filma WHERE Mota='Fantasia'");
                                    printf("<h1><u>FANTASIA FILMAK</u></h1>");
                                    break;
                                case "zientzia fikzioa":
                                    $kontsulta_emaitza=mysqli_query($linka, "SELECT * FROM filma WHERE Mota='Zientzia fikzioa'");
                                    printf("<h1><u>ZIENTZIA-FIKZIO FILMAK</u></h1>");
                                    break;
                            }
                        }
                        else {
                            if (isset($_GET["film_espezifikoa"]))
                            {
                                $kontsulta_emaitza=mysqli_query($linka, "SELECT * FROM filma WHERE id=".$_GET["film_espezifikoa"]."");
                            }
                            else
                            {
                                $kontsulta_emaitza=mysqli_query($linka, "SELECT * FROM filma");
                                printf("<h1><u>FILMAK</u></h1>");
                            }
                        }
                  }
                ?>

              <!-- TAULA -->
                <TABLE  class="table-style-1">
                <tr>
                  <th>Id</th><th>Izena</th><th>Mota</th><th>Zuzendaria</th><th>Protagonista</th><th>Urtea</th>
                </tr>

                <?php
                  while($erregistroa = mysqli_fetch_array($kontsulta_emaitza))  # erregistrotan banatu
                  {
                    /* ZUZENDARIA */
                    $zuzenid=$erregistroa["Zuzendaria"];
                    $zuzendaria=mysqli_query($linka, "SELECT Izena, Abizena FROM zuzendaria WHERE `Id`=".$zuzenid."");
                    $zuzenizena=mysqli_fetch_array($zuzendaria);  // ZUZENDARIAREN KONTSULTAREN EMAITZA (izena eta abizena)
                    /* AKTOREA */
                    $aktoreid=$erregistroa["Aktore_Protagonista"];
                    $aktorea=mysqli_query($linka, "SELECT Izena, Abizena FROM aktorea WHERE `Id`=".$aktoreid."");
                    $aktoreizena=mysqli_fetch_array($aktorea);  // AKTOREAREN KONTSULTAREN EMAITZA (izena eta abizena)
                    /* MOTA */
                    $film_mota= strtolower($erregistroa["Mota"]);

                    //                                  
                    printf("<tr> <td> %d </td>
                                 <td> <h3 class='film_titulua'>%s</h3> </td>
                                 <td> <a href=\"filmak.php?mota=".$film_mota."\"> %s </a> </td>
                                 <td> %s </td>
                                 <td> %s </td>
                                 <td> %d </td>
                            </tr>",
                                $erregistroa["Id"],
                                $erregistroa["Izena"],
                                $erregistroa["Mota"],
                                $zuzenizena[0]. " ".$zuzenizena[1],
                                $aktoreizena[0]. " ".$aktoreizena[1],
                                $erregistroa["Urtea"]);
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

<!-- FILM GENEROAK -->
    <div class="section-home our-causes animate-onscroll fadeIn">
        <div class="container">
            <h2 class="title-style-1">FILMAK <span class="title-under"></span></h2>
            <div class="row">
              <!-- AKZIOA -->
                <div class="col-md-3 col-sm-6">
                    <div class="cause">
                        <img src="assets/images/film_generoak/akzioa.jpg" alt="" class="cause-img">
                        <h4 class="cause-title"><a href="#">AKZIOA </a></h4>
                        <div class="cause-details">
                            Akzioaren zalea zara?!<br/>Hemen aurkituko dituzu Ranboren film onenak, Arnold Schwarzenegger-en beso gihartsuak eta askoz ere gehiago!
                        </div>
                        <div class="btn-holder text-center">
                          <a href="#" class="btn btn-primary"> JOAN</a>
                        </div>
                    </div> <!-- /.cause -->
                </div>
                <!-- DRAMA -->
                  <div class="col-md-3 col-sm-6">
                      <div class="cause">
                          <img src="assets/images/film_generoak/drama.jpg" alt="" class="cause-img">
                          <h4 class="cause-title"><a href="#">DRAMA </a></h4>
                          <div class="cause-details">
                              Film dramatikoak gustoko badituzu, hemen dago zure txokoa.
                          </div>
                          <div class="btn-holder text-center">
                            <a href="#" class="btn btn-primary"> JOAN</a>
                          </div>
                      </div> <!-- /.cause -->
                  </div>
                    <!-- FANTASIA -->
                      <div class="col-md-3 col-sm-6">
                          <div class="cause">
                              <img src="assets/images/film_generoak/fantasia.jpg" alt="" class="cause-img">
                              <h4 class="cause-title"><a href="#">FANTASIA </a></h4>
                              <div class="cause-details">
                                  Ez dago fantasiazko film bat baino hoberik arratsaldea pasatzeko.
                              </div>
                              <div class="btn-holder text-center">
                                <a href="#" class="btn btn-primary"> JOAN</a>
                              </div>
                          </div> <!-- /.cause -->
                      </div>
                      <!-- ZIENTZIA-FIKZIOA -->
                        <div class="col-md-3 col-sm-6">
                            <div class="cause">
                                <img src="assets/images/film_generoak/zientzia_fikzioa.jpg" alt="" class="cause-img">
                                <h4 class="cause-title"><a href="#">ZIENTZIA-FIKZIOA </a></h4>
                                <div class="cause-details">
                                    Zer da erreala eta zer ez? Zientzia-fikzioa gustoko baduzu sartu hemen.
                                </div>
                                <div class="btn-holder text-center">
                                  <a href="#" class="btn btn-primary"> JOAN</a>
                                </div>
                            </div> <!-- /.cause -->
                        </div>
            </div>
        </div>
    </div> <!-- /.our-causes -->


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
