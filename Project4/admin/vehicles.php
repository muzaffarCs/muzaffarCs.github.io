<?php 
include('includes/header.php');
include('includes/top-bar.php');
include('includes/aside.php');
include('connection.php');
?>
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 d-flex justify-content-between">
            <h1 class="m-0"> <i class="fa-regular fa-circle-right" style="font-size: 29px;"></i> View Vehicles</h1>
            <a href="add-vehicles.php" class="btn btn-dark"><i class="fa-solid fa-plus"></i> Add New Vehicles</a>
          </div><!-- /.col -->
          <div class="col-md-12">
            <?php include('database/message.php');  ?>
            <?php include('database/status.php');  ?>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered  ">
                  <thead>
                  <tr>
                    <th>SL</th>
                    <th>Images</th>
                    <th>vehicles name</th>
                    <th>Details</th>
                    <th>Price</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $data = mysqli_query($conn,"SELECT * FROM tbl_vehicle ORDER BY veh_id DESC");
                    $i=1;
                    while( $row = mysqli_fetch_assoc($data)){
                     ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><img src="upload_img/vehicles/<?php echo $row['featured_photo']?>" alt="vehicle Pic" id="veh_pic" style="height: 12vh;"> </td>
                    <td><?php echo $row['vehicles_name']; ?></td>
                    <td style="width: 35%;"> <?php echo $row['vehicles_content']; ?></td>
                    <td><?php echo $row['vehicles_price']; ?></td>
                    <td>
                      <div class="form d-flex justify-content-evenly">
                        <a href="update_vehicles.php?veh_id=<?= $row['veh_id'] ?>" type="submit" name="edit_veh" class="btn btn-primary btn-sm "> Edit </a>
                        <form action="code.php" method="POST" enctype="multipart/form-data">
                          <button type="submit" name="del_veh" class="btn btn-danger btn-sm" value="<?= $row['veh_id'] ?>"> Delete</button>
                        </form>
                        </div>
                    </td>
                  </tr>
                  <?php $i++; } ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

<?php 
include('includes/footer.php');
?>
