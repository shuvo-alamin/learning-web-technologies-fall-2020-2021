<?php
	
	$data = "";

	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['name'];
		
		if($name == "")
		{
			$data = "";
		}else{
			$data = $name;
		}
	}
?>


<html>
<head>
	<title>Name</title>
</head>
<body>	
    	
    <form method="post">
        
        <fieldset style="width:200px">
            
         <legend><b>Name</b></legend>
         
         <input type="text" name="name" value="<?=$data?>"> <hr>
        <input style="font-family:Calibri" type="submit" name="submit" value="Submit">
        </fieldset>
    
        
    </form>
		
</body>
</html>