
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
            <h1 class="m-0"> <i class="fa-regular fa-circle-right" style="font-size: 29px;"></i> Add Vehicles</h1>
            <a href="vehicles.php" class="btn btn-dark"><i class="fa-solid fa-plus"></i> view all</a>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class=" container py-2 px-4 bg-white">
    <div class="row">
                    <div class="col-md-12 pt-5">
                            <form action="code.php" method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Vehicles Name *</label>
                                    <div class="col-md-6 col-sm-12">
                                    <input type="text" class="form-control" id="inputtext3" name="vehicles_name" value=""placeholder="Example:News Headline" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Seat *</label>
                                    <div class="col-md-4 col-sm-12">
                                        <select class="form-select" id="inlineFormSelectPref" name="seat" required>
                                            <option selected value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8-20">8-20</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Fuel *</label>
                                    <div class="col-md-4 col-sm-12">
                                        <select class="form-select" id="inlineFormSelectPref" name="fuel" required>
                                            <option selected value="disel">Disel</option>
                                            <option value="petrol">Petrol</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Luggage*</label>
                                    <div class="col-md-4 col-sm-12">
                                        <select class="form-select" id="inlineFormSelectPref" name="luggage" required>
                                            <option selected value="2 bags">2 bags</option>
                                            <option value="3 bags">3 bags</option>
                                            <option value="4 bags">4 bags</option>
                                            <option value="5 bags">5 bags</option>
                                            <option value="6 bags">6 bags</option>
                                            <option value="7 bags">7 bags</option>
                                            <option value="8-20 bags">8-20 bags</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Transmission *</label>
                                    <div class="col-md-4 col-sm-12">
                                        <select class="form-select" id="inlineFormSelectPref" name="transmission" required>
                                            <option selected value="auto">Auto</option>
                                            <option value="manual">Manual</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Mileage *</label>
                                    <div class="col-md-4 col-sm-12">
                                        <select class="form-select" name="mileage" id="inlineFormSelectPref" required>
                                            <option selected value="20,000">20,000</option>
                                            <option value="30,000">30,000</option>
                                            <option value="40,000">40,000</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Vehicles Price</label>
                                    <div class="col-md-6 col-sm-12">
                                    <input type="text" name="vehicles_price" class="form-control" id="inputtext3" value=""placeholder="Example:News Headline" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Vehicles Content *</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea class="form-control" id="vehicles-content" name="vehicles_content" rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Vehicles Publish Date *</label>
                                        <div class="col-md-2 col-sm-12">
                                            <input type="date" class="form-control" id="inputtext3"  name="vehicles_publish_date" value=""placeholder="21-02-2023" required>
                                            (Format: dd-mm-yy)
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Featured Photo</label>
                                    <div class="col-md-2 col-sm-12">
                                        <input type="file" name="featured_photo" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Select Category *</label>
                                    <div class="col-md-4 col-sm-12">
                                        <select class="form-select" name="category" id="inlineFormSelectPref" required>
                                            <option selected>Select Category</option>
                                            <option value="About">About</option>
                                            <option value="Project">Project</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Publisher</label>
                                    <div class="col-md-7 col-sm-12">
                                    <input type="text" name="publisher" class="form-control" id="inputtext3" value=""placeholder="" >
                                    (If you keep this blank, logged user will be treated as the publisher)
                                    </div>
                                </div>
                                <div class="col-md-12 seo-info py-2">
                                    <h5>SEO Information</h5>
                                </div>
                                <div class="row mb-3 pt-2">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Meta Title</label>
                                    <div class="col-md-10 col-sm-12">
                                    <input type="text" name="meta_title" class="form-control" id="inputtext3" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Meta Keywords</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea class="form-control" id="inputfooter3" rows="4" name="meta_keywords" ></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Meta Description</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea class="form-control" id="inputfooter3" rows="6" name="meta_description"> </textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                <label for="inputfooter3" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-1">
                                        <input type="submit" name="add_vehicles" class="btn btn-success" value="Submit">
                                    </div>
                                </div>
                            </form>
                    </div> <!--col -->
         </div> <!--row -->
</div>  <!--container -->

<?php 
    include('includes/footer.php');
?>