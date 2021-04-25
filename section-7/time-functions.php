<?php

   /* $date = strtotime("25 december");

    $seconds = $date - time();

    $minute = $seconds/60;

    $hour = $minute / 60;

    $days = $hour / 24 ;

    echo ceil($days) . " dagen tot kerstmis";

    echo "<br>";
    echo "<hr>"; */

    $date = strtotime("12/12/2022");

    $days = ($date - time()) / 60/ 60/ 24/364;

    echo ceil($days);
