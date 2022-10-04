<?php
include '../sqlcon_sesSt/sqlConn.php';

if(isset($_POST['student'])){
$username = $_POST['firstname'];
$email = $_POST['email'] ;
$number = $_POST['mNumber'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);



// $insertData = 'INSERT INTO  `students_details` VALUES ( , name="'.$username.'" , profile = "none" ,email="'.$email.'" , sap_id="'.$sapId.'" , cgpa = "'.$cgpa.'" , contact = "'.$contact.'" , password = "'.$password.'" ) ';
$dataselect = 'SELECT * FROM students WHERE student_name="'.$username.'"   ' ;
$check=$conn->query($dataselect);
$row = mysqli_fetch_assoc($check);




$_SESSION['myname'] = "" ;
$_SESSION['emptymsg'] = "";




if($row['name']){
    $_SESSION['repeatedName'] = "<script>
    let msg = document.getElementById('errorfield') ;
    msg.textContent = 'username already taken !'
    fade();
    </script>";
    header('location:register.php') ;
}else if( !$username== NULL) {
    $insertData ="INSERT INTO `students`( `student_name`, `student_Mnumber`, `email`, `password`) VALUES ('$username','$number','$email','$password')" ;
$sql = $conn->query($insertData);
    header("location:../teacher/teacherSignin.php");
}


if($username == ''){
    $_SESSION['repeatedName'] = "";
$_SESSION['emptymsg'] = "<script>
let msg1 = document.getElementById('msgForEmpty') ;
msg1.textContent = 'please fill your input fields !';
fade()
</script>";
header("location:register.php");

}

}

//teacher

if(isset($_POST['teacher'])){
    echo 'hiii' ;
    $username = $_POST['firstname'];
    $email = $_POST['email'] ;
    $number = $_POST['mNumber'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    
    
    
    // $insertData = 'INSERT INTO  `students_details` VALUES ( , name="'.$username.'" , profile = "none" ,email="'.$email.'" , sap_id="'.$sapId.'" , cgpa = "'.$cgpa.'" , contact = "'.$contact.'" , password = "'.$password.'" ) ';
    $dataselect = 'SELECT * FROM teachers WHERE teacher_name="'.$username.'"   ' ;
    $check=$conn->query($dataselect);
    $row = mysqli_fetch_assoc($check);
    
    
    
    
    $_SESSION['myname'] = "" ;
    $_SESSION['emptymsg'] = "";
    
    
    
    
    if($row['name']){
        $_SESSION['repeatedName'] = "<script>
        let msg = document.getElementById('errorfield') ;
        msg.textContent = 'username already taken !'
        fade();
        </script>";
        header('location:register.php') ;
    }else if( !$username== NULL) {
        $insertData ="INSERT INTO `teachers`( `teacher_name`, `teacher_Mnumber`, `email`, `password`) VALUES ('$username','$number','$email','$password')" ;
    $sql = $conn->query($insertData);
        header("location:../teacher/teacherSignin.php");
    }
    
    
    if($username == ''){
        $_SESSION['repeatedName'] = "";
    $_SESSION['emptymsg'] = "<script>
    let msg1 = document.getElementById('msgForEmpty') ;
    msg1.textContent = 'please fill your input fields !';
    fade()
    </script>";
    header("location:register.php");
    
    }
    
    }
    
 
    

?>