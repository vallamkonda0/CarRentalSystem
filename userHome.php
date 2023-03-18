<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Cars</title>
    <link rel="stylesheet" href="style.css"/>

</head>
<body style="background-color:#FFFFFF;">
<h3 class="login-title" style="font-size:50px;text-align:center"> Available Cars</h1>
<?php
    require('db.php');
    $query = "SELECT * from `cars`";
    $result = mysqli_query($con, $query);
    echo "<table border='1' style=  'margin-left: auto;
    margin-right: auto;width:70%'>
    <tr>
    <th>Car</th>
    <th>Make</th>
    <th>Year</th>
    <th>Price</th>
    <th>Passengers</th>
    <th>Select</th>
    </tr>";
    while($row = mysqli_fetch_array($result))
    {
        echo "<tr style='height:200px'>";
        echo "<td><img src='cars/{$row['carImgName']}' width='100'></td>";
        echo "<td>".$row['make']."</td>";
        echo "<td>".$row['year']."</td>";
        echo "<td>".$row['price']."</td>";
        echo "<td>".$row['passengers']."</td>";
 ?>
<td><a href="select.php?id=<?php echo $row['id']; ?>">Select</a></td>
 <?php
 }
 ?>
</body>
</html>