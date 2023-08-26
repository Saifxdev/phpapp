<?php
session_start();
if(!isset($_SESSION['user']))
{
header('localhost:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: black;
        }
        ul{
            background-color: aliceblue;
            font-size: medium;
        }
        ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}
img{
   border-radius: 50px;
}
* {
  box-sizing: border-box;
}
 
 .column{
   float:left;
   width: 33.33%;
   padding: 5px;
 }
 .row::after{
   content: "";
   clear: both;
   display: table;
 }
 h2{
   color: wheat;
 }
    </style>
</head>
<body>
    <ul>
        <li><a href="login.php">Home</a></li>
        <li><a href="https://www.google.com/search?q=cars+news&oq=cars+news&aqs=chrome..69i57j0i10i131i433l2j0i10l7.4373j0j7&sourceid=chrome&ie=UTF-8">News</a></li>
        <li><a href="login.php">Contact</a></li>
        <li><a href="login.php">About</a></li>
        <li><a href="logout.php">logout</a></li>
      </ul>
  
      <hr>
      <h2>Classic Cars</h2>
     <div class="row">
       <div class="column">
         <img src="vin2.jpg" alt=""style="width: 100%">
       </div>
       <div class="column">
         <img src="vin3.jfif" alt=""style="width: 100%">
       </div>
       <div class="column">
         <img src="vin4.jfif" alt=""style="width: 100%">
       </div>
     </div>
    </body>
</html>