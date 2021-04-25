<?php

    if(isset($_POST['submit'])){
            //assign post variables
            $isbn = $_POST ['isbn'];
            // total, incrementor

            $total = 0;
            $i = 1;

            //split the array
            $digits = str_split($isbn);

            // loop trough array
            foreach($digits as $digit){
            //update total = digit * 1,2,3, etc
                $total += $digit * $i;
                $i++;
            }

            // check if divisible by 11
            if($total % 11 == 0){
                // echo message
                echo "Valid ";
            }else{
                echo"invalid";
            }



    }
