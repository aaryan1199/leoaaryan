<?php
session_start();
 $username=$_POST['username'];
 $password=$_POST['password'];
 $email=$_POST['e-mail'];
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'user');
 $q="SELECT * FROM details WHERE USERNAME='$username' OR E-MAIL='$email'";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 if(filter_var($email,FILTER_VALIDATE_EMAIL)!=TRUE){
		$msg="Invalid Email Format. Correct Format example@mail.com";
		 echo '<script language="javascript">';
		 echo 'alert("' . $msg . '")';
		 echo '</script>';
		 $check=FALSE;
		 header('location:http://localhost/insert/signup.php');
	}
	else{
 if($num==1)
{
   header('location:http://localhost/insert/signup.php');

}
else
{ 
   $q="INSERT INTO details /*(USERNAME,PASSWORD,E-MAIL)*/ VALUES('$username','$password','$email')";
   mysqli_query($con,$q);
   header('location:http://localhost/insert/login.php');	
}
	}
 mysqli_close($con);
 ?>



