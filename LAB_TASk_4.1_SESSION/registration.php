
<!DOCTYPE html>
<html>

<head>
    <meta>
    <title>XCompany - Registration</title>
</head>

<body>

<table cellspacing="0" border="1" width="820px" align=center>
            
            <tr>
                
                <td width=110px>
                    
                    <a href="publichome.php"><img src="logo.png" alt="Logo"></a>                      
                    
                </td>
                
                <td align="right">
                    
                <pre>    <a href="publichome.php">Home</a>|<a href="login.php">Login</a>|<a href="registration.php">Registration</a>   </pre>
                    
                </td>
       
            </tr>

        <tr>

            <td colspan="2" height="500px" align="center" >
                
                <form action="registration.php" method="post">

                    <fieldset align="left">

                        <legend><b>REGISTRATION</b></legend>

                        <br>

                        <b>Name</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="name">
                        <hr>
                        <b>Email</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="email" name="email">
                        <button title="hint:Sample@example.com"><b>i</b></button>
                        <hr>
                        <b>User Name</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="uname">
                        <hr>
                        <b>Password</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="password" name="password">
                        <hr>
                        <b>Confirm Password</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="password" name="cpassword">
                        <hr>

                        <fieldset align="left">

                            <legend ><b>Gender</b></legend>

                            <input type="radio" name="gender" value="Male"> <b>Male</b>
                            <input type="radio" name="gender" value="Female"> <b>Female</b>
                            <input type="radio" name="gender" value="Other"> <b>Other</b>

                        </fieldset>
                        <hr>

                        <fieldset align="left">

                            <legend><b>Date of Birth</b></legend>

                            <input type="tel" name="day" size="1" pattern="[0-9]{2}"><b> /</b>
                            <input type="tel" name="month" size="1" pattern="[0-9]{2}"><b> /</b>
                            <input type="tel" name="year" size="2" pattern="[0-9]{4}"> (dd/mm/yyyy)

                        </fieldset>
                        <hr>

                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="reset">

                    </fieldset>

                </form>

            </td>

        </tr>

        <tr>

            <td colspan="2" align="center">
                <p>Copyright &#169; 2017</p>
            </td>

        </tr>

    </table>

</body>

</html>

<?php

if(isset($_REQUEST['submit']))
{
    
    if(!empty($_REQUEST['name']))
    {   
    setcookie('name', $_REQUEST['name'], time()+86400);
    }
else
{
    echo "Please enter name.<br>";
}

setcookie('email', $_REQUEST['email'], time()+86400);

if(!empty($_REQUEST['uname']))
{  
    setcookie('username', $_REQUEST['uname'], time()+86400);
}
else
{
    echo "Please enter user name.<br>";
}

if($_REQUEST['password'] == $_REQUEST['cpassword'] and !empty($_REQUEST['password']))

{   
   setcookie('password', $_REQUEST['password'], time()+86400);   
}

else
{
    echo "Password doesn't match.<br>";
}

if(!empty($_REQUEST['gender']))

{
    setcookie('gender', $_REQUEST['gender'], time()+86400);   
}

else
{
    echo "Select gender.<br>";
}

if(intval($_REQUEST['day'])<32 and $_REQUEST['day'] > 0 and $_REQUEST['month'] < 13 and $_REQUEST['month'] > 0 and $_REQUEST['year'] > 1899 and $_REQUEST['year'] < 2100)

{   
    $date = $_REQUEST['day']."/".$_REQUEST['month']."/".$_REQUEST['year'];
    setcookie('date', $date, time()+86400); 
}

else
{
    echo "Invalid date<br>";
}

if(isset($_COOKIE['name']) and isset($_COOKIE['email']) and isset($_COOKIE['username']) and isset($_COOKIE['password']) and isset($_COOKIE['gender']) and isset($_COOKIE['date']))

{   
    echo "Registration Complete!<br>";      
}
    
}

?>