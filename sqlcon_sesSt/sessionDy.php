<?php 
include 'sessionSt.php';
session_destroy();

header ('location:../index.php');

?>
