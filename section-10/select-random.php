<?php

    $cities = ["london","Paris","New York","Dublin","Berlin"];

    //echo $cities[0];

    $city = array_rand($cities);
    echo "<br>";
    echo $cities[$city];