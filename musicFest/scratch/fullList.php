<?php

$username = 'root';
$password = 'RedRaw11';
$sql = 'mysql:host=localhost;dbname=festival';

try {
  $conn = new PDO($sql, $username, $password);
  $stmt = $conn->prepare('SELECT * FROM festivals');
  $stmt->execute(array());
 
  $result = $stmt->fetchAll();
 
  //echo $result[0][0];
  
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>