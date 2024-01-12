<?php
include "connection.php";
if($_POST){
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$phone = $_POST['phone_no'];
$cnic = $_POST['cnic'];
$email = $_POST['email'];
$adress = $_POST['adress'];
$adress2 = $_POST['adress2'];
$city = $_POST['city'];
$province = $_POST['province'];
mysqli_query($conn, "insert into person (first_name,last_name,phone_no,cnic,email,adress,adress2,city,province
) VALUE('$fname','$lname','$phone','$cnic','$email','$adress','$adress2','$city','$province')");
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/orderForm.php">
    <style>
        .input_form{
            background-color: gray;
        }
        /* .main{
            background-color:blue;
        } */
        .input_form{
            height: 106vh;
        }
    </style>
    <title>online order form</title>
  </head>
  <body>
<div class="container">
<section class="order-form m-4 form ">
    <form  class="input_form bg-secondary justify-content-center" action="" method="POST">
    <div class="container pt-4">
    <div class="row">
        <div class="col-12 main bg-primary px-4">
            <h1>Personal Detail </h1>
            <span>please fill this form completely to get your order soon</span>
            <hr class="mt-1" />
        </div>
    </div>
    <div class="col-12">
        <!-- <div class="row mx-4"> -->
            <div class="col-12">
                <label class="order-form-label">Name</label>
            </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" name="first_name" class="form-control" placeholder="First name">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="last_name" placeholder="Last name">
                </div>
                </div>

                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPhoneNo">Phone</label>
                    <input type="text" name="phone_no" class="form-control" placeholder="05815-910340">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCnin">CNIC</label>
                    <input type="text" class="form-control" name="cnic" placeholder="7110301934875">
                </div>
                </div>
        
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email" placeholder="xyz@gmail.com" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-8">
                <label for="inputAddress">Address</label>
                <input type="text" name="adress" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            </div>
           
            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" name="adress2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" name="city" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                <label for="inputState">Province</label>
                <select id="inputState" name="province" class="form-control">
                    <option selected>Gilgit Balitistan</option>
                    <option >Punjab </option>
                    <option>KPK</option>
                    <option>Sindh</option>
                    <option>Balochistan</option>
                    <option>Azad Kashmir</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">submit order</button>
    </div>


    <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="shop_detail.php">1</a></li>
    <li class="page-item"><a class="page-link" href="shop_detail.php">2</a></li>
    <li class="page-item"><a class="page-link" href="shop_detail.php">3</a></li>
    <li class="page-item">
      <a class="page-link" href="shop_detail.php">Next</a>
    </li>
  </ul>
</nav>
</form>
</section>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>