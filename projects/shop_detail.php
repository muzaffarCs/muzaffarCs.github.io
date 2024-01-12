<?php
include "connection.php";
$std_table = mysqli_query($conn, "select * from person");
$std_table1 = mysqli_query($conn, "select * from category  ");
while($std = mysqli_fetch_array($std_table $std_table1))
{
    //echo $std['id'];
    echo $std['name'];
    //echo $std['dob'];
    echo $std['cnic'];
    echo $std['email'];
    echo $std['name'];
    echo "<br>";
}
?>