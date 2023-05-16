<?php
$servername = "sql211.epizy.com";
$username = "epiz_34219579";
$password = "EPVwPRX2omY";

try {
  $conn = new PDO("mysql:host=$servername;dbname=epiz_34219579_login", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
