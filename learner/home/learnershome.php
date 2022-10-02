
<?php  include '../learnerheader/frameworks.php'; 
?>
<style>
.dropdown :hover .dropdown ul {
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
</body>
</html>