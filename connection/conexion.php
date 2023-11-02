
<?php
$link= "mysql:host=127.0.0.1;dbname=prueba_tecnica";
$username = "root";
$password = "zetsu611212";

try {
  $pdo = new PDO($link, $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Conexión  Fallida: " . $e->getMessage();
}
?>  