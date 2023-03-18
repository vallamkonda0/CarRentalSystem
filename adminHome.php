<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Add New Car</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
require('db.php');
    if(isset($_POST['submit'])){
        $make = stripslashes($_REQUEST['make']);
        $make = mysqli_real_escape_string($con, $make);
        $year = stripslashes($_REQUEST['year']);
        $year = mysqli_real_escape_string($con, $year);
        $price = stripslashes($_REQUEST['price']);
        $price = mysqli_real_escape_string($con, $price);
        $passengers = stripslashes($_REQUEST['passengers']);
        $passengers = mysqli_real_escape_string($con, $passengers);
        $carSize = stripslashes($_REQUEST['carSize']);
        $carSize = mysqli_real_escape_string($con, $carSize);
        $carImgName = $_FILES['carImg']['name'];
        $destination = 'cars/'. $carImgName;
        move_uploaded_file($_FILES['carImg']['tmp_name'], $destination);
        $query    = "INSERT into `cars` (make, year, price, passengers, carImgName)
                     VALUES ('$make','$year', '$price', '$passengers','$carImgName')";
        $result   = mysqli_query($con, $query);
        if ($result){
            echo "Hello1";
            echo "<div class='form'>
            <h3>Car Added to the List</h3><br/>
            <p class='link'>Click here to see cars list<a href='carsList.php'>Cars List</a> again.</p>
            </div>";
            
        } else {
            echo "Hello2";
            echo "<div class='form'>
            <h3>Unable to add the car</h3><br/>
            <p class='link'>Click here to <a href='adminHome.php'>Add cars</a> again.</p>
            </div>";

        }
    }
    else{
?>
<h3 style="font-size:50px;text-align:center"></h1>
    <form class="form" action="" method="post" name="Add new Car" enctype="multipart/form-data">
        <h3 class="login-title">Add New Car</h3>
        <input type="file" class="form-input" name="carImg" placeholder="Car Image"/>
        <input type="text" class="form-input" name="make" placeholder="Make" required/>
        <input type="text" class="form-input" name="year" placeholder="Year" required/>
        <input type="text" class="form-input" name="price" placeholder="Price" required/>
        <input type="text" class="form-input" name="passengers" placeholder="Num Of Passengers" required>
        <input type="text" class="form-input" name="carSize" placeholder="Car Size" required>
        <input type="submit" value="Add New Car" name="submit" class="form-button"/>
        <p class="link"><a href="carsList.php">Cars</a><p>
  </form>
</body>
<?php
    }
?>
</html>