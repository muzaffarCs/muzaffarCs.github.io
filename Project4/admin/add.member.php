
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
            <h1 class="m-0"> <i class="fa-regular fa-circle-right" style="font-size: 29px;"></i> Add Team Member</h1>
            <a href="team-member.php" class="btn btn-dark"><i class="fa-solid fa-plus"></i> view all</a>
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
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Slug</label>
                                    <div class="col-md-6 col-sm-12">
                                    <input type="text" class="form-control" id="inputtext3" value=""placeholder="" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Select Designation *</label>
                                    <div class="col-md-4 col-sm-12">
                                        <select class="form-select" id="inlineFormSelectPref" required>
                                            <option selected>Select a Designation</option>
                                            <option value="1">Busniess Manager</option>
                                            <option value="2">CEO</option>
                                            <option value="3">Founder</option>
                                            <option value="4">Supervisor</option>
                                        </select>
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
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Banner *</label>
                                    <div class="col-md-2 col-sm-6">
                                        <input type="file" required>
                                        (Only jpg, jpeg, gif and png are allowed)
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Degree</label>
                                    <div class="col-md-6 col-sm-12">
                                    <input type="text" class="form-control" id="inputtext3" value=""placeholder="" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Detail</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea class="form-control" id="team-member-detail" rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Facebook</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" class="form-control" id="inputtext3" value=""placeholder="" required>
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Twitter</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" class="form-control" id="inputtext3" value=""placeholder="" required>
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">LinkedIn</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" class="form-control" id="inputtext3" value=""placeholder="" required>
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">youTube</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" class="form-control" id="inputtext3" value=""placeholder="" required>
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Google Plus</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" class="form-control" id="inputtext3" value=""placeholder="" required>
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Instagram</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" class="form-control" id="inputtext3" value=""placeholder="" required>
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Flickr</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" class="form-control" id="inputtext3" value=""placeholder="" required>
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Address</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea class="form-control" id="inputfooter3" rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Practice Location</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea class="form-control" id="inputfooter3" rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Phone</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" class="form-control" id="inputtext3" value=""placeholder="" required>
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Email Address</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" class="form-control" id="inputtext3" value=""placeholder="" required>
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Website</label>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" class="form-control" id="inputtext3" value=""placeholder="" required>
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Active ?</label>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
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
                                    <input type="text" class="form-control" id="inputtext3" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Meta Keywords</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea class="form-control" id="inputfooter3" rows="4" ></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Meta Description</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea class="form-control" id="inputfooter3" rows="6" ></textarea>
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