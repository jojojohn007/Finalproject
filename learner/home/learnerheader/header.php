<?php 
include '../../../sqlcon_sesSt/sessionSt.php'; 
if(!isset($_SESSION['username'])){

  session_destroy() ;
  

  echo '<script>
  window.location.replace("http://localhost/finalproject/learner/studentSignin.php")
  </script>';

}
?>
<head>
<style>
  .dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> welcome <?php echo $_SESSION['username'] ;?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">logo </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Home </a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link " href="#">Select course </a>
      <ul class='dropdown-content'>
        <li>  <a class="nav-link" href="#">class 1 </a></li>
        <li>  <a class="nav-link" href="#">class 2 </a></li>
        <li>  <a class="nav-link" href="#">class 3 </a></li>
        <li>  <a class="nav-link" href="#">class 4 </a></li>
        <li>  <a class="nav-link" href="class5.php">class 5 </a></li>
      </ul>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="navbarOptions/status.php">status</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="navbarOptions/settings.php">settings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href='../../sqlcon_sesSt/sessionDy.php'>logout</a>
      </li>
    </ul>
  </div>
</nav>