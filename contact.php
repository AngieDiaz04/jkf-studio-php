<?php
include 'conexion.php';
$c = new conexion;
$c->conectar();

$arreglorol = $c->comborol();
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
        <link href="css/inicio.css" rel="stylesheet" type="text/css" media="all"/>
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
                        <span class="menu">
                        </span>
                        <ul class="nav1">
                            <li class="hvr-underline-from-left button2"><a href="index.php">Inicio</a></li>
                            <li class="hvr-underline-from-left button2"><a href="about.php">Sobre Puntoque</a></li>
                            <li class="hvr-underline-from-left button2"><a href="albums.php">Bandas</a></li>
                            <li class="hvr-underline-from-left button2"><a href="features.php">Cursos</a></li>
                            <li class="hvr-underline-from-left button2"><a href="shortcodes.php">Ubicación</a></li>
                            <li class="hvr-underline-from-left button2"><a class="active" href="contact.php">Iniciar Sesión</a></li>
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
                    <!--			<div class="nav-right">
                                                    <ul>
                                                            <li><a href="#" class="f1"></a></li>
                                                            <li><a href="#" class="f2"></a></li>
                                                            <li><a href="#" class="f3"></a></li>
                                                            <li><a href="#" class="f4"></a></li>
                                                    </ul>				
                                            </div>-->
                    <div class="clearfix"></div>
                </div>
                <!-- banner-albums -->
                <!--		/*<div class="banner-albums">
                                        <div id="portfoliolist">
                                                                        <div class="port-grid">
                                                                                <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                                                                                                <div class="portfolio-wrapper">
                                                                                                        <a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go">
                                                                                                                <img class="img-responsive lot" src="images/b1.png" alt="b1">
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
                                </div>-->
                <!-- //banner-albums -->
                <!-- contact -->
                <br>
                <br>
                <br>

                <script src="js/login.js" type="text/javascript"></script>
                <div class="containerl">
                    <link href="css/login.css" rel="stylesheet" type="text/css"/>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="panel panel-login">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <a href="#" class="active" id="login-form-link">Iniciar sesión</a>
                                        </div>
                                        <div class="col-xs-6">
                                            <a href="#" id="register-form-link">Regístrate ahora</a>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form id="login-form"  action="Menu.php" method="post" role="form" style="display: block;">
                                                <div class="form-group">
                                                    <input type="text" name="doc_usuario" id="doc_usuario" tabindex="1" class="form-control" placeholder="Usuario" value="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
                                                </div>
                                                <div class="form-group text-center">
                                                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                                    <label for="remember"> Recordarme</label>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-sm-offset-3">
                                                            <input  type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Iniciar sesión">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="text-center">
                                                                <a tabindex="5" class="forgot-password">¿Has olvidado tu contraseña?</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <form id="register-form"  method="post" role="form" style="display: none;" action="DAOusuario.php">
                                                <div class="form-group">
                                                    <input type="text" name="doc_usuario" id="username" tabindex="1" class="form-control" placeholder="Numero de documento" value="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="nombre" tabindex="1" class="form-control" placeholder="Nombre" value="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="apellido" id="password" tabindex="2" class="form-control" placeholder="Apellido" value="">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" name="edad" id="password" tabindex="2" class="form-control" placeholder="Edad" value="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="celular" id="confirm-password" tabindex="2" class="form-control" placeholder="Celular" value="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" name="correo" id="username" tabindex="1" class="form-control" placeholder="Correo" value="">
                                                </div>
                                                <div class="form-group">
                                                    Género: <br> 
                                                    <select name="genero">
                                                        <option>Seleccione genero</option>
                                                        <option>Femenino</option>
                                                        <option>Masculino</option>
                                                        <option>Otro</option>

                                                    </select><br><br>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña" value="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="foto" id="confirm-password" tabindex="2" class="form-control" placeholder="Foto" value="">
                                                </div>

                                                <div class="form-group">

<!--<input type="text" name="id_rol_fk" id="confirm-password" tabindex="2" class="form-control" placeholder="Rol" value="">-->

                                                    Comentarios: <br>
                 <!--<input type="text" name="id_comentarios_fk" ><br><br>-->
                                                    <select name="id_rol_fk">
                                                        <option value="">Seleccione el rol</option>
                                                        <?php
                                                        foreach ($arreglorol as $index_1 => $rol):

                                                            echo "<option value='" . $rol["id_rol"] . "'>'" . $rol["id_rol"] . "''" . $rol["descripcion"] . "'</option>";

                                                        endforeach;
                                                        ?>
                                                    </select><br><br>

                                                </div>
                                                <div class="form-group">
                                                    Estado: <br> 
                                                    <select name="estado">
                                                        <option>Seleccione estado</option>
                                                        <option>Activo</option>
                                                        <option>inactivo</option>
                                                        

                                                    </select><br><br>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-sm-offset-3">
                                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Registrar">

                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="bootstrap.min.js" type="text/javascript"></script>