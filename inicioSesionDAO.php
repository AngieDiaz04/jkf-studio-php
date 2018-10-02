<?php
include 'conexion.php'; ;
session_start();
?>

<?php


  $doc_usuario = $_POST['doc_usuario'];

$password = $_POST['password'];

  

$sql = "SELECT * FROM usuario WHERE doc_usuario = '$doc_usuario'";

 
$result = $conexion->query($sql);

 


if ($result->num_rows > 0) {     

 }

 $row = $result->fetch_array(MYSQLI_ASSOC);

 if (password_verify($password, $row['password'])) { 

    $_SESSION['loggedin'] = true;

    $_SESSION['nombre'] = $username;

    $_SESSION['start'] = time();

    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

 

    echo "Bienvenido! " . $_SESSION['doc_usuario'];

    echo "<br><br><a href=Menu.php>Menu Principal</a>"; 

 

 } else { 

   echo "nombre o contraseña estan incorrectos.";

 

   echo "<br><a href='contact.php'>Volver a Intentarlo</a>";

 }


