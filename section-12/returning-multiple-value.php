<?php

        function calculate($number1,$number2){
            $add = $number1 + $number2;
            $subtract = $number1 - $number2;
            return [$add,$subtract];
        }
        $result = calculate(10,3);

        echo $result[0];
        echo "<br>";
        echo $result[1];


