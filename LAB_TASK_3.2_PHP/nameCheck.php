<?php
	
	if (isset($_REQUEST['name']) && !empty($_REQUEST["name"])) 
	{
		$name = $_REQUEST["name"];
		if ($name == trim($name) && strpos($name, " ") !== false) 
		{
			if (($name[0] >= 'a' && $name[0] <= 'z') || ($name[0] >= 'A' && $name[0] <= 'Z')) 
			{
				for ($i = 0; $i < strlen($name); $i++) 
				{
					if (($name[$i] >= 'a' && $name[$i] <= 'z') || ($name[$i] >= 'A' && $name[$i] <= 'Z') 
					|| ($name[$i] == ' ') || ($name[$i] == '-') || ($name[$i] == '.')) {
					} 				
					else 
					{
						echo("Must be letter between a-z & A-Z");
					}
				}
				echo "Name:".$name;
			} 		
			else 
			{
				echo "Must be start with letter";
			}
		} 		
		else 
		{
			echo "At least two words needed";
		}
	}	
	else 
	{
		echo "Name fill required..";
	}
	
?>