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
                    <li><a href="zuzendariak.php">ZUZENDARIAK</a></li>
                    <li class="konektatu"><a class="is-active" href="erregistroa.php">ERREGISTRATU</a></li>
                    <li class="konektatu"><a href="login.php">KONEKTATU</a></li>

                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->

            </div> <!-- /.navbar-main -->


        </nav>

    </header> <!-- /. main-header -->


<!-- ONGI ETORRIA (HASIERA) -->
    <div class="section-home home-reasons">
        <div class="container">
            <div class="row">



              <!-- DATU BASEAREKIN KONEKTATU -->
              <?php
                  include("php/DB_Konektatu.php");
                  $linka=connectDataBase();	# we are calling to the function 'connectDataBase' from the 'DB_Konektatu' php file
              ?>
              <!-- ./datu basearekin konektatu -->

              <!-- FORMULARIOA HASIERATU -->
              <script>
                  hasieratu();  // Orria kargatzerakoan hasieratu beti
                  function hasieratu()
                  {
                      document.getElementById("Username").value= "";	// get bat erabiliz, izen osoa ez da jarri beharrik
                      document.getElementById("Password").value= "";	// get bat erabiliz,
                      document.getElementById("Username").focus();
                  }
              </script>
              <!-- ./hasieratu -->

              <!-- ERREGISTRO FORMULARIOA -->
              <div class="formularioa">
                <h1><u>ERREGISTROA</u></h1> <br/>
                <table>
                    <form action="php/erregistroa_kontsultatu.php" method="POST">	<!-- 'pasahitza' ez ikusteko, POST -->
                        <tr>
                           <td>Izena: </td> <td><input type="text" id="Username" name="izena" placeholder="Izena"></td>
                        </tr>
                        <tr>
                           <td>Pasahitza: </td> <td><input type="password" id="Password" name="pasahitza" placeholder="Pasahitza"></td>
                        </tr>
                        <tr>
                          <td><input type="submit" value="ERREGISTRATU"></td>
                          <td><input type="button" id="Reset" value="Garbitu" onclick="hasieratu()"></td>

                        </tr>
                    </form>
                </table>
              </div>
              <!-- ./erregistro formularioa -->

              <br/><br/>

              <?php
                		if (isset ($_GET["erregistro_erantzuna"]))
                		{
                        // ERREGISTROA GAIZKI
                  			if ($_GET["erregistro_erantzuna"] == "gaizki")
                  			{
                            echo "Erregistroa gaizki joan da.", "<br>";

                            if(isset ($_GET["erab_existitu"]))
                            {
                                echo "<strong>", $_GET["erab"], "</strong> erabiltzailea erregistratuta dago!";
                            }
                            if(isset ($_GET["hutsik"]))
                            {
                                echo "<strong>Erabiltzailea eta Pasahitza derrigorrezkoak dira erregistratzeko!</strong>";
                            }
                            if(isset ($_GET["pass_motza"]))
                            {
                                echo "<strong>Pasahitzak gutxienez 8 karaktere izan behar ditu!</strong>";
                            }
                            if(isset ($_GET["pass_bera"]))
                            {
                                echo "<strong>Pasahitza ezin da Izenaren berdina izan!</strong>";
                            }
                  			}
                // ERREGISTROA ONDO
                  			else
                  			{
                  				echo "Ongi etorri Film Kobazulora <b>", $_GET['erab'], "</b>!<br/>";
                          echo "Orain <i>KONEKTATU</i> ataletik zure izena eta pasahitza jarriz konektatu zaitezke.";
                  			}
                		}
        	     ?>





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
