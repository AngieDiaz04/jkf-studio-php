<?php
include 'conexion.php';

$o->insert_preguntas( $_POST["pregunta"],$_POST["detalles"], $_POST["id_ejercicio_fk"]);
if (!$o){
    echo "la preguntas no fue registrado correctamente";
    
}else {
    echo "El ejercicio registrado correctamente <br> <a href='preguntas.php'>Volver</a>";
    
}
