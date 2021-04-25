<?php

    $radius = 5;

    $area = pi() * pow($radius,2);

    $roundedarea = round($area,2);

    echo "the radius is " . $area . "<br>";
    echo "the radius is " . $roundedarea;