<?php
session_start();
include "connection.php";

if(isset($_POST['logout'])){
session_destroy();
unset($_SESSION['email']);
unset($_SESSION['password']);

$_SESSION['status'] = "logged out successfully";
header("Location: login.php");
exit(0);
}

// login code
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $chk = mysqli_query( $conn, "SELECT * FROM admin WHERE password ='$password' AND email='$email' LIMIT 1");
    $chk_data = mysqli_num_rows($chk);

    if($chk_data > 0)
    {
     while($rows = mysqli_fetch_assoc($chk)){
        session_start();
        $_SESSION["auth"]=true;
        $_SESSION["user_id"]= $rows['id'];
        $_SESSION["user_name"]= $rows['name'];
        $_SESSION["user_email"]= $rows['email'];
        $_SESSION["user_password"]= $rows['password'];
        $_SESSION["user_photo"]= $rows['image'];
        $_SESSION["user_role"]= $rows['role'];
        $_SESSION["user_phone"]= $rows['phone'];

        $_SESSION['message'] = "welcome to Dashboard";
        header("Location: index.php");
    }
    }
    else
    {
        $_SESSION['error'] ="Check your email & password";
        header("Location: login.php");
    }
}
// registration user
if (isset($_POST['reg']))
{
      $name = $_POST['name'];
      $password = md5($_POST['password']);
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $role = $_POST['role'];
      $file = $_FILES["photo"]["name"];

        $data=mysqli_query($conn,"INSERT INTO `admin`(`id`, `name`, `email`, `password`, `image`,`phone`, `role`) VALUES ('','$name', '$email','$password','$file','$phone','$role')");

        move_uploaded_file($_FILES['photo']['tmp_name'], 'upload_img/profile/'.$file);
        header("Location: setting.php");
} 

// update profile
if (isset($_POST['update-pro'])){
      $files = $_FILES["profile"]["name"];
    if(empty($files))
    {
      $_SESSION['status'] ="Please first insert the image...!";
      header("Location: edit-profile.php"); 
      
    }
    else
    {
      $update_id = $_SESSION['user_id'];
      $edit_id= mysqli_query($conn, "UPDATE `admin` SET `image`='$files' WHERE id='$update_id'");
      move_uploaded_file($_FILES['profile']['tmp_name'], 'upload_img/profile/'.$files);
      $_SESSION['message'] = "Profile has been updated successfully";
      header("Location: edit-profile.php");
    }
}
// update logo
if (isset($_POST['update-logo'])){
      $files = $_FILES["logo"]["name"];
  if(empty($files))
  {
    $_SESSION['status'] ="Please first insert the image...!";
    header("Location: setting.php"); 
  }
  else
  {
    $update_id = $_SESSION['user_id'];
    $edit_id= mysqli_query($conn, "UPDATE `admin` SET `image`='$files' WHERE id='$update_id'");
    move_uploaded_file($_FILES['logo']['tmp_name'], 'upload_img/profile/'.$files);
    $_SESSION['message'] = "Profile has been updated successfully";
    header("Location: setting.php"); 
  }
}
// update password
if (isset($_POST['update_password'])){
      $password = md5($_POST['password']);
      $rpassword = md5($_POST['rpassword']);
      if($password == $rpassword){
        if($_SESSION['user_id'] !="" && $password !="")
        {
          $update_id = $_SESSION['user_id'];
          $edit_id= mysqli_query($conn, "UPDATE `admin` SET `password`='$password' WHERE id='$update_id'");
          $_SESSION['message'] = "Password has been updated successfully";
          header("Location: edit-profile.php");
        }
        else
        {
          $_SESSION['status'] ="Something went Worng";
          header("Location: edit-profile.php");
        }
      }
      else
      {
        $_SESSION['status'] ="Password and Retype password Should be match";
        header("Location: edit-profile.php");
      }
    
}
// insert page information
if(isset($_POST['add_page'])){
    if(isset($_POST['add_page']))
    {      
          $page_name = $_POST['page_name'];
          $page_sluge = $_POST['page_sluge'];
          $page_layout = $_POST['page_layout'];
          $page_content = $_POST['page_content'];
          $status = $_POST['status'];
          $meta_title = $_POST['meta_title'];
          $meta_keywords = $_POST['meta_keywords'];
          $meta_description = $_POST['meta_description'];
          $files = $_FILES["page_banner"]["name"];

          $data = mysqli_query($conn, "INSERT INTO `tbl_page`(`page_id`, `page_name`, `page_slug`, `page_content`, `page_layout`, `banner`, `status`, `meta_title`, `meta_keyword`, `meta_description`) VALUES ('','$page_name','$page_sluge','$page_content','$page_layout','$files','$status','$meta_title','$meta_keywords','$meta_description')");
          move_uploaded_file($_FILES['page_banner']['tmp_name'], 'upload_img/page/'.$files);
          $_SESSION['message'] = "Add New Page Successfuly....!";
          header("Location: page.php");
        }
        else
        {
          $_SESSION['status'] = "something went wrong......!";
          header("Location: add-page.php");
        }
}

