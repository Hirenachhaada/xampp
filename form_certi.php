<?php 
include("connection_certi.php");
session_start();
    $_SESSION;
    if(!isset($_SESSION['email_id']))
    {
     header("Location:login_certi.php");
     }
?>

<?php 
    
    if(!isset($_SESSION['password']))
       {
        header("Location:login_certi.php");
        }
    
    include("connection_certi.php");
    // include("function_certi.php");
    // check_login($con);
    if(isset($_SESSION['email_id'])){
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['name'];
        $position = $_POST['position'];
       
        $date1 = $_REQUEST['date']; 
        $date=date('Y-m-d',strtotime($date1));
        
            $filename=$_FILES["signature"]["name"];
            $tempname=$_FILES["signature"]["tmp_name"];
            $folder="image/".$filename;
            move_uploaded_file($tempname,$folder);
        if(!empty($name) && !empty($position))
        {
            //save to database
            $query = "insert into form (name,position,date,signature) value('$name','$position','$date','$folder')";
            mysqli_query($con ,$query);
            echo "hi";
        }
        else{
            echo "Please enter some valid informaton";
        }
        
        if(isset($_SESSION['password']))
       {
        header("Location: certificate_1.php");
        }
        else{
            header("Location: login_certi.php");
        }
    }}
   
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
        .container{
    text-align: center;
    margin-top: 10vh;
    
}
h2{
    color: rgb(44, 4, 117);
    font-size: 30px;
    font-family: Arial, Helvetica, sans-serif; 
}
.name{
    font-size: 20px;
    margin-right: 20px;
}
.input_name{
    display: block;
    position: relative;
    /* top:50%;
    left:50%;
    
    transform: translate(-50%,-10%); */
    margin: 0 auto;
    margin-top: 10px;
    height: 35px;
    width: 380px;
    border:solid rgb(141, 139, 139);
    border-radius: 5px;
    padding-left: 8px;
  
}
        body{
    background-color: aliceblue;
    overflow:hidden;
   
}
.container10{
    z-index: 1000;
}
.heading10{
    text-align: center;
    margin-top: 15vh;
    color: rgb(44, 4, 117);;
    font-size: 30px;
    font-family: Arial, Helvetica, sans-serif; 
    z-index: 1000;
}
.box10{
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


.info10{
    font-size: large;
}
p .forget{
    text-align: right !important;

    color: rgb(44, 4, 117);;
}
.forget:hover{
    color: red;
}

.input10{
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
.input20{
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
/* .btn{
    width: 100%;
    padding: 10px;
    background-color: rgb(44, 4, 117);
    border-radius:5px;
    font-size: larger;
    cursor: pointer;
} */
.btn10{
    width: 100%;
    padding: 10px;
    margin-top:10px;
    background-color: #001C3A;
    border-radius:5px;
    font-size: larger;
    cursor: pointer;
}
.btn10:hover{
    background-color: #FC9844;
}
@
@media (max-width:320px)
{
    .box10{
        width:280px;
    }
    .input10{
        width: 280px;
    }
    .input2{
        width: 280px;
    }
}
@media (min-width:321px) and (max-width:1200px)
{
    .box10{
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
.email_text10::after{
    content: "*";
    color:red;
}
.position::after{
    content: "*";
    color:red;
}
.

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
.logo10{
    margin-top:20px;
    margin-bottom:20px;
}
.logo110{
    display:flex;
    justify-content:center;
    }
@media (max-width:800px){
    .rect, .rect2, .rect3, .rect4, .rect5, .rect6 {
        display: none;
    }
}
@media (max-width:320px) {
    .input101, .input2{
        width:250px
    }
    .btn10{
        width:260px   
    }
}
.file{
    margin-bottom:20px;
}

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
    <div class="container10">
    

    <div class="logo110">
    <img class="logo10" src="img/_Digital_Ipsum_final_2.png" heigth="200px" width="200px"></div>
        
        <!-- <H2 class="heading"><span style="color:rgb(244, 117, 20)">Digital</span> <span style="color: rgb(0, 28, 58) margin-top: -10px;"><br>Ipsum</span></H2> -->
        <div class="box10">
            <form method="post" enctype="multipart/form-data">
            
            <p class="email_text10">Name</p>
            <input type="text" class="input10" name="name" required>
            
            <p class="position">Position</p>
            <input type="text" class="input10" name="position" required>

            <p class="email_text10">Date</p>
            <input type="date" class="input10" name="date"  min="2018-01-01" max="2022-12-31" required>

            <p class="email_text10">Signature</p>
            <input type="file" class="file" name="signature" ><br/>

            <button class="btn10" type="submit" name="submit" >Generate Certificate</button>
            
</form>
        
        
        </div>
       
    </div>
    
</body>
</html>
<?php 


?>