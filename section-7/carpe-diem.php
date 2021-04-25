<?php



echo "Today is " . date('l');
echo "<br>";

echo  date('l d') . "th". " " . date(' F') . " , " . date('Y');

echo "<br>";

echo date('Y/m/d');
echo "<br>";

echo date('l d') . "th" . " ". date('Y, h:m A');

echo"<br>";

if (date('L') == 1){
    echo date('Y') . " is not a leap year";
}else {
    echo date('Y') . " is not a leap year";
}
