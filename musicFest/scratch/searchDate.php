<?php

$username = 'root';
$password = 'RedRaw11';
$sql = 'mysql:host=localhost;dbname=festival';
$date = $_GET['month'];

try {
  $conn = new PDO($sql, $username, $password);

  $stmt = $conn->prepare('SELECT * FROM festivals WHERE month(start_date) = :date');
  $stmt->execute(array(':date' => $date));
 
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