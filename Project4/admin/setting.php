<?php 
include('includes/header.php');
include('includes/top-bar.php');
include('includes/aside.php');
?>
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 d-flex">
          <i class="fa-regular fa-circle-right" style="font-size: 29px;"></i>
            <h1 class="m-0">Settings</h1>
          </div><!-- /.col -->
          <div class="col-md-12 pt-2">
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
                <button class="nav-link text-black active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Logo</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-black" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Favicon</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-black" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">General Content</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-black" id="email-tab" data-bs-toggle="tab" data-bs-target="#email-tab-pane" type="button" role="tab" aria-controls="email-tab-pane" aria-selected="false">Email Setting</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-black" id="news-tab" data-bs-toggle="tab" data-bs-target="#news-tab-pane" type="button" role="tab" aria-controls="news-tab-pane" aria-selected="false">News</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-black" id="home-meta-tab" data-bs-toggle="tab" data-bs-target="#home-meta-tab-pane" type="button" role="tab" aria-controls="home-meta-tab-pane" aria-selected="false">Home Page Meta</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-black" id="home-title-tab" data-bs-toggle="tab" data-bs-target="#home-title-tab-pane" type="button" role="tab" aria-controls="home-title-tab-pane" aria-selected="false">Home Page Tittle And Subtitle</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-black" id="rewrite-tab" data-bs-toggle="tab" data-bs-target="#rewrite-tab-pane" type="submit" role="tab" aria-controls="rewrite-tab-pane" aria-selected="false"> Mod Rewrite </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-black" id="register-tab" data-bs-toggle="tab" data-bs-target="#register-tab-pane" type="submit" role="tab" aria-controls="register-tab-pane" aria-selected="false"> Register New User </button>
            </li>
            </ul>
