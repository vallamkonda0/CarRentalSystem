<?php
	include('db.php');
	$id=$_GET['id'];
	mysqli_query($con,"update `booking_details` set status='returned' where booking_ID='$id'");
    $result = mysqli_query($con, "SELECT * from `booking_details` where booking_ID='$id'");
    while($row = mysqli_fetch_array($result)){
        $car_id=$row['car_ID'];
        mysqli_query($con,"update `cars` set status='available' where id='$car_id'");
    }
    echo "<div class='form'>
    <h3>Returned succesfully</h3><br/>
    </div>";
    ?>

    <a href="feedback.php?id=<?php echo $car_id ?>">Feedback</a>
    <p class='link'>Click here to see cars<a href='userHome.php'>Cars</a></p>