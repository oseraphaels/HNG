<!DOCTYPE html>
<html>
<?php
$username = $_POST['username'];
$password = $_POST['password'];
$error = "";
$success = "";
if (isset($_POST['login'])) {
    if ($username == "admin") {
        if ($password == "admin") {
            $error = "";
            $success = "Welcome Admin!";
            //redirect on successful login
            header("Location: home.php");
        } else {
            $error = "Invalid Username/Password";
            $success = "";
        }
    } else {
        $error = "Invalid Username/Password";
        $success = "";
    }
}
?>


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial;
            height: 100%;
        }

        #login-page {
            display: flex;
            height: 100vh;
        }

        .login {
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 40%;
            background-color: #014344;
            flex-direction: column;
            box-shadow: 10px 0px 56px -3px #014344;
            position: relative;
        }

        .display {
            flex: 60%;
            background-color: #b2f6ed;
            display: flex;
            align-items: center;
            padding-left: 2rem;
        }

        .wecan {
            text-align: center;
            padding: 0 10px;
        }

        h1.main-header {
            background: linear-gradient(#014344, #e2faf6);
            font-size: 6rem;
            letter-spacing: -1rem;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .login-panel {
            position: relative;
            background-color: #b2f6ed;
            top: -2.5rem;
            margin: 0 auto;
            padding: 2rem 0;
            border-radius: 3px;
            color: #014344;
        }

        .login-panel h2 {
            font-weight: normal;
            letter-spacing: 0.45rem;
            text-align: center;
        }

        .login-items {
            text-align: left;
            max-width: 80%;
            margin: 0 auto;
            padding-top: 1rem;
        }

        .login-items h3 {
            font-weight: 100;
            font-size: 1rem;
        }

        .login-inputs {
            padding: 12px 18px;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            width: 100%;
            color: #014344;
            outline: none;
            border: none;
        }

        .login-items .btn {
            font-size: 1.5rem;
            background-color: transparent;
            border-color: #016b6d;
            width: 100%;
            padding: 0.8rem;
            border-radius: 3px;
            cursor: pointer;
        }

        .login-item .btn:active {
            outline: none;
        }

        .login-item .btn:hover {
            box-shadow: #014344;
        }

        .login-items a,
        .login-items p {
            font-size: 1.1rem;
            text-decoration: none;
            text-align: center;
            color: #014344;
            margin-bottom: 2rem;
        }

        .login-items a:hover {
            text-decoration: underline;
        }

        .display .texts {
            color: #014344;
        }

        .texts h1 {
            font-size: 10rem;
            letter-spacing: -10px;
            font-weight: bolder;
        }

        .texts hr {
            border: 2px solid #014344;
            width: 60%;
            position: relative;
            top: -21px;
        }

        .texts p {
            font-size: 2rem;
            letter-spacing: 3px;
        }

        p.account,
        p.account a {
            color: #b2f6ed;
            text-align: center;
        }

        @media (max-width: 650px) {
            #login-page {
                height: 100vh;
                overflow: hidden;
            }

            .login {
                flex: 100%;
            }

            .display {
                display: none;
            }
        }
    </style>
    <title>WeCAN!</title>
</head>

<body>
    <div class="container" id="login-page">
        <div class="login">
            <form method="post" class="wecan" action="index.php">
                <h1 class="main-header">WeCAN!</h1>
                <div class="login-panel">
                    <h2>Members Login</h2>
                    <div class="login-items">
                        <h3>Username/Email</h3>
                        <input autofocus class="login-inputs" type="text" name="username" required id="username" />
                        <h3>Password</h3>
                        <input class="login-inputs" type="password" name="password" required id="password" />
                        <button type="submit" name="login" class="btn">Login</button>
                        <p>
                            <a href="#"><input type="checkbox" name="" id="" /> Remember Me </a>
                        </p>
                    </div>
                </div>
            </form>
            <p class="account">
                Don't have an account yet? <br />
                <strong><a href="signUPform.php">Register Here!</a> </strong>
            </p>
        </div>
        <div class="display">
            <div class="texts">
                <h1>WeCAN!</h1>
                <hr />
                <p>Expore</p>
                <p>Projects</p>
            </div>
        </div>
    </div>
</body>

</html>
