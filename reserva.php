<?php
include 'conexion.php';
$c = new conexion;
$c->conectar();

$arregloevento = $c->comboevento();
$arreglobanda = $c->combobanda();

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
        <h1>Registrar Reserva</h1>
        <form method="post" action="DAOreserva.php">

            <table width="500" height="80" border="1">

                <th>


                    Evento: <br>
                    <!--<input type="text" name="id_tipo_evento_fk" ><br><br>-->
                     <select name="id_tipo_evento_fk">
                        <option value="">Seleccione el evento</option>
                        <?php
                        foreach ($arregloevento as $index_1 => $evento):

                            echo "<option value='" . $evento["id_tipo_evento"] . "'>'" . $evento["id_tipo_evento"] . "''" . $evento["descripcion"] . "'</option>";

                        endforeach;
                        ?>
                    </select><br><br>

                    Fecha de asignación: <br> 
                    <input type="date" name="fecha_asignacion" ><br><br>
                    Fecha de programación: <br> 
                    <input type="date" name="fecha_programada" ><br><br>

                    Hora: <br> 
                    <input type="time" name="hora" ><br><br>

                    Duración: <br>
                    <input type="time" name="duracion" ><br><br>

                    ¿Asiste?:
                    <br>
                    <input type="text" name="asiste" ><br><br>

                    ¿Pagado?:
                    <br>
                    <input type="text" name="pagado" ><br><br>

                    Banda:
                    <br>
                    <select name="id_banda_fk">
                    <!--<input type="text" name="id_banda_fk" ><br><br>-->
                                            <?php
                        foreach ($arreglobanda as $index_1 => $banda):

                            echo "<option value='" . $banda["id_banda"] . "'>'" . $banda["id_banda"] . "''" . $banda["nombre"] . "'</option>";

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
