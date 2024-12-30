<?php
$username=$_POST['username'];
$password=$_POST['password'];
$Mob=$_POST['Mob.no'];
$email=$_POST['email'];
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="zander";
$conn=new mysqli($host,$username,$password,$dbname);
if(mysqli_connect_error()){
   die('Connection failed'.$conn->connect_error);
}
else{
    $INSERT="INSERT Into user_info (username,password,Mob,email) values(?,?,?,?)";
    $stmt->bind_param("ssis",$username,$password,$Mob,$email);
    $stmt->execute();
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
?>