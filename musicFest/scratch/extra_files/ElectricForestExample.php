<?php

$username = 'root';
$password = 'RedRaw11';
$sql = 'mysql:host=localhost;dbname=festival';
$ElectricForest = 'ElectricForest';
try {
  $conn = new PDO($sql, $username, $password);
  $stmt = $conn->prepare('SELECT * FROM festivals WHERE Name_of_Fest = :ElectricForest');
  $stmt->execute(array(':ElectricForest' => $ElectricForest));
 
  $result = $stmt->fetchAll();
 
  if ( count($result) ) { 
    foreach($result as $row) {
      print_r($row);
    }   
  } else {
    echo "No rows returned.";
  }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>