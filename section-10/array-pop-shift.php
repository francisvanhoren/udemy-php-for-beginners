<?php

    $cities = ['London','Paris','Amsterdam','Dublin'];

    $lastCity = array_pop($cities);

    echo $lastCity ;
    echo "<br>";

    echo"<pre>";
    print_r($cities);

    $firstCity = array_shift($cities);

    echo $firstCity ;

    echo"<pre>";
    print_r($cities);
