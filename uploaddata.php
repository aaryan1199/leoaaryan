<?php
session_start();
 $recipename=$_POST['recipename'];
 $type=$_POST['type'];
 $ing1=$_POST['ing1'];
 $ing2=$_POST['ing2'];
 $ing3=$_POST['ing3'];
 $preparation=$_POST['preparation'];
 $ingredients=$_POST['ingredients'];
 $benefits=$_POST['benefits'];
 $calorificvalue=$_POST['calorificvalue'];
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'recipedb');
 $q="SELECT * FROM foodtable WHERE RECIPE NAME='$recipename'";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 if($num==1)
{
   header('location:http://localhost/insert/about.php');

}
else
{ 
   $q="INSERT INTO foodtable /*(RECIPE NAME,TYPE,ING1,ING2,ING3,PROCEDURES,INGNO,BENEFITS,CALORIFIC VALUE)*/ VALUES('','$recipename','$type','$ing1','$ing2','$ing3','$preparation','$ingredients','$benefits','$calorificvalue')";
   mysqli_query($con,$q);
   header('location:http://localhost/insert/home1.php');	
}

 mysqli_close($con);
 ?>