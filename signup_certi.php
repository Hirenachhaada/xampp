<?php 
    session_start();
    $_SESSION;
    include("connection_certi.php");
    include("function_certi.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //SOMETHING WAS POSTED
        $email_id = $_POST['email_id'];
        $password = $_POST['password'];
        if(!empty($email_id) && !empty($password) && !is_numeric($email_id))
        {
            //save to database
            $query = "insert into users (email_id,password) value('$email_id','$password')";
            mysqli_query($con ,$query);
            echo "hi";
        }
        else{
            echo "Please enter some valid informaton";
        }
        

        header("Location: login_certi.php");
        die;

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login_form3.css">
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
.btn{
    width: 100%;
    padding: 10px;
    background-color: rgb(44, 4, 117);
    border-radius:5px;
    font-size: larger;
    cursor: pointer;
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

.info2{
    padding-bottom: 12px;
}
</style>
    <div class="rect">

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

    </div>    
    <div class="container">
        <H2 class="heading">Digital Ipsum</H2>
        <div class="box">
            <form method="post"> 
            <p class="info">Sign up to your account</p>
            <p class="email_text">Create a new Email address </p>
            <input type="email" name="email_id" class="input1">
            
            <p class="info2">Create a new Password </p>
            <input type="password" class="input2" name="password">
            <p>
            <input type="checkbox">Stay Sign in for a week
        </p>
        <button class="btn">Sign Up</button>
        <a href="login_certi.php">

        <p class="google">Sign in</p></a>
        </form>
        </div>
    </div>
</body>
</html>