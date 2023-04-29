<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Feedback</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="headers.css"/>
    <link rel="stylesheet" href="star_rating.css"/>
<header>
    <div class="header_input">
    <nav>
        <ul>
            <li><a href="userHome.php">Home</a>&nbsp;&nbsp;</li>
            <li><a href="booking.php">Booking Cars</a>&nbsp;&nbsp;</li>
            <li><a href="return.php">Return Cars</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header
</head>
<body>
<?php
  require('db.php');
  include('auth.php');
  $username = $_SESSION['username'];
  $id=$_GET['id'];
  if(isset($_POST["feedback"]))
{ 

  $rating = stripslashes($_REQUEST['rating']);
  //escapes special characters in a string
  $rating = mysqli_real_escape_string($con, $rating);
  $comments = stripslashes($_REQUEST['comments']);
  $comments = mysqli_real_escape_string($con, $comments);
  $query="INSERT into `feedback` (username, car_ID, rating, notes)
  VALUES ('$username', '$id', '$rating','$comments')";
  $result= mysqli_query($con, $query);
  if ($result) {
    echo "<div class='form'>
          <h3>You have given feedback successfully.</h3><br/>
          <p class='link'>Click here to <a href='home_user.php'>Home Page</a></p>
          </div>";
} else {
    echo "<div class='form'>
          <h3>Required fields are missing.</h3><br/>
          <p class='link'>Click here to <a href='feedback.php'>Feedback</a> again.</p>
          </div>";
}
}
else{
?>
<form class="form" method="post"> 
  <span class="star-rating">
  <input type="radio" name="rating" value="1"><i></i>
  <input type="radio" name="rating" value="2"><i></i>
  <input type="radio" name="rating" value="3"><i></i>
  <input type="radio" name="rating" value="4"><i></i>
  <input type="radio" name="rating" value="5"><i></i>
  </span>
  <input type = "text" name="comments" placeholder="Leave Comments" class="form-input">
  <input type = "submit" name="feedback" value="feedback" class="form-button">
  </form>

 
<?php
}

?>
</div>