<div class="container">
            <div class="tab-content setting-up" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <div class="row">
                <div class="col-md-12 pt-5">
                    <div class="setting-profile">
                        <div class="row">
                            <div class="col-md-2 d-flex ">
                                <p class=" edit-p-t">Existing Photo</p>
                            </div>
                            <div class="col-md-10">
                                <img src="upload_img/profile/<?php echo $_SESSION['user_photo']?>" alt="profile" id="s-p-img">
                            </div>
                            <div class="col-md-12 pt-5">
                                    <form action="code.php" method="post"       enctype="multipart/form-data">
                                         <input type="hidden" name="user_id" value="<?php echo isset($_SESSION['user_id'])?$_SESSION['user_id']:"" ?>">
                                        <div class="row mb-3">
                                            <label for="inputtext3" class="col-sm-12 col-md-2 col-form-label">New Photo</label>
                                            <div class="col-md-2 col-sm-6">
                                                <input type="file" name="logo"/>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                        <label for="inputfooter3" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-1">
                                                <form action="code.php" method="POST" enctype="multipart/form-data">
                                                    <input type="hidden" name="edit_id" value="<?php echo $_SESSION['user_id']; ?>">
                                                    <input type="submit" class="btn btn-success" value="Update Photo"
                                                name="update-logo">
                                                </form>
                                            </div>
                                        </div>                               
                                        </div>
                                    </form>
                            </div>
                            <div class="dropdown-divider"></div>
                        </div> <!--setting profile-->
                    </div> <!--col-md-12-->
                </div>  <!--row-->
            </div> <!--logo--> 
            <div class="tab-pane fade setting-up" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <div class="row">
                        <div class="col-md-12 pt-5">
                            <div class="setting-profile">
                                <div class="row">
                                    <div class="col-md-2 d-flex ">
                                        <p class=" edit-p-t">Existing Photo</p>
                                    </div>
                                    <div class="col-md-10">
                                        <img src="" alt="profile" id="s-p-img">
                                    </div>
                                    <div class="form-pro">
                                        <form action="" method="POST">
                                            <div class="mb-5 pt-3">
                                                <label class="px-5">New Photo</label>
                                                <input  type="file">
                                                
                                                <input type="submit" class="btn btn-success" value="Update Logo">

                                            </div>
                                        </form>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                    </div>
            </div>  <!--Favicon-->
            <div class="tab-pane fade setting-up" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                <div class="row">
                    <div class="col-md-12 pt-5">
                            <form action="" method="post">
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-2 col-form-label">Footer-About-Us</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="editor" rows="7"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Footer - Copyright</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputtext3" value="Copyright © 2022. All Rights Reserved.">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-2 col-form-label">Contact Address</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="inputfooter3" rows="5" ></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Contact Email</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputtext3" value="info@ittihadgbtours.com">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Contact Phone Number </label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputtext3" value="+92 345 8566643">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Contact Fax Number</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputtext3" value="+92 345 8566643">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-2 col-form-label">Footer-About-Us</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="inputfooter3" rows="7"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                <label for="inputfooter3" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-1">
                                        <input type="submit" class="btn btn-success" value="Update">
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>

            </div><!--general content-->
            <div class="tab-pane fade setting-up" id="email-tab-pane" role="tabpanel" aria-labelledby="email-tab" tabindex="0">...
                <div class="row">
                    <div class="col-md-12 pt-5">
                        <form action="" method="post">
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Email Address *</label>
                                    <div class="col-sm-5">
                                    <input type="text" class="form-control" id="inputtext3" value="ittihadgbtours@gmail.com">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Email Subject *</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputtext3" value="Visitor Email Message">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Thank you message *</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputtext3" value="Thank you for sending email. We will contact you shortly.">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                <label for="inputfooter3" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-1">
                                        <input type="submit" class="btn btn-success" value="Update">
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div><!--cemail setting-->
            <div class="tab-pane fade setting-up" id="news-tab-pane" role="tabpanel" aria-labelledby="news-tab" tabindex="0">
                <div class="row">
                    <div class="col-md-12 pt-5">
                        <form action="" method="post">
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-md-4 col-sm-12 col-form-label">Footer (How many recent news?)*</label>
                                    <div class="col-md-2 col-sm-12">
                                    <input type="text" class="form-control" id="inputtext3" value="1">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-md-4 col-sm-12 col-form-label">Footer (How many popular news?)*</label>
                                    <div class="col-md-2 col-sm-12">
                                    <input type="text" class="form-control" id="inputtext3" value="3">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-md-4 col-sm-12 col-form-label">Sidebar (How many recent news?)*</label>
                                    <div class="col-md-2 col-sm-12">
                                    <input type="text" class="form-control" id="inputtext3" value="4">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-md-4 col-sm-12 col-form-label">Sidebar (How many popular news?)*</label>
                                    <div class="col-md-2 col-sm-12">
                                    <input type="text" class="form-control" id="inputtext3" value="4">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-md-4 col-sm-12 col-form-label">Home Page (How many recent news?)*</label>
                                    <div class="col-md-2 col-sm-12">
                                    <input type="text" class="form-control" id="inputtext3" value="4">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                <label for="inputfooter3" class="col-md-4 col-sm-12 col-form-label"></label>
                                    <div class="col-md-2 col-sm-12">
                                        <input type="submit" class="btn btn-success" value="Update">
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div><!--News-->
            <div class="tab-pane fade setting-up" id="home-meta-tab-pane" role="tabpanel" aria-labelledby="home-meta-tab" tabindex="0">...
                    <div class="row">
                        <div class="col-md-12 pt-5">
                            <form action="" method="post">
                                    <div class="row mb-3">
                                        <label for="inputtext3" class="col-sm-2 col-form-label">Meta Title</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputtext3" value="Ittihad GB Tours">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputfooter3" class="col-sm-2 col-form-label">Meta Keyword</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="inputfooter3" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputfooter3" class="col-sm-2 col-form-label">Meta Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="inputfooter3" rows="7"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputfooter3" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-1">
                                            <input type="submit" class="btn btn-success" value="Update">
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
            </div><!--home page meta-->
            <div class="tab-pane fade setting-up" id="home-title-tab-pane" role="tabpanel" aria-labelledby="home-title-tab" tabindex="0">
                <div class="row">
                    <div class="col-md-12 pt-5">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h5 class="text-primary"> <b>Sercives</b></h5>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                    <div class="row">
                                                        <div class="col-md-12 pt-1">
                                                            <form action="" method="post">
                                                                <div class="row mb-3">
                                                                    <label for="inputtext3" class="col-sm-2 col-form-label">Title</label>
                                                                    <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="inputtext3" value="Travel Services">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="inputtext3" class="col-sm-2 col-form-label">Sub Title</label>
                                                                    <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="inputtext3" value="Travel Services">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="inputtext3" class="col-sm-2 col-form-label">Show on Home?</label>
                                                                    <div class="col-sm-10">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                            </div>   <!--accordian items -->
                                        </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h5 class="text-primary"> <b>Team Members</b></h5>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                                <div class="row">
                                                        <div class="col-md-12 pt-1">
                                                            <form action="" method="post">
                                                                <div class="row mb-3">
                                                                    <label for="inputtext3" class="col-sm-2 col-form-label">Title</label>
                                                                    <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="inputtext3" value="Team Members">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="inputtext3" class="col-sm-2 col-form-label">Sub Title</label>
                                                                    <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="inputtext3" value="Meet with All Our Qualified Team Members">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="inputtext3" class="col-sm-2 col-form-label">Show on Home?</label>
                                                                    <div class="col-sm-10">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                </div>
                                        </div> <!--accordian items -->
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <h5 class="text-primary"> <b>Testimonial </b></h5>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                        <div class="col-md-12 pt-1">
                                                            <form action="" method="post">
                                                                <div class="row mb-3">
                                                                    <label for="inputtext3" class="col-sm-2 col-form-label">Title</label>
                                                                    <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="inputtext3" value="Testimonial">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="inputtext3" class="col-sm-2 col-form-label">Sub Title</label>
                                                                    <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="inputtext3" value="Our Happy Clients Tell About Us">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="inputtext3" class="col-sm-2 col-form-label">Show on Home?</label>
                                                                    <div class="col-sm-10">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                </div>
                                        </div> <!--accordian items -->
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingfour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        <h5 class="text-primary"> <b>Latest News </b></h5>
                                        </button>
                                    </h2>
                                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                        <div class="col-md-12 pt-1">
                                                            <form action="" method="post">
                                                                <div class="row mb-3">
                                                                    <label for="inputtext3" class="col-sm-2 col-form-label">Title</label>
                                                                    <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="inputtext3" value="Latest News">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="inputtext3" class="col-sm-2 col-form-label">Sub Title</label>
                                                                    <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="inputtext3" value="See All Our Updated and Latest News">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="inputtext3" class="col-sm-2 col-form-label">Show on Home?</label>
                                                                    <div class="col-sm-10">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                </div>
                                        </div> <!--accordian items -->
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingfive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                        <h5 class="text-primary"> <b> Partner</b></h5>
                                        </button>
                                    </h2>
                                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                        <div class="col-md-12 pt-1">
                                                            <form action="" method="post">
                                                                <div class="row mb-3">
                                                                    <label for="inputtext3" class="col-sm-2 col-form-label">Title</label>
                                                                    <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="inputtext3" value="Our Partners">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="inputtext3" class="col-sm-2 col-form-label">Sub Title</label>
                                                                    <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="inputtext3" value="All Our Company Partners are Listed Below">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="inputtext3" class="col-sm-2 col-form-label">Show on Home?</label>
                                                                    <div class="col-sm-10">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                </div>
                                        </div> <!--accordian items -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pt-3">
                                    <div class="row mb-3">
                                        <label for="inputfooter3" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-1">
                                            <input type="submit" class="btn btn-success" value="Update">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div> <!--col -->
                </div>  <!--row -->
            </div><!--home page title and subtitle-->
            <div class="tab-pane fade setting-up" id="rewrite-tab-pane" role="tabpanel" aria-labelledby="rewrite-tab" tabindex="0">
                    <div class="row">
                        <div class="col-md-12 pt-5">
                            <form action="" method="post">
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Mode Rewrite</label>
                                    <div class="col-md-1 col-sm-4">
                                        <select class="form-select" id="inlineFormSelectPref">
                                            <option selected>OFF</option>
                                            <option value="1">On</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputfooter3" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-1">
                                        <input type="submit" class="btn btn-success" value="Update">
                                    </div>
                                </div>
                            </form>
                        </div>  
                    </div>
            </div><!--mod rewrite-->
            <div class="tab-pane fade setting-up" id="register-tab-pane" role="tabpanel" aria-labelledby="register-tab" tabindex="0">
                    <div class="row">
                        <section class="vh-auto" style="background-color: #eee;" >
                            <div class="container h-100">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                    <div class="col-lg-12 col-xl-11">
                                    <div class="card text-black" style="border-radius: 25px;">
                                        <div class="card-body p-md-5">
                                        <div class="row justify-content-center">
                                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register Here</p>
                                            <form class="mx-1 mx-md-4" action="code.php" method="POST" enctype="multipart/form-data">
                                                    <input type="hidden" name="user_id" value="<?php echo isset($row['id'])?$row['id']:"" ?>">
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="text" name="name" id="form3Example1c" class="form-control" value="<?php echo isset($row['name'])?$row['name']:"" ?>" required />
                                                        <label class="form-label" for="form3Example1c">Name * </label>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-4">
                                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="email" name="email" id="form3Example3c" class="form-control" value="<?php echo isset($row['email'])?$row['email']:"" ?>" required />
                                                        <label class="form-label" >Email *</label>
                                                    </div>
                                                </div>
                            
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="password" name="password" id="form3Example4c" class="form-control" value="<?php echo isset($row['password'])?$row['password']:"" ?>" required />
                                                        <label class="form-label">Password *</label>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-4">
                                                        <i class="fas fa-phone fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="phone" name="phone" class="form-control" value="<?php echo isset($row['phone'])?$row['phone']:"" ?>" required />
                                                        <label class="form-label" >Phone No *</label>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                        <i class="fas fa-image fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="file" name="photo" class="form-control" value="<?php echo isset($row['photo'])?$row['photo']:"" ?>" required />
                                                        <label class="form-label">Photo *</label>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                    <div class="col-md-12 col-sm-12">
                                                        <select name="role"class="form-select" id="inlineFormSelectPref">
                                                            <option value="1" selected> User</option>
                                                            <option value="2" > Admin</option>
                                                        </select>
                                                    </div>
                                                        <label class="form-label">Role *</label>
                                                    </div>
                                                </div>
                                
                                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                <button type="submit" name="reg" class="btn btn-primary btn-lg">Register</button>
                                                </div>
                            
                                            </form>
                            
                                            </div>
                                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                            
                                            <img src="assets/images/draw1.webp"
                                                class="img-fluid" alt="Sample image">
                            
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </section>  
                    </div> <!--row-->
            </div><!--register user-->
</div>
 
    </div>  <!--container-->
<?php 
include('includes/footer.php');
?>