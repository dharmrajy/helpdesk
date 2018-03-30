<!DOCTYPE HTML>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="signup.css">
    </head>
    <body>
        <center>
            <h1>Login here</h1>
    <form name="myform" action="validate.php" method="post">
        <hr>
        <label for="email"><b>email</b></label>
        <input type="email" name="email" placeholder="Enter your email" autofocus required /><br><br>
        <label for="password"><b>Password</b></label>
        <input type="password" name="password" placeholder="Enter your password" autofocus required /><br><br>
        <input type="submit" name="submit" placeholder="submit" value="submit" />
        </form>
            <p>are you not registerd user? <a href="signup.php"><b>click here </b></a>to register</p>
        </center>
    </body>
</html>