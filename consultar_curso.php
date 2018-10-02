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
        <meta charset="UTF-8">
        <link href="css/formularios.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>

    <center>
        <h1>Consultar cursos</h1>
        <div class="table table-bordered table-dark">
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
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
               
                    <?php
                    $consulta = $c->consul_curso();                      
                    echo  "<tr>";

                    foreach ($consulta as $fila => $filas):
                        echo "<td>'" . $filas["id_curso"] . "'</td>";
                        echo "<td>'" . $filas["nombre"] . "'</td>";
                        echo "<td>'" . $filas["descripcion"] . "'</td>";
                        echo "<td>'" . $filas["texto"] . "'</td>";
                        echo "<td>'" . $filas["recursos"] . "'</td>";
                        echo "<td>'" . $filas["id_tema_fk"] . "'</td>";
                        echo "<td>'" . $filas["id_comentarios_fk"] . "'</td>";
                      echo  "</tr>";
                    endforeach;
                    ?>


            </tbody>
        </table>
        </div>
    </center>


</body>
</html>
