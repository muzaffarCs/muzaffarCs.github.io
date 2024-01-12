
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
            <h1 class="m-0"> <i class="fa-regular fa-circle-right" style="font-size: 29px;"></i> Add Pages</h1>
            <a href="page.php" class="btn btn-dark"><i class="fa-solid fa-plus"></i> view all</a>
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
                            <form action="code.php" method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Page Name *</label>
                                    <div class="col-md-4 col-sm-12">
                                    <input type="text" class="form-control" id="inputtext3" name="page_name" value=""placeholder="Example: About Us" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Page Sluge</label>
                                    <div class="col-md-4 col-sm-12">
                                    <input type="text" name="page_sluge" class="form-control" id="inputtext3" value=""placeholder="Example: about us">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Page Layout</label>
                                    <div class="col-md-4 col-sm-12">
                                        <select class="form-select" id="inlineFormSelectPref" name="page_layout">
                                            <option selected>Full Width Page Layout</option>
                                            <option value="FAQ Page Layout">FAQ Page Layout</option>
                                            <option value="Team Member Page Layout">Team Member Page Layout</option>
                                            <option value="Photo Gallery Page Layout">Photo Gallery Page Layout</option>
                                            <option value="Video Gallery Page Layout">Video Gallery Page Layout</option>
                                            <option value="Blog Page Layout">Blog Page Layout</option>
                                            <option value="Contact Us Page Layout">Contact Us Page Layout</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Page Content</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea class="form-control" name="page_content" id="pagecontent" rows="6" ></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Banner *</label>
                                    <div class="col-md-4 col-sm-12">
                                        <input type="file" name="page_banner" required>
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
                                                <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Not_Active">
                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 seo-info py-2">
                                    <h5>SEO Information</h5>
                                </div>
                                <div class="row mb-3 pt-2">
                                    <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Meta Title</label>
                                    <div class="col-md-4 col-sm-12">
                                    <input type="text" name="meta_title" class="form-control" id="inputtext3" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Meta Keywords</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea name="meta_keywords" class="form-control" id="inputfooter3" rows="4" ></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-12 col-md-2 col-form-label">Meta Description</label>
                                    <div class="col-md-10 col-sm-12">
                                        <textarea name="meta_description" class="form-control" id="inputfooter3" rows="6" ></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                <label for="inputfooter3" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-1">
                                        <input type="submit" class="btn btn-success" value="Submit" name="add_page">
                                    </div>
                                </div>
                            </form>
                    </div> <!--col -->
         </div> <!--row -->
</div>  <!--container -->

<?php 
    include('includes/footer.php');
?>