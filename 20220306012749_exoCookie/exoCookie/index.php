<?php
require('data.php');

?>
<?php
if(isset($_COOKIE['id'])){
    $id= $_COOKIE['id'];
    $arrayByKey=getById($id,$products);
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="w3-row">

    <!--   todo loop on the artists and create a link to display.php with that specified artist -->


          <div class="w3-col s6 m6 l3">
              <div class="w3-card-4 w3-margin">
                  <?php
                  foreach ($products as $value=>$key ){
                  ?>
                  <a href="display.php?id=<?php echo $key['id']?>"><img src="images/<?php echo $key['urlImg']?>" style="width: 100%;"></a>
                   <div class="w3-container w3-center">
                      <p><?php echo $key['title']?></p>
                       <?php

                       }

                       ?>
                  </div>
                </div>
           </div>


    <hr/>


</div>
<section class="w3-row">
    <div class="w3-container w3-grey">
        <h1>Last Artist Seen</h1>
    </div>

    <!--    todo test if there is a cookie if yes display the last artist visited -->
    <!--    template to display the image -->
          <div class="w3-container">
               <div class="w3-card-4 w3-margin" style="width: 70%;">
                   <?php
                   if(isset($arrayByKey['urlImg'])){



                   ?>

                    <a href="display.php?id=>"><img src="images/<?php echo $arrayByKey['urlImg'];?>" style="width: 100%;"></a>
                <div class="w3-container w3-center">
    <!--                   title-->
                       <p> <?php echo $arrayByKey['title'];?></p>
                   </div>
                   <?php
                   } ?>
                </div>



</section>
</body>
</html>