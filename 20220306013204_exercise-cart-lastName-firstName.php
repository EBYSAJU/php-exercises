<?php
session_start();


if(isset($_REQUEST['destroyAllSessions']))
{
    if($_SESSION['apple_count']>0||$_SESSION['apple_count']<0){

        $_SESSION['apple_count']=0;
    }
    if($_SESSION['pear_count']>0||$_SESSION['pear_count']<0){

        $_SESSION['pear_count']=0;
    }
    if($_SESSION['banana_count']>0||$_SESSION['banana_count']<0){

        $_SESSION['banana_count']=0;
    }
    session_unset();
    session_destroy();
}




if (!isset($_SESSION['apple_count'])) {
    $_SESSION['apple_count'] = 0;
} else {
    if (isset($_REQUEST['appleIncrement'])) {
        ++$_SESSION['apple_count'];
    } else if (isset($_REQUEST['appleDecrement'])) {
        --$_SESSION['apple_count'];
    } else if (isset($_REQUEST['appleDestroy'])) {

        $_SESSION['apple_count']=0;

    }

}
//

if (!isset($_SESSION['pear_count'])) {


    $_SESSION['pear_count'] = 0;
} else {
    if (isset($_REQUEST['pearIncrement'])) {
        ++$_SESSION['pear_count'];
    }
    else if (isset($_REQUEST['pearDecrement'])) {
        --$_SESSION['pear_count'];
    }
    else if(isset($_REQUEST['pearDestroy'])){
        $_SESSION['pear_count']=0;

    }
}



//
if (!isset($_SESSION['banana'])) {
    $_SESSION['banana'] = 0;
} else {
    if (isset($_REQUEST['bananaIncrement'])) {
        ++$_SESSION['banana_count'];
    }
    else if (isset($_REQUEST['bananaDecrement'])) {
        --$_SESSION['banana_count'];
    }
    else if(isset($_REQUEST['bananaDestroy'])){
        $_SESSION['banana_count']=0;

    }
}






?>

<!DOCTYPE html>

<head>
    <style>
        table, th, td {
        }

        .thtd {
            border: 1px solid black;
            border-collapse: collapse;
        }

    </style>
</head>
<body>



<table class="thtd">
    <tr>
        <th class="thtd">Add to Cart</th>
        <th class="thtd">Remove from cart</th>
        <th class="thtd">Remove all</th>
        <th class="thtd">Current Cart</th>
    </tr>
    <tr>
        <td class="thtd"><a href="rough.php?appleIncrement">+1apple</a></td>
        <td class="thtd"><a href="rough.php?appleDecrement">-1apple</a></td>
        <td class="thtd"><a href="rough.php?appleDestroy">all apple</a></td>
        <td class="thtd"><?php
            if(isset($_SESSION['apple_count']))
                echo"Apples: " .$_SESSION['apple_count'];
            else{
                echo"Apples: ". "0";
            }

            ?></td>

    </tr>
    <tr>
        <td class="thtd"><a href="rough.php?pearIncrement">+1pear</a></td>
        <td class="thtd"><a href="rough.php?pearDecrement">-1pear</a></td>
        <td class="thtd"><a href="rough.php?pearDestroy">all pear</a></td>
        <td class="thtd"><?php

            if(isset($_SESSION['pear_count']))
                echo"pears: " .$_SESSION['pear_count'];
            else{
                echo"pears: ". "0";
            }

            ?>
        </td>

    </tr>
    <tr>
        <td class="thtd"><a href="rough.php?bananaIncrement">+1banana</a></td>
        <td class="thtd"><a href="rough.php?bananaDecrement">-1banana</a></td>
        <td class="thtd"><a href="rough.php?bananaDestroy">all banana</a></td>
        <td class="thtd"><?php

            if(isset($_SESSION['banana_count']))
                echo"bananas: " .$_SESSION['banana_count'];
            else{
                echo"bananas: ". "0";
            }

            ?>
        </td>

    </tr>

    <tr>
        <td></td>
        <td style="text-align:right"> <a href="rough.php?destroyAllSessions">clear the basket<a></td>
    </tr>







</table>

</body>
</html>
