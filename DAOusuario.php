<?php
include_once 'conexion.php';

$o->insert_usuario($_POST["doc_usuario"], $_POST["nombre"], $_POST["apellido"], $_POST["edad"],  $_POST["celular"], $_POST["correo"],$_POST["genero"], $_POST["password"], $_POST["foto"], $_POST["id_rol_fk"], $_POST["estado"]);
if (!$o){
    echo "El usuario del sistema no fue registrado correctamente";
    
}else {
    echo "Usuario registrado correctamente <br> <a href='menu.php'>Ir a menu</a>";
    
}


