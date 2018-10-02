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
        
           <h1>Consultar Reservas</h1>
<div class="table table-hover table-dark">
            <table class="table" width="4000" height="100" border="3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Evento</th>
                    <th>fecha asignación</th>
                    <th>fecha programada</th>
                    <th>hora</th>
                    <th>duracion</th>
                    <th>asiste</th>
                    <th>pagado</th>
                    <th>banda</th>
                </tr>
            </thead>
            <tbody>
                
                    <?php
                    $consulta = $c->consul_reserva();
                    foreach ($consulta as $fila => $filas):
                        
                        echo "<tr>";
                        echo "<td>" . $filas["id_reserva"] . "</td>";
                        echo "<td>" . $filas["id_tipo_evento_fk"] . "</td>";
                        echo "<td>" . $filas["fecha_asignacion"] . "</td>";
                        echo "<td>" . $filas["fecha_programada"] . "</td>";
                        echo "<td>" . $filas["duracion"] . "</td>";
                        echo "<td>" . $filas["asiste"] . "</td>";
                        echo "<td>" . $filas["pagado"] . "</td>";
                        echo "<td>" . $filas["id_banda_fk"] ."</td>";
                      echo "</tr>";
                    endforeach;
                    ?>

                
            </tbody>
        </table>
</div>
</center>
    
    </body>
</html>

