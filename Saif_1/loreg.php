<?php
session_start();
header('location:login.php');
 
$servername="localhost";
$username="root";
$password="";
$databasename="database4";

$conn=mysqli_connect($servername,$username,$password,$databasename);

if(!$conn){
    die("Connection failed:" .mysqli_connect_error());  
}

if(isset($_POST['save'])){
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $address=$_POST['addres'];
    $email=$_POST['email'];
    $password=$_POST['passwor'];
    $psw_repeat=$_POST['psw-repeat'];

    $sql_query="INSERT INTO tab4 (firstname,middlename,lastname,gender,phone,addres,email,passwor, psw-repea)
    VALUES ('$firstname','$middlename','$lastname',' $gender','$phone',' $address','$email','$password','$psw_repeat')";

    if(mysqli_query($conn,$sql_query)){
        echo"New details filled sucessfully";
    }
    else{
        echo"error:" .$sql. "".mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>