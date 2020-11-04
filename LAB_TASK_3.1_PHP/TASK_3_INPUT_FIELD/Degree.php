<?php

$degree = "";
if(isset($_REQUEST['submit']))
{
    if(isset($_REQUEST['degree']))
    {
        $degree = "";
        $degree_arr = $_REQUEST['degree'];
        for($i = 0; $i < count($degree_arr); $i++)
        {
          $degree = $degree.$degree_arr[$i].",";   
        }
          $degree = rtrim($degree, ",");
    }
    else
    {
        $degree = "Nothing was selected";
    }  
}
else
{ 
    $degree = "";   
}

?>

<head>
    <title>Degree</title>
</head>
<body>

    <form method="post" action="Degree.php">

        <fieldset style="width:24%"> 

      
            <legend><b>Degree</b></legend>
            <input type="checkbox" name="degree[]" value="SSC"> SSC
            <input type="checkbox" name="degree[]" value="HSC"> HSC
            <input type="checkbox" name="degree[]" value="BSc"> BSc
            <input type="checkbox" name="degree[]" value="MSc"> MSc
            <hr>
            <input type="text" name="deg" value="<?=$degree?>">

            <br>
            <br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>

    </form>

</body>

</html>