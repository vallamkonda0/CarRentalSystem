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
?>
<form class="form" action="" method="post">
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
</html>