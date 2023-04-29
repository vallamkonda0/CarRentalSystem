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
            <li><a href="bookingList.php">Booking List</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>

</head>
<body style="background-color:#FFFFFF;">
<h3 class="login-title" style="font-size:50px;text-align:center">Feedback</h1>
<?php
    require('db.php');
    $query = "SELECT * from `feedback`";
    $result = mysqli_query($con, $query);
    echo "<table border='1' style=  'margin-left: auto;
    margin-right: auto;width:70%'>
    <tr>
    <th>Car ID</th>
    <th>Username</th>
    <th>Rating</th>
    <th>comments</th>
    </tr>";
    while($row = mysqli_fetch_array($result))
    {
        echo "<td>".$row['car_ID']."</td>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['rating']."</td>";
        echo "<td>".$row['notes']."</td>";
    }
 ?>

</body>
</html>