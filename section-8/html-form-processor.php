<?php

if(isset($_POST['submit'])){
    $username = $_POST ['surname'];

    $gender = $_POST ['gender'];

    echo "Your surname is " . $username . " and " . "Your gender is " . $gender;
}

