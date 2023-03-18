<?php
    $id=$_GET['id'];
    include('db.php');
    $result = mysqli_query($con, "SELECT * from `cars` where id='$id'");
    $row=mysqli_fetch_array($result);
    unlink("cars/".$row['carImgName']);
    mysqli_query($con,"delete from `cars` where id='$id'");
    echo "<div class='form'>
    <h3>Deleted succesfully</h3><br/>
    <p class='link'>Click here to see cars<a href='carsList.php'>Cars List</a></p>
    </div>";
?>