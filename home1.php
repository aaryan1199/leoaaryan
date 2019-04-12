<?php
 session_start();
 if(!$_SESSION['username'])
 {
	    header('location:http://localhost/insert/login.php');
		
 }
?>
<html>
<head>
<title>HOME PAGE</title>
<style>
 body
{	
 margin:0px;
 background: url("fd5.jpg");    
 background-repeat: no-repeat;
 background-repeat:no-repeat;   background-size: 100%; background-attachment:fixed;
}

#myVideo{
	position: fixed;
	right:0;
	bottom:0;
	min-width: 100%;
	min-height: 100%;
	z-index:-4;
}
.x
{
 background-color:black;
 opacity:0.7;
}
a
{

background-color:blue;
border-color:green;
text-decoration:none;
font-size:20px;
color:white;
position:relative;
left:30px;
top:24px;
}
a:hover
{
	background-color:blue;
}
#d1
{   position:absolute;
     border-style:outset;
    border-width:4px;
	top:500px;
	left:1350px;
	height:80px;
	width:150px;
	background-color:blue;
}
#d2
{   position:absolute;
    border-style:outset;
    border-width:4px;
	top:300px;
	left:550px;
	height:80px;
	width:150px;
	background-color:blue;
}
#d3
{    border-style:outset;
    border-width:4px;
    position:absolute;
	top:400px;
	left:950px;
	height:80px;
	width:150px;
	background-color:blue;
}
#d4
{   border-style:outset;
    border-width:4px;
	position:absolute;
	top:200px;
	left:150px;
	height:80px;
	width:150px;
	background-color:blue;
}
#d1:hover{background-color:blue; border-color:red; border-width:10px;}
#d2:hover{background-color:blue; border-color:red; border-width:10px;}
#d3:hover{background-color:blue; border-color:red; border-width:10px;}
#d4:hover{background-color:blue; border-color:red; border-width:10px;}
#d5{ height:80px;}

</style>
<script>

window.history.forward();
	function noBack() { window.history.forward(); }
</script>
</head>
<body>
<video autoplay muted loop id="myVideo">
     <source src="videoplayback.mp4" type="video/mp4">
</video>	 

<div class="x">
   <div id="d5"><h1 style="color:orange;">HELLO , <?php echo $_SESSION['username'];?></h1><h1 align="right"style="color:white; position:relative; top:-20px;">WELCOME TO YOUR DASHBOARD </h1></div>
    <div id="d1"><a href="logout.php">LOGOUT</a></div>
     <div id="d2"><a href="search1.php">SEARCH</a></div>
	   <div id="d3"><a href="upload.php">UPLOAD</a></div>
       <div id="d4"><a href="about.php">ABOUT</a></div>
</div>	   

</body>
</html>
