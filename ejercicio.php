<?php
include 'conexion.php';
$c = new conexion;
$c->conectar();

$arreglocurso = $c->combocurso();

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
        <h1>Registrar ejercicio</h1>
        <form method="post" action="DAOejercicio.php">

            <table width="500" height="80" border="1">

                <th>

                  
                    Texto: <br> 
                    <textarea cols="30" rows="10" name="texto" ></textarea><br><br>
                    Curso: <br> 
                    <!--<input type="text" name="id_curso_fk" required><br><br>-->
                 <select name="id_curso_fk">
                        <option value="">Seleccione el curso</option>
                        <?php
                        foreach ($arreglocurso as $index_1 => $curso):

                            echo "<option value='" . $curso["id_curso"] . "'>'" . $curso["id_curso"] . "''" . $curso["nombre"] . "'</option>";

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