// update page
if(isset($_POST['update_page']))
{
  $post_id = $_POST['post_id'];

  $page_name = $_POST['page_name'];
  $page_sluge = $_POST['page_sluge'];
  $page_layout = $_POST['page_layout'];
  $page_content = $_POST['page_content'];
  $status = $_POST['status'];
  $meta_title = $_POST['meta_title'];
  $meta_keywords = $_POST['meta_keywords'];
  $meta_description = $_POST['meta_description'];
  $files = $_FILES["page_banner"]["name"];
  $data = mysqli_query($conn,"UPDATE `tbl_page` SET `page_name`='$page_name',`page_slug`='$page_sluge',`page_content`='$page_content',`page_layout`='$page_layout',`banner`='$files',`status`='$status',`meta_title`='$meta_title',`meta_keyword`='$meta_keywords',`meta_description`='$meta_description' WHERE page_id='$post_id'");
   
  move_uploaded_file($_FILES['page_banner']['tmp_name'], 'upload_img/page/'.$files);
  $_SESSION['message'] = "Page has been updated successfully";
  header("Location: page.php");

}
// delete page
if(isset($_POST['del_page']))
{
    $delpage_id = $_POST['del_page'];
    $query = "DELETE FROM `tbl_page` WHERE page_id='$delpage_id'";
    $query_run = mysqli_query($conn, $query);
  if($query_run)
  {
    $_SESSION['message'] ="Page data has been deleted successfuly....!";
    header("Location: page.php");
  }
  else
  {
    $_SESSION['error'] ="Something went wrong....!";
    header("Location: page.php");
  }


}

// insert new Vehicles
if(isset($_POST['add_vehicles'])){
  if(isset($_POST['add_vehicles']))
  {      
        $vehicles_name = $_POST['vehicles_name'];
        $seat = $_POST['seat'];
        $fuel = $_POST['fuel'];
        $luggage = $_POST['luggage'];
        $transmission = $_POST['transmission'];
        $mileage = $_POST['mileage'];
        $vehicles_price = $_POST['vehicles_price'];
        $vehicles_content = $_POST['vehicles_content'];
        $vehicles_publish_date = $_POST['vehicles_publish_date'];
        $files = $_FILES["featured_photo"]["name"];
        $category = $_POST['category'];
        $publisher = $_POST['publisher'];
        $meta_title = $_POST['meta_title'];
        $meta_keywords = $_POST['meta_keywords'];
        $meta_description = $_POST['meta_description'];

        $data = mysqli_query($conn, "INSERT INTO `tbl_vehicle`(`veh_id`, `vehicles_name`, `seat`, `fuel`, `luggage`, `transmission`, `mileage`, `vehicles_price`, `vehicles_content`, `vehicles_publish_date`, `featured_photo`, `category`, `publisher`, `meta_title`, `meta_keywords`, `meta_description`) VALUES ('','$vehicles_name','$seat','$fuel','$luggage','$transmission','$mileage','$vehicles_price','$vehicles_content','$vehicles_publish_date','$files','$category','$publisher','$meta_title','$meta_keywords','$meta_description')");
        move_uploaded_file($_FILES['featured_photo']['tmp_name'], 'upload_img/vehicles/'.$files);
        $_SESSION['message'] = "Add New Vehicles Successfuly....!";
        header("Location: vehicles.php");
      }
      else
      {
        $_SESSION['status'] = "something went wrong......!";
        header("Location: vehicles.php");
      }
}

