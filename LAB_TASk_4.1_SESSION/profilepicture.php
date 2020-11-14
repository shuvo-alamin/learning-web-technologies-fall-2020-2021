<!DOCTYPE html>
<html>
<head>
    <meta>
    <title>XCompany - Profile Picture</title>
</head>
<body>
    
    <table border="2" width="58%">

        <tr>

            <td>

                 <a href="dashboard.php"><img src="logo.png" alt="Logo"></a>



            </td>

            <td align="right">

                Logged in as <a href="profile.php">bob</a> |
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
              
              <form action="profilepicture.php" method="post">
              <fieldset>
                  
                  <legend><b>PROFILE PICTURE</b></legend>
                  
                  <img src="user.png" alt="User" height="150px" width="150px"><br>
                  <input type="file" name="image"><hr>
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


<?php

session_start();
if(isset($_REQUEST['submit'])){
    
    if(!empty($_REQUEST['image'])){
        
        echo "Picture updated";
        
    }
    
    else{
        
        echo "Error!";
        
    }
    
}

?>