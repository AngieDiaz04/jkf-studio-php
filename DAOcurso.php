<?php
include 'conexion.php';

$o->insert_curso($_POST["nombre"], $_POST["descripcion"],$_POST["texto"], $_POST["recursos"], $_POST["id_tema_fk"], $_POST["id_comentarios_fk"]);
if (!$o){
    echo "El curso no fue registrado correctamente";
    
}else {
    echo "Curso registrado correctamente <br> <a href='curso.php'>Volver</a>";
    
}

