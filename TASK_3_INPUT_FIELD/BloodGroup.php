<?php

$blood = "";
if(isset($_POST['submit']))
{
    $blood = $_REQUEST['bloodGroup'];
}
else
{
    $blood = "";
}

?>
<html>
<head>
<title>Blood Group</title>
</head>
<body>
    
    <form method="post" action="BloodGroup.php">
        
        <fieldset style="width:20%"> 
            
            <legend><b>BloodGroup</b></legend>
            <select name="bloodGroup">
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
			</select>
             <br> <hr>
			<input type="text" name="blood" value="<?=$blood?>">
            <br> <br>
			
            <input type="submit" name="submit" value="Submit">
        </fieldset>
        <br>
        
    </form>
    
</body>
</html>