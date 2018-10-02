<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/formularios.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <center>
        <h1>Registrar Banda</h1>
        <form method="post" action="DAObanda.php">

            <table width="500" height="80" border="1">

                <th>

                   
                    Nombre: <br> 
                    <input type="text" name="nombre" required><br><br>
                    
                    canciones: <br> 
                    <textarea cols="30" rows="10" name="canciones" ></textarea><br><br>
                    
                    bio: <br>
                    <input type="text" name="bio" ><br><br>
                    
                </th>
            </table>
            <button type="submit"> Registrar</button>
        </form>
        </center>
    </body>
</html>
