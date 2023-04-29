<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Cars</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="headers.css"/>
<header>
    <div class="header_input">
    <nav>
        <ul>
            <li><a href="userHome.php">Home</a>&nbsp;&nbsp;</li>
            <li><a href="return.php">Return Cars</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>

</head>
<body style="background-color:#FFFFFF;">
<h3 class="login-title" style="font-size:50px;text-align:center">Cars</h1>
<?php
    require('db.php');
    include('auth.php');
    $username= $_SESSION['username'];
    $query = "SELECT * from `booking_details` where username='$username'";
    $result = mysqli_query($con, $query);
    echo "<table border='1' style=  'margin-left: auto;
    margin-right: auto;width:70%'>
    <tr>
    <th>Make</th>
    <th>Price</th>
    <th>Pick Up Date</th>
    <th>Return Date</th>
    <th>Booking Status</th>
    <th>Payment</th>
    </tr>";
    while($row = mysqli_fetch_array($result))
    {
        echo "<tr style='height:200px'>";
        echo "<td>".$row['make']."</td>";
        echo "<td>".$row['price']."</td>";
        echo "<td>".$row['pickup_date']."</td>";
        echo "<td>".$row['return_date']."</td>";
        echo "<td>".$row['status']."</td>";
        
 ?>
<td><a href="payment.php">Pay</a></td>
 <?php
 }
 ?>
</body>
</html>