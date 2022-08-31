<?php
$optionTypes = [
    'week', 'checkbox', 'color', 'date', 'datetime-local', 'email', 'file',
    'hidden', 'image', 'month', 'number', 'password', 'radio', 'range', 'reset',
    'search', 'submit', 'tel', 'text', 'time', 'url'
];

?>
<html>
<title>form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container w3-blue">
  <h2>Add in the form 1 array</h2>
</div>

    <form class="w3-container w3-card-4 w3-grey"  method="post" action="exercise-form-w3CSS.php">


        <p>
            <label class="w3-text-white"><b>Name</b></label>
<input class="w3-input w3-border" name="name" type="text"></p>
<p>
    <label class="w3-text-white"><b>Type</b></label>
    <select  class="w3-input w3-border" name="select" >
        <option name="select" value=""><?php echo $optionTypes[0]?> "</option>
        <?php
        foreach($optionTypes as $value){


               ?>
        <option name="select" value=""><?php echo $value ?> </option>
     <?php
}
        ?>
    </select>
<p>
    <label class="w3-text-white"><b>ID</b></label>
    <input class="w3-input w3-border" name="id" type="text"></p>
</p>
        <p>
            <label class="w3-text-white"><b>Label</b></label>
            <input class="w3-input w3-border" name="name" type="text"></p>
        </p>


        <button class="w3-btn w3-Indigo" style="width: 1340px">Submit Query</button></p>
</form>




</body>
</html>