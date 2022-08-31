


    <?php

    $servername = "localhost";
    $username = "example";
    $password = "example";

?>
    <table>
        <thead>
        <tr>
        <th>Name</th>
        <th>Year_Assignment</th>
        <th>Rank</th>
        <tr>
        </thead

<tr>

    <?php

    try {
        $connection = new PDO("mysql:host=$servername;dbname=school", $username, $password);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "Select Name,Year_Assignment,Rank from teachers where Year_Assignment>2000 ";

        $stmt = $connection->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $results=$stmt->fetchAll();
        if ($results != false) {
                echo "List of teachers assigned since 2000";
            foreach ($results as $row) {

                ?>
                <tr>
                <td><?php echo "$row[Name]";
                ?>

                    <td>
                    <?php
                    echo "$row[Year_Assignment]";


                ?>
                <td>
                <?php

                echo "$row[Rank]";

                ?>

            </td>
            </td>


            </td>


        </tr>



    <?php
            }
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

?>
    </tr>
    </table>



