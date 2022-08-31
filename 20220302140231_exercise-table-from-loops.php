<?php


const USERS = array(
    array('Pierre', 22, '123 rue A', 'aa@ser.com', array('programming' => 5, 'teaching' => 2)),
    array('Julie', 65, '123 rue B', 'bb@ser.com', array('electronics' => 46)),
    array('Martin', 45, '123 rue C', 'cc@ser.com', array('programming' => 21, 'teaching' => 1)),
    array('Melanie', 41, '123 rue D', 'dd@ser.com', array('welding' => 12, 'nutrition' => 6, 'restoration' => 1)),
);

// todo: Black color when age is exactly equal to reference age, green when upper and blue when lower
const AGE_REFERENCE = 45;

// todo: Yellow color when the years of experience is equal to or greater than MINIMUM_EXPERIENCE
const MINIMUM_EXPERIENCE = 5;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Exercise - Table</title>

    <style>
        table,
        td,
        th {
            border: 1px solid black;
            margin: auto;
        }

        ul {
            list-style-type: none;
            padding: 5px;
        }

        .age-reference {
            background-color: black;
            color: white;
        }

        .age-over {
            background-color: green;
            color: white;
        }

        .age-under {
            background-color: blue;
            color: white;
        }

        .experience-invalid {
            background-color: white;
            color: black;
        }

        .experience-valid {
            background-color: yellow;
            color: black;
            font-weight: bold;
        }
    </style>
</head>

<body>


<table>
    <thead>
    <tr>


        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Email</th>
        <th>Jobs</th>
    </tr>

    </thead>
    <tr>

        <?php

        foreach (USERS as $value){


        ?>

    <tr>

        <td <?php if ($value[1] == AGE_REFERENCE) { ?> class="age-reference" <?php } elseif($value[1] < AGE_REFERENCE) { ?>
            class="age-under"
        <?php } elseif($value[1] > AGE_REFERENCE) { ?>
                                                       class="age-over"
        <?php } else { ?>
            class=""
        <?php } ?>><?= $value[0] ?></td>


        <td <?php if ($value[1] == AGE_REFERENCE) { ?> class="age-reference" <?php } elseif($value[1] < AGE_REFERENCE) { ?>
            class="age-under"
        <?php } elseif($value[1] > AGE_REFERENCE) { ?>
            class="age-over"
        <?php } else { ?>
            class=""
        <?php } ?>

        >


            <?php echo $value[1];

            ?>
        </td>


        <td<?php if ($value[1] == AGE_REFERENCE) { ?> class="age-reference" <?php } elseif($value[1] < AGE_REFERENCE) { ?>
            class="age-under"
        <?php } elseif($value[1] > AGE_REFERENCE) { ?>
            class="age-over"
        <?php } else { ?>
            class=""
        <?php } ?>><?= $value[2] ?></td>


        <td<?php if ($value[1] == AGE_REFERENCE) { ?> class="age-reference" <?php } elseif($value[1] < AGE_REFERENCE) { ?>
            class="age-under"
        <?php } elseif($value[1] > AGE_REFERENCE) { ?>
            class="age-over"
        <?php } else { ?>
            class=""
        <?php } ?>><?= $value[3] ?></td>


        <td <?php if ($value[1] == AGE_REFERENCE) { ?> class="age-reference" <?php } elseif($value[1] < AGE_REFERENCE) { ?>
            class="age-under"
        <?php } elseif($value[1] > AGE_REFERENCE) { ?>
            class="age-over"
        <?php } else { ?>
            class=""
        <?php } ?>>
            <?php
            foreach ($value[4] as $key => $newValue) {
                ?>
                <div <?php if ($newValue >= MINIMUM_EXPERIENCE) { ?> class="experience-valid"<?php }else {?> class="age-under" <?php } ?>><?= $key . ":" . $newValue . "years" ?>
                </div>
            <?php } ?>
        </td>


    </tr>


    <?php

    }


    ?>
    </tr>


    <tbody>

    </tbody>

    <tfoot>

    </tfoot>
</table>

</body>

</html>
