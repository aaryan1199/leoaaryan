<html>
<head>
<title></title>
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
#d
{
  width:100px;
  position:relative;
  left:7px;  
  top:2px;
}
#d1
{
  width:540px;
  height:100px;  
  border-radius:0px;
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
	    color:black;	
	}
</style>
</head>
<body>
<div style="background-color:mediumslateblue; height:80px; color:orange;"><h1><i>WELCOME YOU CAN UPLOAD YOUR RECIPES HERE</i></h1></div>
<h2 style="color:white;">INSTRUCTIONS FOR UPLOAD:</h2>
<P STYLE="COLOR:Chartreuse"><B>1) INPUT MEAL TYPE THAT IS NON-VEG , VEG , DESSERTS , SNACKS.
<P STYLE="COLOR:Chartreuse"><B>2) YOU CAN INSERT ONLY 3 INGREDIENTS SO CHOOSE 3 PRIME INGREDIENTS REQUIRED FOR YOUR RECIPE.
<P STYLE="COLOR:Chartreuse"><B>3) YOU CAN ADD OTHER REQUIRED INGREDIENTS ALONG WITH PROCEDURE IN OTHER COLUMN.
<P STYLE="COLOR:Chartreuse"><B>4) FILL ALL THE COLUMNS.
 <div id="dx"><a style="color:white; text-decoration:none;" href="logout.php">LOGOUT</a></div>
 <div id="dy"><a style="color:white; text-decoration:none;" href="selectcategory.php">SEARCH</a></div>
  <div id="dz"><a style="color:white; text-decoration:none;" href="home1.php">HOME PAGE</a></div>
<DIV style="position:relative; border-style:outset; border-width:4px; left:20px; background-color:darkseagreen; height:700px; width:560px;">
   <form action="uploaddata.php" method="POST">
<DIV id="d">      <input type="text" placeholder="RECIPE NAME" name="recipename"></div><br/>
<DIV id="d">	  <input type="text" placeholder="MEAL TYPE" name="type"></div><br/>
<DIV id="d">	  <input type="text" placeholder="FIRST INGREDIENT" name="ing1"></div><br/>
<DIV id="d">	  <input type="text" placeholder="SECOND INGREDIENT" name="ing2"></div><br/>
<DIV id="d">	  <input type="text" placeholder="THIRD INGREDIENT" name="ing3"></div><br/>
<DIV id="d">      <input id="d1" type="text" placeholder="PROCEDURE" name="preparation"></div><br/>
<DIV id="d">	  <input id="d1" type="text" placeholder="TOTAL REQUIRED INGREDIENTS" name="ingredients"></div><br/>
<DIV id="d">	  <input id="d1" type="text" placeholder="BENEFITS" name="benefits"></div><br/>
<DIV id="d">	  <input id="d1" type="text" placeholder="CALORIFIC VALUE" name="calorificvalue"></div>
                   <input id="s" type="submit">
      </form>
	 </div>
	  </body>
</html>
