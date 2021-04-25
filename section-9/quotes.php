<?php

    $name = "Tom";
    $age = 21;

    echo "Hello, " . $name . " your age is  " . $age . " Years old.";

    echo "<br>";

    echo "Hello, $name your age is $age years old.";

    echo "<br>";

    echo 'Hello, ' . $name . ' your age is ' . $age . 'years old.';

    echo '<br>';
// does not work
    echo 'Hello, $name your age is $age years old';
