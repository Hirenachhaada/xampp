<?php 
    session_start();
    $_SESSION;
    include("connection_certi.php");
    include("function_certi.php");
    // if(isset($_SESSION['email_id']))
    // {
    //  header("Location:form_certi.php");
    //  }
    
    // $user_data = check_login($con);
    // if (isset($_POST['submit'])) {
    // if($_SERVER['REQUEST_METHOD'] == "POST")
    // {
    //     //SOMETHING WAS POSTED
       
    //     $email_id = ($_POST['email_id']);
    //     $password = ($_POST['password']);
       
            //read from database
        //     $query = "SELECT FROM users WHERE email_id='$email_id' AND password='$password'";
        //     $result= mysqli_query($con, "SELECT * FROM users WHERE email_id = '" . $email_id. "' and password = '" . md5($password). "'");
        //     if(!empty($result)){
               
        //     if ($row = mysqli_fetch_array($result)) {
               
        //         $_SESSION['user_email'] = $row['email_id'];
        //         $_SESSION['user_password'] = $row['password'];
        //         header("Location: inside.php");
        //         echo "hdsbcsdn";
        //             }}
        //         else{
                    
        //         }}
        //     $query = "select * from users where email_id = '$email_id' limit 1";
        //     $result=MySQLi_query($con ,$query);
        //     if($result)
        //     {
               
        //         if($result &&  MySQLi_num_rows($result)>0)
        //         {
                   
        //             $user_data = MySQLi_fetch_assoc($result);
        //             if($user_data['password'] === $password)
        //             {
                       
        //                 $_SESSION['email_id'] = $user_data['email_id'];
        //                                        // header("Location: inside.php");
        //                 die;
        //             }
        //         }
        //     }
        // }   
        
        // echo "Please enter some valid informaton";
        // die;

        // session_start();
        // $_SESSION;
        // include("connection.php");
        // include("function.php");
        if (isset($_POST['submit'])) {
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            
            //SOMETHING WAS POSTED
            $email_id = $_POST['email_id'];
            $password = $_POST['password'];
            if(!empty($email_id) && !empty($password) && !is_numeric($email_id))
            {
                
                //read to database
                $query = "select * from users where email_id='$email_id' limit 1";
                $result=mysqli_query($con ,$query);
                if($result)
                {
                    
                    if($result &&  MySQLi_num_rows($result)>0)
                    {
                        
                        $user_data = MySQLi_fetch_assoc($result);
                        if($user_data['password'] === $password)
                        {
                            $_SESSION['email_id'] = $user_data['email_id'];
                            $_SESSION['password'] = $user_data['password'];
                           
                            header("Location: form_certi.php");
                            
                        }
                    }
                }
            }
            echo "Please enter some valid informaton";
            // else{
               
            }
            if(isset($_SESSION['email_id']))
    {
     header("Location:form_certi.php");
     }
    
            
    
        }
        
        // else{
        //          echo "Please enter some valid informaton";
        //      } 

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login_form.css">
</head>
<body>
    <style>
        body{
    background-color: aliceblue;
}
.container{
    z-index: 1000;
}
.heading{
    text-align: center;
    margin-top: 15vh;
    color: rgb(44, 4, 117);;
    font-size: 30px;
    font-family: Arial, Helvetica, sans-serif; 
    z-index: 1000;
}
.box{
    /* text-align: left; */
    margin-top: 4vh;
    width:25vw;
    background-color: white;
    margin: auto;
    border:solid white;
    padding: 20px;
    padding-top: 50px;
    padding-bottom: 50px;
    box-shadow: 5px 5px #e4e2e2;
    z-index: 1000;

}
.google{
    text-align: center;
    color: rgb(44, 4, 117);
}


.info{
    font-size: large;
}
p .forget{
    text-align: right !important;

    color: rgb(44, 4, 117);;
}
.forget:hover{
    color: red;
}

.input1{
        display: block;
        position: relative;
        top:50%;
        left:50%;
        
        transform: translate(-55%,-10%);
        margin: 0 auto;
        margin-top: 10px;
        height: 35px;
        width: 400px;
        border:solid rgb(141, 139, 139);
        border-radius: 5px;
        padding-left: 8px;
      
}
.input2{
    display: block;
    position: relative;
    top:50%;
    left:50%;
    transform: translate(-55%,-40%);
    margin: 0 auto;
    border:solid rgb(141, 139, 139);
    margin-top: 10px;
    height: 35px;
    width: 400px;
    padding-left: 8px;
    border-radius: 5px;;
  
}

.forget{
    display: block;
        position: relative;
        top:50%;
        left:50%;
        transform: translate(-55%,-100%);
}
.btn{
    width: 100%;
    padding: 10px;
    background-color: rgb(44, 4, 117);
    border-radius:5px;
    font-size: larger;
}
@media (max-width:320px)
{
    .box{
        width:280px;
    }
    .input1{
        width: 280px;
    }
    .input2{
        width: 280px;
    }
}
@media (min-width:321px) and (max-width:1200px)
{
    .box{
        width:440px;
    }
}

