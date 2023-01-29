<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login">
        <img src="images/login-front.png" class="front">
        <img src="images/mdm-logo.png" class="logo">
        <form action="login.php?login=1" method="GET">
            <input type="email" name="email" placeholder=" Enter Email ID " required="">
            
            <input type="password" name="password" placeholder=" Enter Password " required="">
            
            <input class="btn" type="submit" name="login" value="Login"/>
        </form>
    </div>
</body>
</html>