<?php
 include ("connection_certi.php");
//  include("form_certi.php");

 $con=mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");
 $sql="SELECT *from form ORDER BY id desc limit 1";
 $info = MySQLi_query($con,$sql);
 $result = mysqli_fetch_assoc($info);
$total=MySQLi_num_rows($info);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="certificate.css" rel="stylesheet">
</head>
<body>
    <style>
        body{
    font-family:Arial, Helvetica, sans-serif;
}
/* .container{
    margin:50px;
} */
.logo{
    margin-left:50px;
    margin-top: 50px;
}
.address{
    color: rgb(77, 75, 75);
    font-family:Arial, Helvetica, sans-serif;
    line-height: 5px;
    border-left: orange 8px solid ;
    width:fit-content;
    padding-left: 12px;
    margin-left:50px;

}.text1{
margin-top: 15px ;
 padding-top: 8px;}
 .text3{
    padding-bottom: 8px;
 }



 .info1{
     margin-left: 60%;
 }
 

 .signature2 {
     color:rgb(1, 1, 26);
     font-weight: 800;
 }

 .signature3,.date2{
    font-weight: 800;
    color: orange;
 }
        body{
            background-color:rgb(162, 249, 249);
            
        }
        
        .bodyy{
            background-color:rgba(247,148,29,255);
            width:1300px;
            z-index: 100;
            margin-left:100px;
            box-shadow:0px 5px 7px 0px gray;
            /* padding:10px; */  
        }
        .date{
    width:200px;
    text-align: center;
    position: relative;
    left:80%;
    top: -178px;;
 }

        .container{
            
            border:10px 0px  orange solid;
            border-radius:0px 100px 100px 100px;
            background-color:white;
            height:725px;
            z-index: 500;
        }
        /* .details{
             position: relative;
             top:-90px;  
        } */
        
        .image{
            
            width:550px;
            height:320px;
            top:20px;
            position: relative;
            left:285px;
            border-radius: 150px 0px 0px 0px;
            opacity: 0.5;
            z-index: 10;

        }
        .linnk{
            position:absolute;
            top:-50.9px;
            left:62.42%;
            color:white;
            background-color:rgba(11,20,50,255);
            border-radius:0px 100px;
            text-align:center;
            width:350px;
            height:100px;
            padding-top:5px;
        }
    
        .image1{
            position: absolute;
            
            top:58.5px;
            left:476px;
            width: 932px;
            height:350px;
            background-color: rgb(1, 1, 26);
            background-color:rgba(11,20,50,255);
            z-index:1;
            border-radius: 300px 50px 0px 0px;
            /* z-index: -1; */
            
        }
       
        .subheading{
            width:400px;
            text-align:center;
            z-index: 1000;
            
            font-weight: 600;
            margin-top:-10px;
 }
 .subheading1,.subheading2{
     text-align: center;
     margin-left:-80px;
     font-size: large;
     letter-spacing: 0.5px;
     margin-top:40px;
    
 }
 .subheading2{
     margin-top: -20px;
     margin-bottom:-10px;
 }
        .heading{
            z-index: 5;
            /* background-color:rgba(11,20,51,255); */

        }
        
        .heading1{
            font-family: "Aestetico Formal Bold";
        }
        .candidate{
            background-color:rgba(247,148,29,255);
            border: 2px rgba(247,148,29,255) solid;
            border-radius: 0px 0px 100px 100px ;
            text-align:center;
            width:928.5px;
            position: relative;
            top: 20px;
            left: -0.5px;            
            height:98px;
            
        }
        .candidate1{
            color:white;
            margin-top:8px !important;
            /* letter-spacing:5px; */
            font-size:60px;
        }
        .details{
            position: relative;
            top:-90px; 
            margin-top:22px;
            height:170px;
            z-index: 5;
            border-radius:20px;
        }
        .info{
     background-color: rgba(229,231,233,255);
     height: 226px;
     z-index: -3;
     border-radius:0px;
     margin:20px;
     margin-left:60px;
     margin-right:60px;
     margin-top:30px;
     /* margin: 20px; */
     
        }
        .info1{
            padding-top:20px;
            padding-bottom:8px;   
        }
        
        .logout{
            padding-top:20px;
            padding-left:20px;
            margin-bottom:10px;
        }
        .signature3, .date2{
            color:rgba(247,148,29,255);
            font-size:15px;
        }
        .signature2{
            font-size:15px;
            
        }
        hr{
            margin-bottom:7px;
            margin-top:-5px;
        }
       
        .heading{
            background-color: rgb(1, 1, 26);
            width:500px;
            margin-top: -20px;
            border-radius: 0px 80px;
        }
         .heading{
            /* z-index: 1000; */
            background-color:rgba(11,20,50,255);
            opacity:0.95;
            z-index:500;
            margin-left:0px;
        }
        .heading1{
            color: white;
            margin-left: 65px;
            padding-top: 30px;
            margin-bottom: 0px;
            padding-bottom: 0px;
            font-size:60px;
        }
        .heading2{
            color: white;
            margin-left: 70px;
            margin-top: -10px;
            font-weight: 100;
            padding-bottom: 30px;
        }
        .signature{
            width:200px;
            text-align: center;
            position: relative;
            left:58%;
            top:-65px;
        }
        .info2{
            line-height: 8px;
            margin-left:65px ;
            margin-top: 75px;
            font-size:16px;
            letter-spacing:1px;
            
        }
        .btn{
            width: 200px;
            padding: 10px;
            margin-top:30px;
            background-color: #001C3A;
            background-color: rgb(1, 1, 26);
            border-radius:5px;
            font-size: larger;
            cursor: pointer;
            align-items:right;
            color:white;
        }
        .btn:hover{
            background-color: #FC9844;
        }
        .ending{
            display: flex;
            
        }
        .ending .btn{
            margin:25px;
            
        }
        .ending p{
            flex-basis:75%;
        }
        .date hr{
            margin-top:3px;
        }

 
        </style>
        <div class="bodyy">
    <div class="container">
        <img class="logo" src="img/_Digital_Ipsum_final_2.png" heigth="160px" width="200px">
        <div class="address">
            
            <p class="text1" >3b & C Everest House, 46C</p>
            <p class="text2">Jawharlal Nehru Road</p>
            <p  class="text3" >Kolkata- 700071, India</p>
        </div>
        <div class="heading" >
            <h1 class="heading1">Certificate</h1>
            <h3 class="heading2"> OF COMPLETION</h3>
        </div>
        <div class="subheading">
            <p class="subheading1">IS PRESENTED</p>
            <p class="subheading2"> TO</p>
        </div>
        <div class="image1 ">
           <div class="linnk"> <p class="lik">www.digitalipsum.in</p></div>
                
                <img  class ="image" src="img/_Digital_Ipsum_final_1.png" width="" >
            
         
            <div class="candidate">   
                <h1 class="candidate1"><?php echo $result['name'] ?></h1>
            </div>
    </div>
        <div class="info">
            <p class="info1">This certificate was awarded by: </p>
                <div class="info2">
                    <p>For completing 3 months</p>
                    <p>Of internship as a</p>
                    <p><?php echo $result['position']?> Intern</p>
                </div>
                <div class="details" >
                <div class="signature">
                    <img class="signature1" src="<?php echo $result['signature']?>" width="200px" height="120px">
                    <hr/>
                    <span class="signature2"> PRIYANKA AGARWAL</span><br>
                    <span class="signature3">MANAGING    DIRECTOR</span>
                </div>
                <div class="date">
                    <h4 class="date1"><?php 
                    $olddate = $result['date'];
                    $newdate= date("d-m-Y", strtotime($olddate));
                    echo $newdate?></h4> 
                    <!-- date('Y-m-d',strtotime($date1)) -->
                    <hr/>
                    <span class="date2">Date </span>
                </div>
        </div>
            

        </div>
        <div class="ending">
            <p class="logout"><a href="logout_certi.php">log-out</a></p>
            <button class="btn">Print Certificate</button>
        </div>

    </div>
   
</body>
</html>