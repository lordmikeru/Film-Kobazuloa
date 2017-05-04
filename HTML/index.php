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

                    <li><a class="is-active" href="index.php">HASIERA</a></li>
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




    <!-- Carousel
    ================================================== -->
    <div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">

          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#homeCarousel" data-slide-to="1"></li>
            <li data-target="#homeCarousel" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner" role="listbox">

            <div class="item active">

              <img src="assets/images/slider/home-slider-1.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow">Because they need your help</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow ">Do not let them down</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->


            <div class="item ">

              <img src="assets/images/slider/home-slider-2.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow">Together we can improve their lives</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow"> So let's do it !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->




            <div class="item ">

              <img src="assets/images/slider/home-slider-3.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->

          </div>

          <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>

          <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

    </div><!-- /.carousel -->
<!-- CAROUSEL BUKATUTA -->


<!-- ONGI ETORRIA (HASIERA) -->
    <div class="section-home home-reasons">
        <div class="container">
            <div class="row">
              <div class="parrafoa">
              <h3 id=ongietorri><u>Ongi etorri <b>Film Kobazulo</b>ra!</u></h3>
              <p>Geure helburua filmak gustoko dituen jendeari informazioa eskaintzea da.</p>
              <p>Orrialdearen goikaldean dituzu gai ezberdinak: Filmak, Aktoreak eta Zuzendarien informazioa.</p>
              <br/>
              <p><b>Film Kobazuloa</b>ren parte izan nahi baduzu, joan <b>Erregistro</b> atalera, edo egin klik <a href=# class="hemen"><i>hemen</i></a> !</p>
              <p>Jada gure erreinukoa bazara, zure kontuarekin <b>Konektatu</b> zaitezke <a href=# class="hemen"><i>hemen</i></a> !</p>
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
