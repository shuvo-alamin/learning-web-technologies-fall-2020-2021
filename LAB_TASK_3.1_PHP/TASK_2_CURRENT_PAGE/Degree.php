<?php


if(isset($_REQUEST['submit']))
{
    
 if(empty($_POST['degree']))
 {
    
    echo "Nothing was selected";
    
}
else
{
    
    $degree = $_POST['degree'];
    
    for($i = 0; $i < count($degree); $i++){
        
        echo "Degree: ".$degree[$i]."<br>";
        
    }
    
}
    
}


?>


<!DOCTYPE html>
<html>

<head>
    
    <title>Degree</title>
</head>

<body>

    <form method="post" action="Degree.php">

        <fieldset style="width:24%">

            <legend><b>DegreeE</b></legend>
            <input type="checkbox" name="degree[]" value="SSC"> SSC
            <input type="checkbox" name="degree[]" value="HSC"> HSC
            <input type="checkbox" name="degree[]" value="Bsc"> Bsc
            <input type="checkbox" name="degree[]" value="Msc"> Msc
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>




    </form>

</body>

</html>