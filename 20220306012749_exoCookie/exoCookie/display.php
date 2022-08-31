<?php
require('data.php');

//todo retrieve product id

//todo add to cookie
setcookie("id",$_REQUEST['id']);


$id= $_REQUEST['id'];

$arrayByKey=getById($id,$products);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<a href="index.php"> Return</a>

<div class="w3-card-4 w3-margin w3-center" style="width: 40%;">


   <!-- <img src="todo" style="width: 100%;">-->
    <div class="w3-container w3-center">
        <!-- TODO title -->




        <p>
            <?php echo $arrayByKey['title'];?>
        </p>
        <!-- TODO description -->
        <?php echo $arrayByKey['description'];?>

        <p>
            </p>


    </div>
</div>


</body>
</html>