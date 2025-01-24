<?php

include("conect.php");

if(isset($_POST['signUp'])){
$firstname  = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $password=md5   ($password);

    $checkEmail="SELECT * from user where email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows > 0){
        echo"email addres already exist";
}
else{
    $insertQeury= "INSERT INTO userinlog(firstname,lastname,email,password)
            VALUES('$firstname','$lastname','$email','$password')";
            if(
                $conn->query($insertQeury)==    TRUE){
                    header( "location:../html/login.php");
                }
            else{
                echo"error".$conn->error;
            }
}

}
if  (isset($_POST["signIn"])){
    $email= $_POST["email"];
    $password = $_POST["password"];
    $password=md5 ($password);

    $sql= "SELECT * FROM user WHERE email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows > 0){  
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("location: homepage.php");
        exit();
    }
    else{
        echo"not found, incorect email or password";
        }
    }
?>