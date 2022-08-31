<?php

const HOME = 'Home';
const PRODUCT = 'Products';
const ABOUT = 'About Us';
const IDEA = 'Gift Ideas';

//The name of the menu item that should be active
$selected = IDEA;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Variable Attributes</title>
    <style>
        #navigation ul {
            width: 150px;
        }

        .menu-item {
            background-color: #e1f4f3;
            color: #0000cc;
        }

        .selected {
            background-color: #fea799;
        }
    </style>
</head>

<body>
<h1>Displaying an active item from the menu</h1>
<nav id="navigation">
    <ul class="<?php echo "menu-item" ?>">
        <li class="<?php
        if (HOME == $selected) {
            echo "selected";
        } ?>">
            <?= HOME ?>
        </li>
        <li class="
        <?php
        if ($selected == PRODUCT) {
            echo "selected";
        } ?>">

        <?= PRODUCT ?></li>
        <li class="
        <?php
        if ($selected == ABOUT) {
            echo "selected";
        } ?>"

        ><?= ABOUT ?></li>
        <li class="
        <?php
        if ($selected == IDEA) {
            echo "selected";
        } ?>"><?= IDEA ?></li>

    </ul>
</nav>
</body>

</html>