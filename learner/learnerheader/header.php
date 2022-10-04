<?php 
include '../../sqlcon_sesSt/sessionSt.php';
if(!isset($_SESSION['username'])){

  include '../../sqlcon_sesSt/sessionDy.php';
  header ('location:../../learner/studentSigning.php' );
}
?>

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
      <ul class=''>
        <li>  <a class="nav-link" href="#">class 1 </a></li>
        <li>  <a class="nav-link" href="#">class 2 </a></li>
        <li>  <a class="nav-link" href="#">class 3 </a></li>
        <li>  <a class="nav-link" href="#">class 4 </a></li>
        <li>  <a class="nav-link" href="class5.php">class 5 </a></li>
      </ul>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">status</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">settings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href='../../sqlcon_sesSt/sessionDy.php'>logout</a>
      </li>
    </ul>
  </div>
</nav>