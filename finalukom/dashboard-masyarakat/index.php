<?php 
session_start();
include '../conn/conn.php';

if (isset($_SESSION['username'])) {
 	include '../app/view/masyarakat-dashboard.php';
 }else{
 	header("location: login.php");
 } 

?>