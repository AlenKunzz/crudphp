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
    <a class="navbar-brand" href="http://localhost/php/">
    <img src="https://uxwing.com/wp-content/themes/uxwing/download/web-app-development/database-table-icon.svg"
        width="30" height="30" class="d-inline-block align-top" alt="">
    Mostras Registro
</a>
</nav>

<body class="fondo">   
<div>
    
    <div class="container-fluid p-2 mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tablaCon" class="table  table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Mensaje</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php foreach ($resultado as $data): ?>
                                    <td>
                                        <?php echo $data['id'] ?>
                                    </td>
                                    <td>
                                        <?php echo $data['Nombre'] ?>
                                    </td>
                                    <td>
                                        <?php echo $data['Email'] ?>
                                    </td>
                                    <td>
                                        <?php echo $data['Mensaje'] ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
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