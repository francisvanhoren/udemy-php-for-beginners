<?php

  /*  $random = rand(1,2);

    if($random == 1){
        echo "Heads, I win";
    }else{
        echo"Tails, you win";
    }*/
$head = 0;
$tails = 0;

    for($i = 1; $i <= 100; $i ++){
        $random = rand(1,2);
        if($random == 1){
            echo "Heads, I win" . "<br>";
            $head++;
        } elseif($random ==2){
            echo"Tails, you win" . "<br>";
            $tails++;
        }

    }
echo "There where " . $head . " Heads and " . $tails ." tails";