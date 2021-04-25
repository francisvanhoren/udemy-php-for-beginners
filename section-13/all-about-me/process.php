<?php

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $colour = $_POST['colour'];

        setcookie('name',$name, time()+3600);
        setcookie('age',$age, time()+3600);
        setcookie('colour',$colour, time()+3600);
    }
