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
            <h1 class="m-0"> <i class="fa-regular fa-circle-right" style="font-size: 29px;"></i> Add Photo</h1>
            <a href="photo-gallery.php" class="btn btn-dark"><i class="fa-solid fa-plus"></i> view all</a>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class=" container py-2 px-4 bg-white">
    <div class="row">
                    <div class="col-md-12 pt-5">
                            <form action="code.php" method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Photo Caption *</label>
                                    <div class="col-md-6 col-sm-12">
                                    <input type="text" name="photo_cap" class="form-control" id="inputtext3" placeholder="photo_caption" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Upload Photo *</label>
                                    <div class="col-md-2 col-sm-6">
                                        <input type="file" name="photo" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Photo Category *</label>
                                    <div class="col-md-6 col-sm-12">
                                        <select class="form-select" id="inlineFormSelectPref" name="photo_catg" required>
                                            <option selected>Select a photo Category</option>
                                            <?php
                                                $category = mysqli_query($conn , "select * from tbl_category_photo");
                                                while($row = mysqli_fetch_assoc($category))
                                                {
                                                    ?>
                                                    <option value="<?php echo $row['p_category_id'] ?>"><?php echo $row['p_category_name'] ?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                <label for="inputfooter3" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-1">
                                        <input type="submit" name="add_new_photo" class="btn btn-success" value="Submit">
                                    </div>
                                </div>
                            </form>
                    </div> <!--col -->
         </div> <!--row -->
</div>  <!--container -->

<?php 
    include('includes/footer.php');
?>