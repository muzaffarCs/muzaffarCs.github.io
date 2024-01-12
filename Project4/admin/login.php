<?php
include "connection.php";
session_start();
if(isset($_SESSION['auth']))
{
  $_SESSION['message'] ="You are Already Logged in";
  header("Location: index.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title> login</title>
    <style>
        #cont{
            background: #d2d6de;
        }
    </style>
  </head>
  <body>
  <section class="vh-100 gradient-custom">
  <div class="container-fluid py-5 h-100" id="cont">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class=" col-md-4 text-center">
      <?php include('database/status.php');?>
        <h1>Admin Panel</h1>
        <div class="card ">
          <div class="card-body  text-center">
                <form action="code.php" method="POST">
                    <div class="mb-md-1 mt-md-2 ">
                        <p class=" mb-4">Log in to start your session</p>
                        <div class="mb-4">
                            <input type="email" id="typeEmailX" name="email" class="form-control form-control-md" />
                        </div>
                        <div class="mb-2">
                            <input type="password" name="password" id="typePasswordX" class="form-control form-control-md" />
                        </div>
                        <?php include('database/error.php');?>
                        <div class="d-flex justify-content-end align-items-end">
                            <button class="btn btn-dark btn-md px-4 "name="login" type="submit">Log In</button>
                        </div>                       
                    </div>
                </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>