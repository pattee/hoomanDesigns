<?php

$username = 'root';
$password = 'RedRaw11';
$sql = 'mysql:host=localhost;dbname=festival';

try {
  $conn = new PDO($sql, $username, $password);
  $stmt = $conn->prepare('SELECT month(start_date) FROM festivals');
  $stmt->execute(array());
 
  $result = $stmt->fetchAll();
 
	if(count($result)) {
		foreach($result as $key =>  $row) {
		echo $result[$key][0];
		}
	} else {
		echo 'hi';
	}

} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>