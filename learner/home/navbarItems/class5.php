<?php  include '../../../frameworks/bootstrap.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class5</title>
    <script src='../../../frameworks/jquery.js'></script>
 <style>
    .dropdown {
        display: none;
    }

 </style>

</head>
<body class='container-fluid'>
    <header class='header'><nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">logo </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../learnershome.php">Home </a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link " href="#">Select course </a>
      <ul class=''>
        <li>  <a class="nav-link" href="#">class 1 </a></li>
        <li>  <a class="nav-link" href="#">class 2 </a></li>
        <li>  <a class="nav-link" href="#">class 3 </a></li>
        <li>  <a class="nav-link" href="#">class 4 </a></li>
        <li>  <a class="nav-link" href="#">class 5 </a></li>
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
 </header>
 <section class='row'>
    <h2>Multi-digit addition</h2>
<div class='col-sm-3  vid1' onclick='pop(this)' >
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="class5-items/cardprofiles/numbers.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class='col-sm-3 ex-1' >
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="class5-items/cardprofiles/exercise.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class='col-sm-3  ex-2' >
<div class="card" style="width: 18rem;">
  <img class="card-img-top " src="class5-items/cardprofiles/exercise.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

<div class='col-sm-3  ex-3' >
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="class5-items/cardprofiles/exercise.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

<div class='col-sm-3 mt-5 ex-4' >
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="class5-items/cardprofiles/exercise.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

</section>
    
</body>
<script defer>  
   $(document).load('../learnershome.php') 
function pop() {
    
}

</script>
</html>