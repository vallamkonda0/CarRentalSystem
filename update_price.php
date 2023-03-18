<?php
	include('db.php');
	$id=$_GET['id'];
	$price=$_POST['price'];
	mysqli_query($con,"update `cars` set price='$price' where id='$id'");
	echo "<div class='form'>
    <h3>Updated succesfully</h3><br/>
    <p class='link'>Click here to see cars<a href='carsList.php'>Cars</a></p>
    </div>";
?>