<?php

include '../sqlcon_sesSt/sqlConn.php';

$email = $_POST['email'] ;
$password = $_POST['password'];


$dataselect = 'SELECT * FROM students WHERE email="'.$email.'"  ' ;



$sql = $conn->query($dataselect);

$row = mysqli_fetch_assoc($sql) ;

$proceed = password_verify($password,$row['password']) ;

if($proceed){

    include '../sqlcon_sesSt/sessionSt.php';

   
        $_SESSION['username'] = $row['student_name'];
        $_SESSION['password'] =$password ;
        $_SESSION['email'] =$email ;
        $_SESSION['mNumber'] =$row['mNumber'] ;
    
    
    
    
    
        header('location:../learner/home/learnershome.php');
        
    }else if($row['email']) {
        include '../sqlcon_sesSt/sessionSt.php';
        $_SESSION['message']='Please enter your password correctly and try again';
        header('location:../msg/usernotfound.php');
    }else {
        include '../sqlcon_sesSt/sessionSt.php';
        $_SESSION['message']='Sorry,User not found check your email ,password then try again...';
        header('location:../msg/usernotfound.php');
    }



?>