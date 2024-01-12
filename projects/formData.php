<?php
include "connection.php";
if($_POST){
$name = $_POST['name'];
$cnic = $_POST['cnic'];
$email = $_POST['email'];
mysqli_query($conn, "insert into person (id,name,cnic,email) VALUE('','$name','$cnic','$email')");
}
?>

<form action="" method="POST">
<legend>Name</legend>
<input type="text" name="name">
<legend>CNIC</legend>
<input type="text" name="cnic">
<legend>Email</legend>
<input type="" name="email"><br>
<input type="submit" value="Save">
</form>
