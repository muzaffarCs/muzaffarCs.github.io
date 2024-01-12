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
            <h1 class="m-0"> <i class="fa-regular fa-circle-right" style="font-size: 29px;"></i>View Photos</h1>
                <a href="add.new.photo.php" class="btn btn-dark"><i class="fa-solid fa-plus"></i> Add New</a>
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
                <table id="example1" class="table table-bordered table-hover ">
                  <thead>
                  <tr>
                    <th>SL</th>
                    <th>Caption</th>
                    <th>Photo</th>
                    <th>Category</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                      $datas = mysqli_query($conn,"SELECT * FROM tbl_photo t JOIN tbl_category_photo tc on category_id = p_category_id");
                      $i=1;
                      while( $rows = mysqli_fetch_assoc($datas)){
                  ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $rows['photo_caption']?></td>
                    <td><img src="upload_img/photo/<?php echo $rows['photo_name']?>" alt="Photo" id="veh_pic" style="width: 18vh;"> </td>
                    <td><?php echo $rows['p_category_name']?></td>
                    <td>
                        <form action="code.php" method="post" enctype="multipart/ form-data">
                          <input type="submit" name="edit_event" class="btn btn-primary btn-sm" value="edit">
                          <button type="submit" name="del_photo_gal" class="btn btn-danger btn-sm" value="<?= $rows["photo_id"] ?>"> Delete</button>
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