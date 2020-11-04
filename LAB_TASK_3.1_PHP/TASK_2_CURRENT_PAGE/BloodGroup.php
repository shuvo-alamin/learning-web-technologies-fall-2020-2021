<?php

if(isset($_REQUEST['submit']))
{
  echo "Blood Group: ".$_REQUEST['BloodGroup'];   
}

?>

<html>
<head>
    <title>HTML Form -Blood Group</title>
</head>
<body>

    <form method="post" action="BloodGroup.php">
        
        <fieldset ;width:18%">
            
            <legend><b>BLOOD GROUP</b></legend>

            <select name="BloodGroup">

				<option value="A+"selected>A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="O+" >O+</option>
				<option value="O-">O-</option>
				
			</select>
			<hr>
   
       <input  type="submit" name="submit" value="Submit">
        </fieldset>
        <br>  
        
    </form>
    
</body>
</html>