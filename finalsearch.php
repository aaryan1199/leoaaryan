<html>
<head>
<style>
body{margin:0; padding:0; background:url(fd6.jpg); background-repeat:no-repeat;   background-size: 100%; background-attachment:fixed;	}


table{ 
    border:solid;
    border-color:black;
 }
 #d{
	 font-size:28px;
	  font-weight: bold;
	 color: white;
 }
</style>
</head>
<body>
<?php
  session_start();
  $con=mysqli_connect('localhost','root','','recipedb');
  $i1=$_POST['ing1'];
  $i2=$_POST['ing2'];
  $i3=$_POST['ing3'];
  $i4=$_POST['ing4'];
  $i5=$_POST['ing5'];
  $i6=$_POST['ing6'];
  $i7=$_POST['ing7'];
  $i8=$_POST['ing8'];
  $type=$_SESSION['type'];
  $sql="select * from foodtable where TYPE='$type' and (ING1='$i1' or ING2='$i1' or ING3='$i1' or ING1='$i2' or ING2='$i2' or ING3='$i2' or ING1='$i3' or ING2='$i3' or ING3='$i3'
        or ING1='$i4' or ING2='$i4' or ING3='$i4' or ING1='$i5' or ING2='$i5' or ING3='$i5' or ING1='$i6' or ING2='$i6' or ING3='$i6' 
		  or ING1='$i7' or ING2='$i7' or ING3='$i7' or ING1='$i8' or ING2='$i8' or ING3='$i8')";
  echo "<table border=1 id='d'><tr><th>SNO</th><th>RECIPE NAME</th><th>TYPE</th><th>PROCEDURE</th><th>INGEDIENTS</th><th>BENEFITS</th><th>CALORIFIC VALUE</th>";
  $result=mysqli_query($con,$sql);
  $num=mysqli_num_rows($result);
  $j=1;
  for($i=0;$i<$num;$i++)
  {
	 if($i%2==0){
	  $row=mysqli_fetch_array($result);
      echo "<tr class='x'><td>".$j."</td><td>".$row['RECIPE NAME']."</td><td>".$row['TYPE']."</td><td>".$row['PROCEDURES']."</td><td>".$row['INGNO']."</td>
	 <td>".$row['BENEFITS']."</td><td>".$row['CALORIFIC VALUE']."</td></tr>"; $j++;}
	 else{
	  $row=mysqli_fetch_array($result);
      echo "<tr class='y'><td>".$j."</td><td>".$row['RECIPE NAME']."</td><td>".$row['TYPE']."</td><td>".$row['PROCEDURES']."</td><td>".$row['INGNO']."</td>
	 <td>".$row['BENEFITS']."</td><td>".$row['CALORIFIC VALUE']."</td></tr>"; $j++;}		 
  }
  echo "</table>";
?>
</body>
</html>