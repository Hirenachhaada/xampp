<?php

function check_login($con)
{
    if(isset($_POST['submit'])){
    if(isset($_SESSION['email_id']))
    {
       
        $email_id=$_SESSION['email_id'];
        $query="select * from `users2` where email_id = '$email_id' limit 1 ";
        $result = MySQLi_querry($con,$query);
        if($result &&  MySQLi_num_rows($result)>0)
        {
            $user_data = MySQLi_fetch_assoc($result);
            return $user_data;
        }
        //if above code does not work
        //header("Location: login_form.php");
        die("");}
    }

}?>