.rect{
    background-color: rgb(44, 4, 117);
    width:200px;
    height:50px;
    position: absolute;
    top:35%;
    left:20%;
    transform: rotate(340deg);
    animation-name:move;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    z-index: -2;

}
.rect2{
    background-color: rgb(145, 145, 252);
    width:220px;
    height:50px;
    position: absolute;
    top:35%;
    left:20%;
    transform: rotate(340deg);
    animation-name:move2;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    z-index: -5;

}
.rect3{
    background-color: rgb(44, 4, 117);
    width:150px;
    height:50px;
    position: absolute;
    top:20%;
    left:90%;
    transform: rotate(340deg);
    animation-name:move3;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    z-index: -2;

}
.rect4{
    background-color: rgb(145, 145, 252);
    width:170px;
    height:50px;
    position: absolute;
    top:20%;
    left:89%;
    transform: rotate(340deg);
    animation-name:move4;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    z-index: -5;

}
.rect5{
    background-color: rgb(174, 174, 240);
    width:145px;
    height:50px;
    position: absolute;
    top:70%;
    left:29%;
    transform: rotate(340deg);
    animation-name:move5;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    z-index: -2;

}
.rect6{
    
    height:40px;
    background-color:rgb(88, 16, 221);
    position: absolute;
    left:80%;
    top:0%;
    width:0px;
    transform: rotate(-10deg);
    animation-name:move6;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    z-index: -10;


}

@keyframes move{
    0%{
        position: absolute;
    top:35%;
    left:20%;   
    }
    50%{
        position: absolute;
        top:0%;
        left:90%;     
    }
}
@keyframes move2{
    0%{
        position: absolute;
    top:35%;
    left:20%;   
    }
    50%{
        position: absolute;
        top:0%;
        left:89%;     
    }
}
@keyframes move3{
    0%{
        position: absolute;
        top:20%;
        left:90%;     
    }
    50%{
        position: absolute;
    top:55%;
    left:20%;
    width:100px;   
    }
    
}
@keyframes move4{
    0%{
        position: absolute;
        top:20%;
        left:89%;     
    }
    50%{
        position: absolute;
    top:55%;
    left:20%; 
    width:110px;   
    }
    
}
@keyframes move5{
    0%{
        position: absolute;
    top:70%;
    left:29%; 
    }
    50%{
        position: absolute;
    top:40%;
    left:90%;   
    }
   
    
}
@keyframes move6{
    50%{
        position: absolute;
        left:90%;
        width:90px;
    }
    0%{
        position: absolute;
        left:80%;
        width:0px;
    }
}
@media (max-width:800px){
    .rect, .rect2, .rect3, .rect4, .rect5, .rect6 {
        display: none;
    }
}
@media (max-width:320px) {
    .input1, .input2{
        width:250px
    }
    .btn{
        width:260px   
    }
}

        body{
    background-color: aliceblue;
    overflow:hidden;
    font-family:Arial, Helvetica, sans-serif;
}

.container1{
    z-index: 1000;
}
.heading{
    text-align: center;
    margin-top: 15vh;
    color: rgb(44, 4, 117);;
    font-size: 30px;
    font-family: Arial, Helvetica, sans-serif; 
    z-index: 1000;
}
.box{
    /* text-align: left; */
    margin-top: 4vh;
    width:25vw;
    background-color: white;
    margin: auto;
    border:solid white;
    padding: 20px;
    padding-top: 50px;
    padding-bottom: 50px;
    box-shadow: 5px 5px #e4e2e2;
    z-index: 1000;

}
.google{
    text-align: center;
    color: rgb(44, 4, 117);
}


.info1{
    font-size: large;
}
p .forget{
    text-align: right !important;

    color: rgb(44, 4, 117);;
}
.forget:hover{
    color: red;
}

.input1{
        display: block;
        position: relative;
        top:50%;
        left:50%;
        
        transform: translate(-50%,-10%);
        margin: 0 auto;
        margin-top: 10px;
        height: 35px;
        width: 380px;
        border:solid rgb(141, 139, 139);
        border-radius: 5px;
        padding-left: 8px;
      
}
.input2{
    display: block;
    position: relative;
    top:50%;
    left:50%;
    transform: translate(-50%,-40%);
    margin: 0 auto;
    border:solid rgb(141, 139, 139);
    margin-top: 10px;
    height: 35px;
    width: 380px;
    padding-left: 8px;
    border-radius: 5px;;
  
}

