<?php
include_once 'conexion.php';

$o->insert_banda( $_POST["nombre"],$_POST["canciones"], $_POST["bio"]);
if (!$o){
    echo "La banda no fue registrada correctamente";
    
}else {
    echo "Banda registrada correctamente <br> <a href='banda.php'>Volver</a>";
    
}
