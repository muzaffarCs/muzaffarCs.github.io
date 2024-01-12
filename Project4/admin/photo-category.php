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
            <h1 class="m-0"> <i class="fa-regular fa-circle-right" style="font-size: 29px;"></i>Photo Categories</h1>
                <a href="add.photo-category.php" class="btn btn-dark"><i class="fa-solid fa-plus"></i> Add New</a>
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
                    <th>Category Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                      $datas = mysqli_query($conn,"SELECT * FROM tbl_category_photo ORDER BY p_category_id ASC");
                      $i=1;
                      while( $rows = mysqli_fetch_assoc($datas)){
                  ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $rows['p_category_name']?></td>
                    <td><?php echo $rows['status']?></td>
                    <td>
                        <form action="code.php" method="post" enctype="multipart/ form-data">
                          <input type="submit" name="edit_event" class="btn btn-primary btn-sm" value="edit">
                          <button type="submit" name="del_photo_catg" class="btn btn-danger btn-sm" value="<?= $rows["p_category_id"] ?>"> Delete</button>
                        </form>
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