<?php 
include("dbconn.php");
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>signup form</title>
    <link rel="stylesheet" href="signup.css">
    </head>
    <body>
        <center>
        <h1>Registere here</h1>
        <p>* thesee fields are mandetory</p>
    <form name="myform" action="add.php" method="POST">
        <div class="container">
        <hr>
            <label for="firstname"><b>firstname</b>*</label>
                <input type="text" name="firstname" placeholder="Enter first name" autofocus required />
            <br><br>
            
            <label for="lastname"><b>lastname</b>*</label>
                <input type="text" name="lastname" placeholder="Enter last name" autofocus required />
             <br><br>
            
                    <label for="DOB"><b>DOB</b>*</label>
                <input type="date" name="DOB" placeholder="Enter your date of birth" autofocus required />
             <br><br>
            
            <label for="contact"><b>mobile number</b>*</label>
                <input type="number" name="Contact" placeholder="Enter phone number" autofocus required />
            <br><br>


        
                    <label for="email"><b>email</b>*</label>
                <input type="email" name="email" placeholder="Enter email address" autofocus required />
            <br>          <br>

        
                    <label for="address"><b>address</b>*</label>
                <input type="text" name="address" placeholder="Enter your address" autofocus required />
            <br><br>

            
                    <label for="password">password*</label>
                <input type="password" name="password" placeholder="enter password" autofocus required />
            <br><br>

        
                    <label for="confirm password">confirm password*</label>
                <input type="password" name="c_password" placeholder="Re-enter password" autofocus required />
             <br>
        
        
        </div>
                <input type="submit" name="submit" class="signup" placeholder="submit" />

        </form>
            <p>Are you already registered ? <a href="login.php"><b>click here</b></a> to login </p>
            </center>
    </body>
</html>