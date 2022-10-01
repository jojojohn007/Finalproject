<?php  include '../../sqlcon_sesSt/sessionSt.php'; 


include '../../frameworks/bootstrap.php' ; 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> welcome <?php echo $_SESSION['username'] ;?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">logo <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">courses</a>
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

<!-- banner -->
<section class='row d-inline-block'>
    <div class='col-6'>
<table class="table table-white">
  <thead>
    <tr>
      <th scope="col">my course</th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><a class='link'>progress</a></th>
    </tr>
    <tr>
      <th scope="row"><a class='link' >badges</a></th>
    </tr>
  </tbody>
</table>
<table class="table table-white">
  <thead>
    <tr>
      <th scope="col">my Account</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><a class='link'>my profile</a></th>
    </tr>
    <tr>
      <th scope="row"><a class='link' >teachers</a></th>
    </tr>
  </tbody>
</table>
</div>
</section>

<section class='row bg-black d-inline-block p-5'>
    <div class='col-6 items p-5'>
        
</div>
</section>
</body>
</html>