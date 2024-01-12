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
            <h1 class="m-0"> <i class="fa-regular fa-circle-right" style="font-size: 29px;"></i> Add Event And Culturals</h1>
            <a href="event.php" class="btn btn-dark"><i class="fa-solid fa-plus"></i> view all</a>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class=" container py-2 px-4 bg-white">
    <div class="row">
                    <div class="col-md-12 pt-5">
                            <?php
                                if(isset($_GET['id'])){
                                    $posted_id = $_GET['id'];
                                    $data = mysqli_query($conn,"SELECT * FROM tbl_event WHERE id='$posted_id'");
                                    
                                    if(mysqli_num_rows($data) > 0)
                                    {
                                        while($fch_data = mysqli_fetch_assoc($data)){
                                    ?>
                            <form action="code.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="post_id" value="<?php echo $fch_data['id']?>">
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Name of Event *</label>
                                    <div class="col-md-6 col-sm-12">
                                    <input type="text" name="name" class="form-control" id="inputtext3" value="<?php echo isset($fch_data['name'])?$fch_data['name']:"" ?>" placeholder="" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Slug</label>
                                    <div class="col-md-6 col-sm-12">
                                    <input type="text" name="slug" class="form-control" id="inputtext3" value="<?php echo isset($fch_data['slug'])?$fch_data['slug']:"" ?>" placeholder="" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Photo *</label>
                                    <div class="col-md-2 col-sm-6">
                                        <input type="file" name="photo" >
                                        (Only jpg, jpeg, gif and png are allowed)
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Banner *</label>
                                    <div class="col-md-2 col-sm-6">
                                        <input type="file" name="banner" >
                                        (Only jpg, jpeg, gif and png are allowed)
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Detail</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea class="form-control" name="detail" id="eve-detail" rows="6" > <?php echo isset($fch_data['detail'])?$fch_data['detail']:"" ?></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Facebook</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="facebook" class="form-control" id="inputtext3" value="<?php echo isset($fch_data['facebook'])?$fch_data['facebook']:"" ?>" placeholder="" >
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Twitter</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="twitter" class="form-control" id="inputtext3" value="<?php echo isset($fch_data['twitter'])?$fch_data['twitter']:"" ?>"placeholder="" >
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">LinkedIn</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="linkedin" class="form-control" id="inputtext3" value="<?php echo isset($fch_data['linkedin'])?$fch_data['linkedin']:"" ?>"placeholder="" >
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">youTube</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="youtube" class="form-control" id="inputtext3" value="<?php echo isset($fch_data['youtube'])?$fch_data['youtube']:"" ?>"placeholder="" >
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Google Plus</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="google_plus" class="form-control" id="inputtext3" value="<?php echo isset($fch_data['google_plus'])?$fch_data['google_plus']:"" ?>"placeholder="" >
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Instagram</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="instagram" class="form-control" id="inputtext3" value="<?php echo isset($fch_data['instagram'])?$fch_data['instagram']:"" ?>"placeholder="" >
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Flickr</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="flickr" class="form-control" id="inputtext3" value="<?php echo isset($fch_data['flickr'])?$fch_data['flickr']:"" ?>"placeholder="" >
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Address</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea class="form-control" name="address" id="inputfooter3" rows="6" > <?php echo isset($fch_data['address'])?$fch_data['address']:"" ?></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Practice Location</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea class="form-control" name="practice_location" id="inputfooter3" rows="6" > <?php echo isset($fch_data['practice_location'])?$fch_data['practice_location']:"" ?></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Phone</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="phone" class="form-control" id="inputtext3" value="<?php echo isset($fch_data['phone'])?$fch_data['phone']:"" ?>"placeholder="" >
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Email Address</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="email_adress" class="form-control" id="inputtext3" value="<?php echo isset($fch_data['email'])?$fch_data['email']:"" ?>"placeholder="" >
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Website</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="website" class="form-control" id="inputtext3" value="<?php echo isset($fch_data['website'])?$fch_data['website']:"" ?>"placeholder="" >
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Active ?</label>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Active"  <?= $fch_data['status'] == 'Active' ? 'checked':'' ?>>
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Non_Active" <?= $fch_data['status'] == 'Non_Active' ? 'checked':'' ?>>
                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>
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
                                        <textarea class="form-control" name="meta_keywords" id="inputfooter3" rows="4" > <?php echo isset($fch_data['meta_keyword'])?$fch_data['meta_keyword']:"" ?></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Meta Description</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea class="form-control" name="meta_description" id="inputfooter3" rows="6" > <?php echo isset($fch_data['meta_description'])?$fch_data['meta_description']:"" ?></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                <label for="inputfooter3" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-1">
                                        <input type="submit" name="update_event" class="btn btn-success" value="Update">
                                    </div>
                                </div>
                            </form>
                            <?php
                                    }
                                }
                                    else
                                    {
                                        $_SESSION['status'] = "No record found";
                                        header("Location: event.php");
                                    }

                                }
                            ?>
                    </div> <!--col -->
         </div> <!--row -->
</div>  <!--container -->

<?php 
    include('includes/footer.php');
?>
