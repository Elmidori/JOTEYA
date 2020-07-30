<?php
$servername = "localhost:3308";
$username = "root";
$password = "";

try {
  $db = new PDO("mysql:host=$servername;dbname=joteya", $username, $password);
  
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>