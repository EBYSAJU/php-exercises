<?php

?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
crossorigin="anonymous">
</head>

<body>
<hr>
<div class="container">

<div class="alert alert-primary" role="alert">
    Exercise - form
</div>

<form  method="post" action="form.php">
    <div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text" class="form-control"  placeholder="" name="name">
        </div>


    <div class="form-group">
        <label for="validationServerAge">Age</label>
        <div class="input-group">

            <input type="text" class="form-control is-invalid"  id="validationServerUsername" placeholder="" aria-describedby="inputGroupPrepend3" name="age" required>
            <div class="invalid-feedback">
                Age needs between 18 t0 150.
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="validationServerAge">Email</label>
        <div class="input-group">

            <input type="email" class="form-control is-invalid" id="validationServerUsername"  placeholder="" aria-describedby="inputGroupPrepend3"  name="email" required>
            <div class="invalid-feedback">
             Email needs to contain @ symbol
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="validationServerAge">Password</label>
        <div class="input-group">

            <input type="password" class="form-control is-invalid"  id="validationServerUsername" placeholder="" aria-describedby="inputGroupPrepend3" required  name="password">
            <div class="invalid-feedback">
                Password can only have maximum 50 characters.
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="validationServerAge">Date of Birth</label>
        <div class="input-group">

            <input type="text" class="form-control is-invalid" id="validationServerUsername" name="dob" placeholder="yyyy-mm-d" aria-describedby="inputGroupPrepend3" required>
            <div class="invalid-feedback">
                Need to be a minimum of 18 years old.
            </div>
        </div>
    </div>



    <select class="form-control form-control-sm" name="simpleselect">
        <option>option1</option>
    </select>
    <div class="form-group">
        <label for="validationServerAge">Example multiple select</label>
        <div class="input-group">

            <select multiple class="form-control is-invalid" id="validationServerUsername "  aria-describedby="inputGroupPrepend3" required>
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
            </select>
            <div class="invalid-feedback">
               Minimum of two option needs to be selected.
            </div>
        </div>
    </div>


    <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                    <label class="form-check-label" for="gridRadios1">
                        First radio
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        Second radio
                    </label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" >
                    <label class="form-check-label" for="gridRadios3">
                        Third  radio
                    </label>
                </div>
            </div>
        </div>
    </fieldset>
    <div class="form-group row">
        <div class="col-sm-2" for="validationServerAge">Checkbox</div>
        <div class="col-sm-10-input-group">
            <div class="form-check">
                <input class="form-check-input-control is-invalid" type="checkbox" id="validationServerUsername" aria-describedby="inputGroupPrepend3" required >
                <label class="form-check-label" for="gridCheck1">
                    Example checkbox
                </label>

                <div class="invalid-feedback">
                   Minimum of two checkboxes should be selected
                </div>

            </div>
        </div>
    </div>





    <button  class="btn btn-primary">Submit</button>


    </div>
</form>

<div>
<hr>

<!-- The following content appears only when the form data is valid-->

<div class="alert alert-primary" role="alert">
    Submit Result
</div>

<ul class="list-group">
<li class="list-group-item">


<!-- The value of each of the fields of the form is displayed using LI-->

</li>
</ul>

</div>

</div>
<hr>
</body>

</html>


