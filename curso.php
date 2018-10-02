<?php
include 'conexion.php';
$c = new conexion;
$c->conectar();

$arreglotema = $c->combotema();
$arreglocomentario = $c->combocomentario();

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
        <h1>Registrar Curso</h1
        
        <form method="post" action="DAOcurso.php" >
<div class="form-group">
            <table width="500" height="80" border="1">

                <th>

                    Nombre del curso: <br> 
                    <input type="text" class="form-control" name="nombre" required><br><br>
                    Descripcion: <br> 
                    <textarea cols="30" rows="10" class="form-control" name="descripcion" required></textarea><br><br>
                    texto: <br> 
                  <textarea cols="30" rows="10" class="form-control" name="texto" ></textarea><br><br>
                    Recursos: <br>
                    <textarea cols="30" rows="10" class="form-control" name="recursos" ></textarea><br><br>
                    Tema: <br>
                   <!--<input type="text" name="id_tema_fk" ><br><br>-->
                   
<!--                    <input type="text" name="ficha_fk"><br><br>-->
                    <select name="id_tema_fk">
                        <option value="">Seleccione el tema</option>
                        <?php
                        foreach ($arreglotema as $index_1 => $tema):

                            echo "<option value='" . $tema["id_tema"] . "'>'" . $tema["id_tema"] . "''" . $tema["nombre"] . "'</option>";

                        endforeach;
                        ?>
                    </select><br><br>

                    Comentarios: <br>
                  <!--<input type="text" name="id_comentarios_fk" ><br><br>-->
                    <select name="id_comentarios_fk">
                        <option value="">Seleccione el comentario</option>
                        <?php
                        foreach ($arreglocomentario as $index_1 => $comentario):

                            echo "<option value='" . $comentario["id_comentarios"] . "'>'" . $comentario["id_comentarios"] . "''" . $comentario["texto"] . "'</option>";

                        endforeach;
                        ?>
                    </select><br><br>

                </th>
            </table>
            <button type="submit"> Registrar</button>
            
        </form>
        </div>
    </center>
</body>
</html>
