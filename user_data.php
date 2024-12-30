<?php
$username=$_POST['username'];
$password=$_POST['password'];
$Mob=$_POST['mob'];
$email=$_POST['email'];
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="zander";
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
   die('Connection failed'.$conn->connect_error);
}
else{
    header("location: index.html");
    $INSERT="INSERT INTO `user_info` (`USER_ID`, `USERNAME`, `PASSWORD`, `MOBILE_NO`, `EMAIL_ID`) 
    VALUES ('', '$username', '$password', '$Mob', '$email')";
    $result=mysqli_query($conn,$INSERT);
}
echo "Value inserted successfully";
?>