// update Vehicles
if(isset($_POST['update_vehicles']))
{
  $post_id = $_POST['post_id'];

    $vehicles_name = $_POST['vehicles_name'];
    $seat = $_POST['seat'];
    $fuel = $_POST['fuel'];
    $luggage = $_POST['luggage'];
    $transmission = $_POST['transmission'];
    $mileage = $_POST['mileage'];
    $vehicles_price = $_POST['vehicles_price'];
    $vehicles_content = $_POST['vehicles_content'];
    $vehicles_publish_date = $_POST['vehicles_publish_date'];
    $files = $_FILES["featured_photo"]["name"];
    $category = $_POST['category'];
    $publisher = $_POST['publisher'];
    $meta_title = $_POST['meta_title'];
    $meta_keywords = $_POST['meta_keywords'];
    $meta_description = $_POST['meta_description'];

  $data = mysqli_query($conn,"UPDATE `tbl_vehicle` SET `vehicles_name`='$vehicles_name',`seat`='$seat',`fuel`='$fuel',`luggage`='$luggage',`transmission`='$transmission',`mileage`='$mileage',`vehicles_price`='$vehicles_price',`vehicles_content`='$vehicles_content',`vehicles_publish_date`='$vehicles_publish_date',`featured_photo`='$files',`category`='$category',`publisher`='$publisher',`meta_title`='$meta_title',`meta_keywords`='$meta_keywords',`meta_description`='$meta_description'  WHERE veh_id='$post_id'");
   
  move_uploaded_file($_FILES['featured_photo']['tmp_name'], 'upload_img/vehicles/'.$files);
  $_SESSION['message'] = "Page has been updated successfully";
  header("Location: vehicles.php");

}

// delete vehicles
if(isset($_POST['del_veh']))
{
    $posted_id = $_POST['del_veh'];
    $chk_img  = mysqli_query($conn, "SELECT  * FROM tbl_vehicle WHERE id='$posted_id'");
    $img_fch = mysqli_fetch_assoc($chk_img);
    $image = $img_fch['featured_photo'];


    $query = "DELETE FROM `tbl_vehicle` WHERE veh_id='$posted_id'";
    $query_run = mysqli_query($conn, $query);
  if($query_run)
  {
    if(file_exists('upload_img/vehicles/'.$image)){
      unlink('upload_img/vehicles/'.$image);
    }
    $_SESSION['message'] ="Data has been deleted successfuly....!";
    header("Location: vehicles.php");
  }
  else
  {
    $_SESSION['status'] ="Something went wrong....!";
    header("Location: vehicles.php");
  }
}

// insert new event
if(isset($_POST['add_event'])){
  if(isset($_POST['add_event']))
  {      
        $name = $_POST['name'];
        $slug = $_POST['slug'];
        $files = $_FILES["photo"]["name"];
        $file = $_FILES["banner"]["name"];
        $detail = $_POST['detail'];
        $facebook = $_POST['facebook'];
        $twitter = $_POST['twitter'];
        $linkedin = $_POST['linkedin'];
        $youtube = $_POST['youtube'];
        $google_plus = $_POST['google_plus'];
        $instagram = $_POST['instagram'];
        $flickr = $_POST['flickr'];
        $address = $_POST['address'];
        $practice_location = $_POST['practice_location'];
        $phone = $_POST['phone'];
        $email_adress = $_POST['email_adress'];
        $website = $_POST['website'];
        $status = $_POST['status'];
        $meta_title = $_POST['meta_title'];
        $meta_keywords = $_POST['meta_keywords'];
        $meta_description = $_POST['meta_description'];

        $data = mysqli_query($conn, "INSERT INTO `tbl_event`(`id`, `name`, `slug`, `photo`, `banner`, `detail`, `facebook`, `twitter`, `linkedin`, `youtube`, `google_plus`, `instagram`, `flickr`, `address`, `practice_location`, `phone`, `email`, `website`, `status`, `meta_title`, `meta_keyword`, `meta_description`) VALUES ('','$name','$slug','$files','$file','$detail','$facebook','$twitter','$linkedin','$youtube','$google_plus','$instagram','$flickr','$address','$practice_location','$phone','$email_adress','$website','$status','$meta_title','$meta_keywords','$meta_description')");
        move_uploaded_file($_FILES['photo']['tmp_name'], 'upload_img/event/'.$files);
        move_uploaded_file($_FILES['banner']['tmp_name'], 'upload_img/event/'.$file);
        $_SESSION['message'] = "Add New Event Successfuly....!";
        header("Location: event.php");
      }
      else
      {
        $_SESSION['status'] = "something went wrong......!";
        header("Location: event.php");
      }
}

