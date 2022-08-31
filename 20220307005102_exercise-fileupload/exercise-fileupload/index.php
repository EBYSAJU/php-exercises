





<!DOCTYPE html>
<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
   <h1></h1> Select image to upload:</h1><br>
    <input type="file" name="fileToUpload" id="fileToUpload"><br>
    <input type="submit" value="submit" name="submit">
</form>
<hr/>
<h1>Display all images in Folder/images:</h1>
</body>
</html>
<?php
//var_dump($_FILES['fileToUpload']);
if (isset($_FILES['fileToUpload'])) {
    $imageFile = $_FILES['fileToUpload'];
    //name, full_path, type, tmp_name, error, size

    if ($imageFile['size'] > 300_000) { //~300kb
        echo "File size too big.";
    } else {
        $allowedTypes = array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG);
        $detectedType = exif_imagetype($imageFile['tmp_name']);
        $validImageType = in_array($detectedType, $allowedTypes);
        if (!$validImageType) {
            echo "Invalid Type of image. Please upload (GIF, JPEG, PNG)";
        } else {
            move_uploaded_file($imageFile['tmp_name'], "./images/$imageFile[name]");

        }
    }


    $dir = "images/";
    $images = scandir($dir);

    for($i=2;$i<count($images);$i++){

        echo "<img src='images/$images[$i]' />";
    }
}
?>