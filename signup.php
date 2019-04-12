<!DOCTYPE html>
<html>
<head>
 <title> SIGNUP PAGE </title>
<style>
 body
{	
  background: linear-gradient(to bottom, #00cc99 0%, #00cc66 100%);   
 background-repeat: no-repeat;
 background-size: 1540px 800px;

}
 #myVideo{
	position: fixed;
	right:0;
	bottom:0;
	min-width: 100%;
	min-height: 100%;
	z-index:-4;
}
#d1
{
 background-color:black;
 position:relative;
 top:-28px;
 width:1548px;
 height:80px;
 left:-20px;
 }
 
 #d2
 {
  background-color:black;
  position:relative;
  height:400px;
  width:700px;
  left:400px;
  top:100px;
  border-style:outset;
  border-color:grey;
  border-radius:10px;
  border-width:2px;
  opacity:0.8;
 }
 


 .avatar
 {
   height:80px;
   width:70px;
   position:absolute;
   top:-50px;
   left:160px;
   border-radius:500px;
   border-style:outset;
  
 }
 
 #h
 {
  position:relative;
  top:40px;
  left:270px;
  color:white;
 }
 
 #p1 
 {
  MARGIN:4px;
  position:relative;
  left:70px;
  height:40px;
  width:540px;
  top:40px;
  border-style:solid;
  border-radius:10px;
  
 }
 #p2
 {
  position:relative;
  top:100px;
  left:-450px;
  background-color:pink;
  border-radius:50px;
  height:40px;
  width:80px;
 }
 #p2:hover
 { 
  color:white;
  background-color:green;
 }
 
 a
 {
	 border-style:inset;
	 background-color:pink;
	 font-size:20px;
	 position:relative;
	 top:350px;
	 left:420px;
	 text-decoration:none;
	 border-radius:50px;
	 height:140px;
	 border-color:pink;
	 border-width:9px;
 }
  a:hover
 {
    color:white;
    background-color:green;	
 }
#a1
{
	color:blue;
	background-color:;
}
 </style>
<script>
	window.history.forward();
	function noBack() { window.history.forward(); }
	
function validation()
{
 var result=true;
 var i=document.getElementsByTagName("input");
 if(i[0].value.length==0 || i[1].value.length==0 || i[2].value.length==0)
     {
       result=false;
        document.getElementById('errorname').innerHTML="ENTER DETAILS";
      } 

 return result;
}

</script>
</head>

 
<body style="margn:0;">
<video autoplay muted loop id="myVideo">
     <source src="videoplayback.mp4" type="video/mp4">
</video>
<div id="d1"><h1 align="center"  style="color:indigo; font-family:courier new; font-size:80px; 
          text-shadow:2px 2px 2px orange; position:relative; left:18px;">GARDEN OF RECIPES</h1> </div>

<div ID="d2">
   <div id="a1"><a href="login.php">LOGIN</a></div>
   <img src="login.png" class="avatar">
   <h3 id="h">SIGNUP HERE</h3>
   
   <br/><span style="color:red; position:relative; left:380px; background-color:yellow; font-size:20px;" id="errorname"></span> <br/>
  <form action="" method="POST" onsubmit="return validation()">
   <input  id="p1" name="username" type="text" placeholder="USERNAME" /> 
    <input  id="p1" type="password" name="password" placeholder="PASSWORD" />
	 <input  id="p1" type="text" name="e-mail" placeholder="e-MAIL"	/>
	<input id="p2" type="submit"  value="signup">
	<div style="position:relative; left:270px; top:65px; color:blue;">already a member?</div>
  </form>
</div>		  
 </form>
</body>
</html>

<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE); 
session_start();
 $username=$_POST['username'];
 $password=$_POST['password'];
 $email=$_POST['e-mail'];
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'user');
 $q="SELECT * FROM details WHERE USERNAME='$username'";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 if(isset($email) && isset($username) &&  isset($password)){
 if(filter_var($email,FILTER_VALIDATE_EMAIL)!=TRUE && strlen($username)>0 && strlen($password)>0){
		$msg="Invalid Email Format. Correct Format example@mail.com";
		 echo '<script language="javascript">';
		 echo 'alert("' . $msg . '")';
		 echo '</script>';
		 $check=FALSE;
	}
	else{
 if($num>0)
{
   		 echo '<script language="javascript">';
		 echo 'alert("USERNAME ALREADY EXISTS")';
		 echo '</script>';

}
else
{ 
   $q="INSERT INTO details /*(USERNAME,PASSWORD,E-MAIL)*/ VALUES('$username','$password','$email')";
   mysqli_query($con,$q);
   header('location:http://localhost/insert/login.php');	
}
 }}
 mysqli_close($con);
 ?>



