
<?php
$link= "mysql:host=localhost;dbname=prueba_tecnica";
$username = "root";
$password = "";

try {
  $pdo = new PDO($link, $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Conexión  Fallida: " . $e->getMessage();
}
?>  