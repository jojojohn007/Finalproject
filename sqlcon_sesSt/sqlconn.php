<?php

$servername='localhost';
$username='root';
$password ='';
$db='besquareacademy';


$Otimeconn = new mysqli($servername,$username,$password) ;

$createDb = 'CREATE DATABASE IF NOT EXISTS besquareacademy' ;
$shootDb = $Otimeconn->query($createDb) ;

$conn = new mysqli($servername,$username,$password , $db) ;

$createTable ='CREATE TABLE IF NOT EXISTS students(id int NOT NULL AUTO_INCREMENT ,student_name VARCHAR(256),student_mNumber VARCHAR(30), email VARCHAR(30) ,password VARCHAR(256),PRIMARY KEY(id) )' ;
$shootTable =$conn->query($createTable);

// $createcarttable = 'CREATE TABLE IF NOT EXISTS cart(id int NOT NULL AUTO_INCREMENT ,img VARCHAR(256),name VARCHAR(30),price VARCHAR(7) ,PRIMARY KEY(id))' ;
// $shoottable= $conn->query($createcarttable);

// $createwishtable = 'CREATE TABLE IF NOT EXISTS wish(id int NOT NULL AUTO_INCREMENT ,img VARCHAR(256),name VARCHAR(30),price VARCHAR(7),btnstate VARCHAR(30) ,PRIMARY KEY(id))' ;
// $shoottable= $conn->query($createwishtable);


// $createadmintable = 'CREATE TABLE IF NOT EXISTS admin(id int NOT NULL AUTO_INCREMENT ,name VARCHAR(256),password VARCHAR(30),PRIMARY KEY(id))' ;
// $shoottable= $conn->query($createadmintable);

// $createusertable = 'CREATE TABLE IF NOT EXISTS users(id int NOT NULL AUTO_INCREMENT ,firstname VARCHAR(256),lastname VARCHAR(256),password VARCHAR(30),email VARCHAR(256),address VARCHAR(256),PRIMARY KEY(id))' ;
// $shoottable= $conn->query($createusertable);


// $sql = 'SELECT * FROM admin WHERE password = "admin" ';
// $query = $conn->query($sql);
// $numrow = mysqli_num_rows($query);

// if($numrow<=0){
// $sql = 'INSERT INTO admin(name,password) VALUES ("admin","admin")' ;
// $query = $conn->query($sql);
// }

?>