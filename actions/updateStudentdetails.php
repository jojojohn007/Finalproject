<?php
include '../sqlcon_sesSt/sqlconn.php';

$username = $_POST['firstname'];
$email=$_POST['email'];
$password=$_POST['password'];



$data = 'SELECT * FROM students WHERE email="'.$email.'" ';

$result = $conn->query($data);

$row = mysqli_fetch_assoc($result);


echo $proceed = password_verify($password,$row['password']) ;

if($proceed){
    $sql = 'UPDATE students SET  "student_name" , "student_Mnumber", "email", "password" WHERE email = "'.$email.'"' ;
}

?>