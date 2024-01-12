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
                            <form action="code.php" method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Name of Event *</label>
                                    <div class="col-md-6 col-sm-12">
                                    <input type="text" name="name" class="form-control" id="inputtext3" value=""placeholder="" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Slug</label>
                                    <div class="col-md-6 col-sm-12">
                                    <input type="text" name="slug" class="form-control" id="inputtext3" value=""placeholder="" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Photo *</label>
                                    <div class="col-md-2 col-sm-6">
                                        <input type="file" name="photo" required>
                                        (Only jpg, jpeg, gif and png are allowed)
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Banner *</label>
                                    <div class="col-md-2 col-sm-6">
                                        <input type="file" name="banner" required>
                                        (Only jpg, jpeg, gif and png are allowed)
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Detail</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea class="form-control" name="detail" id="eve-detail" rows="6" ></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Facebook</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="facebook" class="form-control" id="inputtext3" value=""placeholder="" >
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Twitter</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="twitter" class="form-control" id="inputtext3" value=""placeholder="" >
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">LinkedIn</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="linkedin" class="form-control" id="inputtext3" value=""placeholder="" >
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">youTube</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="youtube" class="form-control" id="inputtext3" value=""placeholder="" >
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Google Plus</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="google_plus" class="form-control" id="inputtext3" value=""placeholder="" >
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Instagram</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="instagram" class="form-control" id="inputtext3" value=""placeholder="" >
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Flickr</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="flickr" class="form-control" id="inputtext3" value=""placeholder="" >
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Address</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea class="form-control" name="address" id="inputfooter3" rows="6" ></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Practice Location</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea class="form-control" name="practice_location" id="inputfooter3" rows="6" ></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Phone</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="phone" class="form-control" id="inputtext3" value=""placeholder="" >
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Email Address</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="email_adress" class="form-control" id="inputtext3" value=""placeholder="" >
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Website</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="website" class="form-control" id="inputtext3" value=""placeholder="" >
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Active ?</label>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Active">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Non_Active">
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
                                    <input type="text" name="meta_title" class="form-control" id="inputtext3" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Meta Keywords</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea class="form-control" name="meta_keywords" id="inputfooter3" rows="4" ></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Meta Description</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea class="form-control" name="meta_description" id="inputfooter3" rows="6" ></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                <label for="inputfooter3" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-1">
                                        <input type="submit" name="add_event" class="btn btn-success" value="Submit">
                                    </div>
                                </div>
                            </form>
                    </div> <!--col -->
         </div> <!--row -->
</div>  <!--container -->

<?php 
    include('includes/footer.php');
?>