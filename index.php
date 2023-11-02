<?php
include("connection/conexion.php");

$sql_leer = 'SELECT * FROM contacto';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Técnica</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
    ">
    <link rel="stylesheet" href="vista/styles.css">

    <link rel="stylesheet" href="datatable/DataTables-1.13.6/css/dataTables.bootstrap5.min.css">

</head>

<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="http://localhost/php/showTable.php">
    <img src="https://uxwing.com/wp-content/themes/uxwing/download/web-app-development/database-table-icon.svg"
        width="30" height="30" class="d-inline-block align-top" alt="">
    Mostras Tabla
</a>
</nav>
<body class="fondo">
    
    <div class="container">
    

        <form action="controller/guardarContacto.php" method="POST">

            <?php
            session_start();
            if (isset($_SESSION['mensaje'])) {
                echo '<div class=" alert alert-'. $_SESSION['alert']  .'" role="alert"> '. $_SESSION['mensaje']  .'</div>';
                unset($_SESSION['mensaje']);
                unset($_SESSION['alert']);
            }
            ?>
            <div class="card">
                <div class="card-header mb-3">
                    <h3> Agregue su información de contacto</h3>
                </div>
                <div class="input-group input-group-lg">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Nombre</span>
                    <input required type="text" name="Nombre" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-lg">
                </div>
                <div class="input-group input-group-lg" style="margin-top: 20px;" >
                    <span class="input-group-text"  id="inputGroup-sizing-lg">Email</span>
                    <input required type="email" name="Email" class="form-control" placeholder="Email"
                        aria-describedby="inputGroup-sizing-lg">
                </div>
                <div class="input-group input-group-lg" style="margin-top: 20px;">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Mensaje</span>
                    <input required type="text" name="Mensaje" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-lg">
                </div>
                <div class="d-grid gap-2 col-2 mx-auto" style="margin: 10px;">
                    <button class="btn btn-primary" name="guardarContacto" type="input">Enviar</button>

                </div>
            
        </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="
    https://cdn.jsdelivr.net/npm/puppet@1.5.0/dist/index.min.js
    "></script>
        <script type="text/javascript" src="datatable/datatables.min.js"></script>
        <script type="text/javascript" src="main.js"></script>


</body>


</html>