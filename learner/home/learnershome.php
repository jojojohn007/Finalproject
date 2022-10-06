
<?php  include '../learnerheader/frameworks.php'; 
?>
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
<body>
   
<header class='header'>

</header>
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


//dynamic header
$('.header').load('../learnerheader/header.php')
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
<?php

// if user acess this particular file without login user gets redirected to login page
if(!isset($_SESSION['username'])){
  header('../../sqlcon_sesSt/sessionSt.php'); 
}
?>
</body>
</html>