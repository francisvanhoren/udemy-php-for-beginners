<?php

if (isset($_POST['submit'])) {

    $temp = $_POST ['temp'];
    $degrees = $_POST ['degrees'];

    if ($degrees == "F") {
        $result = ($temp - 32) * 5 / 9;


    } else {
        $result = $temp * 9 / 5 + 32;


    }
    echo "The temperature is " . $result ;
}