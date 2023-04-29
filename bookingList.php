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
            <li><a href="adminHome.php">Home</a>&nbsp;&nbsp;</li>
            <li><a href="feedbackList.php">Feedback</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>

</head>
<body style="background-color:#FFFFFF;">
<h3 class="login-title" style="font-size:50px;text-align:center">Booking</h1>
<?php
    require('db.php');
    $query = "SELECT * from `booking_details`";
    $result = mysqli_query($con, $query);
    echo "<table border='1' style=  'margin-left: auto;
    margin-right: auto;width:70%'>
    <tr>
    <th>Username</th>
    <th>car ID</th>
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
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['car_ID']."</td>";
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