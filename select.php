<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Booking Details</title>
    <link rel="stylesheet" href="style.css"/>

</head>
<body>
<?php
require('db.php');
include('auth.php');
if(isset($_POST['book'])){
    $id = stripslashes($_REQUEST['id']);
    $id = mysqli_real_escape_string($con, $id);
    $make = stripslashes($_REQUEST['make']);
    $make = mysqli_real_escape_string($con, $make);
    $price = stripslashes($_REQUEST['price']);
    $price = mysqli_real_escape_string($con, $price);
    $username = $_SESSION['username'];
    $pickup_date = stripslashes($_REQUEST['pickup_date']);
    $pickup_date = mysqli_real_escape_string($con, $pickup_date);
    $return_date = stripslashes($_REQUEST['return_date']);
    $return_date = mysqli_real_escape_string($con, $return_date);
    $query = "INSERT into `booking_details`(car_ID, username, make, price, pickup_date, return_date, status)
	VALUES ('$id', '$username','$make','$price','$pickup_date','$return_date', 'booked')";
    $result =mysqli_query($con, $query);
    if ($result){
        mysqli_query($con,"update `cars` set status='booked' where id='$id'");
       echo "<div class='form'>
             <h3> Booked successfully</h3><br/>
             <p class='link'><a href='userHome.php'>Home/a></p>
             </div>";
    }
    else{
       echo "<div class='form'>
             <h3>Booking not completed</h3></br>
             <p class='link'><a href='userHome.php'>Home</a></p>
             </div>";
    }
   }
   else {
?>
<form class="form" name="book" method="POST" action="">
<h2 style="font: size 45px;text-align:center;color:#FF0000">Book a Car</h2>
<?php
    $id = $_REQUEST['id'];
    $query=mysqli_query($con, "SELECT * from cars where id='$id'");
    while($row = mysqli_fetch_array($query))
    {?>
    <input type ="text" class ="form-input" name="make" value="<?php echo $row['make'];?>">
    <input type ="text" class ="form-input" name="price" value="<?php echo $row['price'];?>">
    <?php
    }
    ?>
<input type="date" class="form-input" name="pickup_date" placeholder="Pickup Date" />
<input type="date" class="form-input" name="return_date" placeholder="Return Date" />
</select>
<input type ="submit" name="book" value="book" class="login-button">
<p class="link"><a href="userHome.php">Available Cars</a></p>
</form>
</div>
</body>
<?php
   }
?>
</html>