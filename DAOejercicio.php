<?php
include 'conexion.php';

$o->insert_ejercicio( $_POST["texto"],$_POST["id_curso_fk"]);
if (!$o){
    echo "El ejercicio no fue registrado correctamente";
    
}else {
    echo "El ejercicio registrado correctamente <br> <a href='ejercicio.php'>Volver</a>";
    
}
