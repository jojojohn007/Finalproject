<?php

include '../sqlcon_sesSt/sqlConn.php';

$email = $_POST['email'] ;
$password = $_POST['password'];


$dataselect = 'SELECT * FROM students WHERE email="'.$email.'" and password ="'.$password.'"  ' ;

$sql = $conn->query($dataselect);

$row = mysqli_fetch_assoc($sql) ;

if($row){

    include '../sqlcon_sesSt/sessionSt.php';

   
        $_SESSION['username'] = $username ;
        $_SESSION['password'] =$password ;
        $_SESSION['id'] =$row['id'];
        $_SESSION['profile'] =$profile ;
        $_SESSION['email'] =$email ;
        $_SESSION['sapid'] =$sapId  ;
        $_SESSION['cgpa'] =$cgsp ;
        $_SESSION['contact'] =$contact ;
    
    
    
    
    
        header('location:home.php');
        
    }else {
        header('location:../msg/usernotfound.php');
    }


?>