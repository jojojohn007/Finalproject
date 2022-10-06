
<?php
include '../actions/getpageurl.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script  defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</head>
<body class='container-fluid text-center'>
    

<h1>Adding three digit numbers </h1>

<video id='currentvid' class=' img-fluid col' height='250' onload='myvid(this)' controls autoplay>
<source type='video/mp4' src='../class5-items/class5-v1-Adding three digit numbers with regrouping _ Addition and subtraction _ Arithmetic.mp4'>
</video>
<!-- <script src='../actions/changeurl.js'> </script> -->
<script>
   let pageurl = '<?php echo  $app_url ?>/'
    function myvid(e) {
let vid = document.querySelector('#currentvid')
let currenttime = vid.currentTime
let endtime=vid.duration
if(currenttime>=endtime){
     loadnextcontent(vid)
}

    }
 let check =   setInterval(() => {
       myvid()
    }, 
    10);

    function loadnextcontent(vid){

        window.location.replace(pageurl + 'programme2.php')

clearInterval(check)
    }

</script>
</body>
</html>