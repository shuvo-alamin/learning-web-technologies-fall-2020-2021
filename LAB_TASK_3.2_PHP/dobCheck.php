<?php

if($_POST['day']!=""||  $_POST['month']!="" || $_POST['year']!="")
{
    if($_POST['day']>=1 && 31>= $_POST['day'] && $_POST['month']>=1 && 12>=$_POST['month'] && $_POST['year']>=1900&& 2016>=$_POST['year'])
	{
		if($_POST['month']!=2)
		{
			echo " Valid Date:".$_POST['day']."/".$_POST['month']."/".$_POST['year']."<br/>";
		}	
	}
    else
    {
        echo "Invalid Date.<br/>";
    }
}
else
{
	echo "Fill all the Box";
}
?>