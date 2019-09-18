<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
<style>
    h1{
        margin-bottom: 50px;;
    }
    .center-box{
        float:right;
        box-sizing: border-box;
        padding: 40px;
        margin: 30px;
        width: 70%;
        height: 400px;
        background-size: cover;
    }
    input[type="text"],
    input[type="password"]{
                  display:block;
                  box-sizing:border-box;  
                  margin-bottom: 25px;
                  padding: 5px;
                  width: 300px;
                  height: 32px;
                  font-family: sans-serif;
                  font-weight: 400;
                  transition: 0.2s ease;
    }
    input[type="submit"]{
        background: gold;
        width: 120px;
        height: 32px;
        border-radius: 5px;
        font-family:sans-serif;
        font-weight: 500;
        text-transform: uppercase;}
</style>
</head>
<body>
        <div class="center-box">
                <h1>Sign Up</h1>
        
                <input type="text" name="username" placeholder="username"/>
                <input type="text" name="email" placeholder="email"/>
                <input type="password" name="password" placeholder="password"/>
                <input type="password" name="confirm" placeholder="confirm password"/><br>
                  <p>By creating an account you agree to our <a href="#" >Terms & Privacy</a></p>
                <input type="submit" name="submit" value="Submit"/>
        
            </div>
</body>
</html>

<?php
  if (isset($_POST['submit'])) 
  {
    $un=$_POST['username'];
    $em=$_POST['email'];
    $pw=$_POST['password'];
    $cpw=$_POST['confirm'];
  }
?>
