
<?php
$link= "mysql:host=localhost;dbname=prueba_tecnica";
$username = "root";
$password = "";

try {
  $pdo = new PDO($link, $username, $password);

} catch(PDOException $e) {
  echo "Conexión  Fallida: " . $e->getMessage();
}
?>  