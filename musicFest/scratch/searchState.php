<?php

$username = 'root';
$password = 'RedRaw11';
$sql = 'mysql:host=localhost;dbname=festival';
$state =$_GET['state'];

try {
  $conn = new PDO($sql, $username, $password);
  $stmt = $conn->prepare('SELECT * FROM festivals WHERE state = :state');
  $stmt->execute(array(':state' => $state));
 
  $result = $stmt->fetchAll();
/*
  if(count($result)) {
		foreach($result as $row) {
			print_r($row);
			echo('<br />');
			echo('<br />');
		}
	} else {
		echo 'fine';
	}
*/
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>