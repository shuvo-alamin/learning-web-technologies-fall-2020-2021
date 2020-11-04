<?php

$gender = "";

if (isset($_REQUEST['submit']))
{
    
    $gender = $_REQUEST['gender'];
}

else
{
    $gender = "";
}
    


?>



<!DOCTYPE html>
<html>
<head>
   
    <title> Gender</title>
</head>
<body>
    
    <form method="post" action="Gender.php">
        
        <fieldset style="width:22%">
            
            <legend><b>Gender</b></legend>
            
                <input type="radio" name="gender" value="Male" > Male 
				<input type="radio" name="gender" value="Female"> Female
				<input type="radio" name="gender" value="Other"> Other 
                <br>
                <input type="text" name="field" value="<?=$gender?>">   
            
        </fieldset>
        <br>
        <input type="submit" name="submit" value="Submit">
        
    </form>
    
</body>
</html>