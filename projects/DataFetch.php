<?php
include "connection.php";


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
 
    <div class="container">
        <div class="row">
            <div class="col-8 justify-content-center">
            <div class="table-responsive">    
                <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">F. Name</th>
                    <th scope="col">DOB</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $detail = mysqli_query($conn, "select * from students");
                    while( $rows = mysqli_fetch_assoc($detail)){
                        ?>

                    <tr>
                    <th scope="row">  <?php echo $rows['id']; ?></th>
                      
                    <td> <?php echo $rows['name']; ?>  </td>
                    <td> <?php echo $rows['father_name']; ?>  </td>
                    <td> <?php echo $rows['dob']; ?>  </td>
                    </tr>
                    <?php } ?>
                </tbody>             
                </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
