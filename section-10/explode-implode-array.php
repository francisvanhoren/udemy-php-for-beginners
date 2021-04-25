<?php

    $string = "John, Sarah, Ken, Ben, Amy";

    $names = explode(", ",$string);

    echo "<pre>";
    print_r($names);

    $implode = implode("*",$names);

    echo $implode;

