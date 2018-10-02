<?php
include 'conexion.php';
$c = new conexion;
$c->conectar();
?>




<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>Puntoque software music</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Music Life Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <script src="js/modernizr.custom.js"></script>
        <!-- js -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <!-- //js -->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->
        <script src="js/hover_pack.js"></script>
    </head>
    <body>
        <!-- banner -->
        <div class="banner">
            <div class="col-md-2 banner-left">
                <h1><a href="index.php"> <img src="images/logoplantilla.png" alt="logo" id="logo"/> 



                    </a></h1>
            </div>
            <div class="col-md-10 banner-right">
                <div class="navigation">
                    <div class="nav-left">
                        <span class="menu"><img src="images/menu.png" alt=""/></span>
                        <ul class="nav1">
                            <li class="hvr-underline-from-left button2"><a href="index.php">Inicio</a></li>
                            <li class="hvr-underline-from-left button2"><a href="about.php">Sobre Puntoque</a></li>
                            <li class="hvr-underline-from-left button2"><a href="albums.php">Bandas</a></li>
                            <li class="hvr-underline-from-left button2"><a class="active" href="features.php">Cursos</a></li>
                            <li class="hvr-underline-from-left button2"><a href="shortcodes.php">ubicacion</a></li>
                            <li class="hvr-underline-from-left button2"><a href="contact.php">Login</a></li>
                        </ul>
                        <!-- script for menu -->
                        <script>
            $("span.menu").click(function () {
                $("ul.nav1").slideToggle(300, function () {
                    // Animation complete.
                });
            });
                        </script>
                        <!-- //script for menu -->

                    </div>
                    <div class="nav-right">
                        <ul>
                            <li><a href="#" class="f1"></a></li>
                            <li><a href="#" class="f2"></a></li>
                            <li><a href="#" class="f3"></a></li>
                            <li><a href="#" class="f4"></a></li>
                        </ul>				
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- banner-albums -->
                <div class="banner-albums">
                    <div id="portfoliolist">
                        <div class="port-grid">
                            <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                                <div class="portfolio-wrapper">
                                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go">
                                        <img class="img-responsive lot" src="images/b1.png" alt="">
                                        <div class="b-wrapper">
                                            <div class="b-animate b-from-left b-delay03 ">
                                                <p class="plus">Rock</p>
                                                <div class="port-like"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>3</div>
                                                <div class="port-heart"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>3</div>
                                            </div>
                                        </div>
                                    </a>						
                                </div>
                            </div>				
                            <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                                <div class="portfolio-wrapper">
                                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go">
                                        <img class="img-responsive lot" src="images/b2.png" alt="">
                                        <div class="b-wrapper">
                                            <div class="b-animate b-from-left b-delay03 ">
                                                <p class="plus">African</p>
                                                <div class="port-like"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>3</div>
                                                <div class="port-heart"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>3</div>
                                            </div>
                                        </div>
                                    </a>						
                                </div>
                            </div>		
                        </div>	
                        <div class="port-grid">
                            <div class="portfolio mov mix_all" data-cat="mov" style="display: inline-block; opacity: 1;">
                                <div class="portfolio-wrapper">
                                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go">
                                        <img class="img-responsive lot" src="images/b3.png" alt="">
                                        <div class="b-wrapper">
                                            <div class="b-animate b-from-left b-delay03 ">
                                                <p class="plus">Hip Hop</p>
                                                <div class="port-like"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>3</div>
                                                <div class="port-heart"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>3</div>
                                            </div>
                                        </div>
                                    </a>						
                                </div>
                            </div>	
                            <div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
                                <div class="portfolio-wrapper">
                                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go">
                                        <img class="img-responsive lot" src="images/b6.png" alt="">
                                        <div class="b-wrapper">
                                            <div class="b-animate b-from-left b-delay03 ">
                                                <p class="plus">Folk</p>
                                                <div class="port-like"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>3</div>
                                                <div class="port-heart"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>3</div>
                                            </div>
                                        </div>
                                    </a>						
                                </div>
                            </div>			

                        </div>
                        <div class="port-grid">
                            <div class="portfolio mov mix_all" data-cat="mov" style="display: inline-block; opacity: 1;">
                                <div class="portfolio-wrapper">
                                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go">
                                        <img class="img-responsive lot" src="images/b5.png" alt="">
                                        <div class="b-wrapper">
                                            <div class="b-animate b-from-left b-delay03 ">
                                                <p class="plus">Indie</p>
                                                <div class="port-like"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>3</div>
                                                <div class="port-heart"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>3</div>
                                            </div>
                                        </div>
                                    </a>						
                                </div>
                            </div>
                            <div class="portfolio set mix_all" data-cat="set" style="display: inline-block; opacity: 1;">
                                <div class="portfolio-wrapper">
                                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go">
                                        <img class="img-responsive lot" src="images/b10.png" alt="">
                                        <div class="b-wrapper">
                                            <div class="b-animate b-from-left b-delay03 ">
                                                <p class="plus">College</p>
                                                <div class="port-like"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>3</div>
                                                <div class="port-heart"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>3</div>
                                            </div>
                                        </div>
                                    </a>						
                                </div>
                            </div>
                        </div>	
                        <div class="port-grid">
                            <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                                <div class="portfolio-wrapper">
                                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go">
                                        <img class="img-responsive lot" src="images/b4.png" alt="">
                                        <div class="b-wrapper">
                                            <div class="b-animate b-from-left b-delay03 ">
                                                <p class="plus">Punk</p>
                                                <div class="port-like"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>3</div>
                                                <div class="port-heart"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>3</div>
                                            </div>
                                        </div>
                                    </a>						
                                </div>
                            </div>				
                            <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                                <div class="portfolio-wrapper">
                                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go">
                                        <img class="img-responsive lot" src="images/b8.png" alt="">
                                        <div class="b-wrapper">
                                            <div class="b-animate b-from-left b-delay03 ">
                                                <p class="plus">Art Punk</p>
                                                <div class="port-like"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>3</div>
                                                <div class="port-heart"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>3</div>
                                            </div>
                                        </div>
                                    </a>						
                                </div>
                            </div>		
                        </div>
                        <div class="port-grid">
                            <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                                <div class="portfolio-wrapper">
                                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go">
                                        <img class="img-responsive lot" src="images/b9.png" alt="">
                                        <div class="b-wrapper">
                                            <div class="b-animate b-from-left b-delay03 ">
                                                <p class="plus">Jazz</p>
                                                <div class="port-like"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>3</div>
                                                <div class="port-heart"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>3</div>
                                            </div>
                                        </div>
                                    </a>						
                                </div>
                            </div>				
                            <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                                <div class="portfolio-wrapper">
                                    <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go">
                                        <img class="img-responsive lot" src="images/b7.png" alt="">
                                        <div class="b-wrapper">
                                            <div class="b-animate b-from-left b-delay03 ">
                                                <p class="plus">Rock</p>
                                                <div class="port-like"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>3</div>
                                                <div class="port-heart"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>3</div>
                                            </div>
                                        </div>
                                    </a>						
                                </div>
                            </div>		
                        </div>	
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- //banner-albums -->
                <!-- features -->
                <div class="featured-services">
                    <!--                    <h3 class="tittle">FEATURES</h3>
                                        <div class="featured-services-grids">
                                            <div class="col-md-3 featured-services-grid">
                                                <div class="featured-services-grd">
                                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    <h4>vel illum qui dolorem</h4>
                                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor 
                                                        sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
                    
                                                </div>
                                            </div>
                                            <div class="col-md-3 featured-services-grid">
                                                <div class="featured-services-grd">
                                                    <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                                                    <h4>vel illum qui dolorem</h4>
                                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor 
                                                        sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
                    
                                                </div>
                                            </div>
                                            <div class="col-md-3 featured-services-grid">
                                                <div class="featured-services-grd">
                                                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                                    <h4>vel illum qui dolorem</h4>
                                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor 
                                                        sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
                    
                                                </div>
                                            </div>
                                            <div class="col-md-3 featured-services-grid">
                                                <div class="featured-services-grd">
                                                    <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                                                    <h4>vel illum qui dolorem</h4>
                                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor 
                                                        sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
                    
                                                </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>	-->
                    <!-- //features -->
                    <!--                <div class="features-main">
                                        <div class="fea-top">
                                            <h3 class="tittle">AMAZING FEATURES</h3>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.</p>
                                        </div>
                                        <div class="feature-botttom">
                                            <div class="col-md-6 fea-grid">
                                                <div class="col-md-5 fea-img">
                                                    <img src="images/g2.jpg" alt="" />
                                                </div>
                                                <div class="col-md-7 fea-text">
                                                    <h4>Et iusto odio dignissimos</h4>
                                                    <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad  </p>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="col-md-6 fea-grid">
                                                <div class="col-md-5 fea-img">
                                                    <img src="images/g6.jpg" alt="" />
                                                </div>
                                                <div class="col-md-7 fea-text">
                                                    <h4>Ducimus odio dignissimos</h4>
                                                    <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 fea-grid">
                                                <div class="col-md-5 fea-img">
                                                    <img src="images/g7.jpg" alt="" />
                                                </div>
                                                <div class="col-md-7 fea-text">
                                                    <h4>Et iusto odio dignissimos</h4>
                                                    <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="col-md-6 fea-grid">
                                                <div class="col-md-5 fea-img">
                                                    <img src="images/g8.jpg" alt="" />
                                                </div>
                                                <div class="col-md-7 fea-text">
                                                    <h4>Ducimus odio dignissimos</h4>
                                                    <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                                                </div>
                                            </div>-->


                    <center>
                       <div class="table table-hover table-dark">
            <table class="table" width="4000" height="100" border="3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Texto</th>
                                    <th>Recursos</th>
                                    <th>Tema</th>
                                    <th>Comentarios</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $consulta = $c->consul_curso();
                                foreach ($consulta as $fila => $filas):
                                    echo "<tr>";
                                    echo "<td>'" . $filas["id_curso"] . "'</td>";
                                    echo "<td>'" . $filas["nombre"] . "'</td>";
                                    echo "<td>'" . $filas["descripcion"] . "'</td>";
                                    echo "<td>'" . $filas["texto"] . "'</td>";
                                    echo "<td>'" . $filas["recursos"] . "'</td>";
                                    echo "<td>'" . $filas["id_tema_fk"] . "'</td>";
                                    echo "<td>'" . $filas["id_comentarios_fk"] . "'</td>";
                                    echo "</tr>";
                                endforeach;
                                ?>

                            <br> <br>
                            </tbody>
                        </table>
                       </div>
                    </center>
                    <div class="clearfix"> </div>
                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>

    <!-- //banner -->
    <!-- for bootstrap working -->
    <script src="js/bootstrap.js"></script>
    <!-- //for bootstrap working -->
    <!-- smooth scrolling -->
    <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */
                $().UItoTop({easingType: 'easeOutQuart'});
            });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <!-- //smooth scrolling -->
</body>
</html>