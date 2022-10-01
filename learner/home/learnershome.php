
<?php  include '../learnerheader/header.php'; 
?>
<body>
   

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
      <li class="nav-item">
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
      <th scope="col  px-5">my course</th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><a class='link  px-5' id='progress' href='#'>progress</a></th>
    </tr>
    <tr>
      <th scope="row"><a class='link  px-5' href='#' id='badges' >badges</a></th>
    </tr>
  </tbody>
</table>
<table class="table table-white px-5">
  <thead>
    <tr>
      <th scope="col  px-5">my Account</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><a class='link  ' href='#' id='myprofile'>my profile</a></th>
    </tr>
    <tr>
      <th scope="row"><a class='link ' href='#' id='teachers' >teachers</a></th>
    </tr>
  </tbody>
</table>
</div>
</section>

<section class='row  d-inline-block p-5'>
    <div class='col-6 items p-5'>
        
</div>
</section>


<script src='../../frameworks/jquery.js'></script>
<script>
$(document).ready(function(){




  //dynamichero

    $('.items').load('./dynamichero/progress.php')

    $('#progress').click(function(){
   $('.items').load('./dynamichero/progress.php')
    })
    $('#badges').click(function(){
        $('.items').load('./dynamichero/badges.php')
    })
    $('#myprofile').click(function(){
        $('.items').load('./dynamichero/myprofile.php')
    })
    $('#teachers').click(function(){
        $('.items').load('./dynamichero/teachers.php')
    })

})

</script>
</body>
</html>