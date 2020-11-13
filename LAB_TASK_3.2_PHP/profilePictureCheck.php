<?php

    $a = $_POST['User_id'];
    $b = $_POST['img'];

    if (isset($a) && !empty($a) && ($a>1) && !empty($b))
    {
        echo "Valid Id";
    } 
    else 
    {
        echo "User id cannot be empty and must will be positive number and picture cannot be empty";
    }
		
?>