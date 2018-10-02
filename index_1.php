<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="_CSS/diseño.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
     
        <body onload="noback();">
        <script>function noback(){
   window.location.hash="no-regreso-button";
   window.location.hash="Again-No-regreso-button"
   window.onhashchange=function(){window.location.hash="no-regreso-button";}
}</script>
 
    <center>
        <h1>INICIO DE SESIÓN</h1>
        <form >

            <table width="500" height="80" border="1">
                <tr>

                    <th><br> Usuario: <br>
                        <input type="text" name="textusuario" ><br><br>

                        Contraseña: <br> 
                        <input type="password" name="textcontra"><br><br>

                        <button>Iniciar sesión</button><br><br>
                        <input type="hidden" name="opcion" value="2">
                    </th>
                </tr>
            </table><br>

        </form>
        <form name="form" action="Daperson">
            <table width="500" height="80" border="1">
                
                <th> ¿No tienes una cuenta? 
                    <a style="color: blue" href="registar_funcionario.php"> Regístrate!</a>
                </th>
            </table> 
        </form>
    </center>
    </body>
</html>
