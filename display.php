<?php
 echo "working<br>";
 $ing=$_POST['ing'];
  $ing2=$_POST['ing2'];
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'foody');
 $q="select * from recipe3 where ing1='$ing' OR ing2='$ing' OR ing3='$ing' OR ing1='$ing2' OR ing2='$ing2' OR ing3='$ing2'";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 
 for($i=0;$i<=$num;$i++)
 {
	 $row=mysqli_fetch_array($result);
	 echo "RECIPE NAME  "; echo $row['RECIPE NAME']."<br>";
	 echo "BENEFITS     "; echo $row['BENEFITS']."<br>";
	 echo "PREPARATION  "; echo $row['PREPARATION']."<br>";
	 echo "CAL VALUE    "; echo $row['CALORIFIC VALUE']."<br><br><br>";
 }
 
  $q="select * from recipe4 where ing1='$ing' OR ing2='$ing' OR ing3='$ing' OR ing4='$ing' OR ing1='$ing2' OR ing2='$ing2' OR ing3='$ing2' OR ing4='$ing2'";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 if($result)
 for($i=0;$i<=$num;$i++)
 {
	 $row=mysqli_fetch_array($result);
	 echo "RECIPE NAME  "; echo $row['RECIPE NAME']."<br>";
	 echo "BENEFITS     "; echo $row['BENEFITS']."<br>";
	 echo "PREPARATION  "; echo $row['PREPARATION']."<br>";
	 echo "CAL VALUE    "; echo $row['CALORIFIC VALUE']."<br><br><br>";
 }

 mysqli_close($con);
 ?>