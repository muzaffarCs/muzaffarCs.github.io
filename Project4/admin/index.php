<?php 
include('includes/header.php');
include('includes/top-bar.php');
include('includes/aside.php');
include('connection.php');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12 d-flex justify-content-between">
                <h1 class="m-0"><i class="fa-regular fa-circle-right" style="font-size: 29px;"></i> Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container-fluid">
        <div class="row">
            <?php include('database/message.php');  ?>
            <div class="col-md-4 col-sm-12 px-3 py-2">
                <div class="main-card-db">
                    <div class="" id="dash-card" >
                        <div class="fa">
                            <i class="fa-solid fa-user-plus"></i>
                        </div>
                    </div>                                    
                    <div class="text-part">
                        <div class="main-text">
                            <p class="text-cards">Total Users</p>    
                        </div>
                        <div class="heading-part">
                            <h1 id="db-inner-h"> <?php
                            $data = mysqli_query($conn, "SELECT id FROM admin");
                            $num = mysqli_num_rows($data);
                            echo $num;
                            ?> </h1>
                        </div>
                    </div>
                </div> 
            </div> <!-- .col  -->
            <div class="col-md-4 col-sm-12 px-3 py-2">
                <div class="main-card-db">
                    <div class="" id="dash-card2" >
                        <div class="fa">
                            <i class="fa-regular fa-file-lines"></i>
                        </div>
                    </div>                                    
                    <div class="text-part">
                        <div class="main-text">
                            <p class="text-cards">Total Vehicles </p>    
                        </div>
                        <div class="heading-part">
                        <h1 id="db-inner-h"> <?php
                            $datas = mysqli_query($conn, "SELECT veh_id FROM tbl_vehicle");
                            $nums = mysqli_num_rows($datas);
                            echo $nums;
                            ?> </h1>
                        </div>
                    </div>
                </div> 
            </div> <!-- .col  -->
            <div class="col-md-4 col-sm-12 px-3 py-2">
                <div class="main-card-db">
                    <div class="" id="dash-card2" >
                        <div class="fa">
                            <i class="fa-solid fa-users"></i>
                        </div>
                    </div>                                    
                    <div class="text-part">
                        <div class="main-text">
                            <p class="text-cards">Total Team Members</p>    
                        </div>
                        <div class="heading-part">
                            <h1 id="db-inner-h"> 1 </h1>
                        </div>
                    </div>
                </div> 
            </div> <!-- .col  -->
        </div> <!-- .row  -->
    </div> <!-- .container  -->

<?php 
include('includes/footer.php');
?>