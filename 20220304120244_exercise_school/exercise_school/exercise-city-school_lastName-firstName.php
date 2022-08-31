<?php

$servername = "localhost";
$username = "example";
$password = "example";

try {
    $connection = new PDO("mysql:host=$servername;dbname=school", $username, $password);
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "Select distinct City from teachers ";

    $stmt = $connection->prepare($query);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $results=$stmt->fetchAll();



?>

<!DOCTYPE html>
<html>
<body>



<form action="actionAfterSubmit.php" method="post">
    <label for="city">Select a City :</label>

    <select name="city" id="city">
        <?php
        if ($results != false) {
            foreach ($results as $row) {

                ?>
        <option ><?php


            echo "$row[City]"?></option>
        <?php
        }
        }
        ?>

    </select>

    <input type="submit" value="ok">
</form>
<?php

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>


</body>
</html>
