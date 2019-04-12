<?php
 session_start();
 if(!isset($_SESSION['type']))
 {
		header('location:http://localhost/insert/search2.php');
 }
?>
<html>
<head>
<style>
 body
{	 
 margin:0px;
 background: url("fd1.jpg");    
 background-repeat: no-repeat;
 background-size: 1560px 1000px;
}
input
{
	border-style:groove;
	margin:2px;
	border-radius:50px;
	size:100;
	width:540px;
}

#dx
{   border-style:outset;
    border-width:4px;
	position:absolute;
	top:50px;
	left:1250px;
	height:40px;
	width:150px;
	background-color:blue;
	color:white;
}
#dy
{   border-style:outset;
    border-width:4px;
	position:absolute;
	top:50px;
	left:1050px;
	height:40px;
	width:150px;
	color:white;
	background-color:blue;
}
#dz
{   border-style:outset;
    border-width:4px;
	position:absolute;
	top:50px;
	left:850px;
	height:40px;
	width:150px;
	color:white;
	background-color:blue;
}
#dx:hover{background-color:blue; border-color:red; border-width:5px;}
#dy:hover{background-color:blue; border-color:red; border-width:5px;}
#dz:hover{background-color:blue; border-color:red; border-width:5px;}
	
	#s{		background-color:purple;
	    color:white;}
	#s:hover
	{
		background-color:pink;
	color:black;}	

#d{ 
    position:relative;
    top:14px;   
   }
   
#s{position:relative;
       top:14px;}
</style>
<title></title>
</head>
<body>
<div style="background-color:mediumslateblue; height:80px; color:orange;"><h1><i>SEARCH RECIPES</i></h1></div>
 <div id="dx"><a style="color:white; text-decoration:none;" href="logout.php">LOGOUT</a></div>
 <div id="dy"><a style="color:white; text-decoration:none;" href="search1.php">SEARCH</a></div>
  <div id="dz"><a style="color:white; text-decoration:none;" href="home1.php">HOME PAGE</a></div>
<DIV style="position:relative; border-style:outset; border-width:4px; left:20px; background-color:darkseagreen; height:410px; width:560px; TOP:40PX;">
   <form action="finalsearch.php" method="POST">
<DIV id="d">      <input type="text" placeholder="INGREDIENT 1" name="ing1"></div><br/>
<DIV id="d">	  <input type="text" placeholder="INGREDIENT 2" name="ing2"></div><br/>
<DIV id="d">	  <input type="text" placeholder="INGREDIENT 3" name="ing3"></div><br/>
<DIV id="d">	  <input type="text" placeholder="INGREDIENT 4" name="ing4"></div><br/>
<DIV id="d">	  <input type="text" placeholder="INGREDIENT 5" name="ing5"></div><br/>
<DIV id="d">      <input id="d1" type="text" placeholder="INGREDIENT 6" name="ing6"></div><br/>
<DIV id="d">	  <input id="d1" type="text" placeholder="INGREDIENT 7" name="ing7"></div><br/>
<DIV id="d">	  <input id="d1" type="text" placeholder="INGREDIENT 8" name="ing8"></div><br/>
                   <input id="s" type="submit">
      </form>
	 </div>
	  </body>
</html>
