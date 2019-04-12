<!DOCTYPE html>
<html>
<head>
 <title> LOGIN PAGE </title>
<style>
 body
{	
 background: linear-gradient(to bottom, #669999 0%, #6699ff 100%);   
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

  position:relative;
  height:400px;
  width:700px;
  left:400px;
  top:100px;
  border-style:outset;
  border-color:grey;
  border-radius:10px;
  border-width:2px;
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
  left:0px;
  color:white;
  font-size:30px;
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
  left:-100px;
  background-color:pink;
  border-radius:50px;
  height:40px;
  width:80px;
 }
 #p2:hover
 {
  background-color:green;
 }
  a
 {
	 border-style:solid;
	 background-color:gold;
	 font-size:20px;
	 position:relative;
	 top:-106px;
	 left:-7px;
	 text-decoration:none;
 }
 a:hover
 {
    background-color:red;	
 }
 </style>
 <script>

window.history.forward();
	function noBack() { window.history.forward(); }
	
function validation()
{
 var result=true;
 var i=document.getElementsByTagName("input");
 if(i[0].value.length==0 || i[1].value.length==0)
     {
       result=false;
       alert("ENTER USERNAME AND PASSWORD");
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
<div><a href="signup.php">SIGNUP</a></div>		  

<div ID="d2">
   <img src="login.png" class="avatar">
   <h3 id="h">Login Here</h3>
   <br/> <br/>
  <form action="validation.php" method="POST">
   <input  id="p1" name="username" type="text" placeholder="USERNAME">
    <input  id="p1" name="password" type="password" placeholder="PASSWORD">
	<input id="p2" type="submit"  value="LOGIN">
  </form>
</div>		  
 </form>
</body>
</html>

