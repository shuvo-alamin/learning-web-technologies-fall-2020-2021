<?php
	
	$data = "";

	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['Email'];
		
		if($name == ""){
			$data = "";
		}else{
			$data = $name;
		}
	}
?>


<head>
    <title>Email</title>
</head>
<body>
    
    <form method="post" action="email.php">
        
        <fieldset style="width:20%"> 
            
          <legend><b>Email</b></legend>

          <input type="email" name="Email" value="<?=$data?>">
          <button title="hint:Sample@example.com" style="" ><b>i</b></button>
          <hr>
          <input type="submit" name="submit" value="Submit">
            
        </fieldset>  
        
    </form>
    
</body>
</html>