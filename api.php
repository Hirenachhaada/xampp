<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login_sample_db_3";


$con=mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");
$sql="SELECT *from form ORDER BY id desc ";
$info = MySQLi_query($con,$sql);
$result = mysqli_fetch_assoc($info);
$total=MySQLi_num_rows($info);


$json_array = array();
while ($row= mysqli_fetch_assoc($info)) {
$json_array[]=$row;
}
echo json_encode ($json_array);

?>
