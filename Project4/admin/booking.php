<?php 
include('connection.php');
include('includes/header.php');
include('includes/top-bar.php');
include('includes/aside.php');
?>
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 d-flex justify-content-between">
            <h1 class="m-0"> <i class="fa-regular fa-circle-right" style="font-size: 29px;"></i> View Booking</h1>
          </div><!-- /.col -->
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
                <table id="example1" class="table table-bordered table-striped ">
                  <thead>
                  <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>W.App</th>
                    <th>CNIC</th>
                    <th>Arrival Date</th>
                    <th>Departure Date</th>
                    <th>Details</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $data = mysqli_query($conn,"SELECT * FROM booking ORDER BY id DESC");
                    $i=1;
                    while( $row = mysqli_fetch_assoc($data)){
                     ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><a href="tel: 03455828878"> <?php echo $row['mobile']; ?> </a></td>
                    <td><a href="https://wa.me/03455828878"> <?php echo $row['wapp']; ?> </a></td>
                    <td><?php echo $row['cnic']; ?></td>
                    <td><?php echo $row['adate']; ?></td>
                    <td><?php echo $row['ddate']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                    <td>
                        <input type="submit" class="btn btn-primary btn-sm" value="View Detail">
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