<?php

if(isset($_REQUEST['submit']))
{
    
    if($_POST['Email']=="")
    {
        
        echo "nothing was inputed";
        
    }
    
    else
    {
        echo "Name: ".$_POST['Email'];
    }
    
    
}


?>



<!DOCTYPE html>
<html>
<head>
   
    <title>Email</title>
</head>
<body>
    
    <form method="post" action="Email.php">
        
        <fieldset style="width:18%;">
            
            <legend><b>Email</b></legend>
        <input type="email" name="Email">
        <button title="hint:Sample@example.com" style="">
        <b>i</b></button>
        <hr>
        <input type="submit" name="submit" value="Submit">
            
        </fieldset>
        
        
    </form>
    
</body>
</html>