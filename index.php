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
session_start();
if (isset($_REQUEST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $usertype = stripslashes($_REQUEST['usertype']);
    $usertype = mysqli_real_escape_string($con, $usertype);
    $query    = "SELECT * FROM `users` WHERE username='$username'
                 AND password='$password'";
    $rows = mysqli_num_rows(mysqli_query($con, $query));   
    if ($username=='Yogi' and $password=='Yogi123' and $usertype=='admin'){
        $_SESSION['username'] = $username;
        header("Location: adminHome.php");
    }
    else if ($username=='Chaitu' and $password=='Chaitu' and $usertype=='admin'){
        $_SESSION['username'] = $username;
        header("Location: adminHome.php");
    }
    else if ($rows == 1 ) {
        $_SESSION['username'] = $username;
        header("Location: userHome.php");}
    else {
        echo "<div class='form'>
              <h3>Incorrect Username/password.</h3><br/>
              <p class='link'>Click here to <a href='index.php'>Login</a> again.</p>
              </div>";
    }
} else {
?>
<h1 style="font-size:45px;text-align:center;color:#000000">Car Rental System</h1>
    <form class="form" method="post" name="login">
        <h1 class="form-title">Login</h1>
        <input type="text" class="form-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="form-input" name="password" placeholder="Password"/>
        <input type="radio" id="usertype" name="usertype" value="user"><label for="User">User</label>
        <input type="radio" id="usertype" name="usertype" value="admin"><label for="Admin">Admin</label>
        <input type="submit" value="Login" name="login" class="form-button"/>
        <p class="link"><a href="registration.php">User Registration</a></p>
  </form>
<?php
    }
?>
</body>
</html>
