<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WE CAN</title>
</head>
    <style>
       .main{
       background-color: #b2f6ed;
       width: 100%;
       height:900px; 
       margin:auto;
       padding: 0 20px 0 20px;
       
   }
   h1{
       color: #014344;
       text-align: center;
​    }
   h3{
      text-align: center;
   }
   form{
       padding: 10px;
   }
    button{
       height:50%;
       width: 50%;
       padding: 15px;
       margin:12px; 
       text-align: center;
       background-color: #b2f6ed;
       color: #014344;
       border: 3px solid #014344;
       width:200px;
    }
    #email{
        padding: 10px;
        width:200px;
    }
#password{
    padding: 10px;
    width:200px;
}
.check{
    text-align: center;
    padding:10px;
    font-size: 20px
}
.forget{
    text-align: center;
    font-size: 20px;
    padding:0px;
    color: #014344;
}
.footer{ 
   left:0;
   bottom:15px;
   width:30px;
   width:100%;
   text-align: center;
   position: fixed;
  background-color: #014344;
  font-size: 25px;
}
a{
    color:#b2f6ed;
}
</style>

<body>
    <div class="main">
            
        <div class="login">
                <h1>WE CAN!</h1>
<h3>MEMBERS LOGIN</h3>
<form action="">
    <div class="form">
        <div>
        <label id="email-label">Email:</label> <br>
        <input id="email"required placeholder="Email or username ">
        </div>
        <div>
        <label id="Number-label">PASSWORD:</label> <br>
        <input id="password"required type="Number" min="1" max="120" placeholder ="Password">
        </div>
        <div>
        <button class="login">LOGIN</button>
    </div>
    <div class="check">
<input type="checkbox"value="1"> 
<label >Remember Password?</label>
</div>
<div class="forget">
<a href="">Forgotten Password?</a>
</div>
</form>
​
​
<div class="footer">
    Don't have an account? <br><a href="signUPform.html">Register</a>
</div>
        
​
</body>
</html>

<?php
if (isset($_POST['login'])) {
    $un=$_POST['email'];
    $pw=$_POST['password'];
    if ($un=='email' && $pw=='password') {
        header ("location:home.html");
        exit();
    }
    else
    echo "<scrip>alert('Invalid Username/Password')</script>";
}
?>