<?php
include 'conexion.php';

$o->insert_reserva($_POST["id_tipo_evento_fk"], $_POST["fecha_asignacion"], $_POST["fecha_programada"],$_POST["hora"], $_POST["duracion"],$_POST["asiste"], $_POST["pagado"], $_POST["id_banda_fk"]);
if (!$o){
    echo "La reserva del sistema no fue registrado correctamente";
    
}else {
    echo "Reserva registrada correctamente <br> <a href='reserva.php'>Volver</a>";
    
}

