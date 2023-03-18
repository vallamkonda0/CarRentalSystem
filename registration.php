<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
require('db.php');
if(isset($_REQUEST['username'])){
 $firstname = stripslashes($_REQUEST['firstname']);
 $firstname = mysqli_real_escape_string($con, $firstname);
 $lastname = stripslashes($_REQUEST['lastname']);
 $lastname = mysqli_real_escape_string($con, $lastname);
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con, $email);
 $phnum = stripslashes($_REQUEST['phnum']);
 $phnum = mysqli_real_escape_string($con, $phnum);
 $dl = stripslashes($_REQUEST['dl']);
 $dl = mysqli_real_escape_string($con, $dl);
 $username = stripslashes($_REQUEST['username']);
 $username = mysqli_real_escape_string($con, $username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con, $password);
 $query = "INSERT into `users`(fname, lname, email, phnum, dl, username,password)
            VALUES ('$firstname','$lastname','$email','$phnum','$dl','$username','$password')";
 $result =mysqli_query($con, $query);
 if ($result){
    echo "<div class='form'>
          <h3> Registered successfully</h3><br/>
          <p class='link'><a href='index.php'>Login</a></p>
          </div>";
 }
 else{
    echo "<div class='form'>
          <h3>Registration not completed</h3></br>
          <p class='link'><a href='registration.php'>Registration</a></p>
          </div>";
 }
}
else {
?>
<h1 style="font-size:45px;text-align:center;color:#000000">Car Rental System</h1>
    <form class="form" method="post" name="login">
        <h1 class="form-title">Login</h1>
        <input type="text" class="form-input" name="firstname" placeholder="First Name" require/>
        <input type="text" class="form-input" name="lastname" placeholder="Last Name" require/>
        <input type="text" class="form-input" name="email" placeholder="Email" require/>
        <input type="text" class="form-input" name="phnum" placeholder="Phone Number" require/>
        <input type="text" class="form-input" name="dl" placeholder="Driver License Number" require/>
        <input type="text" class="form-input" name="username" placeholder="Username" require/>
        <input type="password" class="form-input" name="password" placeholder="Password" require/>
        <input type="submit" value="Register" name="submit" class="form-button"/>
        <p class="link"><a href="index.php">Login</a></p>
  </form>
<?php
}
?>
</body>
</html>
