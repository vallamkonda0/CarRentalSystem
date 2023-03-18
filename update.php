
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Update</title>
	<body style="background-color:#FFFFFF;">
	<h3 class="login-title" style="font-size:50px;text-align:center">Cars</h1>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
	include('db.php');
	$id=$_GET['id'];
	$query=mysqli_query($con,"select * from `cars` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<form class="form" method="POST" name="edit" action="update_price.php?id=<?php echo $id; ?>">
    <h1 class="login-title">Update Price</h1>
		<label>Price</label><input type="text" class="login-input" value="<?php echo $row['price']; ?>" name="price">
		<input type="submit" class="login-button" name="update">
		<p class="link"><a href="carsList.php">Cars</a><p>
	</form>
</body>
</html>