<?php

$username = 'root';
$password = 'RedRaw11';
$sql = 'mysql:host=localhost;dbname=festival';

try {
  $conn = new PDO($sql, $username, $password);
  $stmt = $conn->prepare('SELECT * FROM festivals');
  $stmt->execute(array());
 
  $result = $stmt->fetchAll();
 
  if ( count($result) ) { 
    foreach($result as $row) {
      print_r($row);
	  echo '<br />';
	  echo '<br />';
    }   
  } else {
    echo "No rows returned.";
  }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>