.forget{
    display: block;
        position: relative;
        top:50%;
        left:50%;
        transform: translate(-55%,-100%);
}
.btn1{
    width: 100%;
    padding: 10px;
    margin-top:10px;
    background-color: #001C3A;
    background-color: rgb(0,28,58);
    border-radius:5px;
    font-size: larger;
    cursor: pointer;
}
.btn:hover{
    background-color: #FC9844;
}
@media (max-width:320px)
{
    .box{
        width:280px;
    }
    .input1{
        width: 280px;
    }
    .input2{
        width: 280px;
    }
}
@media (min-width:321px) and (max-width:1200px)
{
    .box{
        width:440px;
    }
}

.rect{
    background-color: rgb(44, 4, 117);
    width:200px;
    height:50px;
    position: absolute;
    top:35%;
    left:20%;
    transform: rotate(340deg);
    animation-name:move;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    z-index: -2;

}
.rect2{
    background-color: rgb(145, 145, 252);
    width:220px;
    height:50px;
    position: absolute;
    top:35%;
    left:20%;
    transform: rotate(340deg);
    animation-name:move2;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    z-index: -5;

}
.rect3{
    background-color: rgb(44, 4, 117);
    width:150px;
    height:50px;
    position: absolute;
    top:20%;
    left:90%;
    transform: rotate(340deg);
    animation-name:move3;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    z-index: -2;

}
.rect4{
    background-color: rgb(145, 145, 252);
    width:170px;
    height:50px;
    position: absolute;
    top:20%;
    left:89%;
    transform: rotate(340deg);
    animation-name:move4;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    z-index: -5;

}
.rect5{
    background-color: rgb(174, 174, 240);
    width:145px;
    height:50px;
    position: absolute;
    top:70%;
    left:29%;
    transform: rotate(340deg);
    animation-name:move5;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    z-index: -2;

}
.rect6{
    
    height:40px;
    background-color:rgb(88, 16, 221);
    position: absolute;
    left:80%;
    top:0%;
    width:0px;
    transform: rotate(-10deg);
    animation-name:move6;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    z-index: -10;


}
.password_text{
    margin-bottom:25px;
}

@keyframes move{
    0%{
        position: absolute;
    top:35%;
    left:20%;   
    }
    50%{
        position: absolute;
        top:0%;
        left:90%;     
    }
}
@keyframes move2{
    0%{
        position: absolute;
    top:35%;
    left:20%;   
    }
    50%{
        position: absolute;
        top:0%;
        left:89%;     
    }
}
@keyframes move3{
    0%{
        position: absolute;
        top:20%;
        left:90%;     
    }
    50%{
        position: absolute;
    top:55%;
    left:20%;
    width:100px;   
    }
    
}
@keyframes move4{
    0%{
        position: absolute;
        top:20%;
        left:89%;     
    }
    50%{
        position: absolute;
    top:55%;
    left:20%; 
    width:110px;   
    }
    
}
@keyframes move5{
    0%{
        position: absolute;
    top:70%;
    left:29%; 
    }
    50%{
        position: absolute;
    top:40%;
    left:90%;   
    }
   
    
}
@keyframes move6{
    50%{
        position: absolute;
        left:90%;
        width:90px;
    }
    0%{
        position: absolute;
        left:80%;
        width:0px;
    }
}
@media (max-width:800px){
    .rect, .rect2, .rect3, .rect4, .rect5, .rect6 {
        display: none;
    }
}
@media (max-width:320px) {
    .input1, .input2{
        width:250px
    }
    .btn1{
        width:260px   
    }
}
.logo1{
    margin-top:40px;
    margin-bottom:30px;
}
.logo0{
    display:flex;
    justify-content:center;
    }
    .password_text::after{
        content:"*";
        color:red;
    }
    .email_text::after{
        content:" *";
        color:red;
    }

    </style>
    <!-- <div class="rect">

    </div>  
    <div class="rect2">

    </div> 
    <div class="rect3">

    </div>  
    <div class="rect4">

    </div> 
    <div class="rect5">

    </div> 
    <div class="rect6">

    </div>     -->
    <div class="container1">
    <div class="logo0">
    <img class="logo1" src="img/_Digital_Ipsum_final_2.png" heigth="200px" width="200px"></div>
        <!-- <H2 class="heading"><span style="color:rgb(244, 117, 20)">Digital</span> <span style="color: rgb(0, 28, 58) margin-top: -10px;"><br>Ipsum</span></H2> -->
        <div class="box">
            <form method="post">
            <p class="info">Sign in to your account</p>
            <p class="email_text">Email</p>
            <input type="email" class="input1" name="email_id">
            
            <p  class="password_text">Password </p>
            <input type="password" class="input2" name="password">
            <p>
            <input type="checkbox">Stay Sign in for a week
            <!-- <input type="submit" name="submit"> -->
            <button class="btn1" type="submit" name="submit" >Login</button>
</form>
        </p>
        
        
        </div>
    </div>
</body>
</html>