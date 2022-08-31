<?php

$servername = "localhost";
$username = "example";
$password = "example";


try {
    $connection = new PDO("mysql:host=$servername;dbname=school", $username, $password);
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "Select Name from teachers where City like :city";
    $values = ["city"=>$_POST['city']];
    $stmt = $connection->prepare($query);
    $stmt->execute($values);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $results=$stmt->fetchAll();
    if ($results != false) {
        echo "Teachers of the city";
        foreach ($results as $row) {
            echo "$row[Name]<br />";
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}





