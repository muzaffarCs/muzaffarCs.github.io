
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
            <h1 class="m-0"><i class="fa-regular fa-circle-right" style="font-size: 29px;"></i> Edit Profile</h1>
          </div><!-- /.col -->
          <div class="col-md-12">
            <?php include('database/message.php');  ?>
            <?php include('database/status.php');  ?>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- this is setting page inner -->
<div class="container-fluid py-2 px-4 bg-white">

            <ul class="nav nav-tabs pb-3" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link text-black active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Update Informatio</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-black" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Update Photo</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-black" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Update Password</button>
            </li>
            </ul>
<div class="container">
            <div class="tab-content setting-up" id="myTabContent">
            <div class="tab-pane fade show active " id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="row">
                                <div class="col-md-12 pt-5">
                                    <form action="code.php" method="post" enctype="multipart/form-data">
                                        <div class="row mb-3">
                                            <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Name *</label>
                                            <div class="col-md-6 col-sm-12">
                                                <p><?php 
                                                        if(isset($_SESSION['auth']))
                                                        {
                                                            echo $_SESSION["user_name"];
                                                        }
                                                        else
                                                        {
                                                            echo "Not Logged in";
                                                        }
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Existing Photo</label>
                                            <div class="col-md-6 col-sm-12" id="update-info">
                                                <img src="upload_img/profile/<?php echo $_SESSION['user_photo']?>" alt="profile" id="updated.photo">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Email</label>
                                            <div class="col-md-6 col-sm-12">
                                            <p><?php 
                                                        if(isset($_SESSION['auth']))
                                                        {
                                                            echo $_SESSION["user_email"];
                                                        }
                                                        else
                                                        {
                                                            echo "Not Logged in";
                                                        }
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Phone</label>
                                            <div class="col-md-6 col-sm-12">
                                                <input type="text" class="form-control" id="inputtext3" name="phone" value="" placeholder="<?php echo $_SESSION['user_phone']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">Role</label>
                                            <div class="col-md-6 col-sm-12">
                                                <p><?php 
                                                        if(isset($_SESSION['auth']))
                                                        {
                                                            echo $_SESSION["user_role"];
                                                        }
                                                        else
                                                        {
                                                            echo "Not Logged in";
                                                        }
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                        <div class="row mb-3">
                                        <label for="inputfooter3" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-1">
                                                <input type="submit" class="btn btn-success" value="Update Information"
                                                name="update-info">
                                            </div>
                                        </div>
                                    </form>
                                </div> <!--col -->
                            <div class="dropdown-divider"></div>
                        </div>
            </div> <!--logo--> 
            <div class="tab-pane fade setting-up" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <div class="row">
                                <div class="col-md-12 pt-5">
                                    <form action="code.php" method="post"       enctype="multipart/form-data">
                                         <input type="hidden" name="user_id" value="<?php echo isset($_SESSION['user_id'])?$_SESSION['user_id']:"" ?>">
                                        <div class="row mb-3">
                                            <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">New Photo</label>
                                            <div class="col-md-2 col-sm-6">
                                                <input type="file" name="profile"/>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                        <label for="inputfooter3" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-1">
                                                <form action="code.php" method="POST" enctype="multipart/form-data">
                                                    <input type="hidden" name="edit_id" value="<?php echo $_SESSION['user_id']; ?>">
                                                    <input type="submit" class="btn btn-success" value="Update Photo"
                                                name="update-pro">
                                                </form>
                                            </div>
                                        </div>
                                    </form>
                            </div> <!--col -->
                            <div class="dropdown-divider"></div>
                    </div>
            </div>  <!--Favicon-->
            <div class="tab-pane fade setting-up" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                    <div class="row">
                                <div class="col-md-12 pt-5">
                                    <form action="code.php" method="post"       enctype="multipart/form-data">
                                         <input type="hidden" name="user_id" value="<?php echo isset($_SESSION['user_id'])?$_SESSION['user_id']:"" ?>">
                                         <div class="row mb-3">
                                            <label for="inputtext3" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-12 col-md-4">
                                            <input type="password" name="password" class="form-control" id="inputtext3" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputtext3" class="col-sm-2 col-form-label">Retype Password</label>
                                            <div class="col-sm-12 col-md-4">
                                            <input type="password" name="rpassword" class="form-control" id="inputtext3" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                        <label for="inputfooter3" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-1">
                                                <form action="code.php" method="POST" enctype="multipart/form-data">
                                                    <input type="hidden" name="edit_id" value="<?php echo $_SESSION['user_id']; ?>">
                                                    <input type="submit" class="btn btn-success" value="Update_Password"
                                                    name="update_password">
                                                </form>
                                            </div>
                                        </div>
                                    </form>
                            </div> <!--col -->
                            <div class="dropdown-divider"></div>
                    </div>












            </div><!--general content-->
</div>
 
    </div>  <!--container-->
<?php 
include('includes/footer.php');
?>