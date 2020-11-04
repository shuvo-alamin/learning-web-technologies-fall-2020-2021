<?php

if(isset($_REQUEST['submit']))
{
  if (isset($_POST['gender'])){echo "Gender: ".$_POST['gender'];
}        
else
{
  echo "nothing was selected.";
}
  
}

?>

<html>
<head>
     <title>Gender</title>
</head>
<body>
    
    <form method="post" action="Gender.php">
        
        <fieldset style="width:21%">

        <legend><b>Gender</b></legend>
        <input type="radio" name="gender" value="Male" > Male 
		    <input type="radio" name="gender" value="Female"> Female
		    <input type="radio" name="gender" value="Other" > Other 
        <hr>  
            <input type="submit" name="submit" value="Submit">
        </fieldset>
        
    </form>
    
</body>
</html>