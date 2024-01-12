
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
            <h1 class="m-0"> <i class="fa-regular fa-circle-right" style="font-size: 29px;"></i> Add Pricing</h1>
            <a href="pricing.php" class="btn btn-dark"><i class="fa-solid fa-plus"></i> view all</a>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class=" container py-2 px-4 bg-white">
    <div class="row">
                    <div class="col-md-12 pt-5">
                            <form action="code.php" method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Name *</label>
                                    <div class="col-md-6 col-sm-12">
                                    <input type="text" name="name" class="form-control" id="inputtext3" value=""placeholder="Please Enter Car Name: like: Audi" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Duration *</label>
                                    <div class="col-md-6 col-sm-12">
                                        <select class="form-select" id="inlineFormSelectPref" name="duration" required>
                                            <option selected>Please Select Duration</option>
                                            <option value="One Day">One Day</option>
                                            <option value="One Week">One Week</option>
                                            <option value="One Month">One Month</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Price *</label>
                                    <div class="col-md-6 col-sm-12">
                                    <input type="text" name="price" class="form-control" id="inputtext3" value=""placeholder="Please Enter Price: Like :1000" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Fuel *</label>
                                    <div class="col-md-6 col-sm-12">
                                        <select class="form-select" id="inlineFormSelectPref" name="fuel" required>
                                            <option selected>Please Select Any One</option>
                                            <option value="YES">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Photo *</label>
                                    <div class="col-md-3 col-sm-6">
                                        <input type="file" name="photo" required>
                                        (Only jpg, jpeg, gif and png are allowed)
                                    </div>
                                </div>
                                <div class="row mb-3">
                                <label for="inputfooter3" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-1">
                                        <input type="submit" name="add_pricing" class="btn btn-success" value="Submit">
                                    </div>
                                </div>
                            </form>
                    </div> <!--col -->
         </div> <!--row -->
</div>  <!--container -->

<?php 
    include('includes/footer.php');
?>