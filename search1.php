<html>
<head>
<title></title>
<style>
 body
{	
 background: linear-gradient(to bottom, #9900ff 0%, #ff00ff 100%);    
background-repeat:no-repeat;   background-size: 100%; background-attachment:fixed;
}
input:hover
{
	background: linear-gradient(to bottom, #33ccff 0%, #0033cc 100%); 
    border-width:2px;
    color:#ffff26;
	font-weight:bold;
}
h2
{
	font-size:40px;
	position:relative;
	top:80px;
	color:pink;
}
#img
{
	width:40px;
	border-style:groove;
	border-radius:50px;
    position:relative;
	left:730px;
	top:80px;
}
p
{
	    position:relative;
	left:720px;
	top:70px;
}
</style>
</head>
<body>
<h2 align="center"> WHAT ARE YOU CRAVING FOR??? </h2>
<div style="background-color:blue; width:413px; position:relative; top:90px; left:550px; background: linear-gradient(to bottom, #9900ff 0%, #ff00ff 100%);">
   <form action="search1check.php" method="POST">
    <div id="d1">  <input style="width:400px; height:50px; margin:6px; font-family:cursive; background-color:#ccffff ;border-style:outset; " type="submit" name="NON-VEG" value="NON-VEG"> </div>
	<div id="d1">  <input style="width:400px; height:50px; margin:6px; font-family:cursive; background-color:#bfffff; border-style:outset;" type="submit" name="VEG" value="VEG">  </div>
	<div id="d1">  <input style="width:400px; height:50px; margin:6px; font-family:cursive; background-color:#b2ffff;border-style:outset; " type="submit" name="SNACKS" value="SNACKS"> </div>
	<div id="d1">  <input style="width:400px; height:50px; margin:6px; font-family:cursive; background-color:#a6ffff;border-style:outset;" type="submit" name="DESSERT" value="DESSERT"> </div>
	<div id="d1">  <input style="width:400px; height:50px; margin:6px; font-family:cursive; background-color:#99ffff;border-style:outset;" type="submit" name="CHINESE" value="CHINESE"> </div>
	<div id="d1">  <input style="width:400px; height:50px; margin:6px; font-family:cursive; background-color:#8cffff;border-style:outset;" type="submit" name="ITALIAN" value="ITALIAN"> </div>
	<div id="d1">  <input style="width:400px; height:50px; margin:6px; font-family:cursive; background-color:#80ffff;border-style:outset;" type="submit" name="BEVERAGE" value="BEVERAGE"> </div>
</div>
<div><a href="home1.php"><img src="back.png" id="img"></a></div>
<p>back home</p>
</body>
</html>
<!--linear-gradient(to bottom, #ff66ff 0%, #3399ff 100%)-->