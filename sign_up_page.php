<?php 
    session_start();
    $_SESSION;
    include("connection2.php");
    include("function2.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //SOMETHING WAS POSTED
        $email_id = $_POST['email_id'];
        $password = $_POST['password'];
        $gender=$_POST['gender'];
        $mobile=$_POST['mobile'];
        $date=date('y-m-d',strtotime($POST['date']));
        if(!empty($email_id) && !empty($password) && !is_numeric($email_id))
        {
            //save to database
            $query = "INSERT INTO `users2` (`email_id`,`password`,`mobile`,`gender`,`date`) value('$email_id','$password','$mobile','$gender','$date')";
            mysqli_query($con ,$query);
            echo "hi";
        }
        else{
            echo "Please enter some valid informaton";
        }
        

        header("Location: sign_in_page.php");
        die;}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign_in_page</title>
    <link rel="stylesheet" href="sign_in_page.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <style>
      body{
    background-color: aliceblue;
}
marquee{
    font-size: 20px;
    color:blue;
    text-decoration: underline;
    scroll-behavior: smooth;
    
   
}
.circle1{
    width:100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    z-index: 5;
    top: 750px;
    left: 450px; 
    background-image : linear-gradient(to bottom right, red, yellow);
}
.circle3{
    width:100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    z-index: -1;
    left:50px;
   
    background-image : linear-gradient(to bottom right, red, yellow);
}
.circle4{
    width:50px;
    height: 50px;
    border-radius: 50%;
    position: absolute;
    z-index: -10;
    left:700px;
    top:700px;
    background-image : linear-gradient(to bottom right, rgb(0, 255, 4), yellow);
    animation-name: c4;
    animation-duration: 10s;
    animation-iteration-count: infinite;
}
@keyframes c4{
    0%{
    position: absolute;
    left:700px;
    top:700px;
    }
    10%{
        position: absolute;
        left:800px;
        top:500px;
        rotate: 30deg;
    }
    20%{
        position: absolute;
        left:950px;
        top:700px;
        rotate:30deg;
    }30%{
        position: absolute;
        left:1050px;
        top:500px;
        rotate:30deg;
    }40%{
        position: absolute;
        left:1200px;
        top:700px;
        rotate:30deg;
    }50%{
        position: absolute;
        left:1350px;
        top:500px;
        rotate:30deg;
    }60%{
        position: absolute;
        left:1200px;
        top:700px;
        rotate:30deg;
    }70%{
        position: absolute;
        left:1050px;
        top:500px;
        rotate:30deg;
    }80%{
        position: absolute;
        left:950px;
        top:700px;
        rotate:30deg;
    }90%{
        position: absolute;
        left:800px;
        top:500px;
        rotate:30deg;
    }100%{
        position: absolute;
        left:700px;
        top:700px;
        rotate:30deg;
    }
}
.rect{
    width:100px;
    height:40px;
    position: absolute;
    left:800px;
    top:750px;
    border-radius: 10px;
    background-image : linear-gradient(to bottom right, rgb(0, 255, 4), yellow);
    animation-name: rect;
    animation-duration: 10s;
    animation-iteration-count: infinite;
}

#one{
    background-color: lightcoral;
}
.carousel-indicators [data-bs-target] {
    background-color: red;
}
@keyframes rect{
    0%{
        position: absolute;
        left:700px;
        
        }
        10%{
            position: absolute;
            left:800px;
            
            
        }
        20%{
            position: absolute;
            left:950px;
            
            
        }30%{
            position: absolute;
            left:1050px;
            
            
        }40%{
            position: absolute;
            left:1200px;
            
            
        }50%{
            position: absolute;
            left:1350px;
            
            
        }60%{
            position: absolute;
            left:1200px;
            
            
        }70%{
            position: absolute;
            left:1050px;
            
            
        }80%{
            position: absolute;
            left:950px;
            
            
        }90%{
            position: absolute;
            left:800px;
            
            
        }100%{
            position: absolute;
            left:700px;
            
            
        }
}
.star{
    height:100px;
    width:100px;  
    color: red;
    font-weight:bolder;  
}


.container{
    z-index: 1000;
}
.heading{
    text-align: left;
    margin-top: 10px;
    margin-bottom: 50px;
    font-weight: bolder;
    margin-left:5% ;
    color: rgb(117, 17, 4);
    font-size: 30px;
    font-family: Arial, Helvetica, sans-serif; 
    z-index: 1000;
}
.boxfront{
    /* text-align: left; */
   
    width:25vw;
    background-color: white;
    position: absolute;
    left:100px;
    top:50px;
    z-index: 4;
    border:solid white;
    padding: 20px;
    padding-top: 50px;
    padding-bottom: 50px;
    box-shadow: 5px 5px #e4e2e2;
   
}

.google{
    text-align: center;
    color: rgb(44, 4, 117);
    margin-bottom: -10px;
}


.info{
    font-size: large;
}
.info2{
    padding-bottom: 12px;
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
        width: 350px;
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
    width: 350px;
    padding-left: 8px;
    border-radius: 5px;;
  
}
#female, #male{
    margin-left: 15px;
    margin-right: 4px;
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
    margin-left: -10px;
    background-color: rgb(117, 17, 4);
    border-radius:5px;
    font-size: larger;
}
.btn2{
    width: 100%;
    padding: 10px;
    margin-left: -10px;
    background-color: rgb(235, 79, 58);
    border-radius:5px;
    margin-bottom: 20px;
    font-size: larger;
}
@media (max-width:320px)
{
    .boxfront{
        width:280px;
    }
    .boxback{
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
    .boxfront{
        width:440px;
    }
    .boxback{
        width:440px;
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
.container{
    transform:preserve-3d;
    transition: all 0.5s ease;
}
.carosels{
    width:1000px ;
    height: 500px;
    position: absolute;
    left:600px;
    margin-top: 20px;
}
img{
    width:500px;
    height: 500px;
}
      </style>
    <div class="circle1"></div>
    <div class="circle3"></div>
    <div class="circle4"></div>
    <div class="rect"></div>
   
    <div class="car"></div>
    <div class="container">
        <form method="post">
            <div class="boxfront">
                <H2 class="heading">Cars Studio</H2>
                <p class="info">Sign up to your account</p>
                <p class="email_text">Email</p>
                <input type="email_id" class="input1" name="email_id" >
                
                <p>Password</p>
                <input type="password" class="input2" name="password">
                <p>
                    Gender:   
                    <input type="radio" name="gender" id="female" value="f"><label for="female"> Female</label> 
                    <input type="radio" name="gender" id="male" value="m"><label for="male"> Male</label>
                </p>
                <p>
                Mobile No. <input type="number" class="input1" name="mobile"> 
                </p>
                <p>Birth Date
                    <input type="date" class="input1" name="date" style="height: 40px;"> 
                </p>
                <br/>
                <a href="sign_in_page.php">
                <button class="btn2">Sign up</button></a>
                <br/>
                    <a href="sign_in_page.php">Log in</a>
                    <p class="google">Get help from google</p>
            </div>
        </form>
    </div>
    <div class="carosels">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" id="one" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" id="one" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators"  id="one" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/car.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/car1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/car2.jpg" class="d-block w-100" alt="...">
                            </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                    <marquee class="marquee"  scrollamount="25">Let's move with the speed of the time</marquee>
        </div>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>