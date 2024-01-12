
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
          <div class="col-md-12">
            <?php include('database/status.php');  ?>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class=" container py-2 px-4 bg-white">
    <div class="row">
                    <div class="col-md-12 pt-5">
                    <?php
                                if(isset($_GET['veh_id'])){
                                    $posted_id = $_GET['veh_id'];
                                    $data = mysqli_query($conn,"SELECT * FROM tbl_vehicle WHERE veh_id='$posted_id'");
                                    
                                    if(mysqli_num_rows($data) > 0)
                                    {
                                        while($fch_data = mysqli_fetch_assoc($data)){
                                    ?>
                            <form action="code.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="post_id" value="<?php echo $fch_data['veh_id']?>">
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Vehicles Name *</label>
                                    <div class="col-md-6 col-sm-12">
                                    <input type="text" class="form-control" id="inputtext3" name="vehicles_name" value="<?php echo isset($fch_data['vehicles_name'])?$fch_data['vehicles_name']:"" ?>"placeholder="Example:News Headline" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Seat *</label>
                                    <div class="col-md-4 col-sm-12">
                                        <select class="form-select" id="inlineFormSelectPref" name="seat" >
                                            <option selected value="2"  <?= $fch_data['seat'] == '2' ? 'selected':'' ?>>2</option>
                                            <option value="3" <?= $fch_data['seat'] == '3' ? 'selected':'' ?>>3</option>
                                            <option value="4"  <?= $fch_data['seat'] == '4' ? 'selected':'' ?>>4</option>
                                            <option value="5"  <?= $fch_data['seat'] == '5' ? 'selected':'' ?>>5</option>
                                            <option value="6"  <?= $fch_data['seat'] == '6' ? 'selected':'' ?>>6</option>
                                            <option value="7"  <?= $fch_data['seat'] == '7' ? 'selected':'' ?>>7</option>
                                            <option value="8-20"  <?= $fch_data['seat'] == '8-20' ? 'selected':'' ?>>8-20</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Fuel *</label>
                                    <div class="col-md-4 col-sm-12">
                                        <select class="form-select" id="inlineFormSelectPref" name="fuel" >
                                            <option selected value="disel"  <?= $fch_data['fuel'] == 'disel' ? 'selected':'' ?>>Disel</option>
                                            <option value="petrol"  <?= $fch_data['fuel'] == 'petrol' ? 'selected':'' ?>>Petrol</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Luggage*</label>
                                    <div class="col-md-4 col-sm-12">
                                        <select class="form-select" id="inlineFormSelectPref" name="luggage" >
                                            <option selected value="2 bags" <?= $fch_data['luggage'] == '2 bags' ? 'selected':'' ?>>2 bags</option>
                                            <option value="3 bags" <?= $fch_data['luggage'] == '3 bags' ? 'selected':'' ?>>3 bags</option>
                                            <option value="4 bags" <?= $fch_data['luggage'] == '4 bags' ? 'selected':'' ?>>4 bags</option>
                                            <option value="5 bags" <?= $fch_data['luggage'] == '5 bags' ? 'selected':'' ?>>5 bags</option>
                                            <option value="6 bags" <?= $fch_data['luggage'] == '6 bags' ? 'selected':'' ?>>6 bags</option>
                                            <option value="7 bags" <?= $fch_data['luggage'] == '7 bags' ? 'selected':'' ?>>7 bags</option>
                                            <option value="8-20 bags" <?= $fch_data['luggage'] == '8-20 bags' ? 'selected':'' ?>>8-20 bags</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Transmission *</label>
                                    <div class="col-md-4 col-sm-12">
                                        <select class="form-select" id="inlineFormSelectPref" name="transmission" >
                                            <option selected value="auto" <?= $fch_data['transmission'] == 'auto' ? 'selected':'' ?>>Auto</option>
                                            <option value="manual" <?= $fch_data['transmission'] == 'manual' ? 'selected':'' ?>>Manual</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Mileage *</label>
                                    <div class="col-md-4 col-sm-12">
                                        <select class="form-select" name="mileage" id="inlineFormSelectPref" >
                                            <option selected value="20,000" <?= $fch_data['mileage'] == '20,000' ? 'selected':'' ?>>20,000</option>
                                            <option value="30,000" <?= $fch_data['mileage'] == '30,000' ? 'selected':'' ?>>30,000</option>
                                            <option value="40,000" <?= $fch_data['mileage'] == '40,000' ? 'selected':'' ?>>40,000</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Vehicles Price</label>
                                    <div class="col-md-6 col-sm-12">
                                    <input type="text" name="vehicles_price" class="form-control" id="inputtext3" value="<?php echo isset($fch_data['vehicles_price'])?$fch_data['vehicles_price']:"" ?> "placeholder="Example:News Headline" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Vehicles Content *</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea class="form-control" id="vehicles-content" name="vehicles_content" rows="6" > <?php echo isset($fch_data['vehicles_content'])?$fch_data['vehicles_content']:"" ?></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Vehicles Publish Date *</label>
                                        <div class="col-md-2 col-sm-12">
                                            <input type="date" class="form-control" id="inputtext3"  name="vehicles_publish_date" value="<?php echo isset($fch_data['vehicles_publish_date'])?$fch_data['vehicles_publish_date']:"" ?>"placeholder="21-02-2023" >
                                            (Format: dd-mm-yy)
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Featured Photo</label>
                                    <div class="col-md-2 col-sm-12">
                                        <input type="file" name="featured_photo" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Select Category *</label>
                                    <div class="col-md-4 col-sm-12">
                                        <select class="form-select" name="category" id="inlineFormSelectPref" >
                                            <option >Select Category</option>
                                            <option value="About" <?= $fch_data['category'] == 'About' ? 'selected':'' ?>>About</option>
                                            <option value="Project" <?= $fch_data['category'] == 'Project' ? 'selected':'' ?>>Project</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Publisher</label>
                                    <div class="col-md-7 col-sm-12">
                                    <input type="text" name="publisher" class="form-control" id="inputtext3" value="<?php echo isset($fch_data['publisher'])?$fch_data['publisher']:"" ?>"placeholder="" >
                                    (If you keep this blank, logged user will be treated as the publisher)
                                    </div>
                                </div>
                                <div class="col-md-12 seo-info py-2">
                                    <h5>SEO Information</h5>
                                </div>
                                <div class="row mb-3 pt-2">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Meta Title</label>
                                    <div class="col-md-10 col-sm-12">
                                    <input type="text" name="meta_title" class="form-control" id="inputtext3" value="<?php echo isset($fch_data['meta_title'])?$fch_data['meta_title']:"" ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Meta Keywords</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea class="form-control" id="inputfooter3" rows="4" name="meta_keywords" > <?php echo isset($fch_data['meta_keywords'])?$fch_data['meta_keywords']:"" ?></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Meta Description</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea class="form-control" id="inputfooter3" rows="6" name="meta_description"> <?php echo isset($fch_data['meta_description'])?$fch_data['meta_description']:"" ?></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                <label for="inputfooter3" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-1">
                                        <input type="submit" name="update_vehicles" class="btn btn-success" value="Update">
                                    </div>
                                </div>
                            </form>
                            <?php
                                    }
                                }
                                    else
                                    {
                                        $_SESSION['status'] = "No record found";
                                        header("Location: vehicles.php");
                                    }

                                }
                            ?>
                    </div> <!--col -->
         </div> <!--row -->
</div>  <!--container -->

<?php 
    include('includes/footer.php');
?>