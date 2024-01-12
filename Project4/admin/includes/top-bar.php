<?php //include('database/authentication.php'); 
include "connection.php";
?>
<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link text-white" style="font-size: 1.4rem;">Admin Panel</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link"  href="#">
          <img src="upload_img/profile/<?php echo $_SESSION['user_photo']?>" style="height: 5vh; width: 5vh; border-radius: 30px;" alt="profile">
        </a>
      </li>
      <li class="nav-item">
      <form action="code.php" method="post">
        <button class="nav-link btn"  data-toggle="dropdown">
        <?php 
              if(isset($_SESSION['auth']))
              {
                echo $_SESSION["user_name"];
              }
              else
              {
                echo "Not Logged in";
              }
          ?>
          <?php    ?>
        </button>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="edit-profile.php" class="dropdown-item">
            Profile Change
          </a>
          <div class="dropdown-divider"></div>
            <button href="log_out.php" class="dropdown-item" name="logout">
              Log-Out
            </button>
        </div>
      </form>      
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->