<?php

    if (isset($_POST['bloodGroup']) && !empty($_POST['bloodGroup'])) 
    {
        echo "Group:".$_REQUEST["bloodGroup"] ;
    } 
    else 
    {
        echo "Must be select one";
    }
	
?>