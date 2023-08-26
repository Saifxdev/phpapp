<?php
 session_start(); 

$con=mysqli_connect('localhost','root');

if($con){
    echo"connection sucessful";
}
else{
    echo"not connected";
}
mysqli_select_db($con,'database4a');

$user=$_POST['user'];
$psd=$_POST['psd'];

$q="select * from tab4a where user='$user' && psd='$psd'";

$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);

if($num==1){
 $_SESSION['user']=$user;
 header('location:home.php');
}
else{ 
    header('location:login.php');
}
?>