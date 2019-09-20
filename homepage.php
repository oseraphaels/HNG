<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WE CAN</title>
</head>
<style>
    .main {
        background-color: #b2f6ed;
        width: 100%;
        height: 900px;
        margin: auto;
        padding: 0 20px 0 20px;

    }

    h2 {
        color: #014344;
        text-align: center;
    }



    #email {
        padding: 10px;
        width: 200px;
    }

    #password {
        padding: 10px;
        width: 200px;
    }
</style>

<body>
    <div class="main">
        <br /><br /><br />
        Welcome <?php echo $_GET["username"]; ?><br>
        <br /><br /><br />
        Your email address is: <?php echo $_GET["email"]; ?>
        <br /><br /><br />
        <a href="index.php">Logout</a>
    </div>
</body>

</html>