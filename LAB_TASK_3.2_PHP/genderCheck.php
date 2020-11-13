<?php
	
    if (isset($_POST['gender']) && !empty($_POST['gender'])) 
    {
        echo "Gender:".$_REQUEST["gender"] ;
    } 
    else 
    {
        echo "Must select one";
    }
		
?>