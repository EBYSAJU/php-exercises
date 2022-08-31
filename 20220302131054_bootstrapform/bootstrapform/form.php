<?php


//Super Global
/*if (!isset($_POST['fname']) || !isset($_POST['lname'])
    || strlen($_POST['fname']) == 0 || strlen($_POST['lname']) == 0
) {
    header("Location: sendInformationPOST.php");
    echo "Error: Did not supply something."; //Not reachable
}*/
?>

<html>
<body>
<h3>InputName: <?= "$_POST[name] " ?></h3>
<h3>InputAge: <?= "$_POST[age] " ?></h3>

<h3>InputEmail: <?= "$_POST[email] " ?></h3>

<h3>InputPassword: <?= "$_POST[password] " ?></h3>

<h3>InputDate of Birth: <?= "$_POST[dob] " ?></h3>
<h3>InputDate of Birth: <?= "$_POST[simpleselect] " ?></h3>


</body>
</html>