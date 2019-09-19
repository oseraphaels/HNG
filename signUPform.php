<!DOCTYPE html>
<html>
<?php

if (isset($_POST['login'])) {
  if ($username == "admin") {
    if ($password == "admin") {
      $error = "";
      $success = "Welcome Admin!";
      //redirect on successful login
      header("Location: home.php");
    } else {
      $error = "Invalid Password";
      $success = "";
    }
  } else {
    $error = "Invalid Username";
    $success = "";
  }
}

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign Up</title>
  <style>
    h1 {
      margin-bottom: 50px;
      ;
    }

    .center-box {
      float: right;
      box-sizing: border-box;
      padding: 40px;
      margin: 30px;
      width: 70%;
      height: 400px;
      background-size: cover;
    }

    input[type="text"],
    input[type="password"] {
      display: block;
      box-sizing: border-box;
      margin-bottom: 25px;
      padding: 5px;
      width: 300px;
      height: 32px;
      font-family: sans-serif;
      font-weight: 400;
      transition: 0.2s ease;
    }

    input[type="submit"] {
      background: gold;
      width: 120px;
      height: 32px;
      border-radius: 5px;
      font-family: sans-serif;
      font-weight: 500;
      text-transform: uppercase;
    }
  </style>
</head>

<body>
  <form method="post" action="home.php">
    <div class="center-box">
      <h1>Sign Up</h1>
      <div>
        <input type="text" name="username" required placeholder="Username">
      </div>
      <div>
        <input type="text" name="email" required placeholder="Email">
      </div>
      <div>
        <input type="password" name="password" required placeholder="Password">
      </div>
      <div>
        <input type="password" name="password" required placeholder="Confirm Password">
      </div>
      <div>
        <input type="submit" name="login"SUBMIT>
      </div>
      <div>
        <p> By creating an account you agree to our <a href="#">Terms & Conditions</a></p>
      </div>
  </form>
</body>

</html>