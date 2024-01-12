<?php
include "connection.php";
$std_table = mysqli_query($conn, "select * from students");
while($std = mysqli_fetch_array($std_table))
{
    echo $std['id'];
    echo $std['name'];
    echo $std['dob'];
    echo "<br>";
}
?>