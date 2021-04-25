<?php

    $names = ['John','Marry','Jane','Pol'];

    sort($names);

    echo "<ol>";
foreach ($names as $name) {
    echo "<li>" . $name . "</li>";
        }



    echo "</ol>";