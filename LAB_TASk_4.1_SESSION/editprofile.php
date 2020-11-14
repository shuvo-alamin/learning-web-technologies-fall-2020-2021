<?php

session_start();

if(isset($_REQUEST['submit'])){
    
    if(!empty($_REQUEST['name']) and !empty($_REQUEST['email']) and !empty($_REQUEST['gender']) and !empty($_REQUEST['date'])){
        
        setcookie('name', $_REQUEST['name'], time()+86400, '/');
        setcookie('email', $_REQUEST['email'], time()+86400, '/');
        setcookie('gender', $_REQUEST['gender'], time()+86400, '/');
        setcookie('date', $_REQUEST['date'], time()+86400, '/');
        
    }
    
    else{
        
        echo "Please fill all info";
    }
    
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta>
    <title>XCompany - Edit Profile</title>
</head>
<body>
    
    <table border="2" width="60%">

        <tr>

            <td>

                 <a href="dashboard.php"><img src="logo.png" alt="Logo"></a>



            </td>

            <td>

                Logged in as <a>bob</a> |
                <a href="logout.php">Logout</a>
                

            </td>


        </tr>

        <tr>
            
            <td>
                <b>Account</b><hr>
                
                <ul>
                    
                    <a href="dashboard.php"><li>Dashboard</li></a>
                    <a href="profile.php"><li>View Profile</li></a>
                    <a href="editprofile.php"><li>Edit Profile</li></a>
                    <a href="profilepicture.php"><li>Change Profile Picture</li></a>
                    <a href="changepassword.php"><li>Change Password</li></a>
                    <a href="logout.php"><li>Logout</li></a>
                    
                </ul>
               
                
            </td>
            
            <td width=80%>
              
               <form action="editprofile.php" method="post">
                   
                   <fieldset>
                       
                       <legend><b>EDIT PROFILE</b></legend>
                       
                       Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="name" value="<?=$_COOKIE['name']?>"><hr>
                       Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="email" name="email"><button title="hint:Sample@example.com"><b>i</b></button><hr>
                       Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                       <input type="radio" name="gender" value="Male"> Male
                            <input type="radio" name="gender" value="Female"> Female
                            <input type="radio" name="gender" value="Other"> Other
                            <hr>
                        Date of Birth &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="date" value="<?=$_COOKIE['date']?>"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (dd/mm/yyyy) <hr>
                        
                        <input type="submit" name="submit" value="Submit">
                       
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