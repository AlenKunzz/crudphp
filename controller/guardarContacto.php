
<?php
include("../connection/conexion.php");
session_start();
  
if (isset($_POST['guardarContacto']))
  {
    
    $Nombre = $_POST['Nombre'];
    $Email = $_POST['Email'];
    $Mensaje = $_POST['Mensaje'];
    $errorMessage= "Error";

    if(!preg_match('/[a-zA-Z\t\h]+|(^$)/', $Nombre)){
      $_SESSION['mensaje'] = "Solo letras y espacios en el nombre";
      $_SESSION['alert'] = "danger";
      header("Location: http://localhost/php/");
      exit();
    }

    $query = "INSERT INTO contacto(Nombre, Email, Mensaje) VALUES ('$Nombre', '$Email', '$Mensaje')";
    $pdo->exec($query);
    $_SESSION['mensaje'] = "Agregado Correctamente";
    $_SESSION['alert'] = "success";
    header("Location: http://localhost/php/");
  }
?>