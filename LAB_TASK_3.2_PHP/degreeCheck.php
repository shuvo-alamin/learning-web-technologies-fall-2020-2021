<?php
	
    if (isset($_POST['degree']) && !empty($_POST['degree'])) 
    {
       $checkbox=$_POST["degree"];
       foreach ($checkbox as $value) 
        { 
	      echo "Degree:". $value . "<br>";
        }     
    } 
    else 
    {
        echo "Must be select one";
    }
		
?>