<?php

    $date = strtotime("25 december");

    $days = ($date - time()) /60/60/24;

    echo ceil($days) . " days till santa is coming to time";