// update event
if(isset($_POST['update_event']))
{
  $post_id = $_POST['post_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $files = $_FILES["photo"]["name"];
    $file = $_FILES["banner"]["name"];
    $detail = $_POST['detail'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];
    $youtube = $_POST['youtube'];
    $google_plus = $_POST['google_plus'];
    $instagram = $_POST['instagram'];
    $flickr = $_POST['flickr'];
    $address = $_POST['address'];
    $practice_location = $_POST['practice_location'];
    $phone = $_POST['phone'];
    $email_adress = $_POST['email_adress'];
    $website = $_POST['website'];
    $status = $_POST['status'];
    $meta_title = $_POST['meta_title'];
    $meta_keywords = $_POST['meta_keywords'];
    $meta_description = $_POST['meta_description'];

  $data = mysqli_query($conn,"UPDATE `tbl_event` SET `name`='$name',`slug`='$slug',`photo`='$files',`banner`='$file',`detail`='$detail',`facebook`='$facebook',`twitter`='$twitter',`linkedin`='$linkedin',`youtube`='$youtube',`google_plus`='$google_plus',`instagram`='$instagram',`flickr`='$flickr',`address`='$address',`practice_location`='$practice_location',`phone`='$phone',`email`='$email_adress',`website`='$website',`status`='$status',`meta_title`='$meta_title',`meta_keyword`='$meta_keywords',`meta_description`='$meta_description'  WHERE id='$post_id'");
   
  move_uploaded_file($_FILES['photo']['tmp_name'], 'upload_img/event/'.$files);
  move_uploaded_file($_FILES['banner']['tmp_name'], 'upload_img/event/'.$files);
  $_SESSION['message'] = "Page has been updated successfully";
  header("Location: event.php");

}

// delete event
if(isset($_POST['del_event']))
{
    $posted_id = $_POST['del_event'];
    $chk_img  = mysqli_query($conn, "SELECT  * FROM tbl_event WHERE id='$posted_id'");
    $img_fch = mysqli_fetch_assoc($chk_img);
    $image = $img_fch['photo'];
    $bnr = $img_fch['banner'];


    $query = "DELETE FROM `tbl_event` WHERE id='$posted_id'";
    $query_run = mysqli_query($conn, $query);
  if($query_run)
  {
    if(file_exists('upload_img/event/'.$image)){
      unlink('upload_img/event/'.$image);
    }
  
    if(file_exists('upload_img/event/'.$bnr)){
      unlink('upload_img/event/'.$bnr);
    }
    $_SESSION['message'] ="Data has been deleted successfuly....!";
    header("Location: event.php");
  }
  else
  {
    $_SESSION['status'] ="Something went wrong....!";
    header("Location: event.php");
  }
}

// insert new pricing
if(isset($_POST['add_pricing'])){
  if(isset($_POST['add_pricing']))
  {      
        $name = $_POST['name'];
        $duration = $_POST['duration'];
        $files = $_FILES["photo"]["name"];
        $price = $_POST['price'];
        $fuel = $_POST['fuel'];

        $data = mysqli_query($conn, "INSERT INTO `tbl_pricing`(`pricing_id`, `name`, `duration`, `price`, `fuel`, `photo`) VALUES ('','$name','$duration','$price','$fuel','$files')");
        move_uploaded_file($_FILES['photo']['tmp_name'], 'upload_img/pricing/'.$files);
        $_SESSION['message'] = "Add New Data Successfuly....!";
        header("Location: pricing.php");
      }
      else
      {
        $_SESSION['status'] = "something went wrong......!";
        header("Location: pricing.php");
      }
}

// delete event
if(isset($_POST['del_pri']))
{
    $posted_id = $_POST['del_pri'];
    $chk_img  = mysqli_query($conn, "SELECT  * FROM tbl_pricing WHERE pricing_id='$posted_id'");
    $img_fch = mysqli_fetch_assoc($chk_img);
    $image = $img_fch['photo'];

    $query = "DELETE FROM `tbl_pricing` WHERE pricing_id='$posted_id'";
    $query_run = mysqli_query($conn, $query);
  if($query_run)
  {
    if(file_exists('upload_img/pricing/'.$image)){
      unlink('upload_img/pricing/'.$image);
    }
    $_SESSION['message'] ="Data has been deleted successfuly....!";
    header("Location: pricing.php");
  }
  else
  {
    $_SESSION['status'] ="Something went wrong....!";
    header("Location: pricing.php");
  }
}

// Add new Designation
if(isset($_POST['add_des'])){
  if(isset($_POST['add_des']))
  {      
        $name = $_POST['desig_name'];

        $data = mysqli_query($conn, "INSERT INTO `tbl_designation`(`designation_id`, `designation_name`) VALUES ('','$name')");

        $_SESSION['message'] = "Add New Data Successfuly....!";
        header("Location: designation.php");
      }
      else
      {
        $_SESSION['status'] = "something went wrong......!";
        header("Location: designation.php");
      }
}

// delete designation
if(isset($_POST['del_des']))
{
    $posted_id = $_POST['del_des'];
    $query = "DELETE FROM `tbl_designation` WHERE designation_id='$posted_id'";
    $query_run = mysqli_query($conn, $query);
  if($query_run)
  {
    $_SESSION['message'] ="Data has been deleted successfuly....!";
    header("Location: designation.php");
  }
  else
  {
    $_SESSION['status'] ="Something went wrong....!";
    header("Location: designation.php");
  }
}

// Add Faq Category
if(isset($_POST['add_faq_catg'])){
  if(isset($_POST['add_faq_catg']))
  {      
        $name = $_POST['faq_name'];

        $data = mysqli_query($conn, "INSERT INTO `tbl_faq_category`(`faq_category_id`, `faq_category_name`) VALUES ('','$name')");

        $_SESSION['message'] = "Add New Data Successfuly....!";
        header("Location: faq-category.php");
      }
      else
      {
        $_SESSION['status'] = "something went wrong......!";
        header("Location: faq-category.php");
      }
}

// delete faq Category
if(isset($_POST['del_faq_catg']))
{
    $posted_id = $_POST['del_faq_catg'];
    $query = "DELETE FROM `tbl_faq_category` WHERE faq_category_id='$posted_id'";
    $query_run = mysqli_query($conn, $query);
  if($query_run)
  {
    $_SESSION['message'] ="Data has been deleted successfuly....!";
    header("Location: faq-category.php");
  }
  else
  {
    $_SESSION['status'] ="Something went wrong....!";
    header("Location: faq-category.php");
  }
}

// Add Faq
if(isset($_POST['add_faq'])){
  if(isset($_POST['add_faq']))
  {      
        $name = $_POST['faq_title'];
        $content = $_POST['faq_content'];

        $data = mysqli_query($conn, "INSERT INTO `tbl_faq`(`faq_id`, `faq_title`,`faq_content`) VALUES ('','$name','$content')");

        $_SESSION['message'] = "Add New Data Successfuly....!";
        header("Location: faq.php");
      }
      else
      {
        $_SESSION['status'] = "something went wrong......!";
        header("Location: faq.php");
      }
}

// delete faq
if(isset($_POST['del_faq']))
{
    $posted_id = $_POST['del_faq'];
    $query = "DELETE FROM `tbl_faq` WHERE faq_id='$posted_id'";
    $query_run = mysqli_query($conn, $query);
  if($query_run)
  {
    $_SESSION['message'] ="Data has been deleted successfuly....!";
    header("Location: faq.php");
  }
  else
  {
    $_SESSION['status'] ="Something went wrong....!";
    header("Location: faq.php");
  }
}

// Add Photo Category
if(isset($_POST['add_photo_catg'])){
  if(isset($_POST['add_photo_catg']))
  {      
        $name = $_POST['cat_name'];
        $content = $_POST['status'];

        $data = mysqli_query($conn, "INSERT INTO `tbl_category_photo`(`p_category_id`, `p_category_name`,`status`) VALUES ('','$name','$content')");

        $_SESSION['message'] = "Add New Data Successfuly....!";
        header("Location: photo-category.php");
      }
      else
      {
        $_SESSION['status'] = "something went wrong......!";
        header("Location: photo-category.php");
      }
}

// delete Photo Category
if(isset($_POST['del_photo_catg']))
{
    $posted_id = $_POST['del_photo_catg'];
    $query = "DELETE FROM `tbl_category_photo` WHERE p_category_id='$posted_id'";
    $query_run = mysqli_query($conn, $query);
  if($query_run)
  {
    $_SESSION['message'] ="Data has been deleted successfuly....!";
    header("Location: photo-category.php");
  }
  else
  {
    $_SESSION['status'] ="Something went wrong....!";
    header("Location: photo-category.php    
    ");
  }
}

// Add New Photo
if(isset($_POST['add_new_photo'])){
  if(isset($_POST['add_new_photo']))
  {      
        $name = $_POST['photo_cap'];
        $files = $_FILES["photo"]["name"];
        $content = $_POST['photo_catg'];

        $data = mysqli_query($conn, "INSERT INTO `tbl_photo`(`photo_id`,`photo_caption`,`photo_name`,`category_id`) VALUES ('','$name','$files','$content')");
        move_uploaded_file($_FILES['photo']['tmp_name'], 'upload_img/photo/'.$files);

        $_SESSION['message'] = "Add New Data Successfuly....!";
        header("Location: photo-gallery.php");
      }
      else
      {
        $_SESSION['status'] = "something went wrong......!";
        header("Location: photo-gallery.php");
      }
}

// delete Photo Gallery
if(isset($_POST['del_photo_gal']))
{
    $posted_id = $_POST['del_photo_gal'];
    $chk_img  = mysqli_query($conn, "SELECT  * FROM tbl_photo WHERE photo_id='$posted_id'");
    $img_fch = mysqli_fetch_assoc($chk_img);
    $image = $img_fch['photo'];

    $query = "DELETE FROM `tbl_photo` WHERE photo_id='$posted_id'";
    $query_run = mysqli_query($conn, $query);
  if($query_run)
  {
    if(file_exists('upload_img/photo/'.$image)){
      unlink('upload_img/photo/'.$image);
    }
    $_SESSION['message'] ="Data has been deleted successfuly....!";
    header("Location: photo-gallery.php");
  }
  else
  {
    $_SESSION['status'] ="Something went wrong....!";
    header("Location: photo-gallery.php");
  }
}

// Add New Video Category
if(isset($_POST['add_video_catg'])){
  if(isset($_POST['add_video_catg']))
  {      
        $name = $_POST['category_name'];
        $content = $_POST['status'];

        $data = mysqli_query($conn, "INSERT INTO `tbl_category_video`(`v_category_id`,`v_category_name`,`status`) VALUES ('','$name','$content')");

        $_SESSION['message'] = "Add New Data Successfuly....!";
        header("Location: video-category.php");
      }
      else
      {
        $_SESSION['status'] = "something went wrong......!";
        header("Location: video-category.php");
      }
}

// delete Video Category
if(isset($_POST['del_video_catg']))
{
    $posted_id = $_POST['del_video_catg'];
    $query = "DELETE FROM `tbl_category_video` WHERE v_category_id='$posted_id'";
    $query_run = mysqli_query($conn, $query);
  if($query_run)
  {
    $_SESSION['message'] ="Data has been deleted successfuly....!";
    header("Location: video-category.php");
  }
  else
  {
    $_SESSION['status'] ="Something went wrong....!";
    header("Location: video-category.php    
    ");
  }
}

// Insert Booking
if(isset($_POST['book_now']))
{
  if(isset($_POST['book_now']))
  {
    $car_id = $_GET['veh-id'];
    $name = $_POST['name'];
    $mobile_number = $_POST['mobile_number'];
    $whatsapp_number = $_POST['whatsapp_number'];
    $cnic = $_POST['cnic'];
    $arival_date = $_POST['arival_date'];
    $departure_date = $_POST['departure_date'];
    $message = $_POST['message'];

    $data = mysqli_query($conn, "INSERT INTO `booking`(`id`, `car_id`, `name`, `mobile`, `wapp`, `cnic`, `adate`, `ddate`, `message`) VALUES ('','$car_id','$name','$mobile_number','$whatsapp_number','$cnic','$arival_date','$departure_date','$message')");

    $_SESSION['message'] = "Add New Data Successfuly....!";
    header("Location: ../booking.php");
  }
  else
  {
    $_SESSION['status'] = "something went wrong......!";
    header("Location: ../booking.php");
  }
}

?>
