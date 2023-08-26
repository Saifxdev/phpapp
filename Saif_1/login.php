<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image:  url(img2.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position:right;
            background-attachment:fixed;
            background-position: center;
            background-color: black;
            
        }
        h2{
           text-align: center; 
           color: antiquewhite;

        }
        hr{ 
            border-width: 3px;
             border-style: solid;
             color: aliceblue;
             
        }
        form{
            font-size: medium;
            color: aliceblue;
            border: azure;

        }
        fieldset{    
    border-width: 5px;
   border-style: solid; 
   border-color:aliceblue;
    margin-right:700px;
    margin-left:30px ;
    margin-bottom:50px;
    
}
        legend{
            color: aliceblue;
            font-size: medium;
        }
        p{
            color: antiquewhite;
            font-size: medium;
            font-weight: bold;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        a{
            color:black;
            font-size: medium;
    
        }
        ul{
            color: aliceblue;
            font-size: medium;

        }
        table,th,td{
            border: 2px solid white;
            border-collapse: collapse;
            color: aliceblue;
            font-size: medium;
            margin-top: 400px;
        }
        label{
            color: aliceblue;
            font-size: medium;
        }
        input{
            font-size: medium;
            color: black;
        }
    </style>
</head>
<body>
    <h2>Login to see cars collection</h2>
    <hr>
    <p>Welcome to my website</p><br>
    <p>Here you will get everthing about cars</p><br>
    <p>You can register to get in touch with us</p><br>
    <p>You can follow me social media platform</p><br>
    <hr style="margin-right: 700px;">
    <form action="home.php" method="post"> 
    <label for="">Email:</label><br>
    <input type="text"id="email"name="email"placeholder="email"required><br>
    <label for="">Password:</label><br>
    <input type="password"id="psd"name="psd"placeholder="password"required><br>
    <input type="submit"name="login"id="login"><br>
    </form>
    <p>New member?</p>
    <a href="reg.php"><mark>click to register</mark></a>
     
    <br>
      <table> 
             <tr><th>Contact_num</th>
            <th>email</th></tr>
            <tr><td>8739048866</td><td>mdsaifcs@gmail.com</td></tr>
        </table>
        <hr>
    <p>Follow me on</p>
    <ul> 
<li><a href="https://www.twitter.com"><img src="twitter.png" alt="twitter"height="30px"width="30px"></a></li>
<li><a href="https://www.instagarm.com"><img src="ins.jfif" alt="instagarm"height="30px"width="30px"></a></li>
<li><a href="https://www.facebook.com"><img src="fac.png" alt="facebook"height="30px"width="30px"></a></li>
</ul>
</body>
</html>