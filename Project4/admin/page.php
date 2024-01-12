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
            <h1 class="m-0"> <i class="fa-regular fa-circle-right" style="font-size: 29px;"></i> View Pages</h1>
            <a href="add-page.php" class="btn btn-dark"><i class="fa-solid fa-plus"></i> Add New</a>
          </div><!--col -->
          <div class="col-md-12">
            <?php include('database/message.php');  ?>
            <?php include('database/error.php');  ?>
          </div>
        </div><!--row -->
      </div><!--  container-fluid -->
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
                    <th>Page Name</th>
                    <th>Page Slug</th>
                    <th>Page Layout</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $data = mysqli_query($conn,"SELECT * FROM tbl_page ORDER BY page_id DESC");
                    $i=1;
                    while( $row = mysqli_fetch_assoc($data)){
                     ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['page_name']; ?> </td>
                    <td> <?php echo $row['page_slug']; ?></td>
                    <td><?php echo $row['page_layout']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td>
                      <div class="form d-flex justify-content-evenly">
                        <a href="page_update.php?page_id=<?= $row['page_id'] ?>" type="submit" name="edit_page" class="btn btn-primary btn-sm "> Edit </a>
                        <form action="code.php" method="POST">
                        <button type="submit" name="del_page" class="btn btn-danger btn-sm" value=" <?= $row['page_id'] ?>"> Delete</button>
                        </form>
                      </div>
                    </td>
                  </tr>
                  <?php $i++; } ?>
                </table>
              </div>
              <!-- card-body -->
            </div>
            <!-- card -->
          </div>
          <!-- col -->
        </div>
        <!-- row -->
      </div>
      <!-- container-fluid -->
    </section>
    <!-- content -->

<?php 
include('includes/footer.php');
?>