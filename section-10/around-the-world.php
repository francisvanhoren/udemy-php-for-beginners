<?php

    $cities = ['London','Paris','Amsterdam','New York','Berlin','Brisbane'];

    sort($cities);

    echo "<ol>";

    foreach($cities as $citie){
        echo"<li>" . $citie . "</li>";
    }


    echo"</ol>";

    array_push($cities,'Sydney','Helsinki','Beijing','Dublin', 'Rome');
    sort($cities);

echo "<ol>";

foreach($cities as $citie){
    echo"<li>" . $citie . "</li>";
}


echo"</ol>";
