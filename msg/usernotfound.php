
<?php include '../sqlcon_sesSt/sessionSt.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error finding user</title>
</head>

<body class= 'text-center'>





    
<h1><?php echo $_SESSION['message'] ; ?></h1>
<?php if(isset($_SESSION['student'])){ ?>

<h1 class='m-5'><a href='../learner/studentRegistration.php'>new to besquare</a></h1>  
<h1 class='m-5'><a href='../learner/studentSignin.php'>try login again</a></h1>
<?php } ?>

<?php if(isset($_SESSION['teacher'])){ ?>

<h1 class='m-5'><a href='../teacher/teacherRegistration.php'>new to besquare</a></h1>  
<h1 class='m-5'><a href='../teacher/teacherSignin.php'>try login again</a></h1>
<?php } ?>

<?php if(isset($_SESSION['parent'])){ ?>

<h1 class='m-5'><a href='../parent/parentRegistration.php'>new to besquare</a></h1>  
<h1 class='m-5'><a href='../parent/parentSignin.php'>try login again</a></h1>
<?php } ?>

<?php

exit();

?>  
</body>
</html>