<?php
include '../actions/getpageurl.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name='description' >
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script  defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<link rel='stylesheet' href='programme.css'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>question2</title>
</head>
</html>
<body>
<div class="container mt-sm-5 my-5">
    <div class='row'>
    <div class="question d-inline-block  col-6 pt-2">
        <div class="py-2 h5 "><b>Exercise 1</b></div>
        <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
            <span class="value1 m-0" >465 
            </span>
            <span class="value1 m-0" >+
            </span>
            <span class="value2">545
            </span>
            <span class="value3">
                    <div id="input">
                        <input id='answer'  type="text" aria-label='answer'  >
        </div>
       
            <button class="btn btn-info mt-2" onclick='check()'>check</button>
       
            </span>
        </div>
    </div>
    <div class='float-end message text-center col-3'>
        <span class='col-2 msg-span'>Write answer !</span>
    <img class='img-fluid float-end m-0 '   atl='nb' src='../actions/sparkles.gif'>
    </div>
    <hr>
    <div class="d-flex align-items-center pt-3">
        <div id="prev mx-4">
            <button class="btn btn-primary" ><a class='link' href='programme1.php'>Previous</a></button>
        </div>
       
        <div class="ml-auto mr-sm-5 mx-4 ct">
            
        </div>
    </div>
</div>
</div>

</body>
<script>
   let pageurl = '<?php echo  $app_url ?>/';
   let nextpage= 'programme3.php'
</script>
<script src='../jquery.js'> </script>
<script src='../actions/checkanswer.js'> </script>
</html>
