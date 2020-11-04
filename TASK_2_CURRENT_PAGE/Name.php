<?php

if(isset($_REQUEST['submit']))
{
    
    if($_POST['Name']=="")
    {
        
        echo "nothing was inputed";
        
    }
    
    else
    {
        echo "Name: ".$_POST['Name'];
    }
    
    
}



?>


<!DOCTYPE html>
<html>
<head>
   
    <title>Name</title>
</head>
<body>
    
    <form method="post" action="Name.php">
        
        <fieldset style="width:19%;">
            
        <legend><b>Name</b></legend>
        <input type="text" name="Name"> 
        <hr>
        <input type="submit" name="submit" value="Submit">
            
        </fieldset>
        
        
    </form>
    
</body>
</html>