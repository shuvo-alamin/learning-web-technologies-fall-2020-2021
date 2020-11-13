<?php

if (isset($_REQUEST['email']) && !empty($_REQUEST['email'])) 
{
    $email = $_REQUEST["email"];
    $email_pieces = explode("@", $email);
    if (count($email_pieces) == 2 &&
        $email_pieces[0] !== "" &&
        $email_pieces[1] !== "")
        {
        $domain = explode(".", $email_pieces[1]);
        if (count($domain) > 1) 
        {                  
            foreach ($domain as $dom) 
            {
                if ($dom == "") 
                {
                    echo ("Invalid Email");
                }
            }
            echo "Valid Email :".$email;
        } 
        else 
        {
            echo "Invalid Email";
        }
    }
    else 
    {
        echo "Invalid Email";
    }
} 
else 
{
    echo " Email must be filled";
}
?>
