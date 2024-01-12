
<?php 
include('includes/header.php');
include('includes/top-bar.php');
include('includes/aside.php');
?>
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 d-flex justify-content-between">
            <h1 class="m-0"> <i class="fa-regular fa-circle-right" style="font-size: 29px;"></i> Add Testimonials</h1>
            <a href="testimonial.php" class="btn btn-dark"><i class="fa-solid fa-plus"></i> view all</a>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class=" container py-2 px-4 bg-white">
    <div class="row">
                    <div class="col-md-12 pt-5">
                            <form action="" method="post">
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Name *</label>
                                    <div class="col-md-6 col-sm-12">
                                    <input type="text" class="form-control" id="inputtext3" value=""placeholder="" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Designation *</label>
                                    <div class="col-md-6 col-sm-12">
                                    <input type="text" class="form-control" id="inputtext3" value=""placeholder="" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Company *</label>
                                    <div class="col-md-6 col-sm-12">
                                    <input type="text" class="form-control" id="inputtext3" value=""placeholder="" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Photo *</label>
                                    <div class="col-md-2 col-sm-6">
                                        <input type="file" required>
                                        (Only jpg, jpeg, gif and png are allowed)
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Comment *</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea class="form-control" id="inputfooter3" rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                <label for="inputfooter3" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-1">
                                        <input type="submit" class="btn btn-success" value="Submit">
                                    </div>
                                </div>
                            </form>
                    </div> <!--col -->
         </div> <!--row -->
</div>  <!--container -->

<?php 
    include('includes/footer.php');
?>