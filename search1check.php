<?php
session_start();
if($_POST['NON-VEG'])
 {
   $_SESSION['type']=$_POST['NON-VEG'];
   header('location:http://localhost/insert/search2.php');
 }

else if($_POST['VEG'])
 {
   $_SESSION['type']=$_POST['VEG'];
   header('location:http://localhost/insert/search2.php');
 }
 
else if($_POST['SNACKS'])
 {
   $_SESSION['type']=$_POST['SNACKS'];
   header('location:http://localhost/insert/search2.php');
 }
 
else if($_POST['DESSERT'])
 {
   $_SESSION['type']=$_POST['DESSERT'];
   header('location:http://localhost/insert/search2.php');
 }
 
else if($_POST['CHINESE'])
 {
   $_SESSION['type']=$_POST['CHINESE'];
   header('location:http://localhost/insert/search2.php');
 }
 
else if($_POST['ITALIAN'])
 {
   $_SESSION['type']=$_POST['ITALIAN'];
   header('location:http://localhost/insert/search2.php');
 }
 
else if($_POST['BEVERAGE'])
 {
   $_SESSION['type']=$_POST['BEVERAGE'];
   header('location:http://localhost/insert/search2.php');
 }
?>