<?php
include 'conexion.php';
$c = new conexion;
$c->conectar();

$arregloejercicio = $c->comboejercicio();


?>

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
        <h1>Registrar preguntas</h1>
        <form method="post" action="DAOpreguntas.php">

            <table width="500" height="80" border="1">

                <th>


                    pregunta: <br> 
                    <textarea cols="30" rows="10" name="pregunta" ></textarea><br><br>
                    detalles: <br> 
                    <textarea cols="30" rows="10" name="detalles" ></textarea><br><br>
                    Ejercicio: <br> 
                    <!--<input type="text" name="id_ejercicio_fk" required><br><br>-->
                     <select name="id_ejercicio_fk">
                        <option value="">Seleccione el ejercicio</option>
                        <?php
                        foreach ($arregloejercicio as $index_1 => $ejercicio):

                            echo "<option value='" . $ejercicio["id_ejercicio"] . "'>'" . $ejercicio["id_ejercicio"] . "''" . $ejercicio["texto"] . "'</option>";

                        endforeach;
                        ?>
                    </select><br><br>

                </th>
            </table>
            <button type="submit"> Registrar</button>
        </form>
    </center>
</body>
</html>
