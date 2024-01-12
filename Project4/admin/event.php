
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
            <h1 class="m-0"> <i class="fa-regular fa-circle-right" style="font-size: 29px;"></i>View Event And Culturals</h1>
            <a href="add-event.php" class="btn btn-dark"><i class="fa-solid fa-plus"></i> Add Event And Culturals</a>
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
                <table id="example1" class="table table-bordered table-striped ">
                  <thead>
                  <tr>
                    <th>SL</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $datas = mysqli_query($conn,"SELECT * FROM tbl_event ORDER BY id DESC");
                    $i=1;
                    while( $rows = mysqli_fetch_assoc($datas)){
                     ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><img src="upload_img/event/<?php echo $rows['photo']?>" alt="vehicle Pic"  style="height: 12vh;"> </td>
                    <td><?php echo $rows['name']; ?></td>
                    <td><?php echo $rows['status']; ?></td>
                    <td>
                      <div class="form d-flex justify-content-evenly">
                          <a href="event_update.php?id=<?= $rows['id'] ?>" type="submit" name="edit_event" class="btn btn-primary btn-sm "> Edit </a>
                          <form action="code.php" method="post" enctype="multipart/form-data">
                            <button type="submit" name="del_event" class="btn btn-danger btn-sm" value="<?= $rows["id"] ?>"> Delete</button>
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