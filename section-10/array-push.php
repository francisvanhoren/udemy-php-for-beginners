<?php

    $cities = ['London','Paris'];

    echo "<pre>";
    print_r($cities);

    array_push($cities,'Bxl', 'Berlin');

    print_r($cities);
    
    array_unshift($cities,'Amsterdam','Dublin');

    print_r($cities);