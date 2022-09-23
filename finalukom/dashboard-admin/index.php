<?php 
session_start();
include '../conn/conn.php';

if (isset($_SESSION['level'])) {
 	include '../app/view/petugas-dashboard.php';
 }else{
 	header("location: login.php");
 } 

?>