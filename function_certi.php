<?php
include ("connection_certi.php");
function check_login($con)
{
    if(isset($_POST['submit'])){
    if(isset($_SESSION['email_id']))
    {
       
        $email_id=$_SESSION['email_id'];
        $password=$_SESSION['password'];
        $query="select * from users where email_id = '$email_id' password = '$password' ";
        $result = MySQLi_query($con,$query);
        if($result &&  MySQLi_num_rows($result)>0)
        {
            $user_data = MySQLi_fetch_assoc($result);
            return $user_data;
        }
        //if above code does not work
        else{header("Location: login_certi.php");}
        die("");}
    }

}?>