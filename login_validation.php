<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
     $sql = "Select * from user_info where USERNAME='$username'";
     $sql2 = "Select * from user_info where PASSWORD='$password'";
   
    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);
    $num = mysqli_num_rows($result);
    $num2 = mysqli_num_rows($result2);
    if ($num == 1 && $num2==1){
       echo "Successfully logged in";
       header("location: index1.html");
        }
        else{
            $showError = "Invalid Credentials";
            echo "Wrong username or password";
            $showError = "Invalid Credentials";
        }
}
?>