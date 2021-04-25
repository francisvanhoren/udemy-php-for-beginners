<?php


    if (isset($_POST['SUBMIT'])){

        $sentence = $_POST['sentence'];
        $inputText = $_POST['text'];

        if ($inputText == "spaces"){

            $result =  strlen($sentence);
        }else{
            $result = strlen($sentence) - substr_count($sentence, ' ');
        }
        echo "The string is " . $result . " characters long.";
    }