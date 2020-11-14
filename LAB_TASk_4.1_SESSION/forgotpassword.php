<!DOCTYPE html>
<html>
<head>
    <meta>
    <title>XCompany - Forgot Password</title>
</head>
<body>
    
    <table border="2" width="60%">

        <tr>

            <td>

                 <a href="publichome.php"><img src="logo.png" alt="Logo"></a>



            </td>

            <td align="right">

                <a href="publichome.php">Home</a>|
                <a href="login.php">Login</a>|
                <a href="registration.php">Registration</a>

            </td>


        </tr>

        <tr>
            
            <td>
                
                <form action="forgotpassword.php" method="post">
                    
                    <fieldset>
                        
                        <legend><b>FORGOT PASSWORD</b></legend>
                        
                        Enter Email&nbsp;:&nbsp;<input type="email" name="email"><hr>
                        <input type="submit" name="submit" value="Submit"><br><br> 
                        
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

if(isset($_REQUEST['submit'])){
    
    if($_COOKIE['email']==$_REQUEST['email']){
        
        echo "Code has been sent to mail!";
        
    }
    
    else{
        
        echo "Invalid email!";
        
    }
}

?>