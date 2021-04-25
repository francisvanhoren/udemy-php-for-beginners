<?php

    $suits = ["clubs","diamonds","hearts","spades"];
    $cards = ["Ace",2,3,4,5,6,7,8,9,10,"Jack","Queen","King"];


   for ($i = 0; $i < 5; $i++ ){

       $suit = $suits[array_rand($suits)];
       $value = $cards[array_rand($cards)];

       $card = $value . " of " . $suit . "<br>";

       echo $card;

   }
