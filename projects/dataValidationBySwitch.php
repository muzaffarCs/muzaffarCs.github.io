<?php
include "connection.php";
if($_POST){
$name = $_POST['name'];
$fname = $_POST['father_name'];
$cnic = $_POST['cnic'];
// $email = $_POST['email'];
mysqli_query($conn, "insert into student (id,name,father_name,cnic) VALUE('','$name','$fname','$cnic')");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Validation By Switch</title>
    <link rel="stylesheet" href="/dataInsert.php">
</head>
<body>

    <div id="form">
        <form action="" method="post" name="myForm" onsubmit=" return formfun()">
        <legend>Name</legend>
        <input type="text" name="name" id="fn">
        <legend>Father Name</legend>
        <input type="text" name="father_name" id="fn">
        <legend>CNIC</legend>
        <input type="text" name="cnic" id="cn">
        <!-- <legend>Password</legend>
        <input type="password" name="password" id="ps"> -->
        <button type="submit" value="submit"  onsubmit="  formfun()">Save</button>
    </form>
  </body>
<script src="validation.js"></script>
</html>

