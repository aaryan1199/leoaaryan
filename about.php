
<html>
<head>
<title></title>
<style>
 body
{	
 margin:0px;
 background: url("fd5.jpg");    
 background-repeat:no-repeat;   background-size: 100%; background-attachment:fixed;
 color:white;
}
#img
{
	width:40px;
	border-style:groove;
	border-radius:50px;
	
}
div
{
	position:relative;
	left:850px;
}
</style>
</head>
<body>
<br/><br/><br/><br/><br/><BR/><BR/>
<h1 align="center" style="color:orange;font-size:38px;">GARDEN OF RECIPES</h1>
<p align="center" style="color:yellow; font-size:28px;"><b> It is the best application to help you choose recipes that you can make from the ingridients you have<br/>
                  the app also tells you about the health related aspects of any recipe and the best easy cooking procedure
				  Do you have only few ingredients at home and don’t know what to make?<br/>

GARDEN OF RECIPE is a recipe search engine that finds recipes you can make with the ingredients you currently have at home.<br/> 

GARDEN OF RECIPE has indexed hundreds of thousands of recipes, so no matter what ingredients you have, GARDEN OF RECIPE has you covered.<br/> 

For best results, make sure to tell GARDEN OF RECIPE about every ingredient you have at home. The more ingredients you add to Supercook, the better the recipes will be! <br/>

GARDEN OF RECIPE is also a practical way to save money. Take full advantage of ingredients you already have, and naturally buy less groceries.</b></p>
<h3 align="center">MADE BY:</h3>
<p align="center" style="color:red; font-size:28px;"> <B>AARYAN GUPTA 17BCE1061</P>

<div><a href="home1.php"><img src="back.png" id="img"></a></div>
</body>
</html>


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
<html>
<head>
<title></title>
</head>
<body>
 <form action="display.php" method="post";>
<input type="text" placeholder="ingredient" name='ing'>
<input type="text" placeholder="ingredient2" name='ing2'>
<input type="submit" value="SEARCH RECIPE">
</form>
</body>
</html>







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




<html>
<head>
<title></title>
</head>
<body>
 <form action="inser.php" method="post";>
<input type="number" placeholder="BOOK ID" name='book_id'>
<input type="text" name='title' placeholder="Book Title">
<input type="number" name='price' placeholder="PRICE">
<input type="submit" value="insert">
</form>
</body>
</html>
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



<?php
 session_start();
 session_destroy();
  header('location:http://localhost/insert/login.php');
?>
-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 07:55 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `foodtable`
--

CREATE TABLE `foodtable` (
  `ID` int(11) NOT NULL,
  `RECIPE NAME` varchar(100) NOT NULL,
  `TYPE` varchar(100) NOT NULL,
  `ING1` varchar(100) NOT NULL,
  `ING2` varchar(100) NOT NULL,
  `ING3` varchar(100) NOT NULL,
  `PROCEDURES` text NOT NULL,
  `INGNO` text NOT NULL,
  `BENEFITS` text NOT NULL,
  `CALORIFIC VALUE` text NOT NULL,
  `IMAGE` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodtable`
--

INSERT INTO `foodtable` (`ID`, `RECIPE NAME`, `TYPE`, `ING1`, `ING2`, `ING3`, `PROCEDURES`, `INGNO`, `BENEFITS`, `CALORIFIC VALUE`, `IMAGE`) VALUES
(1, 'GRILLED CHICKEN ESACALOPE WITH FRESH SALSA', 'NON-VEG', 'CHICKEN', 'SPICY POWDER', 'GRAPES', '1.For the spice powder:\r\n2.1. Add fennel, pepper, cinnamon powder, star anise, roast and grind to a powder.\r\n3.2. Store in air tight container cool dry place.\r\nFor the chicken:\r\n1.3. Blend parsley, the green part of the spring onion and coriander into a smooth green paste.\r\n2.4. Marinate the chicken breast with salt, pepper, spice powder and green paste (for about half an hour).\r\n3.5. Cook in a nice hot pan/ grill or bake.\r\nFor the salsa:\r\n1.6. Toss all the ingredients for the salsa in a bowl, refrigerate until needed. Serve with the grilled chicken breast.', '1 skinless, boneless chicken breast\r\n1 Tbsp olive oil\r\n1 tsp ginger garlic paste\r\n1 tsp spices powder\r\n1 cup mix of parsley, coriander, \r\n   green spring onion\r\n   Salt & pepper to taste\r\n    For the salsa:\r\n1/2 cup chopped spring onion white \r\n    part\r\n1 cup cherry tomatoes\r\n1/2 cup green/black grapes\r\n1 tsp green chilli chopped\r\n1 yellow bell pepper chopped\r\n1 tsp chopped parsley\r\n1 tsp chopped coriander\r\n2 basil leaves\r\n1 tsp lemon juice\r\n2 tsp olive oil\r\nSalt & pepper to taste', 'Extremely tasty dish and excellent in taste.\r\nChicken is also very good in health and helps to solve many heart related problems.', 'Per serving: 176 calories; 7 g fat(1 g sat); 2 g fiber; 5 g carbohydrates; 24 g protein; 26 mcg folate; 63 mg cholesterol; 2 g sugars; 0 g added sugars; 1,158 IU vitamin A; 35 mg vitamin C; 42 mg calcium; 2 mg iron; 322 mg sodium; 419 mg potassium\r\nNutrition Bonus: Vitamin C (58% daily value), Vitamin A (23% dv)', ''),
(2, 'CURRIED PARSEMAN FISH FINGERS', 'NON-VEG', 'FISH', 'EGG', 'PARMESAN CHEESE', 'Cut the fish fillets lengthwise into 3/4\" (2cm) strips, then crosswise into fingers. Cut crosswise with the knife at an angle so the fingers taper at each end.\r\nMix the seasoning with the water, then add the egg.\r\nCoat fingers with flour then egg mixture then breadcrumbs for a thick coating.\r\nFor a thinner coater just dip in egg mixture and then breadcrumbs.\r\nStand coated on a rack for 15-30 minutes if desired for the coating to firm.\r\nCook the fingers in 1/4\" (5mm) of oil in a hot pan for 2-3 mins, turning once, until the coating is golden brown.\r\nDrain and serve with wedges of lemon if desired.', '1 fish\r\n1 lemon\r\n3 garlic cloves\r\n2 green chillies\r\n3-4 basil leaves\r\n1 tsp curry powder\r\n500 gms Parmesan cheese\r\n2 eggs\r\n250 gms maida\r\n250 gms bread crumbs\r\n250 ml oil\r\nSalt', 'Iodine– A 150g portion of Fish Sticks will give you a whopping 105% of your daily recommended intake of iodine. Iodine is an essential nutrient which plays a role in maintaining a healthy thyroid function, metabolism, growth, reproduction, and development.\r\n\r\nVitamin B12 – Vitamin B12 is responsible for helping to turn fats and proteins into energy and also protects against heart disease and cancers. One 150g portion of fish sticks will give you 63% of your recommended daily intake of Vitamin B12.\r\n\r\nSelenium – Selenium is an essential nutrient that helps promote immunity in the body and also produces a number of antioxidants that prevent damage from free radicals and inflammation. Selenium also plays a large role in maintaining a healthy metabolism. One 150g serving of fish sticks gives you 52% of your daily selenium.\r\n\r\nPhosphorus – Phosphorus is essential for growth, and it is also vital for maintaining healthy bones, teeth and gums. A 150g dish of Fish Sticks will give you 52% of your required daily phosphorus intake.', ' Omega-3 is once again a vital ingredient in our diets, playing a role in helping to prevent heart disease and strokes and has also been shown to play a role in helping prevent Alzheimer’s disease and other degenerative cognitive conditions. To get the maximum benefit and keep your brain in tip top condition, why not combine your fish fingers with some green leafy veg of the cruciferous family, which has also been shown to play a significant role in cognitive health and memory function. One 150g portion of fish sticks will give you 30% of your daily Omega-3 requirement.', ''),
(3, 'CHICKEN 65', 'NON-VEG', 'CHICKEN', 'CHILLI POWDER', 'YOGHURT', 'Step 1\r\nFor the marination, take a bowl and mix chilli powder, coriander powder, turmeric powder, curd and salt together. This marination step is very important and will give this chicken recipe real flavour.\r\nStep 2\r\nNow, wash the chicken in cold running water and chop it. Once it is done, add the chicken pieces in the above mixture and marinate them. Once the chicken pieces are well coated, keep them aside for 4-6 hours so that flavours are well absorbed.\r\nStep 3\r\nNow, take a deep-bottomed pan and heat oil in it over moderate flame. Once the oil is sufficiently hot, carefully put the marinated chicken pieces in the oil and shallow fry them till cooked or golden from both the sides.\r\nStep 4\r\nNow, remove and cook the chicken pieces in a separate pan without oil over low flame. This step will make the chicken more crispy. Once done, add the green chillies, curry leaves and ketchup. Mix well till the chicken pieces are well coated and continue to cook over medium heat for 5-6 minutes. Transfer the dish in a serving bowl and garnish it with chopped spring onions.\r\nStep 5\r\nChicken 65 is ready. Serve as a snack or with roti and chappatis. You can pair this easy snack recipe with drinks of your choice. Prepare this delectable snack on weekends or when guests are coming over!', '450 gm chicken\r\n3 tablespoon coriander powder\r\n4 tablespoon yoghurt (curd)\r\n4 green chilli\r\n2 tablespoon refined oil\r\n1 pinch red chilli powder\r\n1/2 teaspoon turmeric\r\n6 curry leaves\r\n4 tablespoon tomato ketchup\r\n1 teaspoon salt', 'The health benefits of chicken include its ability to provide a good supply of protein, essential vitamins, and minerals. It also aids in weight loss, regulating cholesterol and blood pressure, and reducing the risk of cancer.', 'According to the USDA, chicken (100 g) has moisture (65 g), energy (215 kcal), protein (18 g), fat (15 g), saturated fat (4 g), cholesterol (75 mg), calcium (11 mg), iron (0.9 mg), magnesium (20 mg), phosphorus (147 mg), potassium (189 mg), sodium (70 mg), and zinc (1.3 mg). [1] In terms of vitamins, it contains vitamin C, thiamin, riboflavin, niacin, vitamin B6, folate, vitamin B12, vitamin A, vitamin E, vitamin D, and vitamin K.', ''),
(4, 'NIHARI GOSHT', 'NON-VEG', 'MEAT', 'YOGHURT', 'CHILLI POWDER', '1.Heat oil in a pan and add green cardamom, cinnamon, cloves, black cardamom and bay leaves.\r\n2.Add the meat and saute till lightly fried.\r\n3.Add salt and turmeric and mix well.\r\n4.Pour in the water, cover the pan and cook.\r\n5.When it starts boiling, add ginger- garlic paste, coriander powder, red chilli, garlic paste and onion paste.\r\n6.Mix well and add yoghurt, gulab-jal, garam masala, nutmeg and cinnamon powder and saffron.\r\n7.Cover and cook for 2-3 minutes.\r\n8.Now transfer the meat in a heavy bottom pan and strain the gravy.\r\n9.Add a few drops of itar and cover the pan.\r\n10.Seal it with the wheat dough and cook on slow fire.\r\n11.Once done, garnish with fresh coriander and ginger juliennes and serve.', '1 Kg Meat\r\n2 Tbsp Refined oil\r\n3-4 Green cardamoms\r\n1 tsp Whole cinnamon\r\n2 Black cardamoms\r\n2-3 Bay leaves\r\n1 tsp Turmeric powder\r\n1/4 Cup Water\r\n1 tsp Ginger-garlic paste\r\n1 tsp Coriander powder\r\n1 tsp Red chilli powder\r\n1 tsp Garlic (ground), fried\r\n1 tsp Onions (ground), fried\r\n3 Tbsp Yogurt (beaten)\r\n2 tsp Gulab jal\r\n2 tsp Garam masala\r\n1/2 tsp Nutmeg-cardamom powder\r\n1/2 tsp Saffron, soaked\r\nTo taste Salt\r\nFew drops Itar\r\nFor dum Wheat dough\r\nTo garnish Fresh coriander and ginger juliennes', 'Red meat is an excellent source of protein and minerals such as B vitamins, iron, phosphorus, selenium and zinc, all of which are required by the body in order to build and maintain muscles and bones, repair tissues, boost immunity and improve blood circulation.', 't is not only a good source of protein but is also very rich in vitamins and minerals. For example, B vitamins in it are useful for preventing cataracts and skin disorders, boosting immunity, eliminating weakness, regulating digestion, and improving the nervous system.', ''),
(5, 'TAWA FISH', 'NON-VEG', 'FISH', 'LEMON JUICE', 'YOGHURT', 'Clean the pomfrets. I got these cleaned at the fish market.\r\nEach pomfret should yield about 5 pieces, troncon cut. Troncon is a type of cut (as shown) on the bone for flat fish like pomfret.\r\nMarinate with cayenne pepper, ground turmeric, ginger paste, garlic paste, tamarind pulp and salt for at least an hour.\r\nCoat the fish with flour before pan frying. This will give the fish a crispy crust. I\'ve used all purpose flour but semolina (rava) is better for that extra crispness.\r\nFry in canola oil in a non-stick pan over medium heat for about 10 minutes per side.\r\nFlip gently and adjust the heat as required.\r\nMakes for a delicious appetizer. Best served hot.', 'Pomfrets whole, cleaned 2 medium\r\nSalt to taste\r\nLemon juice 1½ tablespoons\r\nRed chilli powder 1 teaspoon\r\nturmeric powder ½ teaspoon\r\nHung yogurt ¾ cup\r\nGinger-garlic paste 1 tablespoon\r\nGaram masala powder 1 teaspoon\r\nRed chilli paste 1 tablespoon\r\nOil 1 tablespoon\r\nButter as required\r\nLemon slices for garnishing', 'atest research done in Japan Food Research Laboratories shows that the omega 3 content in Japanese pomfret fish is the highest of all, with 2,56 grams of omega 3 fatty acid. The omega 3 fatty acid itself is one of the essential fatty acids. The omega 3 is a nutrition that is really needed by the body, however, the body can’t produce it thus we need to obtain it from other sources.', 'Calories           : 96 kcal\r\nProtein            : 19 gr\r\nFat                    : 1,7 gr\r\nCarbohydrate : 0 gr\r\nCalcium           : 20 mg\r\nCholesterol     : 44 mg\r\nIron                  : 2 mg\r\nPhosphor        : 150 mg\r\n', ''),
(6, 'CHICKEN PANCAKE', 'NON-VEG', 'CHICKEN', 'EGG', 'MUSHROOM', 'For the pancake\r\nProcess flour, salt, milk and eggs until smooth. Cover. Set aside for 20 minutes.\r\nSpray an 18cm (base) non-stick frying pan with oil and heat over medium heat.\r\nPour 1/4 cup batter into pan and swirl to cover base. Cook for 2 minutes or until light golden. Turn. Cook for 30 seconds. Transfer to a plate. Cover to keep warm.\r\nRepeat with remaining mixture to make 8 pancakes.\r\nFor the filling\r\nMelt butter in a frying pan over medium-high heat.\r\nAdd mushrooms, garlic and onion. Cook, stirring, for 2 minutes or until mushrooms are tender. Transfer to a bowl. Cool for 10 minutes.\r\nStir in chicken, parsley and ricotta.\r\nPutting the together the chicken pancake\r\nPreheat oven to 200°C/ 180°C fan-forced.\r\nPlace 1 pancake on a plate and top with 1/4 cup filling. Roll up to enclose.\r\nPlace in a greased 8cm-deep, 20cm x 30cm ovenproof dish. Repeat with remaining pancakes and filling.\r\nTop with passata and cheese.\r\nCover dish with foil. Bake for 20 minutes or until heated through. Remove foil. Bake for 5 minutes or until cheese is golden.\r\nServe.\r\n', '3/4 cup plain flour\r\n1/4 teaspoon salt\r\n1 cup milk\r\n2 eggs\r\nOlive oil cooking spray\r\n1/2 cup tomato passata sauce\r\n1/3 cup grated tasty cheese\r\nFILLING\r\n30g butter\r\n170g button mushrooms, quartered\r\n1 garlic clove, crushed\r\n1 green onion, sliced\r\n2 cups chopped cooked chicken\r\n1 tablespoon chopped fresh flat-leaf parsley leaves\r\n1 cup (200g) fresh ricotta cheese, crumbled', 'Light, fluffy and totally comforting, pancakes are a natural choice when you want to treat yourself at breakfast (or at breakfast-for-dinner!) And while pancakes don\'t exactly have a reputation as a health food, they do have some nutrients that can benefit your health. The trick is to opt for whole-grain pancakes, and limit the sugary toppings, like maple syrup, to a drizzle.', 'Calories           : 96 kcal\r\nProtein            : 19 gr\r\nFat                    : 1,7 gr\r\nCarbohydrate : 0 gr\r\nCalcium           : 20 mg\r\nCholesterol     : 44 mg\r\nIron                  : 2 mg\r\nPhosphor        : 150 mg\r\n', ''),
(7, 'BUTTER CHICKEN', 'NON-VEG', 'CHICKEN', 'YOGHURT', 'BUTTER', '\r\nHeat a large skillet or medium saucepan over medium-high heat. Add the oil and onions and cook onions down until lightly golden, about 3-4 minutes. Add ginger and garlic and let cook for 30 seconds, stirring so it doesn’t burn.\r\n\r\nAdd the chicken, tomato paste, and spices. Cook for 5-6 minutes or until everything is cooked through.\r\n\r\nAdd the heavy cream and simmer for 8-10 minutes stirring occasionally. Serve over Basmati rice or with naan.', '700 Gram Raw chicken\r\nFor the Marinade:\r\n1 tsp Red chilli powder\r\n1 tsp Ginger and garlic paste\r\nTo taste Salt\r\n1/2 Kg Curd\r\nFor the Gravy:\r\n175 Gram White butter\r\n1/2 tsp Black cumin seeds\r\n1/2 Kg Tomato, pureed\r\n1/2 tsp Sugar\r\n1 tsp Red chilli powder\r\nTo taste Salt\r\n100 Gram Fresh cream\r\n4 Green chillies, sliced\r\n1/2 tsp Fenugreek leaves (crushed)', '286 calories of Chicken Breast (cooked), no skin, roasted, (1 breast, bone and skin removed)\r\n\r\n77 calories of Butter, salted, (0.75 tbsp)\r\n\r\n71 calories of Almonds, (0.13 cup, ground)\r\n\r\n20 calories of Yogurt, plain, low fat, (0.13 cup (8 fl oz))\r\n\r\n17 calories of Tomatoes, red, ripe, canned, wedges in tomato juice, (0.25 cup)\r\n\r\n13 calories of Tomato Paste, (0.06 cup)\r\n\r\n9 calories of Ginger, ground, (0.50 tbsp)\r\n\r\n5 calories of Turmeric, ground, (0.19 tbsp)\r\n\r\n4 calories of Coriander seed, (0.25 tbsp)\r\n\r\n2 calories of Garlic, (0.50 tsp)\r\n\r\n2 calories of Chili powder, (0.25 tsp)\r\n\r\n0 calories of Cinnamon, ground, (0.06 tsp)\r\n', 'Calories	505.4\r\nTotal Fat	22.3 g\r\nSaturated Fat	8.1 g\r\nPolyunsaturated Fat	3.3 g\r\nMonounsaturated Fat	8.5 g\r\nCholesterol	171.5 mg\r\nSodium	484.4 mg\r\nPotassium	1,032.9 mg\r\nTotal Carbohydrate	16.4 g\r\nDietary Fiber	3.7 g\r\nSugars	4.8 g\r\nProtein	59.7 g', ''),
(8, 'COACHELLA CHICKEN BISCUIT RECIPE', 'NON-VEG', 'CHICKEN', 'BUTTERMILK', 'EGG', 'Whisk the buttermilk, 2 tablespoons hot sauce, the garlic, thyme, 1/2 teaspoon salt and a few grinds of pepper in a large bowl. Add the chicken and turn to coat. Cover and refrigerate 30 minutes.\r\nMeanwhile, combine the cornflakes, flour, 1/2 teaspoon salt and a few grinds of pepper in a shallow baking dish. Combine the honey and the remaining 2 tablespoons hot sauce in a small bowl; set aside.\r\nHeat 1/2 inch of peanut oil in a large cast-iron skillet over medium-high heat until a deep-fry thermometer registers 350 degrees F. Meanwhile, remove the chicken cutlets from the buttermilk mixture, letting the excess drip off, then press into the cereal mixture on both sides. Working in batches, fry the chicken until golden and crisp, about 2 minutes per side. Transfer to a rack set over a baking sheet and season with salt.\r\nBrush the cut sides of the biscuits with the mayonnaise; sandwich with the fried chicken, lettuce, pickles and a drizzle of the spicy honey.', '6 tbsp softened unsalted butter\r\n1/4 cup vegetable shortening\r\n4 cups all purpose flour\r\n2 tbsp sugar\r\n2 tbsp baking powder\r\n2 tsp baking soda\r\n2 tsp kosher salt\r\n1 tsp Freshly ground black pepper\r\n1.75 cup Buttermilk\r\nFor Fried Chicken\r\n10 small boneless, skin-on chicken thighs\r\n1.5 cups Buttermilk\r\n1 tbsp chopped fresh dill\r\n3.5 tsp kosher salt divided\r\n1.75 tsp Freshly ground black pepper divided\r\n1/4 tsp cayenne pepper\r\n1 cup all purpose flour\r\n6 tbsp peanut oil\r\n1 large egg\r\n1 tbsp baking powder\r\n1.25 tsp cayenne pepper\r\n1/2 tsp  garlic powder\r\n1/2 tsp onion powder\r\n10 cheddar cheese slices\r\nVegetable oil for frying', 'There are 440 calories in a Chicken Biscuit from Chick-fil-A. Most of those calories come from fat (41%) and carbohydrates (43%).\r\n\r\n', 'per Biscuit\r\n440\r\nCALORIES\r\n20G\r\nFAT\r\n48G\r\nCARBS\r\n16G\r\nPROTEIN', ''),
(9, 'LAAL MAAS', 'NON-VEG', 'MEAT', 'SPICY POWDER', 'ONIONS', 'How to Make Rajasthani Laal Maas\r\n1.Dry roast the red chillies to give it a nice distinctive aroma which adds great flavor to the dish.\r\n2.Add to that the coriander seeds and cumin seeds.\r\n3.Once done, grind it into a nice fine powder.\r\n4.Heat some mustard oil in a pan. Add to this the garlic and ginger.\r\n5.Once the garlic turns slightly brown add the lamb pieces.\r\n6.Give it a good mix. This is also a good time to add salt.\r\n7.Now add the kachri powder. Not only does this powder tenderize the meat, its also adds a nice tangy flavor to it.\r\n8.Now add the chopped onions and mix all well.\r\n9.Once the onions have roasted well add the whole spices, cardamom, black pepper, cinnamon, mace, black cardamom. Stir well.\r\n10.Now add the red chilly powder and let it roast for about a minute.\r\n11.Add enough water to cook the lamb. Cover it and let it simmer for a couple of minutes till the meat is cooked.\r\n12.Once the meat is cooked, take out all the pieces on a platter and strain the gravy.\r\n13.Straining the gravy gets rid of all the whole spices and keeps the essence and flavors intact.\r\n14.Now add the lamb pieces you had taken out to the refined gravy and put it back on fire but on low heat.\r\n15.Add about 1/2 cup water and some coriander leaves.\r\n16.Let it simmer for a while and when you reach a good consistency of gravy, turn off the heat.\r\n17.Serve hot with a good garnishing of chopped coriander leaves', '2 Small Onions, finely chopped\r\n2 Green chillies, finely chopped\r\n18-20 Red chillies\r\n2 tsp Coriander seeds (whole)\r\n1 tsp Jeera\r\n1 Cup Mustard oil\r\n10 cloves Garlic, finely chopped\r\n1 piece Small Ginger, finely chopped\r\n1/2 Kg Lamb (cut into pieces with bones)\r\n1 tsp Salt\r\n1 Cup Kachri powder (kachri is a dried vegetable, a variety of cucumbers found in Rajasthan and ground into a powder), small\r\n3-4 pods Cardamom\r\n1/2 tsp Black pepper\r\n1 Cinnamon stick\r\nA pinch of Mace\r\n1 pod Black cardamom\r\nWater\r\nHandful Coriander leaves, chopped', 'Traditionally, Lal Maas used to be made with wild boar or deer, so chillies veiled the gamy odour of the meat. Mutton today is the meat of choice (and Rajasthan produces the best), but Mathania chillies continue to define the dish.\r\nADVERTISEMENT', 'Calories	50	Sodium	0 mg\r\nTotal Fat	0 g	Potassium	179 mg\r\nSaturated	-- g	Total Carbs	12 g\r\nPolyunsaturated	-- g	Dietary Fiber	1 g\r\nMonounsaturated	-- g	Sugars	2 g\r\nTrans	-- g	Protein	2 g\r\nCholesterol	-- mg	 	 \r\nVitamin A	81%	Calcium	2%\r\nVitamin C	9%	Iron	4%', ''),
(10, 'GARLIC BUTTER BAKED FISH', 'NON-VEG', 'FISH', 'BELL PEPPER', 'RICE', 'In a saucepan, combine the butter, minced garlic, pepper, salt, dill weed, and paprika. Heat over low heat until butter is melted and begins to simmer.\r\nRemove from the heat and set aside.\r\n\r\nBrush a little of the butter mixture in the bottom of a shallow baking dish (line baking dish with foil, if desired) then place tilapia fillets on the buttered area.\r\nBrush top of each tilapia fillet with the seasoned butter mixture.\r\nThe recipe makes four 4-ounce servings or three 6-ounce servings.', 'Salt - to taste.\r\n• Cheese - 1 tablespoon.\r\n• Lemon juice - 1/2 tea spoon.\r\n• Bell pepper - 6 slice.\r\n• Chilly flakes - 1/2 tea spoon.\r\n• Garlic (chopped) - 1/2 tea spoon.\r\n• Pepper powder - 1/2 tea spoon.\r\n• Cooked basmati rice - 1 cup.\r\n• Fish (sea bass) - 1 piece.\r\n• Bread crumbs - 1 tablespoon.\r\n• Butter - 2 tablespoons.\r\n• Onions (slices) - 2 numbers.\r\n• Sugar - 1 tea spoon.\r\n• Thyme - 1/2 tea spoon.', 'This amazing baked fish with lemon garlic butter sauce is out of this world!  So easy to make and so tender, juicy and flavorful!  This is my favorite way to make tilapia or other white fish!', 'Nutritional Guidelines (per serving)\r\n264\r\nCalories\r\n7g\r\nFat\r\n11g\r\nCarbs\r\n38g\r\nProtein\r\n(Nutrition information is calculated using an ingredient database and should be considered an estimate.)', ''),
(11, 'COCONUT CHICKPEA CURRY', 'VEG', 'CHICKPEAS', 'LEMON JUICE', 'ONION', 'In a large pan, heat the coconut oil over medium-high heat. Add the red onion with a pinch of salt. Cook, stirring frequently, until the onion is softened and starting to brown.\r\n\r\nReduce the heat to medium. Add the garlic and ginger; stir and cook for 60 seconds or until fragrant. Stir in the garam masala, turmeric, black pepper, cayenne pepper, and salt. Cook for 30 seconds more to toast the spices.\r\n\r\nAdd the tomatoes to the pan and stir well. Continue to cook, stirring occasionally, for about 3-5 minutes or until the tomatoes are starting to break down and dry up a little bit. Stir in the coconut milk and chickpeas. Bring the mixture to a boil, then reduce the heat to medium-low.\r\n\r\nSimmer the coconut chickpea curry for about 10 minutes or until reduced slightly. Stir in the fresh lime juice. Season to taste with additional salt (I used about another 1/2 teaspoon at this point). Serve hot, over rice or other accompaniments of choice, and garnished with chopped fresh cilantro.', '1 tbsp coconut oil\r\n1 large red onion thinly sliced\r\n3 cloves garlic minced\r\n1 inch fresh ginger peeled and pinced\r\n1 tbsp garam masala\r\n1/4 tsp ground turmeric\r\n1/4 tsp ground black pepper (reduce to 1/8 tsp if freshly-ground)\r\n1/4 tsp cayenne pepper (or to taste)\r\n1/4 tsp salt (plus more to taste)\r\n1 and 1/2 cups diced tomatoes (equal to 1 14-oz. can; drain before using)\r\n1 and 1/2 cups full-fat coconut milk (equal to 1 14-oz. can)\r\n1 and 3/4 cups cooked chickpeas (equal to 1 16-oz. can; drain and rinse before using)\r\n2 tbsp freshly-squeezed lime juice (1 lime) (lemon also works)\r\nchopped fresh cilantro (coriander) for serving', ' dairy-free, gluten-free, grain-free, nut-free, refined sugar-free, soy-free, vegan, vegetarian', 'Calories	368.4\r\nTotal Fat	6.9 g\r\nSaturated Fat	2.8 g\r\nPolyunsaturated Fat	0.1 g\r\nMonounsaturated Fat	0.1 g\r\nCholesterol	0.0 mg\r\nSodium	425.5 mg\r\nPotassium	331.9 mg\r\nTotal Carbohydrate	61.9 g\r\nDietary Fiber	20.4 g\r\nSugars	12.2 g\r\nProtein	17.4 g\r\n', ''),
(12, 'RED LENTIL CURRY', 'VEG', 'LENTIL', 'ONION', 'MILK', 'Wash the lentils in cold water until the water runs clear. Put lentils in a pot with enough water to cover; bring to a boil, place a cover on the pot, reduce heat to medium-low, and simmer, adding water during cooking as needed to keep covered, until tender, 15 to 20 minutes. Drain.\r\nHeat vegetable oil in a large skillet over medium heat; cook and stir onions in hot oil until caramelized, about 20 minutes.\r\nMix curry paste, curry powder, turmeric, cumin, chili powder, salt, sugar, garlic, and ginger together in a large bowl; stir into the onions. Increase heat to high and cook, stirring constantly, until fragrant, 1 to 2 minutes.\r\nStir in the tomato puree, remove from heat and stir into the lentils.', '1 1/2 cups lentils, rinsed and picked over\r\n1/2 large onion, diced\r\n2 tablespoons butter\r\n2 tablespoons red curry paste\r\n1/2 tablespoon garam masala\r\n1 teaspoon curry powder\r\n1/2 teaspoon turmeric\r\n1 teaspoon sugar\r\n1 teaspoon garlic, minced\r\n1 teaspoon ginger, minced\r\na few good shakes of cayenne pepper\r\n1 14 ounce can tomato puree\r\n1/4 cup coconut milk or cream\r\ncilantro for garnishing\r\nrice for serving', 'Per Serving: 192 calories; 2.6 g fat; 32.5 g carbohydrates; 12.1 g protein; 0 mg cholesterol; 572 mg sodium. Full nutrition', 'Calories	264.0\r\nTotal Fat	17.0 g\r\nSaturated Fat	11.1 g\r\nPolyunsaturated Fat	1.6 g\r\nMonounsaturated Fat	3.3 g\r\nCholesterol	0.0 mg\r\nSodium	11.3 mg\r\nPotassium	509.2 mg\r\nTotal Carbohydrate	23.7 g\r\nDietary Fiber	5.3 g\r\nSugars	1.1 g\r\nProtein	7.0 g\r\n', ''),
(13, 'VEGETABLE KURMA', 'VEG', 'YOGHURT', 'ONION', 'COCONUT', 'veg kurma recipe | vegetable korma recipe | vegetable kurma recipe with detailed photo and video recipe. basically a coconut based curry prepared with blended spices and mix vegetables. this south indian style veg kurma recipe is a perfect combination for poori, ghee rice, set dosa’s and kerala parotaa recipe.\r\n', 'For the green paste\r\n? cup grated coconut\r\n6-8 cashews\r\n½ inch sized ginger\r\n2 garlic cloves\r\n1-2 green chilies\r\n3 pearl onions\r\n½ tsp perumjeerakam / saunf / fennel seeds\r\n¼ tsp coriander powder\r\n½ tsp turmeric powder\r\n3-4 curry leaves\r\n1 tbsp cilantro leaves\r\n¼ cup water (or more)\r\nFor the Kurma\r\n1 cinnamon stick\r\n2 cloves\r\n2 cardamoms\r\n1 medium sized onion (sliced)\r\n2 medium carrots (cubed)\r\n¾ cup green beans (chopped)\r\n1 potato (cubed)\r\n¾ cup cauliflower florets\r\n½ cup frozen green peas\r\n2 cups water\r\n1-2 tbsp beaten curd\r\nCilantro leaves (garnish)\r\nOil (as required)', 'veg kurma recipe | vegetable korma recipe | vegetable kurma recipe with detailed photo and video recipe. basically a coconut based curry prepared with blended spices and mix vegetables. this south indian style veg kurma recipe is a perfect combination for poori, ghee rice, set dosa’s and kerala parotaa recipe.\r\n', 'Calories	300.0\r\nTotal Fat	12.0 g\r\nSaturated Fat	3.5 g\r\nPolyunsaturated Fat	0.0 g\r\nMonounsaturated Fat	0.0 g\r\nCholesterol	0.0 mg\r\nSodium	680.0 mg\r\nPotassium	0.0 mg\r\nTotal Carbohydrate	41.0 g\r\nDietary Fiber	7.0 g\r\nSugars	7.0 g\r\nProtein	9.0 g\r\n', ''),
(14, 'VEGAN THE BEAN CURRY', 'VEG', 'BEANS', 'ONION ', 'SPICY POWDER', 'Wash all the beans and add 3.5 cups water to it. Add beans to a pressure cooker along with salt, bay leaf, black cardamom, cinnamon stick and 3.5 cups of water.Cover the lid, and pressure cook for 6-8 whistles. Let it cook on on low heat for about 10 minutes. When the cooker is cooled off, open the lid. Heat oil & butter in a pan.\r\nAdd cumin seeds to it. When they start to splutter, add onion paste and ginger-garlic paste. Saute for about 5 minutes or till it turns golden brown. Add chopped tomatoes, and cook for 5 minutes.\r\nNow Add cream cheese spread and cook for 3-4 minutes.Add chili powder, coriander powder, cumin powder, turmeric powder and garam masala powder along with ¼ cup of water.Let the spices cook with water for few minutes. Now add kasuri methi, sugar, cooked beans, and mix well. Cook on medium heat for 15-20 minutes till gravy thickens.Add more water if needed.Remove from heat, and serve hot  with steamed rice or naan.', '1/3 cup green beans, washed & roughly chopped\r\n3 tsp of Tikka curry powder, or your favourite curry seasoning\r\n1/2 tsp of cumin seeds\r\n8oz of tomato puree\r\n2 garlic cloves, crushed\r\n1 red chilli\r\nPinch of salt\r\n1 tblsp of fresh ginger, grated\r\n1 large tomato, roughly chopped\r\n1 white onion, finely chopped\r\n1 cup of water\r\nHandful of coriander (optional)', '5 bean curry is an Indian curry, which is the blend of 5 protein-rich beans. This curry is healthy and comes with the deliciousness of different beans, cooked in creamy tangy tomato sauce along with the whole bunch of spices.', 'Total Fat: 4.7g\r\n7 %\r\nSaturated Fat: 1.0g\r\nCholesterol: 0mg\r\n0 %\r\nSodium: 298mg\r\n12 %\r\nPotassium: 569mg\r\n16 %\r\nTotal Carbohydrates: 35.9g\r\n12 %\r\nDietary Fiber: 10.1g\r\n41 %\r\nProtein: 8.7g\r\n17 %\r\nSugars: 1g\r\nVitamin A: 735IU\r\nVitamin C: 12mg\r\nCalcium: 81mg\r\nIron: 4mg\r\nThiamin: 0mg\r\nNiacin: 3mg\r\nVitamin B6: 0mg\r\nMagnesium: 55mg\r\nFolate: 100mcg', ''),
(15, 'DAL MAKHANI', 'VEG', 'DAL', 'BEANS', 'ONIONS', 'Soak whole black urad and rajma overnight in 3-4 cups of water.\r\nCook the soaked dal and rajma in the same water with salt, red chili powder and half the chopped ginger till dal and rajma are cooked and soft.\r\nPeel and chop the onion, ginger and garlic finely. Also chop the tomatoes.\r\nHeat oil and butter in a thick-bottomed pan. Add cumin seeds, when it crackles add chopped onions and fry till golden brown.\r\nAdd chopped ginger, garlic and chopped tomatoes. Sauté till tomatoes are well mashed and fat starts to leave the masala. Add boiled dal and rajma to this.Do not add the liquid at first.Crush(mash) the dals with the back of the ladle while stirring continuously, this gives that creamy texture to the dal .\r\nAdd the liquid and some water if required and simmer on very low heat for fifteen minutes.\r\nAdd fresh cream and garam masala powder let it simmer for another five minutes. Finish off with a couple of pinch of Kasoori methi powdered.\r\nServe hot with Naan or Paraatha.\r\nTip: Replacing the tomatoes with 4 tablespoons of thick tomato paste will enhance the taste and colour of the dish manifold.', 'Whole black gram (sabut urad) 1/2 cup\r\nRed kidney beans (rajma) 2 tablespoons\r\nSalt to taste\r\nRed chilli powder 1 teaspoon\r\nGinger chopped 2 inch pieces\r\nNutralite Butter 3 tablespoons\r\nOil 1 tablespoon\r\nCumin seeds 1 teaspoon\r\nGarlic chopped 6 cloves\r\nOnion chopped 1 large\r\nGreen chillies slit 2\r\nTomatoes 2 medium\r\nGaram masala powder 1 teaspoon\r\n', 'This one is usually called black dal when whole, and white when it’s skinned and split. And yes, the black urad is the star ingredient in Dal Makhani. Urad is also used to make bondas, papads, medu vada, a version of payasam, and even dosas! It has a very earthy taste and is often slimy on the tongue. In Bengal, the white urad is also used to make Biulir Dal, a recipe that’s quite simple and yet absolutely delicious. And what’s quite unique about this recipe is that the flavour is enhanced by the addition of fennel. Urad Dal helps improve digestion, good source of protein, controls cholesterol.', 'mount Per Serving\r\nCalories 258 Calories from Fat 162\r\n% Daily Value*\r\nTotal Fat 18g 28%\r\nSaturated Fat 11g 55%\r\nCholesterol 49mg 16%\r\nSodium 58mg 2%\r\nPotassium 213mg 6%\r\nTotal Carbohydrates 17g 6%\r\nDietary Fiber 5g 20%\r\nSugars 2g\r\nProtein 7g 14%', ''),
(16, 'RAJASTHANI DAL BAATI', 'VEG', 'DAL ', 'BUTTER ', 'ONION', 'dal baati recipe | rajasthani dal bati churma | dal baati in appe pan with detailed photo and video recipe. a traditional rajasthani delicacy recipe made from dal, bati or wheat rolls and churma which is powdered wheat ball. it is generally served for lunch or dinner by mixing the dal with crushed baati and ghee topped on it. it is also popular in uttar pradesh and madhya pradesh within the malwa regions.', 'FOR BAAT\r\n2 cup wheat flour / atta\r\n¼ tsp salt\r\n¼ tsp baking powder\r\n¼ cup ghee / clarified butter\r\nwater to knead\r\nfor churma:\r\n2 tbsp of ghee / clarified butter\r\n3 tbsp powdered sugar\r\n2 tbsp cashew & almond chopped\r\n¼ tsp cardamom powder\r\nfor dal:\r\n½ cup moong dal / green gram dal\r\n¼ cup masoor dal / pink lentils\r\n¼ cup chana dal / bengal gram dal soaked 30 minutes\r\n3 cup water\r\n3 tsp ghee / clarified butter\r\n1 tsp mustard\r\n1 tsp cumin / jeera\r\npinch hing / asafoetida\r\n1 onion finely chopped\r\n1 tsp ginger garlic paste\r\n1 green chilli slit\r\n1 to mato finely chopped\r\n¼ tsp turmeric\r\n½ tsp kashmiri red chilli powder\r\n¼ tsp garam masala\r\n1 tsp salt\r\n1 cup water\r\n2 tbsp coriander finely chopped', 'It is easily prepared without much difficulty, it is extremely good in taaste and can be consumed once in a while.', 'Calories	200	Sodium	7 mg\r\nTotal Fat	10 g	Potassium	9 mg\r\nSaturated	10 g	Total Carbs	5 g\r\nPolyunsaturated	20 g	Dietary Fiber	7 g\r\nMonounsaturated	10 g	Sugars	7 g\r\nTrans	10 g	Protein	91 g\r\nCholesterol	5 mg	 ', ''),
(17, 'PANEER TIKKA MASALA', 'VEG', 'PANEER', 'YOGHURT', 'ONION', 'Cut the paneer into small cubes or in any size you like. My hubby likes eating small paneer pieces so I chop them small : ) .\r\n\r\nNext add in the chopped ginger, garlic, coriander powder, garam masala powder, paprika powder, salt and red chilli powder.\r\n\r\nAdd in the yogurt and mix till all the paneer pieces are well coated with the spices and yogurt. Cover and keep this marinated paneer in the refrigerator for 30-40 minutes. Ideally you should keep this marinated paneer in the fridge overnight but if that’s not possible than minimum of 30 minutes is must.\r\n\r\nUse thick curd or preferably hung curd to marinate the paneer. To make hung curd, tie the curd in a muslin cloth and let it hand for 3-4 hours. Once all the water from the curd has dried out, your hung curd is ready.', '200 gm cubed paneer\r\n2 pinch salt\r\n1 inch ginger\r\n1 teaspoon pureed cashews\r\n1 tablespoon gram flour (besan)\r\n1/2 cup yoghurt (curd)\r\n1 teaspoon poppy seeds\r\n6 peppercorns\r\n1/8 teaspoon edible food color\r\n1/2 cup chopped onion\r\n6 pieces garlic\r\n1 cup tomato puree\r\n3 tablespoon refined oil\r\n1 tablespoon cumin seeds\r\n6 red chilli\r\nFor Marination\r\n1/2 teaspoon ginger paste\r\n1 teaspoon lime juice\r\n1/2 teaspoon cumin powder\r\n1/2 teaspoon garlic\r\n1/2 teaspoon chaat masala\r\nFor Garnishing\r\n1/2 cup chopped coriander leaves\r\n1/4 cup fresh cream', 'Reduces body and joint pain\r\nPaneer can reduce body pains and it works wonders for the person who is suffering from lower back pain. The presence of omega three and omega six fatty acids in paneer help in combating arthritis and benefit aged people who have trouble walking and are suffering from joint pain. Presence of omega three benefits pregnant woman as it reduces the chances of stillbirth and disorders. Omega three and omega six are present in fish like sardines. For vegetarians paneer fulfills the need of omega three and six in the body.\r\n\r\nPrevents cancer\r\nThe presence of selenium and potassium in paneer keeps the body healthy and prevents cancer. It even helps in combating cancer if it has started to develop. The presence of proteins helps in the prevention of stomach and colon cancer. The presence of sphingolipids would help in the prevention of other forms of cancer inside the body. Prostate cancer which is common in men would be reduced by intake of Paneer.\r\n\r\nPrevents skeletal deformation\r\nVitamin D content in Paneer helps in the prevention of skeletal deformation that can lead to joint and hip pain. The presence of vitamin k and magnesium also helps in the development of calcium-rich bones. Magnesium is useful in developing enzymes in the body and helps in proper functioning of nerves and muscles.', 'Calories 201\r\n% Daily Value*\r\n25%Total Fat 16g grams\r\n43% Saturated Fat 8.6g grams\r\nTrans Fat 0.5g grams\r\n14%Cholesterol 41mg milligrams\r\n21%Sodium 503mg milligrams\r\n8%Potassium 291mg milligrams\r\n2%Total Carbohydrates 6.9g grams\r\n6% Dietary Fiber 1.5g grams\r\nSugars 3.7g grams\r\nProtein 8.2g', ''),
(18, 'PUNJABI CHOLE', 'VEG', 'CHOLE', 'ONION', 'TEA', 'Punjabi chole masala or chana masala is one of the most popular curry dishes from India. In fact in north India no wedding or party is complete until you have chole masala on the menu. I remember whenever we would call someone over for lunch or dinner, mom would almost always make chole.', '250 Gms Kabuli Chole\r\n\r\nSome Water\r\n\r\n2 tsp Salt\r\n\r\n*Chole Masala Combination\r\n\r\n3 Tomatoes\r\n\r\n2 Onion\r\n\r\n1 Inch Ginger\r\n\r\n2 – 3 Green Chillies\r\n\r\n2 tsp Tea\r\n\r\n1/2 Baking Soda or Meetha Soda\r\n\r\nGhee For Tadka\r\n\r\n1 Big Spoon Oil For Cooking\r\n\r\n\r\n \r\n1/4 tsp Hing For Tadka\r\n\r\n \r\n\r\nINGREDIENTS TO MAKE CHOLE MASALA COMBINATION\r\n\r\n1 tsp Coriander Powder\r\n\r\n1 tsp Anardana Powder or Amchur Powder\r\n\r\n2 Tbsp Chole Masala (use MDH or EVEREST)\r\n\r\n1/2 tsp Haldi Powder\r\n\r\n1/2 tsp Red Chilli Powder', 'Culinary uses\r\n•	As the name suggests, chole masala is used to prepare chick peas, especially Punjabi chole preparations, which are served with roti, naan, chapati, basmati rice or any other way you desire.', 'Although the mineral selenium is not present in most fruits and vegetables, it can be found in chickpeas. It helps the enzymes of the liver to function properly and detoxify some cancer-causing compounds in the body. Additionally, selenium prevents inflammation and decreases tumor growth rates.', ''),
(19, 'ASPARGUS AND NEW POTATO FRITTATA', 'VEG', 'CHEESE', 'ONION', 'EGG', 'Heat the grill to high. Put the potatoes in a pan of cold salted water and bring to the boil. Once boiling, cook for 4-5 mins until nearly tender, then add the asparagus for a final 1 min. Drain.\r\n\r\nMeanwhile, heat the oil in an ovenproof frying pan and add the onion. Cook for about 8 mins until softened.\r\n\r\nMix the eggs with half the cheese in a jug and season well. Pour over the onion in the pan, then scatter over the asparagus and potatoes. Top with the remaining cheese and put under the grill for 5 mins or until golden and cooked through. Cut into wedges and serve from the pan with salad.\r\n\r\n', '1/2 cup | 115 grams potatoes diced into small cubes\r\n2 tablespoons extra virgin olive oil\r\n1/2 white onion chopped\r\n1/4 pound | 100 grams asparagus cut into 1 inch long pieces\r\n6 whole eggs\r\n1/4 cup parmesan cheese grated\r\n3/4 teaspoon salt or to taste\r\n1/2 teaspoon freshly ground black pepper\r\n2 oz goats cheese crumbled\r\n2 tablespoons fresh basil chopped', 'n this recipe, I’ve roasted asparagus with cremini mushrooms and onions. Then mixed them into a few eggs and topped it with cheese. \r\n\r\nThis was dinner at my house tonight but could easily be made for breakfast, brunch or lunch. Eat it whenever your heart desires!  ', 'Calories  310\r\nCarbohydrates  16\r\nSaturated Fat  6\r\nSugar  6\r\nProtein  19\r\nFat  18\r\nFibre  4\r\nSalt  0.7', ''),
(20, 'DRUMSTICK SAMBAR RECIPE', 'VEG', 'DRUMSTICK', 'SPICY POWDER', 'DAL', 'To begin making the Coimbatore Style Sambar Recipe, prep all the ingredients first. Soak the arhar dal in required water for about 15 to 20 minutes.\r\n\r\nOnce the lentils are soaked, drain the water, add the dal in a pressure with 2 cups water and pressure cook for about 4 whistle. Let the pressure release naturally. \r\n\r\nIn a saucepan, add drumstick, onions, tomatoes with sufficient water on high heat for about 10 minutes or till cooked. Keep it aside. You can use a bit of vegetable stock for grinding masalas for the sambar.\r\n\r\nHeat a heavy bottomed pan with gingelly oil. Once the oil is hot, add cumin seeds, coriander seeds, fenugreek seeds, asafoetida, dry red chillies, coconut and roast for about a minute of till fragrant. Allow to cool to room temperature. You may spread this on a plate and leave on kitchen countertop for faster cooling.\r\n\r\nIn a mixer grinder, grind the masalas with the help of a bit of water, or the stock of boiled veggies to a smooth paste.\r\n\r\nAdd the ground masala back in the saucepan, add tamarind paste and start boiling the sambar with cooked dal, and about a glass more of water or to the required consistency.Add salt and stir well.\r\n\r\nWhile the sambar comes to boil, in the kadai, heat a bit of gingelly oil. Once it is hot, on medium heat add the mustard seeds and allow them to splutter. Add curry leaves and saute for a few seconds, on low heat.\r\n\r\nOnce the sambar is boiled well for about 5-7 minutes, switch off heat, add the gingelly oil tadka, top it with some ghee and give it a stir. The Coimbatore sambar is ready to serve.\r\n\r\nServe Coimbatore Style Sambar Recipe with Steamed Rice Recipe and Capsicum Usili Recipe for a complete weekday meal.', 'Pressure Cooking Ingredients\r\n100 grams Toor dal\r\n2 medium sized Tomatoes\r\n1 onion\r\n1 teaspoon cumin seeds\r\n2 cloves garlic (optional)\r\nOther Ingredients\r\n1 tablespoon sesame/gingely oil\r\n¼ teaspoon fenugreek seeds\r\n½ teaspoon mustard seeds\r\n¼ teaspoon cumin seeds\r\n2 sprigs curry leaves\r\n¼ teaspoon asafoetida\r\n½ tablespoon chilli powder\r\n1 tablespoon coriander powder\r\n1 teaspoon turmeric powder\r\n2 Drumsticks\r\nhalf a lime size Tamarind\r\n1 teaspoon salt\r\n1 teaspoon jaggery (optional)\r\n4 sprigs Coriander leaves', 'The dal based stew is high on vitamins and minerals iron, zinc, folate and magnesium. In addition to the pulses and vegetables, the eclectic mix of herbs and spices add to the many health benefits of sambar too. Tamarind extract, turmeric powder, curry leaves, red pepper and mustard seeds have a number of health benefits, ranging from good digestion, weight loss and high immunity.\r\n', 'Calories	308.7\r\nTotal Fat	12.8 g\r\nSaturated Fat	2.4 g\r\nPolyunsaturated Fat	2.1 g\r\nMonounsaturated Fat	6.8 g\r\nCholesterol	119.3 mg\r\nSodium	148.4 mg\r\nPotassium	719.8 mg\r\nTotal Carbohydrate	14.0 g\r\nDietary Fiber	2.8 g\r\nSugars	0.1 g\r\nProtein	34.2 g\r\n', ''),
(21, 'DATE AND PISACHIO MUFFIN', 'SNACKS', 'NUTS', 'MILK ', 'EGG', 'Preheat oven on 190?C. Line the muffin holes tin with paper cases.\r\n\r\nBlend the dates and water in the blender until it becomes smooth.\r\n\r\nCombine dates mixture with remaining ingredients except oil and eggs in a mixing bowl with electric blender and blend for 3 minutes or until well mixed. Mix oil and eggs in another mixing bowl for 6-7 minutes or until the mixture becomes foamy then gradually add them into dough mixture and mix (do not over mix).\r\n\r\nSpoon the mixture into the paper cases until each becomes 3 quarters full. Bake for 20-25 minutes or until baked. Take out to cool for 3 minutes.\r\n\r\nServe with vanilla sauce.\r\n\r\nTo prepare the vanilla sauce: Combine all ingredients in a medium sauce pan and stir constantly over a medium heat until it boils and thickens, remove and set it aside to cool.', '60 grams (2 oz) pistachio nuts (unsalted), chopped fairly finely\r\n50 grams (1¾ oz) pitted dates, chopped finely\r\n300 grams (11 oz) spelt flour\r\n2 teaspoons aluminium free and gluten free baking powder\r\n½ teaspoon salt (Himalaya or sea salt)\r\n100 grams (3½ oz) rolled oats\r\n100 grams (3½ oz) Rapadura (or other raw cane sugar)\r\n195 millilitres (6¾ fluid oz) apple sauce (without added sugar)\r\n150 millilitres (5¼ fluid oz) soy milk\r\n1 free (please use range eggs)\r\n1 egg white (please use free range eggs)\r\n2 tablespoons coconut oil\r\n1 tablespoon agave nectar', 'Preheat oven on 190?C. Line the muffin holes tin with paper cases.\r\n\r\nBlend the dates and water in the blender until it becomes smooth.\r\n\r\nCombine dates mixture with remaining ingredients except oil and eggs in a mixing bowl with electric blender and blend for 3 minutes or until well mixed. Mix oil and eggs in another mixing bowl for 6-7 minutes or until the mixture becomes foamy then gradually add them into dough mixture and mix (do not over mix).\r\n\r\nSpoon the mixture into the paper cases until each becomes 3 quarters full. Bake for 20-25 minutes or until baked. Take out to cool for 3 minutes.\r\n\r\nServe with vanilla sauce.\r\n\r\nTo prepare the vanilla sauce: Combine all ingredients in a medium sauce pan and stir constantly over a medium heat until it boils and thickens, remove and set it aside to cool.', 'Per Portion of 300g\r\n\r\nEnergy :	273.00 Kcal\r\nProtein :	3.60 g\r\nCarbohydrate :	33.00 g\r\nFats :	15.00 g', ''),
(22, 'MULTI GRAIN SEVPURI', 'SNACKS', 'BEANS', 'AVACADO', 'PAPDIS', 'The red sweet chutney\r\nThe green spicy chutney\r\nFor topping some mashed, boiled potatoes, chopped onion, chopped tomatoes, chopped coriander leaves,  chopped raw mangoes and roasted peanuts.\r\nSpice powder like chat masala and black salt.\r\nStore bought puris and nylon sev.\r\nNext part would be assembing everything to make sev puri . Place puris or papdis over a dish. Place some mashed potatoes over each, put some chopped onion, raw mango and tomatoes. Now put some green and sweet chutney. Sprinkle some sev, chat masala, coriander leaves, black salt and squeeze some lime juice. Serve the sev puris immediately else it might get soggy and loos it’s crispy taste.', '', 'Chaat always brings back memories of carefree weekends spent at my parents’ beach house in India. I’d walk over to the beach in the afternoon when the tide is low enough to pick sea shells. I’d return home with my pail full and stomach empty. A gorgeous bowl of chaat would be waiting for me – crunchy, sweet, tangy, spicy, filling all at the same time. I’d sit on the verandah eating chaat, listening to the waves crashing near by and watching the kites sail over me.\r\n\r\n(placeholder)\r\n(Image credit: Apartment Therapy)\r\nChaat on weekends still transports me back to those balmy evenings in India. Sev puri is my favorite kind of chaat (‘chaat’ is a general name for this Indian street food; there are several variations). Sev puri are little puffed, fried rounds of dough (puri) stuffed with crispy noodles (sev), potatoes, onion, yogurt, tamarind chutney and mint chutney. The whole thing is then finished with a sprinkling of amazingly zestful chaat masala – a blend of salt, red chilli, coriander, cinnamon, ginger, anise, pepper, cumin, cardamom, clove, mace, carom and dried mango.\r\n\r\nYou will need to make a trip to the Indian store for this recipe. You could attempt to make all the ingredients at home, but that would be time consuming. Why bother when you can buy the same thing at a store!\r\n\r\n(placeholder)\r\n(Image credit: Apartment Therapy)\r\nThis is a basic recipe for sev puri; I encourage you to be creative — you are limited only by your imagination. When pomegranates are in season, I like to sprinkle some on top for a colorful, refreshing sweetness. A little chunk of pineapple tucked into the sev puri is divine (toss the pineapple chunks in chaat masala for a delightful sweet-savory flavor). To make these sev puris vegan, simply leave out the yogurt and use hummus, tahini or cashew butter instead. If you don’t have pani puris, try making this with tortilla chips instead; Scoops! will be perfect for this.\r\n\r\nFinally, there is only one way to eat a sev puri – put the whole thing in your mouth! Don’t try to bite into it, just pop the whole thing in your mouth!\r\n\r\n(placeholder)\r\n(Image credit: Apartment Therapy)\r\nSev Puri (Chaat)\r\nServes about 6\r\n\r\n1 medium potato, boiled, peeled and diced\r\n1/2 cup canned chickpeas, drained\r\n3 to 4 tablespoons finely chopped red onion\r\n40 pani puris* (fried rounds of dough)\r\n1/2 cup yogurt\r\n1/2 cup sev* (crispy noodles)\r\n1/4 cup date-tamarind chutney*\r\n1/4 cup mint chutney*\r\n1 tablespoon Chaat Masala*\r\n1/4 tablespoon red chilli powder or cayenne or paprika\r\nA few sprigs of cilantro\r\n\r\n*easily available at any Indian store\r\n\r\nMix together the boiled diced potato, chickpeas, red onion, 1/4 teaspoon chaat masala and salt. Set aside. Gently poke a hole on one side of a pani puri. Make it large enough so you can stuff it with the potato mixture. Place some potato mixture inside the pani puri cavity. Top with about 1/2 tablespoon of yogurt. Sprinkle some sev on top of the yogurt. Then add date-tamarind and mint chutneys. Finish by sprinkling a little chaat masala over the top. Repeat with all pani puris. Serve immediately.\r\n\r\n\r\n', 'Calories 94\r\n% Daily Value*\r\n8%Total Fat 5.1g grams\r\n2% Saturated Fat 0.5g grams\r\nTrans Fat 0.1g grams\r\n0%Cholesterol 0mg milligrams\r\n9%Sodium 215mg milligrams\r\n4%Potassium 142mg milligrams\r\n4%Total Carbohydrates 11g grams\r\n6% Dietary Fiber 1.6g grams\r\nSugars 2.1g grams\r\nProtein 1.9g', ''),
(23, 'TRIANGULAR PUFF', 'SNACKS', 'MILK', 'POTATOES', 'SPICY POWDER', '1.Mix wheat flour, milk and castor oil (water if required) and knead a soft dough. Cover it with wet muslin cloth and let it stand for 20 minutes.\r\n2.Steam potatoes. Peel carefully and mash them.\r\n3.Heat oil in a pan. When the oil is hot add cumin seeds. When it starts spluttering, add roasted cumin powder, red chilli powder, black pepper powder, dry coriander powder, dry mango powder and asafoetida. Cook for 15 seconds.\r\n4.Add potatoes and rock salt and mix it properly and cook for 1 minute.\r\n5.Remove the pan from flame. The stuffing for the samosas is ready.\r\n6.Roll chapatti and stuff it with the mashed potato mixture. Fold it into triangular samosa like shape.\r\n7.Bake these samosas at 160 C, till they are light brown in colour.\r\n8.Serve hot.', '', 'Potatoes are infamous. Many think that they contribute to weight gain, while these actually come loaded with many essential micronutrients like Vitamin A, C, B, iron and phosphorous,\" shares Delhi\'s leading skin and hair expert, Dr. Deepali Bhardwaj. Dorling Kindersley\'s Healing Foods has a dedicated section on roots, tubers and rhizomes. The segment talks about potatoes and classifies them as an ingredient that helps fight inflammation and high blood pressure apart from calming the nerves. Potatoes, in general, are loaded with potassium, fibre, B vitamins, manganese and Vitamin C. Healing Foods describes potatoes to be especially helpful in detoxification and acidity regulation in the body.', 'Calories	278	Sodium	483 mg\r\nTotal Fat	12 g	Potassium	-- mg\r\nSaturated	6 g	Total Carbs	38 g\r\nPolyunsaturated	-- g	Dietary Fiber	5 g\r\nMonounsaturated	-- g	Sugars	3 g\r\nTrans	-- g	Protein	6 g\r\nCholesterol	0 mg	 ', '');
INSERT INTO `foodtable` (`ID`, `RECIPE NAME`, `TYPE`, `ING1`, `ING2`, `ING3`, `PROCEDURES`, `INGNO`, `BENEFITS`, `CALORIFIC VALUE`, `IMAGE`) VALUES
(24, 'CHEESY CHEX MIX', 'SNACKS', 'CEREAL', 'NUTS', 'MILK', 'Toss 3 cups Chex cereal, 2 cups mini pretzels and 1 cup cheese crackers with 3/4 cup grated parmesan, 1/2 stick melted butter and a pinch of garlic powder. Spread on a baking sheet and bake 15 minutes at 325 degrees F, stirring.', '3\r\ncups Wheat Chex™ cereal SAVE $\r\n3\r\ncups Rice Chex™ cereal SAVE $\r\n1\r\ncup pretzel nuggets\r\n2\r\ncups small cheese-flavor crackers\r\n1\r\ncup salted roasted soy nuts\r\n1/2\r\ncup olive oil\r\n3\r\ntablespoons balsamic vinegar\r\n2\r\nteaspoons garlic salt\r\n3\r\nteaspoons Italian seasoning\r\n1/3\r\ncup grated Parmesan cheese', 'Healthy eating is often a challenge, particularly when we\'re surrounded by so many foods that seem to disguise themselves as good for us. We know some fats are necessary, whole grains are good, and getting adequate amounts of fruits and veggies is paramount, but sometimes the grocery store can still feel like a nutritional maze. \r\n\r\nThe problem with assessing the health-value of many foods is that consumers are \"led by the advertisement on the front of the package, and that becomes a selling point,\" said Constance Brown-Riggs, a registered dietitian and spokesperson for the National Academy of Nutrition and Dietetics. ', 'Healthy eating is often a challenge, particularly when we\'re surrounded by so many foods that seem to disguise themselves as good for us. We know some fats are necessary, whole grains are good, and getting adequate amounts of fruits and veggies is paramount, but sometimes the grocery store can still feel like a nutritional maze. \r\n\r\nThe problem with assessing the health-value of many foods is that consumers are \"led by the advertisement on the front of the package, and that becomes a selling point,\" said Constance Brown-Riggs, a registered dietitian and spokesperson for the National Academy of Nutrition and Dietetics. ', ''),
(25, 'APPLE QUESADILAS', 'SNACKS', 'APPLE', 'CHICKEN', 'CHEESE', 'Preheat oven to 400°. Toss together first eight ingredients. Place 3/4 cup mixture on one half of each tortilla. Fold tortillas to close; secure with toothpicks.\r\nPlace on a baking sheet coated with cooking spray. Bake until golden brown, 13-18 minutes, turning halfway through. Discard toothpicks. Serve with toppings as desired.', '2 medium tart apples, sliced\r\n1 cup diced cooked chicken breast\r\n1/2 cup shredded cheddar cheese\r\n1/2 cup shredded part-skim mozzarella cheese\r\n1/2 cup fresh or frozen corn, thawed\r\n1/2 cup chopped fresh tomatoes\r\n1/2 cup chopped onion\r\n1/4 teaspoon salt\r\n6 flour tortillas (8 inches), warmed\r\nOptional toppings: shredded lettuce, salsa and sour cream', 'Apple as a fruit is very good for helath and also helps in curing of many diseases.', '1 quesadilla: 300 calories, 10g fat (4g saturated fat), 33mg cholesterol, 475mg sodium, 38g carbohydrate (6g sugars, 3g fiber), 16g protein. Diabetic Exchanges: 2-1/2 starch, 2 medium-fat meat.', ''),
(26, 'CRACKWICHES', 'SNACKS', '', '', '', 'andwich bread (also referred to as sandwich loaf)[1] is bread that is prepared specifically to be used for the preparation of sandwiches.[2][3][4] Sandwich breads are produced in many varieties, such as white, whole wheat, sourdough, rye, multigrain[1][5][6][7] and others. Sandwich bread may be formulated to slice easily,[8] cleanly or uniformly, and may have a fine crumb (the soft, inner part of bread) and a light texture.[4] Sandwich bread may be designed to have a balanced proportion of crumb and crust, whereby the bread holds and supports fillings in place and reduces drips and messiness.[3][4] Some may be designed to not become crumbly, hardened, dried or have too squishy a texture.[2][9] Sandwich bread can refer to cross-sectionally square, sliced white and wheat bread, which has been described as \"perfectly designed for holding square luncheon meat\".[10] The bread used for preparing finger sandwiches is sometimes referred to as sandwich bread.[10] Pan de mie is a sandwich loaf.[11][12] Some sandwich breads are designed for use in the creation of specific types of sandwiches, such as the submarine sandwich.[13] For barbecuing, use of a high-quality white sandwich bread has been described as suitable for toasting over a fire.[14] Gluten-free sandwich bread may be prepared using gluten-free flour, teff flour.[15][16] and other ingredients.', '', 'Sandwich bread may be designed to have a balanced proportion of crumb and crust, whereby the bread holds and supports fillings in place and reduces drips and messiness.[3][4] Some may be designed to not become crumbly, hardened, dried or have too squishy a texture.', 'Calories 352	 \r\nCalories from Fat 139	 \r\nTotal Fat 15.5g	24%\r\nSaturated Fat 6.4g	32%\r\nPolyunsaturated Fat 1.4g	 \r\nMonounsaturated Fat 6.7g	 \r\nCholesterol 58mg	19%\r\nSodium 771mg	32%\r\nPotassium 290.54mg	8%\r\nCarbohydrates 33.3g	11%\r\nDietary Fiber 0g	0%\r\nSugars 0g	 \r\nProtein 20.7g	 \r\nVitamin A 6% · Vitamin C 5%\r\nCalcium 13% · Iron 18%\r\n \r\nA typical sandwich that you make at home includes bread, one or two of your favorite condiments, and lunch meat. You may even add a few veggies for crunch and flavor. If you make that sandwich at home you can control the ingredients, cut calories, and boost nutrition. \r\n\r\nBut what if you pick one up at the market? It\'s harder to control sandwich calories when you buy them pre-made.\r\n\r\nThe nutritional value and calorie counts can vary significantly.\r\n\r\nTypical Sandwich Calories \r\n\r\n', ''),
(27, 'GATHIA', 'SNACKS', '', '', '', 'Heat 2 tbsp of water in a saucepan and add the papad khar and salt. Mix well and cook on a medium flame for 1 minute or till the papad khar dissolves completely. Keep aside.\r\nCombine the besan, asafoetida , carom seeds, hot oil and prepared papad khar mixture in a deep bowl and knead into a stiff dough without using water.\r\nGrease your hands using a little oil and knead the dough once again to smoothen it lightly. Keep aside.\r\nGrease a “sev press” (along with its lid and ganthia plate) using a little oil, press the dough into it and cover it with the lid.\r\nHeat the oil in a deep non-stick pan, place the “sev press” above the hot oil (at a little distance) and turn the handle of the “sev press” so that half of the dough is forced out of the ganthia plate and drops directly into the oil.\r\nMove the “sev press” in a circular motion while turning the handle of the “sev press” in a circular motion at the same time.\r\nDeep-fry the ganthia on a medium flame, till they turn light yellow in colour and crisp while turning them at intervals. Drain on an absorbent paper.\r\nRepeat step 6 and 7 to deep-fry the remaining ganthias in 2 more batches.\r\nCool completely and break into pieces using your fingers.\r\nServe or store in an air-tight container.', '', '\r\nTea-time becomes more than perfect when it features ganthias and jalebis . Ganthia is a crunchy and savoury snack that has been loved by generations of Gujaratis. It has gained its share of fame in other parts of India and the rest of the world too! \r\n\r\nCarom seeds and asafoetida give the besan dough a flavourful and aromatic punch while papad khar ensures the ideal crispiness. \r\n\r\nPapad Khar is an essential and vital ingredient in papad making, where it contributes to the crispness and expansion of fried papads. Dissolved in water and added to the Ganthia dough, it does its job here too. ', 'Nutrient values (Abbrv) per cup\r\nEnergy	708 cal\r\nProtein	20.5 g\r\nCarbohydrates	58.8 g\r\nFiber	15.1 g\r\nFat	43.5 g\r\nCholesterol	0 mg\r\nSodium	1157.3 mg', ''),
(28, 'SHAMI KEBAB', 'SNACKS', '', '', '', '1.In a pan, add the meat, water, Bengal gram, black and green cardamoms, cinnamon sticks, red chilli powder, salt, turmeric powder, dry ginger powder, ginger and garlic paste.\r\n2.Bring the mixture to a boil. Reduce the heat and continue to cook it until all the water has evaporated and the meat is tender.\r\n3.Remove the pan from the heat and keep aside to cool. Discard the whole spices.\r\n4.Pass the meat twice through a mincing machine, adding the green chillies, black cumin seeds and green coriander.\r\n5.Divide the mixture equally into lemon-sized portions and shape each of them into patty.\r\n6.Heat the refined oil in a pan; deep-fry the patties until they turn a golden brown\r\n7.Remove and drain the excess oil on kitchen towels.\r\n8.Serve hot and crisp with mint chutney and lemon wedges on the side.', '', 'About Shaami Kebab Recipe: Authentic Mughlai dish, shaami kebab is a delectable snack made with minced mutton and a host of spices like red chilli, green chilli, black peppercorn, etc. A delicious starter at dinner ...', 'Calories	174.7\r\nTotal Fat	11.7 g\r\nSaturated Fat	4.6 g\r\nPolyunsaturated Fat	0.5 g\r\nMonounsaturated Fat	5.0 g\r\nCholesterol	43.1 mg\r\nSodium	38.2 mg\r\nPotassium	146.0 mg\r\nTotal Carbohydrate	7.3 g\r\nDietary Fiber	1.3 g\r\nSugars	0.2 g\r\nProtein	7.7 g\r\n', ''),
(30, 'FRIED CHEESE CUBES', 'SNACKS', '', '', '', 'Cut mozzarella cheese into 1-inch cubes and set aside.\r\nPlace three shallow bowls beside each other, filling the first with flour, the second with the eggs and milk and the third with the breadcrumbs.\r\nIn a large skillet or saucepan, heat 2 inches of oil to 350°F (use a candy or deep-fry thermometer to gauge temperature). Set a large plate topped with a few paper towels off to the side.\r\n5\r\nUsing a slotted spoon, lower a few cheese cubes at a time into the oil, making sure they stay separated while frying. Remove from oil using spoon after 1 minute or when the cubes are a golden brown and place on paper towels to drain. Let oil return to 350°F before making the next batch. Repeat until all cheese cubes are fried.\r\n6\r\nHeat pizza sauce in the microwave or on the stove top until warm; serve with warm, fried cheese balls.', '', 'Cottage cheese is one of the top food sources of casein, a slow-digesting milk protein that accounts for about 80 percent of the protein in milk (the other 20 percent is whey protein). The fact that it\'s digested slowly means that it provides a steady release of amino acids to rebuild and repair muscle fibers, and to help prevent muscle breakdown.', 'Calories	120.0\r\nTotal Fat	10.0 g\r\nSaturated Fat	0.0 g\r\nPolyunsaturated Fat	0.0 g\r\nMonounsaturated Fat	0.0 g\r\nCholesterol	0.0 mg\r\nSodium	0.0 mg\r\nPotassium	0.0 mg\r\nTotal Carbohydrate	1.0 g\r\nDietary Fiber	0.0 g\r\nSugars	0.0 g\r\nProtein	8.0 g', ''),
(31, 'GULKAND SEVAYA KHEER', 'DESSERT', '', '', '', '1.Fry the cashews in a heavy-bottom pan in 1 tsp of ghee on medium-low heat. Keep them aside for garnishing.\r\n2.In the same pan, add remaining ghee and vermicelli. Roast them stirring gently for 5 minutes on medium heat. If you are using roasted vermicelli then only cook them for a minute in the ghee.\r\n3.Add milk, gulkand, half of the cashews, raisins and saffron and bring it to a gentle boil. Add sugar and cook on medium low heat for another 10-15 minutes.\r\n4.If the kheer looks thick, add some more milk to it. Add rose essence, stir well and turn the heat off.\r\n5.Serve hot, chilled or as desired.', '', 'Veery tasty sweet served after lunch/dinner.', 'Gulkand Seviyan Kheer {Rose flavored sweet vermicelli pudding}\r\nAmount Per Serving\r\nCalories 405 Calories from Fat 63\r\n% Daily Value*\r\nTotal Fat 7g 11%\r\nSaturated Fat 4g 20%\r\nCholesterol 20mg 7%\r\nSodium 187mg 8%\r\nPotassium 312mg 9%\r\nTotal Carbohydrates 75g 25%\r\nDietary Fiber 1g 4%\r\nSugars 25g\r\nProtein 8g 16%\r\nVitamin A 3.6%\r\nVitamin C 0.4%\r\nCalcium 22.3%\r\nIron 3.7%', ''),
(32, 'GAJAR KA HALWA', 'DESSERT', '', '', '', 'Step 1\r\nGajar ka Halwa is a perfect dessert recipe, which you can prepare in a few minutes with some easily available ingredients. You just need a few easily available ingredients and you are good-to-go! Here’s how you go about preparing this dish.In a small bowl, add a tablespoon of milk and kesar strands and keep it aside\r\nStep 2\r\nNow in a kadhai, mix the milk and carrots together and on a low flame slowly bring them to a boil. To add some crunch dry roast the nuts and add it to the recipe.\r\nStep 3\r\nAfter a boil in the milk, add in the kesar flakes and boil it again till the milk dries up.Once the milk is dried up, add the condensed milk and stir occasionally till it also dries up.Then add the ghee and cook for another 10 minutes. Garnish with raisins and cashew nuts and serve hot.', '', ' Boosts eye healthAre you or your child struggling with poor eyesight? Carrots to the rescue! Carrots have been regarded as the fool-proof traditional remedy to improve eyesight. According to the book Healing foods carrots are rich in lutein and lycopene which help maintain good eyesight and night vision. The high amount of vitamin A also helps boost a healthy eyesight.\r\n', 'Calories 275\r\n% Daily Value*\r\n20%Total Fat 13g grams\r\n35% Saturated Fat 7g grams\r\nTrans Fat 0g grams\r\n10%Cholesterol 30mg milligrams\r\n4%Sodium 103mg milligrams\r\n13%Potassium 443mg milligrams\r\n12%Total Carbohydrates 35g grams\r\n9% Dietary Fiber 2.2g grams\r\nSugars 30g grams\r\nProtein 5.6g', ''),
(33, 'SANDESH', 'DESSERT', '', '', '', 'Sandesh can be made with the use of chhena or cottage cheese. The simplest kind of sandesh in Bengal is the makha sandesh (makha = kneaded). It is prepared by tossing the chhena lightly with sugar over low heat. The sandesh is essentially hot, sweetened chhana. When shaped into balls, it is called kanchagolla (kancha = raw; golla = ball). For more complex and elaborately prepared sandesh, the chhana is dried and pressed, flavored with essence of fruits, and sometimes even colored, and cooked to many different levels of consistencies. Sometimes it is filled with syrup, blended with coconut or kheer, and molded into a variety of shapes such as conch shells, elephants, and fish. Another variant is nolen gurer sandesh, which is made with gur or jaggery. It is known for its brown or caramel colour that comes from nolen gur.', '', 'Very tasty sweet and can be consumed after lunch/ dinner. ', 'Calories	147	Sodium	-- mg\r\nTotal Fat	7 g	Potassium	-- mg\r\nSaturated	2 g	Total Carbs	17 g\r\nPolyunsaturated	-- g	Dietary Fiber	-- g\r\nMonounsaturated	-- g	Sugars	15 g\r\nTrans	-- g	Protein	3 g\r\nCholesterol	5 mg	 	', ''),
(34, 'STRAWBERRY LASSI', 'DESSERT', '', '', '', 'Blend 1 cup sweetened plain Greek yogurt with 1/2 cup washed and hulled strawberry and 1 cup milk until very smooth. Make sure all ingredients are chilled. Pour into glasses and serve immediately.\r\n\r\nServes 2.\r\n\r\nIf you are using plain yogurt, make sure it’s not sour at all and use sugar or honey to sweeten your lassi. I personally don’t like honey in lassi and use powdered sugar to make blending easier.', '', 'Nutrition Facts\r\nCalories help 160	(669 kJ)\r\nCalories from fat help 18\r\n% Daily Value 1\r\nTotal Fat help	2g	3%\r\nSat. Fat help	1.5g	8%\r\nCholesterol help	10mg	3%\r\nSodium	125mg	5%\r\nTotal Carbs. help	25g	8%\r\nDietary Fiber help	3g	12%\r\nSugars help	21g	 \r\nProtein help	11g	 \r\nCalcium help	300mg	', 'Nutrition Facts\r\nCalories help 160	(669 kJ)\r\nCalories from fat help 18\r\n% Daily Value 1\r\nTotal Fat help	2g	3%\r\nSat. Fat help	1.5g	8%\r\nCholesterol help	10mg	3%\r\nSodium	125mg	5%\r\nTotal Carbs. help	25g	8%\r\nDietary Fiber help	3g	12%\r\nSugars help	21g	 \r\nProtein help	11g	 \r\nCalcium help	300mg	', ''),
(35, 'SHRIKHAND', 'DESSERT', '', '', '', '1. Collect milk acidic dahi (0.7 to 1 percent acidity)\r\n2. Break the curd and place in a muslin cloth (bag)\r\n3. Hang dahi containing muslin cloth on a stand for removal of why for 6 to 8 hrs.\r\n4. The solid mass thus obtained is called chakka.\r\n5. The chakka so obtained is the Shrikhand base.\r\n6. Admix chakka so obtained with sugar @ 35 to 45 % by weight of chakka) by using powdered sugar.\r\n7. Knead well for uniform mixing using a kneading machine (Shrikhand patra)\r\n8. Add colour and flavor (nutmug powder about ¼ small spoon per kg of product and mix it thoroughly.\r\n9. The product so obtained is known as shrikhand. It should be served in plastic coated cups.\r\n', '', 'It is simply amazing how the humble dahi transforms into a mouth-watering dessert in just a few simple steps. Here is the easiest and best way to make yummy Shrikhand out of everyday curds. It does not even require any cooking. \r\n\r\nAlso known as Matho, Shrikhand is an integral part of a traditional Maharashtrian or Gujarati Thali. Apart from tasting yummy by itself, it can also be enjoyed as an accompaniment for roti or puris. \r\n\r\nDepending on what flavouring substances you add to the thick and creamy hung curds, you get different varieties of Shrikhand. From flavours and essences to dry fruits and nuts, not to forget fruit pulps like mango, strawberry, rose, raspberry and chickoo, you can add an endless number of ingredients to your Shrikhand. \r\n\r\nOf course, there are some classic all-time favourites like the mango-tinged Aamrakhand. Interestingly, you can also make a healthy diabetic-friendly version of this popular dessert Mixed Fruit Shrikhand. \r\n\r\nJust let your imagination run wild and come up with your own funky versions!', 'Calories	130	Sodium	15 mg\r\nTotal Fat	4 g	Potassium	-- mg\r\nSaturated	2 g	Total Carbs	23 g\r\nPolyunsaturated	-- g	Dietary Fiber	-- g\r\nMonounsaturated	-- g	Sugars	21 g\r\nTrans	-- g	Protein	4 g\r\nCholesterol	10 mg	 	', ''),
(36, 'SZECHWAN CHILLI CHICKEN', 'CHINESE', '', '', '', 'Boil the dried red chilies in little water for about 3 – 4 minutes. Let it cool and coarsely grind with Vinegar, salt, sugar, Soy sauce, ginger and garlic.  Heat 1 tbsp Sesame oil and sauté this paste for a minute. Allow to cool.\r\nClean and cut the chicken into bite size cubes. Marinate chicken with salt, 1 tbsp Szechuan Chilli Paste, Soy Sauce, Ginger Garlic paste and pepper powder for half an hour. Just before frying, add Corn Flour and mix well. Deep fry in oil till slightly brown. Keep aside.\r\nRemove excess oil and add the sliced red chilies  and julienned ginger(add sliced green chilies as well if you want it spicier). Drain and keep aside for garnishing. Add chopped garlic and cubed Onion and stir fry for a minute.Next add the cubed Bell Pepper/ Capsicum and fry for few seconds.\r\nMix in 1 ½ tbsp. Szechuan Chilli Paste and fry for another minute. Mix the Soya sauce and Tomato Sauce with 1 cup water and add to the pan. Let it boil and add the chopped Spring Onion bulbs and the fried Chicken pieces. Cook covered on low flame for two minutes. Adjust the salt.\r\nMix corn flour in little water and add to the gravy, stirring continuously to thicken the gravy and coat the pieces.', '', 'Szechuan Chicken / Schezwan Chilli Chicken /Sichuan Chicken with chilies is a popular Indo Chinese fusion dish with unique, bold flavours. Originated from the Sichuan province of South Western China, Szechuan Chicken or Szechwan chicken is prepared with a special Sichuan pepper to give the punch. However, in India, Szechuan Chicken got a makeover and is prepared with a Szechuan style Chili paste/ sauce adapted to match Indian tastes.  Sweet, Sour, Salty and Spicy Chilli Chicken that will captivate you with its unique fragrance. You might also like my Honey Chilli Chicken, anoher flavorful Chilly Chicken recipe.', 'Calories	242.5\r\nTotal Fat	7.3 g\r\nSaturated Fat	1.4 g\r\nPolyunsaturated Fat	1.7 g\r\nMonounsaturated Fat	3.6 g\r\nCholesterol	65.9 mg\r\nSodium	330.9 mg\r\nPotassium	608.0 mg\r\nTotal Carbohydrate	14.9 g\r\nDietary Fiber	2.7 g\r\nSugars	2.8 g\r\nProtein	29.8 g\r\n', ''),
(37, 'STIR FRIED TOFU WITH RICE', 'CHINESE', '', '', '', 'Step 1\r\nCook rice according to package directions, omitting salt and fat.\r\n\r\nStep 2\r\nWhile rice cooks, heat 1 tablespoon vegetable oil in a large nonstick skillet over medium-high heat. Add tofu; cook 4 minutes or until lightly browned, stirring occasionally. Remove from pan. Add eggs to pan; cook 1 minute or until done, breaking egg into small pieces. Remove from pan. Add 1 tablespoon vegetable oil to pan. Add 1 cup onions, peas and carrots, garlic, and ginger; sauté 2 minutes.\r\n\r\nStep 3\r\nWhile vegetable mixture cooks, combine sake, soy sauce, hoisin sauce, and sesame oil. Add cooked rice to pan; cook 2 minutes, stirring constantly. Add tofu, egg, and soy sauce mixture; cook 30 seconds, stirring constantly. Garnish with sliced green onions, if desired.', '', 'Soybeans were considered one of five sacred foods (along with rice, wheat, and two types of millet) in ancient China, where bean curd is thought to have been produced for more than 2,000 years. The food was taken to Japan by Buddhist monks traveling back and forth between the countries. Today, tofu continues to be a primary protein source for Buddhists in Asia and around the world. Tofu, or bean curd, can be thought of as a kind of soymilk cheese. Soybeans are soaked and cooked in water, then pressed to make a soymilk base. A coagulant is added to the soymilk, which turns it into cottage-cheese-like curds. The curds are then pressed and drained to form white cakes—the pressing and draining time determines the final product\'s firmness.', 'Soybeans were considered one of five sacred foods (along with rice, wheat, and two types of millet) in ancient China, where bean curd is thought to have been produced for more than 2,000 years. The food was taken to Japan by Buddhist monks traveling back and forth between the countries. Today, tofu continues to be a primary protein source for Buddhists in Asia and around the world. Tofu, or bean curd, can be thought of as a kind of soymilk cheese. Soybeans are soaked and cooked in water, then pressed to make a soymilk base. A coagulant is added to the soymilk, which turns it into cottage-cheese-like curds. The curds are then pressed and drained to form white cakes—the pressing and draining time determines the final product\'s firmness.', ''),
(38, 'VEG HAKKA NOODLES', 'CHINESE', '', '', '', 'Choose the right noodles\r\nThere are a lot of noodles available in the market so choose the right one to make street style hakka noodles at home.\r\nUse a little extra-oil\r\nYou know you have made the perfect noodles when each and every strand of noodle is separate from each other, which was not the case when I made noodles for the first time 3 years ago.\r\n\r\nIt was a mess and all my noodles clumped up together. After few trials and errors, I realized that you do need to use little extra oil.\r\n\r\nFirst the noodles must be coated with little oil after they are boiled and drained.This really helps in preventing the stickiness.\r\n\r\nAnd second you have to use a bit more oil than you would have wanted while cooking the noodles with the veggies.', '', 'Description Uses of Hakka Noodles \r\n\r\nHakka noodles is a Chinese preparation where boiled noodles are stir fried with sauces and vegetables or meats. A hakka noodle is made from unleavened dough( rice or wheat flour) that is cooked in a boiling liquid. Depending upon the type, noodles may be dried or refrigerated before cooking. A typical preparation involves splashing of oil to a large pot of boiling salted water and cooking the noodles as directed on the package. Drain the noodles in a colander, place it in a large bowl, and while still warm, toss with i tbsp oil so that the noodles don\'t stick to one another.Now take a wok, add 4 tbsp oil, and sauté the chopped onions and bell peppers till they become soft and glazed. Add the scallions and toss well. Add salt and 5-6 tbsp soy sauce (adjust to your taste), then add the prepared schezwuan sauce and turn off the heat. Gently pour the sauce over the noodles while still hot. Garnish with some chopped spring onion greens and serve hakka noodles hot!', 'Description Uses of Hakka Noodles \r\n\r\nHakka noodles is a Chinese preparation where boiled noodles are stir fried with sauces and vegetables or meats. A hakka noodle is made from unleavened dough( rice or wheat flour) that is cooked in a boiling liquid. Depending upon the type, noodles may be dried or refrigerated before cooking. A typical preparation involves splashing of oil to a large pot of boiling salted water and cooking the noodles as directed on the package. Drain the noodles in a colander, place it in a large bowl, and while still warm, toss with i tbsp oil so that the noodles don\'t stick to one another.Now take a wok, add 4 tbsp oil, and sauté the chopped onions and bell peppers till they become soft and glazed. Add the scallions and toss well. Add salt and 5-6 tbsp soy sauce (adjust to your taste), then add the prepared schezwuan sauce and turn off the heat. Gently pour the sauce over the noodles while still hot. Garnish with some chopped spring onion greens and serve hakka noodles hot!', ''),
(39, 'CHILLI FISH', 'CHINESE', '', '', '', 'How to Make Chilli Fish\r\n1.Cut the fish into finger pieces.\r\n2.Make a batter with corn flour, maida, baking powder, soy sauce, celery, pepper powder, water and salt.\r\n3.Dip the fish pieces in the batter and fry in oil till golden brown. Transfer fish into a serving plate.\r\nPrepare the sauce:\r\n1.Heat oil in a pan.\r\n2.Saute garlic, ginger and green chilly. Add soy sauce, chilly and tomato sauce to it.\r\n3.Finally add corn flour mixed with water to it and stir well. Once it starts to boil, remove form fire.\r\n4.At the time of serving, pour the sauce on top of fried fish pieces and mix well.\r\n5.Garnish with chopped spring onions.', '', 'Its rich nutritional profile that comes studded with essential micronutrients including omega 3, protein, B vitamins, selenium and vitamin D among others, makes it a much sought after item among fitness enthusiasts.\r\n\r\n2)  Almost all fish and sea organisms are a rich source of vitamin E and omega 3. Regular fish consumption has long been tied to healthy hair, eyesight and skin.', 'Calories	290	Sodium	788 mg\r\nTotal Fat	11 g	Potassium	94 mg\r\nSaturated	1 g	Total Carbs	20 g\r\nPolyunsaturated	3 g	Dietary Fiber	2 g\r\nMonounsaturated	6 g	Sugars	8 g\r\nTrans	-- g	Protein	28 g\r\nCholesterol	-- mg	 	', ''),
(40, 'HOT AND SOUR SOUP', 'CHINESE', '', '', '', 'Put the wood ears in a small bowl and cover with boiling water. Let stand for 30 minutes to reconstitute. Drain and rinse the wood ears; discard any hard clusters in the centers.\r\nHeat the oil in a wok or large pot over medium-high flame. Add the ginger, chili paste, wood ears, bamboo shoots, and pork; cook and stir for 1 minute to infuse the flavor. Combine the soy sauce, vinegar, salt, pepper, and sugar in a small bowl, pour it into the wok and toss everything together - it should smell really fragrant. Pour in the Chinese Chicken Stock, bring the soup to a boil, and simmer for 10 minutes. Add the tofu and cook for 3 minutes.\r\nDissolve the cornstarch in the water and stir until smooth. Mix the slurry into the soup and continue to simmer until the soup thickens. Remove the soup from the heat and stir in 1 direction to get a current going, then stop stirring. Slowly pour in the beaten eggs in a steady stream and watch it spin around and feather in the broth (it should be cooked almost immediately.) Garnish the hot and sour soup with chopped green onions and cilantro before serving.\r\nChinese Chicken Stock:\r\nPut the chicken in a large stockpot and place over medium heat. Toss in the green onions, garlic, ginger, onion, and peppercorns. Pour about 3 quarts of cold water into the pot to cover the chicken by 1-inch. Simmer gently for 1 hour, uncovered, skimming off the foam on the surface periodically.\r\nCarefully remove the chicken from the pot and pass the stock through a strainer lined with cheesecloth to remove the solids and excess fat. Cool the chicken stock to room temperature before storing in the refrigerator, or chill it down over ice first.', '', '90cal of calories\r\n2.8gr  of fat\r\n49mg of cholesterol\r\n876mg of sodium\r\n128mg of potassium\r\n10gr of carbohydrates\r\n1.2gr of dietary fiber\r\n1gr of sugar\r\n6gr of protein\r\n2gr of vitamin A\r\n5gr of vitamin B6\r\n3gr of vitamin D\r\n2gr of vitamin C\r\n4gr of calcium\r\n8gr of iron\r\n5gr of magnesium', '90cal of calories\r\n2.8gr  of fat\r\n49mg of cholesterol\r\n876mg of sodium\r\n128mg of potassium\r\n10gr of carbohydrates\r\n1.2gr of dietary fiber\r\n1gr of sugar\r\n6gr of protein\r\n2gr of vitamin A\r\n5gr of vitamin B6\r\n3gr of vitamin D\r\n2gr of vitamin C\r\n4gr of calcium\r\n8gr of iron\r\n5gr of magnesium', ''),
(41, 'PIZZA MARGHERITA', 'ITALIAN', '', '', '', 'STEP 1\r\n\r\nOn a wooden or marble work surface, shape the flour into a well. Place the yeast, salt and warm water in the center. Be careful not to let the salt come in contact with the yeast. \r\n\r\nSTEP 2\r\n\r\nKnead the dough vigorously with your hands for 15-20 minutes, or in a mixer, until the dough is soft and smooth.\r\n\r\nSTEP 3\r\n\r\nOnce you have the right consistency, adding a bit of water or flour if necessary, shape the dough into a ball. Cover with a plastic bowl so that the dough is protected from the air. Let rise for 3 or 4 hours at room temperature for about an hour in a warm place. \r\n\r\nSTEP 4\r\n\r\nOnce the dough will be doubled in volume, ricavatene 6 loaves, modellateli in spherical shapes, cover with a sheet of plastic wrap and let them rise at room temperature for a couple of hours or in a warm place for about 45 minutes.\r\n\r\nSTEP 5\r\n\r\nAs soon as the loaves have doubled in volume, prepare the tomato sauce and place it in a bowl. Add a pinch of salt and 1/3 of the olive oil.\r\n\r\nSTEP 6\r\n\r\nKnead the dough, then flattening them using your fingers. \r\n\r\nSTEP 7\r\n\r\nUse a ladle or a spoon to spread a good amount of tomato sauce on the pizza. Then, cover with mozzarella, torn into pieces. Garnish with a couple leaves of basil and bake in a 480° F oven for 5 or 6 minutes.\r\n\r\nSTEP 8\r\n\r\nOnce ready, remove the pizza from the oven. Garnish with more basil and a drizzle of oil. Serve immediately.\r\n\r\n', '', 'Calories\r\nThe American Dietetic Association estimates that the average number of calories in one serving, or one slice, of Margarita pizza is between 200 and 300 calories, depending on the size of the pizza and the thickness of the crust.\r\n\r\n', 'Calories\r\nThe American Dietetic Association estimates that the average number of calories in one serving, or one slice, of Margarita pizza is between 200 and 300 calories, depending on the size of the pizza and the thickness of the crust.\r\n\r\n', ''),
(42, 'FOCACCIA', 'ITALIAN', '', '', '', 'Whisk yeast with warm water in a mixing bowl; whisk in 2 tablespoons olive oil, salt, semolina flour, and 2 teaspoons rosemary until thoroughly combined. Mix in 2 1/2 cups bread flour, using a wooden spoon, until dough is too stiff and sticky to mix.\r\nTurn dough out onto a floured work surface. Knead, dusting with remaining 1/4 cup bread flour as needed, until dough is soft, smooth, and slightly elastic, 2 to 3 minutes.\r\nDrizzle dough with 1 tablespoon olive oil, spreading oil over the dough. Knead briefly, about 2 minutes, to incorporate olive oil. Repeat with 1 more tablespoon oil. Knead 2 or 3 more minutes to incorporate olive oil. Drizzle dough with 1 more tablespoon oil and knead in as before. If dough seems too sticky, knead in a little more flour. Knead until dough is soft, smooth, and elastic, 1 to 2 more minutes (7 to 8 minutes total kneading time).\r\nDrizzle 1 more tablespoon olive oil into a large bowl, place dough into bowl, and turn dough in bowl several times to coat with oil. Cover bowl with aluminum foil and let rise in a warm place until doubled, 1 to 2 hours.\r\nCoat a sheet pan lightly with 1 teaspoon olive oil. Turn dough into pan and press gently into a rough rectangular shape using your fingers, pressing out air bubbles. Cover sheet pan loosely with plastic wrap and let rest 15 to 20 minutes to relax the gluten.\r\nDrizzle 1 tablespoon more olive oil onto the dough, spread oil onto dough, and poke 3 or 4 oil-covered fingers deeply into the dough to make dimples all over the surface. Poke holes all the way down to the bottom of the pan. Fill in any spaces with holes until entire surface is covered with dimples. Let rise until nearly doubled, about 45 minutes.\r\nPreheat oven to 475 degrees F (245 degrees C).\r\nSprinkle 2 teaspoons minced rosemary over top of dough. Drizzle 1 more tablespoon olive oil onto the surface of the dough and brush on very lightly to avoid moving the rosemary. Sprinkle with sea salt.\r\nBake in the preheated oven until focaccia loaf is lightly golden brown, about 15 minutes. Brush 1 last tablespoon olive oil onto the loaf. Transfer to a rack and let cool before cutting.', '', 'Focaccia is one of the most popular and most ancient of the breads of Italy and is very easy to make. I have created this step by step primer to show everyone just how simple it is to make really great focaccia, and what a versatile bread it truly is. Basic focaccia dough requires only five ingredients, flour, water, olive oil, salt, and yeast. A simple focaccia dough lends itself to so many variations that once you master the dough, your options are endless. You can flavor the focaccia dough itself, add a myriad of different seasonal toppings both sweet and savory, create a crisp crusted focaccia that is great for dipping or spreading with creamy toppings, or make a thicker crusted focaccia that is perfect to use for sandwiches or panini. This easy flat bread is also a great option for novice bread bakers as it can be prepared easily and does not require any fancy shaping.', 'Calories 142\r\n% Daily Value*\r\n7%Total Fat 4.5g grams\r\n3% Saturated Fat 0.5g grams\r\nTrans Fat 0g grams\r\nPolyunsaturated Fat 0.6g grams\r\nMonounsaturated Fat 3.2g grams\r\n0%Cholesterol 0mg milligrams\r\n13%Sodium 320mg milligrams\r\n2%Potassium 65mg milligrams\r\n7%Total Carbohydrates 20g grams\r\n4% Dietary Fiber 1g grams\r\nSugars 1g grams\r\nProtein 5g', ''),
(43, 'PROSCUITTO', 'ITALIAN', '', '', '', 'Sliced prosciutto crudo in Italian cuisine is often served as an antipasto, wrapped around grissini, or accompanied with melon. It is also eaten as accompaniment to cooked spring vegetables, such as asparagus or peas. It may be included in a simple pasta sauce made with cream, or a Tuscan dish of tagliatelle and vegetables. It is used in stuffings for other meats, such as veal, as a wrap around veal or steak, in a filled bread, or as a pizza topping.\r\n\r\nSaltimbocca is an Italian veal dish, where escalopes of veal are topped with a sage leaf before being wrapped in prosciutto and then pan-fried. Prosciutto is often served in sandwiches and panini, sometimes in a variation on the Caprese salad, with basil, tomato and fresh mozzarella. A basic sandwich served in some European cafés and bars consists of prosciutto in a croissant.', '', 'Sliced prosciutto crudo in Italian cuisine is often served as an antipasto, wrapped around grissini, or accompanied with melon. It is also eaten as accompaniment to cooked spring vegetables, such as asparagus or peas. It may be included in a simple pasta sauce made with cream, or a Tuscan dish of tagliatelle and vegetables. It is used in stuffings for other meats, such as veal, as a wrap around veal or steak, in a filled bread, or as a pizza topping.\r\n\r\nSaltimbocca is an Italian veal dish, where escalopes of veal are topped with a sage leaf before being wrapped in prosciutto and then pan-fried. Prosciutto is often served in sandwiches and panini, sometimes in a variation on the Caprese salad, with basil, tomato and fresh mozzarella. A basic sandwich served in some European cafés and bars consists of prosciutto in a croissant.', 'Sliced prosciutto crudo in Italian cuisine is often served as an antipasto, wrapped around grissini, or accompanied with melon. It is also eaten as accompaniment to cooked spring vegetables, such as asparagus or peas. It may be included in a simple pasta sauce made with cream, or a Tuscan dish of tagliatelle and vegetables. It is used in stuffings for other meats, such as veal, as a wrap around veal or steak, in a filled bread, or as a pizza topping.\r\n\r\nSaltimbocca is an Italian veal dish, where escalopes of veal are topped with a sage leaf before being wrapped in prosciutto and then pan-fried. Prosciutto is often served in sandwiches and panini, sometimes in a variation on the Caprese salad, with basil, tomato and fresh mozzarella. A basic sandwich served in some European cafés and bars consists of prosciutto in a croissant.', ''),
(44, 'RED CIDER', 'BEVERAGE', '', '', '', 'Obtain the right apples. The best cider has a balance between sweetness and tartness. Often times, apple producers (who will often make their own brand of cider) will blend different apples together to get the right combination.\r\nChoose apples from the above list. Shop the local produce stands, fruit markets or grocery store shelves. If you lean toward a sweet juice, use a ratio of three sweet to one tart, or for medium sweetness, use a \"two sweet to one tart\" ratio. If you intend to make hard cider, use all sweet apples.\r\nClean the apples thoroughly. Cutting out any bruises or damaged parts, and remove stems. As a rule, it is not recommended to use any fruit for cider that you would not eat as it is.', '', 'Apple cider vinegar is made in a two-step process, related to how alcohol is made (1).\r\n\r\nThe first step exposes crushed apples (or apple cider) to yeast, which ferment the sugars and turn them into alcohol.\r\n\r\nIn the second step, bacteria are added to the alcohol solution, which further ferment the alcohol and turn it into acetic acid — the main active compound in vinegar.', 'Calories 114\r\n% Daily Value*\r\n0%Total Fat 0.3g grams\r\n0% Saturated Fat 0.1g grams\r\nTrans Fat 0g grams\r\nPolyunsaturated Fat 0.1g grams\r\nMonounsaturated Fat 0g grams\r\n0%Cholesterol 0mg milligrams\r\n0%Sodium 9.9mg milligrams\r\n7%Potassium 250mg milligrams\r\n9%Total Carbohydrates 28g grams\r\n2% Dietary Fiber 0.5g grams\r\nSugars 24g grams\r\nProtein 0.3g', ''),
(45, 'TOM YUM COCKTAIL', 'BEVERAGE', '', '', '', 'Step 1\r\nTo make this exotic cocktail, take a rock glass and pour vodka, sugar syrup, lime juice and add the sliced lemon grass along with brown sugar.\r\n\r\nStep 2\r\nNow, use a muddler to mix all the ingredients together. Muddling the ingredients allows them to release their flavors and thus intensify taste of the beverage.\r\n\r\nStep 3\r\nAdd some ice to the glass. The ice not only keeps the beverage chilled but also acts as a source of water which binds the ingredients together and makes the texture and taste of the beverage smooth.\r\n\r\nStep 4\r\nFinally, garnish with the red chilli, galangal and kaffir lime leaves. Once done, your Tom Yum Cocktail is ready! Serve chilled!', '', 'Curcumin, the active ingredient in turmeric, is known as an anti-inflammatory agent, helping to relieve allergy symptoms as well as arthritis (or any condition caused by excess inflammation). It is also a powerful anti-oxidant, that can protect the body from damage by toxins and free radicals. Curcumin also protects platelets in the blood, improving circulation and protecting the heart.', 'The exact number of calories in your tom yum soup will vary according to the recipe, but one version from \"Eating Well\" contains 105 calories per serving of 1.33 cups. \"Eating Well\'s\" recipe includes about 1.5 ounces of shrimp, raw weight, per serving; without the shrimp, you can subtract about 30 calories for a total of just 75 calories per serving. A tom yum soup with shrimp from a major grocery brand has more calories than the homemade version, providing 120 calories per 9.9 ounces, which is about 1.25 cups.\r\n\r\n', ''),
(46, 'IRISH COFFEE', 'BEVERAGE', '', '', '', 'Use Two Sugars for Better Irish Coffee\r\nA combination of granulated sugar and brown sugar makes for a cup of joe with balanced sweetness. Just a teaspoon of each keeps the cup from being cloying, which the molasses brings the whiskey\'s own sweetness to the forefront. Use unsweetened whipped cream to keep the sweetness contained in the coffee and avoid a sugar hangover later in the day.\r\nIf using lightly whipped cream, pour it slowly over a warm spoon onto the coffee, being careful not to break the coffee\'s surface. This takes some practice. A foolproof way to not break the surface is to whip the cream a bit more and dollop it gently on top. Enjoy while hot!', '', 'Irish coffee (Irish: caife Gaelach) is a cocktail consisting of hot coffee, Irish whiskey, and sugar (some recipes specify that brown sugar should be used,[1]) stirred, and topped with thick cream. The coffee is drunk through the cream. The original recipe explicitly uses cream that has not been whipped, although drinks made with whipped cream are often sold as \"Irish coffee\". The term \"Irish coffee\" is also sometimes used colloquially to refer to alcoholic coffee drinks in general.', 'Calories 228\r\n% Daily Value*\r\n14%Total Fat 9.3g grams\r\n29% Saturated Fat 5.8g grams\r\nTrans Fat 0g grams\r\nPolyunsaturated Fat 0.3g grams\r\nMonounsaturated Fat 2.7g grams\r\n11%Cholesterol 33mg milligrams\r\n1%Sodium 15mg milligrams\r\n3%Potassium 100mg milligrams\r\n3%Total Carbohydrates 10g grams\r\n0% Dietary Fiber 0g grams\r\nSugars 9.9g grams\r\nProtein 0.8g', ''),
(47, 'LAUKI JUICE', 'BEVERAGE', '', '', '', 'Step 1\r\nPut the bottle gourd, amla, ginger, mint leaves, salt, black salt and cumin seeds in a blender. Add one cup of water and blend it for two to three minutes.\r\nStep 2\r\nAdd another cup of water, lemon juice, ice cubes and blend it for another two to three minutes. Strain into individual glasses and serve chilled.', '', 'Calories : 172 Kcal\r\nCarbohydrates : 36 gm\r\nProtein : 2.9 gm\r\nFat : 1.7 gm\r\nOther : 19.7gm', 'Calories : 172 Kcal\r\nCarbohydrates : 36 gm\r\nProtein : 2.9 gm\r\nFat : 1.7 gm\r\nOther : 19.7gm', ''),
(48, 'HOT CHOCOLATE STRAWBERRY', 'BEVERAGE', '', '', '', 'Gently rinse strawberries and dry on paper towels (berries must be completely dry). Line cookie sheet with waxed paper.\r\n2\r\nIn 1-quart saucepan, melt chocolate chips and shortening over low heat, stirring frequently. Remove from heat.\r\n3\r\nDip lower half of each strawberry into chocolate mixture; allow excess to drip back into saucepan. Place on waxed paper-lined tray or cookie sheet.\r\n4\r\nRefrigerate uncovered about 30 minutes or until chocolate is firm, or until ready to serve. Store covered in refrigerator so chocolate does not soften (if made with oil, chocolate will soften more quickly at room temperature).', '', 'Strawberries are a rich source of vitamin C. Each serving of three large berries dipped in an ounce of dark chocolate offers 30.9 milligrams of vitamin C -- approximately 42 percent of the recommended daily intake for women or 33 percent for men, according to the Institute of Medicine. Vitamin C helps you make collagen, a protein essential for strong tissue, and also plays a role in breaking down fat to form energy. Consuming a diet rich in vitamin C helps keep you healthy by protecting your immune system and lowering your risk of cardiovascular disease.', 'Dark chocolate-dipped strawberries certainly have a nutritional leg up over many other sweets, but still come with some drawbacks. Three berries dipped in an ounce of chocolate contain 188 calories, compared to just 18 calories for the berries on their own. Some varieties of dark chocolate might contain more sugar than others, further boosting the calorie content. If you don\'t practice portion control, consuming too much dark chocolate can lead to weight gain. For the healthiest option, make your own dipped strawberries at home, so that you can select a dark chocolate with a high concentration of cocoa solids, and control the amount of chocolate you use.', ''),
(49, 'PAV BHAJI', 'VEG', 'BUTTER', 'BREAD BUN', ' SPICY POWDER', 'How to Make Pav Bhaji 1.Heat oil in a pan. Add cubes of butter along with onion', 'Pavs 8 Potatoes boiled and mashed 2 cups Cauliflower grated 3 tablespoons Capsicum finely chopped 1/4 cup Oil 3 tablespoons Onions chopped 1 cup Ginger-garlic paste 1 1/2 teaspoons Tomato puree fresh 1 cup Readymade tomato puree 1/4 cup Salt to taste Pav bhaji masala 1 1/2 tablespoons Red chilli powder 1/2 teaspoon Lemon juice 2 teaspoons Butter 2 tablespoons A few sprigs fresh coriander leaves A lemon slice', 'Green beans and peas are rich is dietary fiber. The iron and vitamins in them boosts  our immune system. Carrot with its high vitamin A content keeps you young and your skin glowing. Capsicum is rich in anti-oxidants and helps in body cell repair. Cauliflower with high fiber content not only helps in proper digestion but also protects the stomach lining cells. The vitamin C in tomato, lemon and onion help in removing metallic toxins from the body. Potato and Pav(bun) have the carbohydrate good for a meal. Check the health benefits of coriander at Herbs for Cooking and their Health Benefits.  Enjoy the Tasty and Healthy Pav Bhaji with your kids and family. If you are reluctant to use the white bun you can replace it with wheat bread slices and enjoy the bhaji. Try it and let me know your valuable comments....', 'Calories : 1913 Kcal Carbohydrates : 279.7 gm Protein : 35.9 gm Fat : 72.3 gm Other : Potassium-2187mg', ''),
(50, 'CHOCO LAVA CAKE', 'DESSERT', 'CHOCOLATE', 'VANILLA', 'EGG', 'Preheat the oven to 425 degrees F. Spray four custard cups with baking spray and place on a baking sheet. Microwave the butter, bittersweet chocolate and semisweet chocolate in a large bowl on high until the butter is melted, about 1 minute. Whisk until the chocolate is also melted. Stir in the sugar until well blended. Whisk in the eggs and egg yolks, then add the vanilla. Stir in the flour. Divide the mixture among the custard cups. Bake until the sides are firm and the centers are soft, about 13 minutes. Let stand 1 minute. Invert on individual plates while warm and serve with vanilla ice cream.', 'Baking spray, for spraying custard cups  1 stick butter   2 ounces bittersweet chocolate   2 ounces semisweet chocolate   1 1/4 cups powdered sugar   2 whole eggs   3 egg yolks   1 teaspoon vanilla   1/2 cup all-purpose flour   Vanilla ice cream, for serving', 'Very Nutritious. ... Powerful Source of Antioxidants. ... May Improve Blood Flow and Lower Blood Pressure. ... Raises HDL and Protects LDL From Oxidation. ... May Reduce Heart Disease Risk. ... May Protect Your Skin From the Sun. ... Could Improve Brain Function. ... The Bottom Line.', 'Nutrition Facts For a Serving Size of 1 Serving (100g) Calories 295	Calories from Fat 72 (24.4%) % Daily Value * Total Fat 8g	- Saturated fat 1.5g	- Sodium 290mg	13% Carbohydrates 55g	- Net carbs 55g	- Fiber 0g	0% Glucose 40g Protein 2g	 Vitamins and minerals Vitamin A 0Î¼g	0% Vitamin C 0mg	0% Calcium 0mg	0% Iron 0mg	0%', ''),
(51, 'PAV BHAJI', 'DESSERT', 'BUTTER', 'BREAD BUN', ' SPICY POWDER', 'How to Make Pav Bhaji 1.Heat oil in a pan. Add cubes of butter along with onion', 'Baking spray, for spraying custard cups  1 stick butter   2 ounces bittersweet chocolate   2 ounces semisweet chocolate   1 1/4 cups powdered sugar   2 whole eggs   3 egg yolks   1 teaspoon vanilla   1/2 cup all-purpose flour   Vanilla ice cream, for serving', 'Green beans and peas are rich is dietary fiber. The iron and vitamins in them boosts  our immune system. Carrot with its high vitamin A content keeps you young and your skin glowing. Capsicum is rich in anti-oxidants and helps in body cell repair. Cauliflower with high fiber content not only helps in proper digestion but also protects the stomach lining cells. The vitamin C in tomato, lemon and onion help in removing metallic toxins from the body. Potato and Pav(bun) have the carbohydrate good for a meal. Check the health benefits of coriander at Herbs for Cooking and their Health Benefits.  Enjoy the Tasty and Healthy Pav Bhaji with your kids and family. If you are reluctant to use the white bun you can replace it with wheat bread slices and enjoy the bhaji. Try it and let me know your valuable comments....', 'Calories : 1913 Kcal Carbohydrates : 279.7 gm Protein : 35.9 gm Fat : 72.3 gm Other : Potassium-2187mg', '');

-- --------------------------------------------------------

--
-- Table structure for table `myrecipes`
--

CREATE TABLE `myrecipes` (
  `id` int(11) NOT NULL,
  `RECIPENAME` varchar(50) NOT NULL,
  `TYPE` varchar(50) NOT NULL,
  `ING1` varchar(50) NOT NULL,
  `ING2` varchar(50) NOT NULL,
  `ING3` varchar(50) NOT NULL,
  `PREPARATION` text NOT NULL,
  `INGREDIENTS` text NOT NULL,
  `BENEFITS` text NOT NULL,
  `CALORIFICVAL` text NOT NULL,
  `IMAGE` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foodtable`
--
ALTER TABLE `foodtable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `myrecipes`
--
ALTER TABLE `myrecipes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foodtable`
--
ALTER TABLE `foodtable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `myrecipes`
--
ALTER TABLE `myrecipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 04:31 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipes`
--

-- --------------------------------------------------------

--
-- Table structure for table `foodtable`
--

CREATE TABLE `foodtable` (
  `ID` varchar(100) NOT NULL,
  `RECIPE NAME` varchar(100) NOT NULL,
  `TYPE` varchar(100) NOT NULL,
  `ING1` varchar(100) NOT NULL,
  `ING2` varchar(100) NOT NULL,
  `ING3` varchar(100) NOT NULL,
  `PROCEDURES` text NOT NULL,
  `INGNO` varchar(100) NOT NULL,
  `BENEFITS` text NOT NULL,
  `CALORIFIC VALUE` text NOT NULL,
  `IMAGE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodtable`
--

INSERT INTO `foodtable` (`ID`, `RECIPE NAME`, `TYPE`, `ING1`, `ING2`, `ING3`, `PROCEDURES`, `INGNO`, `BENEFITS`, `CALORIFIC VALUE`, `IMAGE`) VALUES
('1', 'GRILLED CHICKEN ESACALOPE WITH FRESH SALSA', 'NON-VEG', '', '', '', '1.For the spice powder:\r\n2.1. Add fennel, pepper, cinnamon powder, star anise, roast and grind to a powder.\r\n3.2. Store in air tight container cool dry place.\r\nFor the chicken:\r\n1.3. Blend parsley, the green part of the spring onion and coriander into a smooth green paste.\r\n2.4. Marinate the chicken breast with salt, pepper, spice powder and green paste (for about half an hour).\r\n3.5. Cook in a nice hot pan/ grill or bake.\r\nFor the salsa:\r\n1.6. Toss all the ingredients for the salsa in a bowl, refrigerate until needed. Serve with the grilled chicken breast.', '', 'Extremely tasty dish and excellent in taste.\r\nChicken is also very good in health and helps to solve many heart related problems.', 'Per serving: 176 calories; 7 g fat(1 g sat); 2 g fiber; 5 g carbohydrates; 24 g protein; 26 mcg folate; 63 mg cholesterol; 2 g sugars; 0 g added sugars; 1,158 IU vitamin A; 35 mg vitamin C; 42 mg calcium; 2 mg iron; 322 mg sodium; 419 mg potassium\r\nNutrition Bonus: Vitamin C (58% daily value), Vitamin A (23% dv)', ''),
('10', 'GARLIC BUTTER BAKED FISH', 'NON-VEG', '', '', '', 'In a saucepan, combine the butter, minced garlic, pepper, salt, dill weed, and paprika. Heat over low heat until butter is melted and begins to simmer.\r\nRemove from the heat and set aside.\r\n\r\nBrush a little of the butter mixture in the bottom of a shallow baking dish (line baking dish with foil, if desired) then place tilapia fillets on the buttered area.\r\nBrush top of each tilapia fillet with the seasoned butter mixture.\r\nThe recipe makes four 4-ounce servings or three 6-ounce servings.', '', 'This amazing baked fish with lemon garlic butter sauce is out of this world!  So easy to make and so tender, juicy and flavorful!  This is my favorite way to make tilapia or other white fish!', 'Nutritional Guidelines (per serving)\r\n264\r\nCalories\r\n7g\r\nFat\r\n11g\r\nCarbs\r\n38g\r\nProtein\r\n(Nutrition information is calculated using an ingredient database and should be considered an estimate.)', ''),
('11', 'COCONUT CHICKPEA CURRY', 'VEG', '', '', '', 'In a large pan, heat the coconut oil over medium-high heat. Add the red onion with a pinch of salt. Cook, stirring frequently, until the onion is softened and starting to brown.\r\n\r\nReduce the heat to medium. Add the garlic and ginger; stir and cook for 60 seconds or until fragrant. Stir in the garam masala, turmeric, black pepper, cayenne pepper, and salt. Cook for 30 seconds more to toast the spices.\r\n\r\nAdd the tomatoes to the pan and stir well. Continue to cook, stirring occasionally, for about 3-5 minutes or until the tomatoes are starting to break down and dry up a little bit. Stir in the coconut milk and chickpeas. Bring the mixture to a boil, then reduce the heat to medium-low.\r\n\r\nSimmer the coconut chickpea curry for about 10 minutes or until reduced slightly. Stir in the fresh lime juice. Season to taste with additional salt (I used about another 1/2 teaspoon at this point). Serve hot, over rice or other accompaniments of choice, and garnished with chopped fresh cilantro.', '', ' dairy-free, gluten-free, grain-free, nut-free, refined sugar-free, soy-free, vegan, vegetarian', 'Calories	368.4\r\nTotal Fat	6.9 g\r\nSaturated Fat	2.8 g\r\nPolyunsaturated Fat	0.1 g\r\nMonounsaturated Fat	0.1 g\r\nCholesterol	0.0 mg\r\nSodium	425.5 mg\r\nPotassium	331.9 mg\r\nTotal Carbohydrate	61.9 g\r\nDietary Fiber	20.4 g\r\nSugars	12.2 g\r\nProtein	17.4 g\r\n', ''),
('12', 'RED LENTIL CURRY', 'VEG', '', '', '', 'Wash the lentils in cold water until the water runs clear. Put lentils in a pot with enough water to cover; bring to a boil, place a cover on the pot, reduce heat to medium-low, and simmer, adding water during cooking as needed to keep covered, until tender, 15 to 20 minutes. Drain.\r\nHeat vegetable oil in a large skillet over medium heat; cook and stir onions in hot oil until caramelized, about 20 minutes.\r\nMix curry paste, curry powder, turmeric, cumin, chili powder, salt, sugar, garlic, and ginger together in a large bowl; stir into the onions. Increase heat to high and cook, stirring constantly, until fragrant, 1 to 2 minutes.\r\nStir in the tomato puree, remove from heat and stir into the lentils.', '', 'Per Serving: 192 calories; 2.6 g fat; 32.5 g carbohydrates; 12.1 g protein; 0 mg cholesterol; 572 mg sodium. Full nutrition', 'Calories	264.0\r\nTotal Fat	17.0 g\r\nSaturated Fat	11.1 g\r\nPolyunsaturated Fat	1.6 g\r\nMonounsaturated Fat	3.3 g\r\nCholesterol	0.0 mg\r\nSodium	11.3 mg\r\nPotassium	509.2 mg\r\nTotal Carbohydrate	23.7 g\r\nDietary Fiber	5.3 g\r\nSugars	1.1 g\r\nProtein	7.0 g\r\n', ''),
('13', 'VEGETABLE KURMA', 'VEG', '', '', '', 'veg kurma recipe | vegetable korma recipe | vegetable kurma recipe with detailed photo and video recipe. basically a coconut based curry prepared with blended spices and mix vegetables. this south indian style veg kurma recipe is a perfect combination for poori, ghee rice, set dosa’s and kerala parotaa recipe.\r\n', '', 'veg kurma recipe | vegetable korma recipe | vegetable kurma recipe with detailed photo and video recipe. basically a coconut based curry prepared with blended spices and mix vegetables. this south indian style veg kurma recipe is a perfect combination for poori, ghee rice, set dosa’s and kerala parotaa recipe.\r\n', 'Calories	300.0\r\nTotal Fat	12.0 g\r\nSaturated Fat	3.5 g\r\nPolyunsaturated Fat	0.0 g\r\nMonounsaturated Fat	0.0 g\r\nCholesterol	0.0 mg\r\nSodium	680.0 mg\r\nPotassium	0.0 mg\r\nTotal Carbohydrate	41.0 g\r\nDietary Fiber	7.0 g\r\nSugars	7.0 g\r\nProtein	9.0 g\r\n', ''),
('14', 'VEGAN THE BEAN CURRY', 'VEG', '', '', '', 'Wash all the beans and add 3.5 cups water to it. Add beans to a pressure cooker along with salt, bay leaf, black cardamom, cinnamon stick and 3.5 cups of water.Cover the lid, and pressure cook for 6-8 whistles. Let it cook on on low heat for about 10 minutes. When the cooker is cooled off, open the lid. Heat oil & butter in a pan.\r\nAdd cumin seeds to it. When they start to splutter, add onion paste and ginger-garlic paste. Saute for about 5 minutes or till it turns golden brown. Add chopped tomatoes, and cook for 5 minutes.\r\nNow Add cream cheese spread and cook for 3-4 minutes.Add chili powder, coriander powder, cumin powder, turmeric powder and garam masala powder along with ¼ cup of water.Let the spices cook with water for few minutes. Now add kasuri methi, sugar, cooked beans, and mix well. Cook on medium heat for 15-20 minutes till gravy thickens.Add more water if needed.Remove from heat, and serve hot  with steamed rice or naan.', '', '5 bean curry is an Indian curry, which is the blend of 5 protein-rich beans. This curry is healthy and comes with the deliciousness of different beans, cooked in creamy tangy tomato sauce along with the whole bunch of spices.', 'Total Fat: 4.7g\r\n7 %\r\nSaturated Fat: 1.0g\r\nCholesterol: 0mg\r\n0 %\r\nSodium: 298mg\r\n12 %\r\nPotassium: 569mg\r\n16 %\r\nTotal Carbohydrates: 35.9g\r\n12 %\r\nDietary Fiber: 10.1g\r\n41 %\r\nProtein: 8.7g\r\n17 %\r\nSugars: 1g\r\nVitamin A: 735IU\r\nVitamin C: 12mg\r\nCalcium: 81mg\r\nIron: 4mg\r\nThiamin: 0mg\r\nNiacin: 3mg\r\nVitamin B6: 0mg\r\nMagnesium: 55mg\r\nFolate: 100mcg', ''),
('15', 'DAL MAKHANI', 'VEG', '', '', '', 'Soak whole black urad and rajma overnight in 3-4 cups of water.\r\nCook the soaked dal and rajma in the same water with salt, red chili powder and half the chopped ginger till dal and rajma are cooked and soft.\r\nPeel and chop the onion, ginger and garlic finely. Also chop the tomatoes.\r\nHeat oil and butter in a thick-bottomed pan. Add cumin seeds, when it crackles add chopped onions and fry till golden brown.\r\nAdd chopped ginger, garlic and chopped tomatoes. Sauté till tomatoes are well mashed and fat starts to leave the masala. Add boiled dal and rajma to this.Do not add the liquid at first.Crush(mash) the dals with the back of the ladle while stirring continuously, this gives that creamy texture to the dal .\r\nAdd the liquid and some water if required and simmer on very low heat for fifteen minutes.\r\nAdd fresh cream and garam masala powder let it simmer for another five minutes. Finish off with a couple of pinch of Kasoori methi powdered.\r\nServe hot with Naan or Paraatha.\r\nTip: Replacing the tomatoes with 4 tablespoons of thick tomato paste will enhance the taste and colour of the dish manifold.', '', 'This one is usually called black dal when whole, and white when it’s skinned and split. And yes, the black urad is the star ingredient in Dal Makhani. Urad is also used to make bondas, papads, medu vada, a version of payasam, and even dosas! It has a very earthy taste and is often slimy on the tongue. In Bengal, the white urad is also used to make Biulir Dal, a recipe that’s quite simple and yet absolutely delicious. And what’s quite unique about this recipe is that the flavour is enhanced by the addition of fennel. Urad Dal helps improve digestion, good source of protein, controls cholesterol.', 'mount Per Serving\r\nCalories 258 Calories from Fat 162\r\n% Daily Value*\r\nTotal Fat 18g 28%\r\nSaturated Fat 11g 55%\r\nCholesterol 49mg 16%\r\nSodium 58mg 2%\r\nPotassium 213mg 6%\r\nTotal Carbohydrates 17g 6%\r\nDietary Fiber 5g 20%\r\nSugars 2g\r\nProtein 7g 14%', ''),
('16', 'RAJASTHANI DAL BAATI', 'VEG', '', '', '', 'dal baati recipe | rajasthani dal bati churma | dal baati in appe pan with detailed photo and video recipe. a traditional rajasthani delicacy recipe made from dal, bati or wheat rolls and churma which is powdered wheat ball. it is generally served for lunch or dinner by mixing the dal with crushed baati and ghee topped on it. it is also popular in uttar pradesh and madhya pradesh within the malwa regions.', '', 'It is easily prepared without much difficulty, it is extremely good in taaste and can be consumed once in a while.', 'Calories	200	Sodium	7 mg\r\nTotal Fat	10 g	Potassium	9 mg\r\nSaturated	10 g	Total Carbs	5 g\r\nPolyunsaturated	20 g	Dietary Fiber	7 g\r\nMonounsaturated	10 g	Sugars	7 g\r\nTrans	10 g	Protein	91 g\r\nCholesterol	5 mg	 ', ''),
('17', 'PANEER TIKKA MASALA', 'VEG', '', '', '', 'Cut the paneer into small cubes or in any size you like. My hubby likes eating small paneer pieces so I chop them small : ) .\r\n\r\nNext add in the chopped ginger, garlic, coriander powder, garam masala powder, paprika powder, salt and red chilli powder.\r\n\r\nAdd in the yogurt and mix till all the paneer pieces are well coated with the spices and yogurt. Cover and keep this marinated paneer in the refrigerator for 30-40 minutes. Ideally you should keep this marinated paneer in the fridge overnight but if that’s not possible than minimum of 30 minutes is must.\r\n\r\nUse thick curd or preferably hung curd to marinate the paneer. To make hung curd, tie the curd in a muslin cloth and let it hand for 3-4 hours. Once all the water from the curd has dried out, your hung curd is ready.', '', 'Reduces body and joint pain\r\nPaneer can reduce body pains and it works wonders for the person who is suffering from lower back pain. The presence of omega three and omega six fatty acids in paneer help in combating arthritis and benefit aged people who have trouble walking and are suffering from joint pain. Presence of omega three benefits pregnant woman as it reduces the chances of stillbirth and disorders. Omega three and omega six are present in fish like sardines. For vegetarians paneer fulfills the need of omega three and six in the body.\r\n\r\nPrevents cancer\r\nThe presence of selenium and potassium in paneer keeps the body healthy and prevents cancer. It even helps in combating cancer if it has started to develop. The presence of proteins helps in the prevention of stomach and colon cancer. The presence of sphingolipids would help in the prevention of other forms of cancer inside the body. Prostate cancer which is common in men would be reduced by intake of Paneer.\r\n\r\nPrevents skeletal deformation\r\nVitamin D content in Paneer helps in the prevention of skeletal deformation that can lead to joint and hip pain. The presence of vitamin k and magnesium also helps in the development of calcium-rich bones. Magnesium is useful in developing enzymes in the body and helps in proper functioning of nerves and muscles.', 'Calories 201\r\n% Daily Value*\r\n25%Total Fat 16g grams\r\n43% Saturated Fat 8.6g grams\r\nTrans Fat 0.5g grams\r\n14%Cholesterol 41mg milligrams\r\n21%Sodium 503mg milligrams\r\n8%Potassium 291mg milligrams\r\n2%Total Carbohydrates 6.9g grams\r\n6% Dietary Fiber 1.5g grams\r\nSugars 3.7g grams\r\nProtein 8.2g', ''),
('18', 'PUNJABI CHOLE', 'VEG', '', '', '', 'Punjabi chole masala or chana masala is one of the most popular curry dishes from India. In fact in north India no wedding or party is complete until you have chole masala on the menu. I remember whenever we would call someone over for lunch or dinner, mom would almost always make chole.', '', 'Culinary uses\r\n•	As the name suggests, chole masala is used to prepare chick peas, especially Punjabi chole preparations, which are served with roti, naan, chapati, basmati rice or any other way you desire.', 'Although the mineral selenium is not present in most fruits and vegetables, it can be found in chickpeas. It helps the enzymes of the liver to function properly and detoxify some cancer-causing compounds in the body. Additionally, selenium prevents inflammation and decreases tumor growth rates.', ''),
('19', 'ASPARGUS AND NEW POTATO FRITTATA', 'VEG', '', '', '', 'Heat the grill to high. Put the potatoes in a pan of cold salted water and bring to the boil. Once boiling, cook for 4-5 mins until nearly tender, then add the asparagus for a final 1 min. Drain.\r\n\r\nMeanwhile, heat the oil in an ovenproof frying pan and add the onion. Cook for about 8 mins until softened.\r\n\r\nMix the eggs with half the cheese in a jug and season well. Pour over the onion in the pan, then scatter over the asparagus and potatoes. Top with the remaining cheese and put under the grill for 5 mins or until golden and cooked through. Cut into wedges and serve from the pan with salad.\r\n\r\n', '', 'n this recipe, I’ve roasted asparagus with cremini mushrooms and onions. Then mixed them into a few eggs and topped it with cheese. \r\n\r\nThis was dinner at my house tonight but could easily be made for breakfast, brunch or lunch. Eat it whenever your heart desires!  ', 'Calories  310\r\nCarbohydrates  16\r\nSaturated Fat  6\r\nSugar  6\r\nProtein  19\r\nFat  18\r\nFibre  4\r\nSalt  0.7', ''),
('2', 'CURRIED PARSEMAN FISH FINGERS', 'NON-VEG', '', '', '', 'Cut the fish fillets lengthwise into 3/4\" (2cm) strips, then crosswise into fingers. Cut crosswise with the knife at an angle so the fingers taper at each end.\r\nMix the seasoning with the water, then add the egg.\r\nCoat fingers with flour then egg mixture then breadcrumbs for a thick coating.\r\nFor a thinner coater just dip in egg mixture and then breadcrumbs.\r\nStand coated on a rack for 15-30 minutes if desired for the coating to firm.\r\nCook the fingers in 1/4\" (5mm) of oil in a hot pan for 2-3 mins, turning once, until the coating is golden brown.\r\nDrain and serve with wedges of lemon if desired.', '', 'Iodine– A 150g portion of Fish Sticks will give you a whopping 105% of your daily recommended intake of iodine. Iodine is an essential nutrient which plays a role in maintaining a healthy thyroid function, metabolism, growth, reproduction, and development.\r\n\r\nVitamin B12 – Vitamin B12 is responsible for helping to turn fats and proteins into energy and also protects against heart disease and cancers. One 150g portion of fish sticks will give you 63% of your recommended daily intake of Vitamin B12.\r\n\r\nSelenium – Selenium is an essential nutrient that helps promote immunity in the body and also produces a number of antioxidants that prevent damage from free radicals and inflammation. Selenium also plays a large role in maintaining a healthy metabolism. One 150g serving of fish sticks gives you 52% of your daily selenium.\r\n\r\nPhosphorus – Phosphorus is essential for growth, and it is also vital for maintaining healthy bones, teeth and gums. A 150g dish of Fish Sticks will give you 52% of your required daily phosphorus intake.', ' Omega-3 is once again a vital ingredient in our diets, playing a role in helping to prevent heart disease and strokes and has also been shown to play a role in helping prevent Alzheimer’s disease and other degenerative cognitive conditions. To get the maximum benefit and keep your brain in tip top condition, why not combine your fish fingers with some green leafy veg of the cruciferous family, which has also been shown to play a significant role in cognitive health and memory function. One 150g portion of fish sticks will give you 30% of your daily Omega-3 requirement.', ''),
('20', 'DRUMSTICK SAMBAR RECIPE', 'VEG', '', '', '', 'To begin making the Coimbatore Style Sambar Recipe, prep all the ingredients first. Soak the arhar dal in required water for about 15 to 20 minutes.\r\n\r\nOnce the lentils are soaked, drain the water, add the dal in a pressure with 2 cups water and pressure cook for about 4 whistle. Let the pressure release naturally. \r\n\r\nIn a saucepan, add drumstick, onions, tomatoes with sufficient water on high heat for about 10 minutes or till cooked. Keep it aside. You can use a bit of vegetable stock for grinding masalas for the sambar.\r\n\r\nHeat a heavy bottomed pan with gingelly oil. Once the oil is hot, add cumin seeds, coriander seeds, fenugreek seeds, asafoetida, dry red chillies, coconut and roast for about a minute of till fragrant. Allow to cool to room temperature. You may spread this on a plate and leave on kitchen countertop for faster cooling.\r\n\r\nIn a mixer grinder, grind the masalas with the help of a bit of water, or the stock of boiled veggies to a smooth paste.\r\n\r\nAdd the ground masala back in the saucepan, add tamarind paste and start boiling the sambar with cooked dal, and about a glass more of water or to the required consistency.Add salt and stir well.\r\n\r\nWhile the sambar comes to boil, in the kadai, heat a bit of gingelly oil. Once it is hot, on medium heat add the mustard seeds and allow them to splutter. Add curry leaves and saute for a few seconds, on low heat.\r\n\r\nOnce the sambar is boiled well for about 5-7 minutes, switch off heat, add the gingelly oil tadka, top it with some ghee and give it a stir. The Coimbatore sambar is ready to serve.\r\n\r\nServe Coimbatore Style Sambar Recipe with Steamed Rice Recipe and Capsicum Usili Recipe for a complete weekday meal.', '', 'The dal based stew is high on vitamins and minerals iron, zinc, folate and magnesium. In addition to the pulses and vegetables, the eclectic mix of herbs and spices add to the many health benefits of sambar too. Tamarind extract, turmeric powder, curry leaves, red pepper and mustard seeds have a number of health benefits, ranging from good digestion, weight loss and high immunity.\r\n', 'Calories	308.7\r\nTotal Fat	12.8 g\r\nSaturated Fat	2.4 g\r\nPolyunsaturated Fat	2.1 g\r\nMonounsaturated Fat	6.8 g\r\nCholesterol	119.3 mg\r\nSodium	148.4 mg\r\nPotassium	719.8 mg\r\nTotal Carbohydrate	14.0 g\r\nDietary Fiber	2.8 g\r\nSugars	0.1 g\r\nProtein	34.2 g\r\n', ''),
('21', 'DATE AND PISACHIO MUFFIN', 'SNACKS', '', '', '', 'Preheat oven on 190?C. Line the muffin holes tin with paper cases.\r\n\r\nBlend the dates and water in the blender until it becomes smooth.\r\n\r\nCombine dates mixture with remaining ingredients except oil and eggs in a mixing bowl with electric blender and blend for 3 minutes or until well mixed. Mix oil and eggs in another mixing bowl for 6-7 minutes or until the mixture becomes foamy then gradually add them into dough mixture and mix (do not over mix).\r\n\r\nSpoon the mixture into the paper cases until each becomes 3 quarters full. Bake for 20-25 minutes or until baked. Take out to cool for 3 minutes.\r\n\r\nServe with vanilla sauce.\r\n\r\nTo prepare the vanilla sauce: Combine all ingredients in a medium sauce pan and stir constantly over a medium heat until it boils and thickens, remove and set it aside to cool.', '', 'Preheat oven on 190?C. Line the muffin holes tin with paper cases.\r\n\r\nBlend the dates and water in the blender until it becomes smooth.\r\n\r\nCombine dates mixture with remaining ingredients except oil and eggs in a mixing bowl with electric blender and blend for 3 minutes or until well mixed. Mix oil and eggs in another mixing bowl for 6-7 minutes or until the mixture becomes foamy then gradually add them into dough mixture and mix (do not over mix).\r\n\r\nSpoon the mixture into the paper cases until each becomes 3 quarters full. Bake for 20-25 minutes or until baked. Take out to cool for 3 minutes.\r\n\r\nServe with vanilla sauce.\r\n\r\nTo prepare the vanilla sauce: Combine all ingredients in a medium sauce pan and stir constantly over a medium heat until it boils and thickens, remove and set it aside to cool.', 'Per Portion of 300g\r\n\r\nEnergy :	273.00 Kcal\r\nProtein :	3.60 g\r\nCarbohydrate :	33.00 g\r\nFats :	15.00 g', ''),
('22', 'MULTI GRAIN SEVPURI', 'SNACKS', '', '', '', 'The red sweet chutney\r\nThe green spicy chutney\r\nFor topping some mashed, boiled potatoes, chopped onion, chopped tomatoes, chopped coriander leaves,  chopped raw mangoes and roasted peanuts.\r\nSpice powder like chat masala and black salt.\r\nStore bought puris and nylon sev.\r\nNext part would be assembing everything to make sev puri . Place puris or papdis over a dish. Place some mashed potatoes over each, put some chopped onion, raw mango and tomatoes. Now put some green and sweet chutney. Sprinkle some sev, chat masala, coriander leaves, black salt and squeeze some lime juice. Serve the sev puris immediately else it might get soggy and loos it’s crispy taste.', '', 'Chaat always brings back memories of carefree weekends spent at my parents’ beach house in India. I’d walk over to the beach in the afternoon when the tide is low enough to pick sea shells. I’d return home with my pail full and stomach empty. A gorgeous bowl of chaat would be waiting for me – crunchy, sweet, tangy, spicy, filling all at the same time. I’d sit on the verandah eating chaat, listening to the waves crashing near by and watching the kites sail over me.\r\n\r\n(placeholder)\r\n(Image credit: Apartment Therapy)\r\nChaat on weekends still transports me back to those balmy evenings in India. Sev puri is my favorite kind of chaat (‘chaat’ is a general name for this Indian street food; there are several variations). Sev puri are little puffed, fried rounds of dough (puri) stuffed with crispy noodles (sev), potatoes, onion, yogurt, tamarind chutney and mint chutney. The whole thing is then finished with a sprinkling of amazingly zestful chaat masala – a blend of salt, red chilli, coriander, cinnamon, ginger, anise, pepper, cumin, cardamom, clove, mace, carom and dried mango.\r\n\r\nYou will need to make a trip to the Indian store for this recipe. You could attempt to make all the ingredients at home, but that would be time consuming. Why bother when you can buy the same thing at a store!\r\n\r\n(placeholder)\r\n(Image credit: Apartment Therapy)\r\nThis is a basic recipe for sev puri; I encourage you to be creative — you are limited only by your imagination. When pomegranates are in season, I like to sprinkle some on top for a colorful, refreshing sweetness. A little chunk of pineapple tucked into the sev puri is divine (toss the pineapple chunks in chaat masala for a delightful sweet-savory flavor). To make these sev puris vegan, simply leave out the yogurt and use hummus, tahini or cashew butter instead. If you don’t have pani puris, try making this with tortilla chips instead; Scoops! will be perfect for this.\r\n\r\nFinally, there is only one way to eat a sev puri – put the whole thing in your mouth! Don’t try to bite into it, just pop the whole thing in your mouth!\r\n\r\n(placeholder)\r\n(Image credit: Apartment Therapy)\r\nSev Puri (Chaat)\r\nServes about 6\r\n\r\n1 medium potato, boiled, peeled and diced\r\n1/2 cup canned chickpeas, drained\r\n3 to 4 tablespoons finely chopped red onion\r\n40 pani puris* (fried rounds of dough)\r\n1/2 cup yogurt\r\n1/2 cup sev* (crispy noodles)\r\n1/4 cup date-tamarind chutney*\r\n1/4 cup mint chutney*\r\n1 tablespoon Chaat Masala*\r\n1/4 tablespoon red chilli powder or cayenne or paprika\r\nA few sprigs of cilantro\r\n\r\n*easily available at any Indian store\r\n\r\nMix together the boiled diced potato, chickpeas, red onion, 1/4 teaspoon chaat masala and salt. Set aside. Gently poke a hole on one side of a pani puri. Make it large enough so you can stuff it with the potato mixture. Place some potato mixture inside the pani puri cavity. Top with about 1/2 tablespoon of yogurt. Sprinkle some sev on top of the yogurt. Then add date-tamarind and mint chutneys. Finish by sprinkling a little chaat masala over the top. Repeat with all pani puris. Serve immediately.\r\n\r\n\r\n', 'Calories 94\r\n% Daily Value*\r\n8%Total Fat 5.1g grams\r\n2% Saturated Fat 0.5g grams\r\nTrans Fat 0.1g grams\r\n0%Cholesterol 0mg milligrams\r\n9%Sodium 215mg milligrams\r\n4%Potassium 142mg milligrams\r\n4%Total Carbohydrates 11g grams\r\n6% Dietary Fiber 1.6g grams\r\nSugars 2.1g grams\r\nProtein 1.9g', ''),
('23', 'TRIANGULAR PUFF', 'SNACKS', '', '', '', '1.Mix wheat flour, milk and castor oil (water if required) and knead a soft dough. Cover it with wet muslin cloth and let it stand for 20 minutes.\r\n2.Steam potatoes. Peel carefully and mash them.\r\n3.Heat oil in a pan. When the oil is hot add cumin seeds. When it starts spluttering, add roasted cumin powder, red chilli powder, black pepper powder, dry coriander powder, dry mango powder and asafoetida. Cook for 15 seconds.\r\n4.Add potatoes and rock salt and mix it properly and cook for 1 minute.\r\n5.Remove the pan from flame. The stuffing for the samosas is ready.\r\n6.Roll chapatti and stuff it with the mashed potato mixture. Fold it into triangular samosa like shape.\r\n7.Bake these samosas at 160 C, till they are light brown in colour.\r\n8.Serve hot.', '', 'Potatoes are infamous. Many think that they contribute to weight gain, while these actually come loaded with many essential micronutrients like Vitamin A, C, B, iron and phosphorous,\" shares Delhi\'s leading skin and hair expert, Dr. Deepali Bhardwaj. Dorling Kindersley\'s Healing Foods has a dedicated section on roots, tubers and rhizomes. The segment talks about potatoes and classifies them as an ingredient that helps fight inflammation and high blood pressure apart from calming the nerves. Potatoes, in general, are loaded with potassium, fibre, B vitamins, manganese and Vitamin C. Healing Foods describes potatoes to be especially helpful in detoxification and acidity regulation in the body.', 'Calories	278	Sodium	483 mg\r\nTotal Fat	12 g	Potassium	-- mg\r\nSaturated	6 g	Total Carbs	38 g\r\nPolyunsaturated	-- g	Dietary Fiber	5 g\r\nMonounsaturated	-- g	Sugars	3 g\r\nTrans	-- g	Protein	6 g\r\nCholesterol	0 mg	 ', ''),
('24', 'CHEESY CHEX MIX', 'SNACKS', '', '', '', 'Toss 3 cups Chex cereal, 2 cups mini pretzels and 1 cup cheese crackers with 3/4 cup grated parmesan, 1/2 stick melted butter and a pinch of garlic powder. Spread on a baking sheet and bake 15 minutes at 325 degrees F, stirring.', '', 'Healthy eating is often a challenge, particularly when we\'re surrounded by so many foods that seem to disguise themselves as good for us. We know some fats are necessary, whole grains are good, and getting adequate amounts of fruits and veggies is paramount, but sometimes the grocery store can still feel like a nutritional maze. \r\n\r\nThe problem with assessing the health-value of many foods is that consumers are \"led by the advertisement on the front of the package, and that becomes a selling point,\" said Constance Brown-Riggs, a registered dietitian and spokesperson for the National Academy of Nutrition and Dietetics. ', 'Healthy eating is often a challenge, particularly when we\'re surrounded by so many foods that seem to disguise themselves as good for us. We know some fats are necessary, whole grains are good, and getting adequate amounts of fruits and veggies is paramount, but sometimes the grocery store can still feel like a nutritional maze. \r\n\r\nThe problem with assessing the health-value of many foods is that consumers are \"led by the advertisement on the front of the package, and that becomes a selling point,\" said Constance Brown-Riggs, a registered dietitian and spokesperson for the National Academy of Nutrition and Dietetics. ', ''),
('25', 'APPLE QUESADILAS', 'SNACKS', '', '', '', 'Preheat oven to 400°. Toss together first eight ingredients. Place 3/4 cup mixture on one half of each tortilla. Fold tortillas to close; secure with toothpicks.\r\nPlace on a baking sheet coated with cooking spray. Bake until golden brown, 13-18 minutes, turning halfway through. Discard toothpicks. Serve with toppings as desired.', '', 'Apple as a fruit is very good for helath and also helps in curing of many diseases.', '1 quesadilla: 300 calories, 10g fat (4g saturated fat), 33mg cholesterol, 475mg sodium, 38g carbohydrate (6g sugars, 3g fiber), 16g protein. Diabetic Exchanges: 2-1/2 starch, 2 medium-fat meat.', ''),
('26', 'CRACKWICHES', 'SNACKS', '', '', '', 'andwich bread (also referred to as sandwich loaf)[1] is bread that is prepared specifically to be used for the preparation of sandwiches.[2][3][4] Sandwich breads are produced in many varieties, such as white, whole wheat, sourdough, rye, multigrain[1][5][6][7] and others. Sandwich bread may be formulated to slice easily,[8] cleanly or uniformly, and may have a fine crumb (the soft, inner part of bread) and a light texture.[4] Sandwich bread may be designed to have a balanced proportion of crumb and crust, whereby the bread holds and supports fillings in place and reduces drips and messiness.[3][4] Some may be designed to not become crumbly, hardened, dried or have too squishy a texture.[2][9] Sandwich bread can refer to cross-sectionally square, sliced white and wheat bread, which has been described as \"perfectly designed for holding square luncheon meat\".[10] The bread used for preparing finger sandwiches is sometimes referred to as sandwich bread.[10] Pan de mie is a sandwich loaf.[11][12] Some sandwich breads are designed for use in the creation of specific types of sandwiches, such as the submarine sandwich.[13] For barbecuing, use of a high-quality white sandwich bread has been described as suitable for toasting over a fire.[14] Gluten-free sandwich bread may be prepared using gluten-free flour, teff flour.[15][16] and other ingredients.', '', 'Sandwich bread may be designed to have a balanced proportion of crumb and crust, whereby the bread holds and supports fillings in place and reduces drips and messiness.[3][4] Some may be designed to not become crumbly, hardened, dried or have too squishy a texture.', 'Calories 352	 \r\nCalories from Fat 139	 \r\nTotal Fat 15.5g	24%\r\nSaturated Fat 6.4g	32%\r\nPolyunsaturated Fat 1.4g	 \r\nMonounsaturated Fat 6.7g	 \r\nCholesterol 58mg	19%\r\nSodium 771mg	32%\r\nPotassium 290.54mg	8%\r\nCarbohydrates 33.3g	11%\r\nDietary Fiber 0g	0%\r\nSugars 0g	 \r\nProtein 20.7g	 \r\nVitamin A 6% · Vitamin C 5%\r\nCalcium 13% · Iron 18%\r\n \r\nA typical sandwich that you make at home includes bread, one or two of your favorite condiments, and lunch meat. You may even add a few veggies for crunch and flavor. If you make that sandwich at home you can control the ingredients, cut calories, and boost nutrition. \r\n\r\nBut what if you pick one up at the market? It\'s harder to control sandwich calories when you buy them pre-made.\r\n\r\nThe nutritional value and calorie counts can vary significantly.\r\n\r\nTypical Sandwich Calories \r\n\r\n', ''),
('27', 'GATHIA', 'SNACKS', '', '', '', 'Heat 2 tbsp of water in a saucepan and add the papad khar and salt. Mix well and cook on a medium flame for 1 minute or till the papad khar dissolves completely. Keep aside.\r\nCombine the besan, asafoetida , carom seeds, hot oil and prepared papad khar mixture in a deep bowl and knead into a stiff dough without using water.\r\nGrease your hands using a little oil and knead the dough once again to smoothen it lightly. Keep aside.\r\nGrease a “sev press” (along with its lid and ganthia plate) using a little oil, press the dough into it and cover it with the lid.\r\nHeat the oil in a deep non-stick pan, place the “sev press” above the hot oil (at a little distance) and turn the handle of the “sev press” so that half of the dough is forced out of the ganthia plate and drops directly into the oil.\r\nMove the “sev press” in a circular motion while turning the handle of the “sev press” in a circular motion at the same time.\r\nDeep-fry the ganthia on a medium flame, till they turn light yellow in colour and crisp while turning them at intervals. Drain on an absorbent paper.\r\nRepeat step 6 and 7 to deep-fry the remaining ganthias in 2 more batches.\r\nCool completely and break into pieces using your fingers.\r\nServe or store in an air-tight container.', '', '\r\nTea-time becomes more than perfect when it features ganthias and jalebis . Ganthia is a crunchy and savoury snack that has been loved by generations of Gujaratis. It has gained its share of fame in other parts of India and the rest of the world too! \r\n\r\nCarom seeds and asafoetida give the besan dough a flavourful and aromatic punch while papad khar ensures the ideal crispiness. \r\n\r\nPapad Khar is an essential and vital ingredient in papad making, where it contributes to the crispness and expansion of fried papads. Dissolved in water and added to the Ganthia dough, it does its job here too. ', 'Nutrient values (Abbrv) per cup\r\nEnergy	708 cal\r\nProtein	20.5 g\r\nCarbohydrates	58.8 g\r\nFiber	15.1 g\r\nFat	43.5 g\r\nCholesterol	0 mg\r\nSodium	1157.3 mg', ''),
('28', 'SHAMI KEBAB', 'SNACKS', '', '', '', '1.In a pan, add the meat, water, Bengal gram, black and green cardamoms, cinnamon sticks, red chilli powder, salt, turmeric powder, dry ginger powder, ginger and garlic paste.\r\n2.Bring the mixture to a boil. Reduce the heat and continue to cook it until all the water has evaporated and the meat is tender.\r\n3.Remove the pan from the heat and keep aside to cool. Discard the whole spices.\r\n4.Pass the meat twice through a mincing machine, adding the green chillies, black cumin seeds and green coriander.\r\n5.Divide the mixture equally into lemon-sized portions and shape each of them into patty.\r\n6.Heat the refined oil in a pan; deep-fry the patties until they turn a golden brown\r\n7.Remove and drain the excess oil on kitchen towels.\r\n8.Serve hot and crisp with mint chutney and lemon wedges on the side.', '', 'About Shaami Kebab Recipe: Authentic Mughlai dish, shaami kebab is a delectable snack made with minced mutton and a host of spices like red chilli, green chilli, black peppercorn, etc. A delicious starter at dinner ...', 'Calories	174.7\r\nTotal Fat	11.7 g\r\nSaturated Fat	4.6 g\r\nPolyunsaturated Fat	0.5 g\r\nMonounsaturated Fat	5.0 g\r\nCholesterol	43.1 mg\r\nSodium	38.2 mg\r\nPotassium	146.0 mg\r\nTotal Carbohydrate	7.3 g\r\nDietary Fiber	1.3 g\r\nSugars	0.2 g\r\nProtein	7.7 g\r\n', ''),
('3', 'CHICKEN 65', 'NON-VEG', '', '', '', 'Step 1\r\nFor the marination, take a bowl and mix chilli powder, coriander powder, turmeric powder, curd and salt together. This marination step is very important and will give this chicken recipe real flavour.\r\nStep 2\r\nNow, wash the chicken in cold running water and chop it. Once it is done, add the chicken pieces in the above mixture and marinate them. Once the chicken pieces are well coated, keep them aside for 4-6 hours so that flavours are well absorbed.\r\nStep 3\r\nNow, take a deep-bottomed pan and heat oil in it over moderate flame. Once the oil is sufficiently hot, carefully put the marinated chicken pieces in the oil and shallow fry them till cooked or golden from both the sides.\r\nStep 4\r\nNow, remove and cook the chicken pieces in a separate pan without oil over low flame. This step will make the chicken more crispy. Once done, add the green chillies, curry leaves and ketchup. Mix well till the chicken pieces are well coated and continue to cook over medium heat for 5-6 minutes. Transfer the dish in a serving bowl and garnish it with chopped spring onions.\r\nStep 5\r\nChicken 65 is ready. Serve as a snack or with roti and chappatis. You can pair this easy snack recipe with drinks of your choice. Prepare this delectable snack on weekends or when guests are coming over!', '', 'The health benefits of chicken include its ability to provide a good supply of protein, essential vitamins, and minerals. It also aids in weight loss, regulating cholesterol and blood pressure, and reducing the risk of cancer.', 'According to the USDA, chicken (100 g) has moisture (65 g), energy (215 kcal), protein (18 g), fat (15 g), saturated fat (4 g), cholesterol (75 mg), calcium (11 mg), iron (0.9 mg), magnesium (20 mg), phosphorus (147 mg), potassium (189 mg), sodium (70 mg), and zinc (1.3 mg). [1] In terms of vitamins, it contains vitamin C, thiamin, riboflavin, niacin, vitamin B6, folate, vitamin B12, vitamin A, vitamin E, vitamin D, and vitamin K.', ''),
('30', 'FRIED CHEESE CUBES', 'SNACKS', '', '', '', 'Cut mozzarella cheese into 1-inch cubes and set aside.\r\nPlace three shallow bowls beside each other, filling the first with flour, the second with the eggs and milk and the third with the breadcrumbs.\r\nIn a large skillet or saucepan, heat 2 inches of oil to 350°F (use a candy or deep-fry thermometer to gauge temperature). Set a large plate topped with a few paper towels off to the side.\r\n5\r\nUsing a slotted spoon, lower a few cheese cubes at a time into the oil, making sure they stay separated while frying. Remove from oil using spoon after 1 minute or when the cubes are a golden brown and place on paper towels to drain. Let oil return to 350°F before making the next batch. Repeat until all cheese cubes are fried.\r\n6\r\nHeat pizza sauce in the microwave or on the stove top until warm; serve with warm, fried cheese balls.', '', 'Cottage cheese is one of the top food sources of casein, a slow-digesting milk protein that accounts for about 80 percent of the protein in milk (the other 20 percent is whey protein). The fact that it\'s digested slowly means that it provides a steady release of amino acids to rebuild and repair muscle fibers, and to help prevent muscle breakdown.', 'Calories	120.0\r\nTotal Fat	10.0 g\r\nSaturated Fat	0.0 g\r\nPolyunsaturated Fat	0.0 g\r\nMonounsaturated Fat	0.0 g\r\nCholesterol	0.0 mg\r\nSodium	0.0 mg\r\nPotassium	0.0 mg\r\nTotal Carbohydrate	1.0 g\r\nDietary Fiber	0.0 g\r\nSugars	0.0 g\r\nProtein	8.0 g', ''),
('31', 'GULKAND SEVAYA KHEER', 'DESSERT', '', '', '', '1.Fry the cashews in a heavy-bottom pan in 1 tsp of ghee on medium-low heat. Keep them aside for garnishing.\r\n2.In the same pan, add remaining ghee and vermicelli. Roast them stirring gently for 5 minutes on medium heat. If you are using roasted vermicelli then only cook them for a minute in the ghee.\r\n3.Add milk, gulkand, half of the cashews, raisins and saffron and bring it to a gentle boil. Add sugar and cook on medium low heat for another 10-15 minutes.\r\n4.If the kheer looks thick, add some more milk to it. Add rose essence, stir well and turn the heat off.\r\n5.Serve hot, chilled or as desired.', '', 'Veery tasty sweet served after lunch/dinner.', 'Gulkand Seviyan Kheer {Rose flavored sweet vermicelli pudding}\r\nAmount Per Serving\r\nCalories 405 Calories from Fat 63\r\n% Daily Value*\r\nTotal Fat 7g 11%\r\nSaturated Fat 4g 20%\r\nCholesterol 20mg 7%\r\nSodium 187mg 8%\r\nPotassium 312mg 9%\r\nTotal Carbohydrates 75g 25%\r\nDietary Fiber 1g 4%\r\nSugars 25g\r\nProtein 8g 16%\r\nVitamin A 3.6%\r\nVitamin C 0.4%\r\nCalcium 22.3%\r\nIron 3.7%', ''),
('32', 'GAJAR KA HALWA', 'DESSERT', '', '', '', 'Step 1\r\nGajar ka Halwa is a perfect dessert recipe, which you can prepare in a few minutes with some easily available ingredients. You just need a few easily available ingredients and you are good-to-go! Here’s how you go about preparing this dish.In a small bowl, add a tablespoon of milk and kesar strands and keep it aside\r\nStep 2\r\nNow in a kadhai, mix the milk and carrots together and on a low flame slowly bring them to a boil. To add some crunch dry roast the nuts and add it to the recipe.\r\nStep 3\r\nAfter a boil in the milk, add in the kesar flakes and boil it again till the milk dries up.Once the milk is dried up, add the condensed milk and stir occasionally till it also dries up.Then add the ghee and cook for another 10 minutes. Garnish with raisins and cashew nuts and serve hot.', '', ' Boosts eye healthAre you or your child struggling with poor eyesight? Carrots to the rescue! Carrots have been regarded as the fool-proof traditional remedy to improve eyesight. According to the book Healing foods carrots are rich in lutein and lycopene which help maintain good eyesight and night vision. The high amount of vitamin A also helps boost a healthy eyesight.\r\n', 'Calories 275\r\n% Daily Value*\r\n20%Total Fat 13g grams\r\n35% Saturated Fat 7g grams\r\nTrans Fat 0g grams\r\n10%Cholesterol 30mg milligrams\r\n4%Sodium 103mg milligrams\r\n13%Potassium 443mg milligrams\r\n12%Total Carbohydrates 35g grams\r\n9% Dietary Fiber 2.2g grams\r\nSugars 30g grams\r\nProtein 5.6g', ''),
('33', 'SANDESH', 'DESSERT', '', '', '', 'Sandesh can be made with the use of chhena or cottage cheese. The simplest kind of sandesh in Bengal is the makha sandesh (makha = kneaded). It is prepared by tossing the chhena lightly with sugar over low heat. The sandesh is essentially hot, sweetened chhana. When shaped into balls, it is called kanchagolla (kancha = raw; golla = ball). For more complex and elaborately prepared sandesh, the chhana is dried and pressed, flavored with essence of fruits, and sometimes even colored, and cooked to many different levels of consistencies. Sometimes it is filled with syrup, blended with coconut or kheer, and molded into a variety of shapes such as conch shells, elephants, and fish. Another variant is nolen gurer sandesh, which is made with gur or jaggery. It is known for its brown or caramel colour that comes from nolen gur.', '', 'Very tasty sweet and can be consumed after lunch/ dinner. ', 'Calories	147	Sodium	-- mg\r\nTotal Fat	7 g	Potassium	-- mg\r\nSaturated	2 g	Total Carbs	17 g\r\nPolyunsaturated	-- g	Dietary Fiber	-- g\r\nMonounsaturated	-- g	Sugars	15 g\r\nTrans	-- g	Protein	3 g\r\nCholesterol	5 mg	 	', ''),
('34', 'STRAWBERRY LASSI', 'DESSERT', '', '', '', 'Blend 1 cup sweetened plain Greek yogurt with 1/2 cup washed and hulled strawberry and 1 cup milk until very smooth. Make sure all ingredients are chilled. Pour into glasses and serve immediately.\r\n\r\nServes 2.\r\n\r\nIf you are using plain yogurt, make sure it’s not sour at all and use sugar or honey to sweeten your lassi. I personally don’t like honey in lassi and use powdered sugar to make blending easier.', '', 'Nutrition Facts\r\nCalories help 160	(669 kJ)\r\nCalories from fat help 18\r\n% Daily Value 1\r\nTotal Fat help	2g	3%\r\nSat. Fat help	1.5g	8%\r\nCholesterol help	10mg	3%\r\nSodium	125mg	5%\r\nTotal Carbs. help	25g	8%\r\nDietary Fiber help	3g	12%\r\nSugars help	21g	 \r\nProtein help	11g	 \r\nCalcium help	300mg	', 'Nutrition Facts\r\nCalories help 160	(669 kJ)\r\nCalories from fat help 18\r\n% Daily Value 1\r\nTotal Fat help	2g	3%\r\nSat. Fat help	1.5g	8%\r\nCholesterol help	10mg	3%\r\nSodium	125mg	5%\r\nTotal Carbs. help	25g	8%\r\nDietary Fiber help	3g	12%\r\nSugars help	21g	 \r\nProtein help	11g	 \r\nCalcium help	300mg	', ''),
('35', 'SHRIKHAND', 'DESSERT', '', '', '', '1. Collect milk acidic dahi (0.7 to 1 percent acidity)\r\n2. Break the curd and place in a muslin cloth (bag)\r\n3. Hang dahi containing muslin cloth on a stand for removal of why for 6 to 8 hrs.\r\n4. The solid mass thus obtained is called chakka.\r\n5. The chakka so obtained is the Shrikhand base.\r\n6. Admix chakka so obtained with sugar @ 35 to 45 % by weight of chakka) by using powdered sugar.\r\n7. Knead well for uniform mixing using a kneading machine (Shrikhand patra)\r\n8. Add colour and flavor (nutmug powder about ¼ small spoon per kg of product and mix it thoroughly.\r\n9. The product so obtained is known as shrikhand. It should be served in plastic coated cups.\r\n', '', 'It is simply amazing how the humble dahi transforms into a mouth-watering dessert in just a few simple steps. Here is the easiest and best way to make yummy Shrikhand out of everyday curds. It does not even require any cooking. \r\n\r\nAlso known as Matho, Shrikhand is an integral part of a traditional Maharashtrian or Gujarati Thali. Apart from tasting yummy by itself, it can also be enjoyed as an accompaniment for roti or puris. \r\n\r\nDepending on what flavouring substances you add to the thick and creamy hung curds, you get different varieties of Shrikhand. From flavours and essences to dry fruits and nuts, not to forget fruit pulps like mango, strawberry, rose, raspberry and chickoo, you can add an endless number of ingredients to your Shrikhand. \r\n\r\nOf course, there are some classic all-time favourites like the mango-tinged Aamrakhand. Interestingly, you can also make a healthy diabetic-friendly version of this popular dessert Mixed Fruit Shrikhand. \r\n\r\nJust let your imagination run wild and come up with your own funky versions!', 'Calories	130	Sodium	15 mg\r\nTotal Fat	4 g	Potassium	-- mg\r\nSaturated	2 g	Total Carbs	23 g\r\nPolyunsaturated	-- g	Dietary Fiber	-- g\r\nMonounsaturated	-- g	Sugars	21 g\r\nTrans	-- g	Protein	4 g\r\nCholesterol	10 mg	 	', ''),
('36', 'SZECHWAN CHILLI CHICKEN', 'CHINESE', '', '', '', 'Boil the dried red chilies in little water for about 3 – 4 minutes. Let it cool and coarsely grind with Vinegar, salt, sugar, Soy sauce, ginger and garlic.  Heat 1 tbsp Sesame oil and sauté this paste for a minute. Allow to cool.\r\nClean and cut the chicken into bite size cubes. Marinate chicken with salt, 1 tbsp Szechuan Chilli Paste, Soy Sauce, Ginger Garlic paste and pepper powder for half an hour. Just before frying, add Corn Flour and mix well. Deep fry in oil till slightly brown. Keep aside.\r\nRemove excess oil and add the sliced red chilies  and julienned ginger(add sliced green chilies as well if you want it spicier). Drain and keep aside for garnishing. Add chopped garlic and cubed Onion and stir fry for a minute.Next add the cubed Bell Pepper/ Capsicum and fry for few seconds.\r\nMix in 1 ½ tbsp. Szechuan Chilli Paste and fry for another minute. Mix the Soya sauce and Tomato Sauce with 1 cup water and add to the pan. Let it boil and add the chopped Spring Onion bulbs and the fried Chicken pieces. Cook covered on low flame for two minutes. Adjust the salt.\r\nMix corn flour in little water and add to the gravy, stirring continuously to thicken the gravy and coat the pieces.', '', 'Szechuan Chicken / Schezwan Chilli Chicken /Sichuan Chicken with chilies is a popular Indo Chinese fusion dish with unique, bold flavours. Originated from the Sichuan province of South Western China, Szechuan Chicken or Szechwan chicken is prepared with a special Sichuan pepper to give the punch. However, in India, Szechuan Chicken got a makeover and is prepared with a Szechuan style Chili paste/ sauce adapted to match Indian tastes.  Sweet, Sour, Salty and Spicy Chilli Chicken that will captivate you with its unique fragrance. You might also like my Honey Chilli Chicken, anoher flavorful Chilly Chicken recipe.', 'Calories	242.5\r\nTotal Fat	7.3 g\r\nSaturated Fat	1.4 g\r\nPolyunsaturated Fat	1.7 g\r\nMonounsaturated Fat	3.6 g\r\nCholesterol	65.9 mg\r\nSodium	330.9 mg\r\nPotassium	608.0 mg\r\nTotal Carbohydrate	14.9 g\r\nDietary Fiber	2.7 g\r\nSugars	2.8 g\r\nProtein	29.8 g\r\n', '');
INSERT INTO `foodtable` (`ID`, `RECIPE NAME`, `TYPE`, `ING1`, `ING2`, `ING3`, `PROCEDURES`, `INGNO`, `BENEFITS`, `CALORIFIC VALUE`, `IMAGE`) VALUES
('37', 'STIR FRIED TOFU WITH RICE', 'CHINESE', '', '', '', 'Step 1\r\nCook rice according to package directions, omitting salt and fat.\r\n\r\nStep 2\r\nWhile rice cooks, heat 1 tablespoon vegetable oil in a large nonstick skillet over medium-high heat. Add tofu; cook 4 minutes or until lightly browned, stirring occasionally. Remove from pan. Add eggs to pan; cook 1 minute or until done, breaking egg into small pieces. Remove from pan. Add 1 tablespoon vegetable oil to pan. Add 1 cup onions, peas and carrots, garlic, and ginger; sauté 2 minutes.\r\n\r\nStep 3\r\nWhile vegetable mixture cooks, combine sake, soy sauce, hoisin sauce, and sesame oil. Add cooked rice to pan; cook 2 minutes, stirring constantly. Add tofu, egg, and soy sauce mixture; cook 30 seconds, stirring constantly. Garnish with sliced green onions, if desired.', '', 'Soybeans were considered one of five sacred foods (along with rice, wheat, and two types of millet) in ancient China, where bean curd is thought to have been produced for more than 2,000 years. The food was taken to Japan by Buddhist monks traveling back and forth between the countries. Today, tofu continues to be a primary protein source for Buddhists in Asia and around the world. Tofu, or bean curd, can be thought of as a kind of soymilk cheese. Soybeans are soaked and cooked in water, then pressed to make a soymilk base. A coagulant is added to the soymilk, which turns it into cottage-cheese-like curds. The curds are then pressed and drained to form white cakes—the pressing and draining time determines the final product\'s firmness.', 'Soybeans were considered one of five sacred foods (along with rice, wheat, and two types of millet) in ancient China, where bean curd is thought to have been produced for more than 2,000 years. The food was taken to Japan by Buddhist monks traveling back and forth between the countries. Today, tofu continues to be a primary protein source for Buddhists in Asia and around the world. Tofu, or bean curd, can be thought of as a kind of soymilk cheese. Soybeans are soaked and cooked in water, then pressed to make a soymilk base. A coagulant is added to the soymilk, which turns it into cottage-cheese-like curds. The curds are then pressed and drained to form white cakes—the pressing and draining time determines the final product\'s firmness.', ''),
('38', 'VEG HAKKA NOODLES', 'CHINESE', '', '', '', 'Choose the right noodles\r\nThere are a lot of noodles available in the market so choose the right one to make street style hakka noodles at home.\r\nUse a little extra-oil\r\nYou know you have made the perfect noodles when each and every strand of noodle is separate from each other, which was not the case when I made noodles for the first time 3 years ago.\r\n\r\nIt was a mess and all my noodles clumped up together. After few trials and errors, I realized that you do need to use little extra oil.\r\n\r\nFirst the noodles must be coated with little oil after they are boiled and drained.This really helps in preventing the stickiness.\r\n\r\nAnd second you have to use a bit more oil than you would have wanted while cooking the noodles with the veggies.', '', 'Description Uses of Hakka Noodles \r\n\r\nHakka noodles is a Chinese preparation where boiled noodles are stir fried with sauces and vegetables or meats. A hakka noodle is made from unleavened dough( rice or wheat flour) that is cooked in a boiling liquid. Depending upon the type, noodles may be dried or refrigerated before cooking. A typical preparation involves splashing of oil to a large pot of boiling salted water and cooking the noodles as directed on the package. Drain the noodles in a colander, place it in a large bowl, and while still warm, toss with i tbsp oil so that the noodles don\'t stick to one another.Now take a wok, add 4 tbsp oil, and sauté the chopped onions and bell peppers till they become soft and glazed. Add the scallions and toss well. Add salt and 5-6 tbsp soy sauce (adjust to your taste), then add the prepared schezwuan sauce and turn off the heat. Gently pour the sauce over the noodles while still hot. Garnish with some chopped spring onion greens and serve hakka noodles hot!', 'Description Uses of Hakka Noodles \r\n\r\nHakka noodles is a Chinese preparation where boiled noodles are stir fried with sauces and vegetables or meats. A hakka noodle is made from unleavened dough( rice or wheat flour) that is cooked in a boiling liquid. Depending upon the type, noodles may be dried or refrigerated before cooking. A typical preparation involves splashing of oil to a large pot of boiling salted water and cooking the noodles as directed on the package. Drain the noodles in a colander, place it in a large bowl, and while still warm, toss with i tbsp oil so that the noodles don\'t stick to one another.Now take a wok, add 4 tbsp oil, and sauté the chopped onions and bell peppers till they become soft and glazed. Add the scallions and toss well. Add salt and 5-6 tbsp soy sauce (adjust to your taste), then add the prepared schezwuan sauce and turn off the heat. Gently pour the sauce over the noodles while still hot. Garnish with some chopped spring onion greens and serve hakka noodles hot!', ''),
('39', 'CHILLI FISH', 'CHINESE', '', '', '', 'How to Make Chilli Fish\r\n1.Cut the fish into finger pieces.\r\n2.Make a batter with corn flour, maida, baking powder, soy sauce, celery, pepper powder, water and salt.\r\n3.Dip the fish pieces in the batter and fry in oil till golden brown. Transfer fish into a serving plate.\r\nPrepare the sauce:\r\n1.Heat oil in a pan.\r\n2.Saute garlic, ginger and green chilly. Add soy sauce, chilly and tomato sauce to it.\r\n3.Finally add corn flour mixed with water to it and stir well. Once it starts to boil, remove form fire.\r\n4.At the time of serving, pour the sauce on top of fried fish pieces and mix well.\r\n5.Garnish with chopped spring onions.', '', 'Its rich nutritional profile that comes studded with essential micronutrients including omega 3, protein, B vitamins, selenium and vitamin D among others, makes it a much sought after item among fitness enthusiasts.\r\n\r\n2)  Almost all fish and sea organisms are a rich source of vitamin E and omega 3. Regular fish consumption has long been tied to healthy hair, eyesight and skin.', 'Calories	290	Sodium	788 mg\r\nTotal Fat	11 g	Potassium	94 mg\r\nSaturated	1 g	Total Carbs	20 g\r\nPolyunsaturated	3 g	Dietary Fiber	2 g\r\nMonounsaturated	6 g	Sugars	8 g\r\nTrans	-- g	Protein	28 g\r\nCholesterol	-- mg	 	', ''),
('4', 'NIHARI GOSHT', 'NON-VEG', '', '', '', '1.Heat oil in a pan and add green cardamom, cinnamon, cloves, black cardamom and bay leaves.\r\n2.Add the meat and saute till lightly fried.\r\n3.Add salt and turmeric and mix well.\r\n4.Pour in the water, cover the pan and cook.\r\n5.When it starts boiling, add ginger- garlic paste, coriander powder, red chilli, garlic paste and onion paste.\r\n6.Mix well and add yoghurt, gulab-jal, garam masala, nutmeg and cinnamon powder and saffron.\r\n7.Cover and cook for 2-3 minutes.\r\n8.Now transfer the meat in a heavy bottom pan and strain the gravy.\r\n9.Add a few drops of itar and cover the pan.\r\n10.Seal it with the wheat dough and cook on slow fire.\r\n11.Once done, garnish with fresh coriander and ginger juliennes and serve.', '', 'Red meat is an excellent source of protein and minerals such as B vitamins, iron, phosphorus, selenium and zinc, all of which are required by the body in order to build and maintain muscles and bones, repair tissues, boost immunity and improve blood circulation.', 't is not only a good source of protein but is also very rich in vitamins and minerals. For example, B vitamins in it are useful for preventing cataracts and skin disorders, boosting immunity, eliminating weakness, regulating digestion, and improving the nervous system.', ''),
('40', 'HOT AND SOUR SOUP', 'CHINESE', '', '', '', 'Put the wood ears in a small bowl and cover with boiling water. Let stand for 30 minutes to reconstitute. Drain and rinse the wood ears; discard any hard clusters in the centers.\r\nHeat the oil in a wok or large pot over medium-high flame. Add the ginger, chili paste, wood ears, bamboo shoots, and pork; cook and stir for 1 minute to infuse the flavor. Combine the soy sauce, vinegar, salt, pepper, and sugar in a small bowl, pour it into the wok and toss everything together - it should smell really fragrant. Pour in the Chinese Chicken Stock, bring the soup to a boil, and simmer for 10 minutes. Add the tofu and cook for 3 minutes.\r\nDissolve the cornstarch in the water and stir until smooth. Mix the slurry into the soup and continue to simmer until the soup thickens. Remove the soup from the heat and stir in 1 direction to get a current going, then stop stirring. Slowly pour in the beaten eggs in a steady stream and watch it spin around and feather in the broth (it should be cooked almost immediately.) Garnish the hot and sour soup with chopped green onions and cilantro before serving.\r\nChinese Chicken Stock:\r\nPut the chicken in a large stockpot and place over medium heat. Toss in the green onions, garlic, ginger, onion, and peppercorns. Pour about 3 quarts of cold water into the pot to cover the chicken by 1-inch. Simmer gently for 1 hour, uncovered, skimming off the foam on the surface periodically.\r\nCarefully remove the chicken from the pot and pass the stock through a strainer lined with cheesecloth to remove the solids and excess fat. Cool the chicken stock to room temperature before storing in the refrigerator, or chill it down over ice first.', '', '90cal of calories\r\n2.8gr  of fat\r\n49mg of cholesterol\r\n876mg of sodium\r\n128mg of potassium\r\n10gr of carbohydrates\r\n1.2gr of dietary fiber\r\n1gr of sugar\r\n6gr of protein\r\n2gr of vitamin A\r\n5gr of vitamin B6\r\n3gr of vitamin D\r\n2gr of vitamin C\r\n4gr of calcium\r\n8gr of iron\r\n5gr of magnesium', '90cal of calories\r\n2.8gr  of fat\r\n49mg of cholesterol\r\n876mg of sodium\r\n128mg of potassium\r\n10gr of carbohydrates\r\n1.2gr of dietary fiber\r\n1gr of sugar\r\n6gr of protein\r\n2gr of vitamin A\r\n5gr of vitamin B6\r\n3gr of vitamin D\r\n2gr of vitamin C\r\n4gr of calcium\r\n8gr of iron\r\n5gr of magnesium', ''),
('41', 'PIZZA MARGHERITA', 'ITALIAN', '', '', '', 'STEP 1\r\n\r\nOn a wooden or marble work surface, shape the flour into a well. Place the yeast, salt and warm water in the center. Be careful not to let the salt come in contact with the yeast. \r\n\r\nSTEP 2\r\n\r\nKnead the dough vigorously with your hands for 15-20 minutes, or in a mixer, until the dough is soft and smooth.\r\n\r\nSTEP 3\r\n\r\nOnce you have the right consistency, adding a bit of water or flour if necessary, shape the dough into a ball. Cover with a plastic bowl so that the dough is protected from the air. Let rise for 3 or 4 hours at room temperature for about an hour in a warm place. \r\n\r\nSTEP 4\r\n\r\nOnce the dough will be doubled in volume, ricavatene 6 loaves, modellateli in spherical shapes, cover with a sheet of plastic wrap and let them rise at room temperature for a couple of hours or in a warm place for about 45 minutes.\r\n\r\nSTEP 5\r\n\r\nAs soon as the loaves have doubled in volume, prepare the tomato sauce and place it in a bowl. Add a pinch of salt and 1/3 of the olive oil.\r\n\r\nSTEP 6\r\n\r\nKnead the dough, then flattening them using your fingers. \r\n\r\nSTEP 7\r\n\r\nUse a ladle or a spoon to spread a good amount of tomato sauce on the pizza. Then, cover with mozzarella, torn into pieces. Garnish with a couple leaves of basil and bake in a 480° F oven for 5 or 6 minutes.\r\n\r\nSTEP 8\r\n\r\nOnce ready, remove the pizza from the oven. Garnish with more basil and a drizzle of oil. Serve immediately.\r\n\r\n', '', 'Calories\r\nThe American Dietetic Association estimates that the average number of calories in one serving, or one slice, of Margarita pizza is between 200 and 300 calories, depending on the size of the pizza and the thickness of the crust.\r\n\r\n', 'Calories\r\nThe American Dietetic Association estimates that the average number of calories in one serving, or one slice, of Margarita pizza is between 200 and 300 calories, depending on the size of the pizza and the thickness of the crust.\r\n\r\n', ''),
('42', 'FOCACCIA', 'ITALIAN', '', '', '', 'Whisk yeast with warm water in a mixing bowl; whisk in 2 tablespoons olive oil, salt, semolina flour, and 2 teaspoons rosemary until thoroughly combined. Mix in 2 1/2 cups bread flour, using a wooden spoon, until dough is too stiff and sticky to mix.\r\nTurn dough out onto a floured work surface. Knead, dusting with remaining 1/4 cup bread flour as needed, until dough is soft, smooth, and slightly elastic, 2 to 3 minutes.\r\nDrizzle dough with 1 tablespoon olive oil, spreading oil over the dough. Knead briefly, about 2 minutes, to incorporate olive oil. Repeat with 1 more tablespoon oil. Knead 2 or 3 more minutes to incorporate olive oil. Drizzle dough with 1 more tablespoon oil and knead in as before. If dough seems too sticky, knead in a little more flour. Knead until dough is soft, smooth, and elastic, 1 to 2 more minutes (7 to 8 minutes total kneading time).\r\nDrizzle 1 more tablespoon olive oil into a large bowl, place dough into bowl, and turn dough in bowl several times to coat with oil. Cover bowl with aluminum foil and let rise in a warm place until doubled, 1 to 2 hours.\r\nCoat a sheet pan lightly with 1 teaspoon olive oil. Turn dough into pan and press gently into a rough rectangular shape using your fingers, pressing out air bubbles. Cover sheet pan loosely with plastic wrap and let rest 15 to 20 minutes to relax the gluten.\r\nDrizzle 1 tablespoon more olive oil onto the dough, spread oil onto dough, and poke 3 or 4 oil-covered fingers deeply into the dough to make dimples all over the surface. Poke holes all the way down to the bottom of the pan. Fill in any spaces with holes until entire surface is covered with dimples. Let rise until nearly doubled, about 45 minutes.\r\nPreheat oven to 475 degrees F (245 degrees C).\r\nSprinkle 2 teaspoons minced rosemary over top of dough. Drizzle 1 more tablespoon olive oil onto the surface of the dough and brush on very lightly to avoid moving the rosemary. Sprinkle with sea salt.\r\nBake in the preheated oven until focaccia loaf is lightly golden brown, about 15 minutes. Brush 1 last tablespoon olive oil onto the loaf. Transfer to a rack and let cool before cutting.', '', 'Focaccia is one of the most popular and most ancient of the breads of Italy and is very easy to make. I have created this step by step primer to show everyone just how simple it is to make really great focaccia, and what a versatile bread it truly is. Basic focaccia dough requires only five ingredients, flour, water, olive oil, salt, and yeast. A simple focaccia dough lends itself to so many variations that once you master the dough, your options are endless. You can flavor the focaccia dough itself, add a myriad of different seasonal toppings both sweet and savory, create a crisp crusted focaccia that is great for dipping or spreading with creamy toppings, or make a thicker crusted focaccia that is perfect to use for sandwiches or panini. This easy flat bread is also a great option for novice bread bakers as it can be prepared easily and does not require any fancy shaping.', 'Calories 142\r\n% Daily Value*\r\n7%Total Fat 4.5g grams\r\n3% Saturated Fat 0.5g grams\r\nTrans Fat 0g grams\r\nPolyunsaturated Fat 0.6g grams\r\nMonounsaturated Fat 3.2g grams\r\n0%Cholesterol 0mg milligrams\r\n13%Sodium 320mg milligrams\r\n2%Potassium 65mg milligrams\r\n7%Total Carbohydrates 20g grams\r\n4% Dietary Fiber 1g grams\r\nSugars 1g grams\r\nProtein 5g', ''),
('43', 'PROSCUITTO', 'ITALIAN', '', '', '', 'Sliced prosciutto crudo in Italian cuisine is often served as an antipasto, wrapped around grissini, or accompanied with melon. It is also eaten as accompaniment to cooked spring vegetables, such as asparagus or peas. It may be included in a simple pasta sauce made with cream, or a Tuscan dish of tagliatelle and vegetables. It is used in stuffings for other meats, such as veal, as a wrap around veal or steak, in a filled bread, or as a pizza topping.\r\n\r\nSaltimbocca is an Italian veal dish, where escalopes of veal are topped with a sage leaf before being wrapped in prosciutto and then pan-fried. Prosciutto is often served in sandwiches and panini, sometimes in a variation on the Caprese salad, with basil, tomato and fresh mozzarella. A basic sandwich served in some European cafés and bars consists of prosciutto in a croissant.', '', 'Sliced prosciutto crudo in Italian cuisine is often served as an antipasto, wrapped around grissini, or accompanied with melon. It is also eaten as accompaniment to cooked spring vegetables, such as asparagus or peas. It may be included in a simple pasta sauce made with cream, or a Tuscan dish of tagliatelle and vegetables. It is used in stuffings for other meats, such as veal, as a wrap around veal or steak, in a filled bread, or as a pizza topping.\r\n\r\nSaltimbocca is an Italian veal dish, where escalopes of veal are topped with a sage leaf before being wrapped in prosciutto and then pan-fried. Prosciutto is often served in sandwiches and panini, sometimes in a variation on the Caprese salad, with basil, tomato and fresh mozzarella. A basic sandwich served in some European cafés and bars consists of prosciutto in a croissant.', 'Sliced prosciutto crudo in Italian cuisine is often served as an antipasto, wrapped around grissini, or accompanied with melon. It is also eaten as accompaniment to cooked spring vegetables, such as asparagus or peas. It may be included in a simple pasta sauce made with cream, or a Tuscan dish of tagliatelle and vegetables. It is used in stuffings for other meats, such as veal, as a wrap around veal or steak, in a filled bread, or as a pizza topping.\r\n\r\nSaltimbocca is an Italian veal dish, where escalopes of veal are topped with a sage leaf before being wrapped in prosciutto and then pan-fried. Prosciutto is often served in sandwiches and panini, sometimes in a variation on the Caprese salad, with basil, tomato and fresh mozzarella. A basic sandwich served in some European cafés and bars consists of prosciutto in a croissant.', ''),
('44', 'RED CIDER', 'BEVERAGE', '', '', '', 'Obtain the right apples. The best cider has a balance between sweetness and tartness. Often times, apple producers (who will often make their own brand of cider) will blend different apples together to get the right combination.\r\nChoose apples from the above list. Shop the local produce stands, fruit markets or grocery store shelves. If you lean toward a sweet juice, use a ratio of three sweet to one tart, or for medium sweetness, use a \"two sweet to one tart\" ratio. If you intend to make hard cider, use all sweet apples.\r\nClean the apples thoroughly. Cutting out any bruises or damaged parts, and remove stems. As a rule, it is not recommended to use any fruit for cider that you would not eat as it is.', '', 'Apple cider vinegar is made in a two-step process, related to how alcohol is made (1).\r\n\r\nThe first step exposes crushed apples (or apple cider) to yeast, which ferment the sugars and turn them into alcohol.\r\n\r\nIn the second step, bacteria are added to the alcohol solution, which further ferment the alcohol and turn it into acetic acid — the main active compound in vinegar.', 'Calories 114\r\n% Daily Value*\r\n0%Total Fat 0.3g grams\r\n0% Saturated Fat 0.1g grams\r\nTrans Fat 0g grams\r\nPolyunsaturated Fat 0.1g grams\r\nMonounsaturated Fat 0g grams\r\n0%Cholesterol 0mg milligrams\r\n0%Sodium 9.9mg milligrams\r\n7%Potassium 250mg milligrams\r\n9%Total Carbohydrates 28g grams\r\n2% Dietary Fiber 0.5g grams\r\nSugars 24g grams\r\nProtein 0.3g', ''),
('45', 'TOM YUM COCKTAIL', 'BEVERAGE', '', '', '', 'Step 1\r\nTo make this exotic cocktail, take a rock glass and pour vodka, sugar syrup, lime juice and add the sliced lemon grass along with brown sugar.\r\n\r\nStep 2\r\nNow, use a muddler to mix all the ingredients together. Muddling the ingredients allows them to release their flavors and thus intensify taste of the beverage.\r\n\r\nStep 3\r\nAdd some ice to the glass. The ice not only keeps the beverage chilled but also acts as a source of water which binds the ingredients together and makes the texture and taste of the beverage smooth.\r\n\r\nStep 4\r\nFinally, garnish with the red chilli, galangal and kaffir lime leaves. Once done, your Tom Yum Cocktail is ready! Serve chilled!', '', 'Curcumin, the active ingredient in turmeric, is known as an anti-inflammatory agent, helping to relieve allergy symptoms as well as arthritis (or any condition caused by excess inflammation). It is also a powerful anti-oxidant, that can protect the body from damage by toxins and free radicals. Curcumin also protects platelets in the blood, improving circulation and protecting the heart.', 'The exact number of calories in your tom yum soup will vary according to the recipe, but one version from \"Eating Well\" contains 105 calories per serving of 1.33 cups. \"Eating Well\'s\" recipe includes about 1.5 ounces of shrimp, raw weight, per serving; without the shrimp, you can subtract about 30 calories for a total of just 75 calories per serving. A tom yum soup with shrimp from a major grocery brand has more calories than the homemade version, providing 120 calories per 9.9 ounces, which is about 1.25 cups.\r\n\r\n', ''),
('46', 'IRISH COFFEE', 'BEVERAGE', '', '', '', 'Use Two Sugars for Better Irish Coffee\r\nA combination of granulated sugar and brown sugar makes for a cup of joe with balanced sweetness. Just a teaspoon of each keeps the cup from being cloying, which the molasses brings the whiskey\'s own sweetness to the forefront. Use unsweetened whipped cream to keep the sweetness contained in the coffee and avoid a sugar hangover later in the day.\r\nIf using lightly whipped cream, pour it slowly over a warm spoon onto the coffee, being careful not to break the coffee\'s surface. This takes some practice. A foolproof way to not break the surface is to whip the cream a bit more and dollop it gently on top. Enjoy while hot!', '', 'Irish coffee (Irish: caife Gaelach) is a cocktail consisting of hot coffee, Irish whiskey, and sugar (some recipes specify that brown sugar should be used,[1]) stirred, and topped with thick cream. The coffee is drunk through the cream. The original recipe explicitly uses cream that has not been whipped, although drinks made with whipped cream are often sold as \"Irish coffee\". The term \"Irish coffee\" is also sometimes used colloquially to refer to alcoholic coffee drinks in general.', 'Calories 228\r\n% Daily Value*\r\n14%Total Fat 9.3g grams\r\n29% Saturated Fat 5.8g grams\r\nTrans Fat 0g grams\r\nPolyunsaturated Fat 0.3g grams\r\nMonounsaturated Fat 2.7g grams\r\n11%Cholesterol 33mg milligrams\r\n1%Sodium 15mg milligrams\r\n3%Potassium 100mg milligrams\r\n3%Total Carbohydrates 10g grams\r\n0% Dietary Fiber 0g grams\r\nSugars 9.9g grams\r\nProtein 0.8g', ''),
('47', 'LAUKI JUICE', 'BEVERAGE', '', '', '', 'Step 1\r\nPut the bottle gourd, amla, ginger, mint leaves, salt, black salt and cumin seeds in a blender. Add one cup of water and blend it for two to three minutes.\r\nStep 2\r\nAdd another cup of water, lemon juice, ice cubes and blend it for another two to three minutes. Strain into individual glasses and serve chilled.', '', 'Calories : 172 Kcal\r\nCarbohydrates : 36 gm\r\nProtein : 2.9 gm\r\nFat : 1.7 gm\r\nOther : 19.7gm', 'Calories : 172 Kcal\r\nCarbohydrates : 36 gm\r\nProtein : 2.9 gm\r\nFat : 1.7 gm\r\nOther : 19.7gm', ''),
('48', 'HOT CHOCOLATE STRAWBERRY', 'BEVERAGE', '', '', '', 'Gently rinse strawberries and dry on paper towels (berries must be completely dry). Line cookie sheet with waxed paper.\r\n2\r\nIn 1-quart saucepan, melt chocolate chips and shortening over low heat, stirring frequently. Remove from heat.\r\n3\r\nDip lower half of each strawberry into chocolate mixture; allow excess to drip back into saucepan. Place on waxed paper-lined tray or cookie sheet.\r\n4\r\nRefrigerate uncovered about 30 minutes or until chocolate is firm, or until ready to serve. Store covered in refrigerator so chocolate does not soften (if made with oil, chocolate will soften more quickly at room temperature).', '', 'Strawberries are a rich source of vitamin C. Each serving of three large berries dipped in an ounce of dark chocolate offers 30.9 milligrams of vitamin C -- approximately 42 percent of the recommended daily intake for women or 33 percent for men, according to the Institute of Medicine. Vitamin C helps you make collagen, a protein essential for strong tissue, and also plays a role in breaking down fat to form energy. Consuming a diet rich in vitamin C helps keep you healthy by protecting your immune system and lowering your risk of cardiovascular disease.', 'Dark chocolate-dipped strawberries certainly have a nutritional leg up over many other sweets, but still come with some drawbacks. Three berries dipped in an ounce of chocolate contain 188 calories, compared to just 18 calories for the berries on their own. Some varieties of dark chocolate might contain more sugar than others, further boosting the calorie content. If you don\'t practice portion control, consuming too much dark chocolate can lead to weight gain. For the healthiest option, make your own dipped strawberries at home, so that you can select a dark chocolate with a high concentration of cocoa solids, and control the amount of chocolate you use.', ''),
('5', 'POMFRET FISH', 'NON-VEG', '', '', '', 'Clean the pomfrets. I got these cleaned at the fish market.\r\nEach pomfret should yield about 5 pieces, troncon cut. Troncon is a type of cut (as shown) on the bone for flat fish like pomfret.\r\nMarinate with cayenne pepper, ground turmeric, ginger paste, garlic paste, tamarind pulp and salt for at least an hour.\r\nCoat the fish with flour before pan frying. This will give the fish a crispy crust. I\'ve used all purpose flour but semolina (rava) is better for that extra crispness.\r\nFry in canola oil in a non-stick pan over medium heat for about 10 minutes per side.\r\nFlip gently and adjust the heat as required.\r\nMakes for a delicious appetizer. Best served hot.', '', 'atest research done in Japan Food Research Laboratories shows that the omega 3 content in Japanese pomfret fish is the highest of all, with 2,56 grams of omega 3 fatty acid. The omega 3 fatty acid itself is one of the essential fatty acids. The omega 3 is a nutrition that is really needed by the body, however, the body can’t produce it thus we need to obtain it from other sources.', 'Calories           : 96 kcal\r\nProtein            : 19 gr\r\nFat                    : 1,7 gr\r\nCarbohydrate : 0 gr\r\nCalcium           : 20 mg\r\nCholesterol     : 44 mg\r\nIron                  : 2 mg\r\nPhosphor        : 150 mg\r\n', ''),
('6', 'CHICKEN PANCAKE', 'NON-VEG', '', '', '', 'For the pancake\r\nProcess flour, salt, milk and eggs until smooth. Cover. Set aside for 20 minutes.\r\nSpray an 18cm (base) non-stick frying pan with oil and heat over medium heat.\r\nPour 1/4 cup batter into pan and swirl to cover base. Cook for 2 minutes or until light golden. Turn. Cook for 30 seconds. Transfer to a plate. Cover to keep warm.\r\nRepeat with remaining mixture to make 8 pancakes.\r\nFor the filling\r\nMelt butter in a frying pan over medium-high heat.\r\nAdd mushrooms, garlic and onion. Cook, stirring, for 2 minutes or until mushrooms are tender. Transfer to a bowl. Cool for 10 minutes.\r\nStir in chicken, parsley and ricotta.\r\nPutting the together the chicken pancake\r\nPreheat oven to 200°C/ 180°C fan-forced.\r\nPlace 1 pancake on a plate and top with 1/4 cup filling. Roll up to enclose.\r\nPlace in a greased 8cm-deep, 20cm x 30cm ovenproof dish. Repeat with remaining pancakes and filling.\r\nTop with passata and cheese.\r\nCover dish with foil. Bake for 20 minutes or until heated through. Remove foil. Bake for 5 minutes or until cheese is golden.\r\nServe.\r\n', '', 'Light, fluffy and totally comforting, pancakes are a natural choice when you want to treat yourself at breakfast (or at breakfast-for-dinner!) And while pancakes don\'t exactly have a reputation as a health food, they do have some nutrients that can benefit your health. The trick is to opt for whole-grain pancakes, and limit the sugary toppings, like maple syrup, to a drizzle.', 'Calories           : 96 kcal\r\nProtein            : 19 gr\r\nFat                    : 1,7 gr\r\nCarbohydrate : 0 gr\r\nCalcium           : 20 mg\r\nCholesterol     : 44 mg\r\nIron                  : 2 mg\r\nPhosphor        : 150 mg\r\n', ''),
('7', 'BUTTER CHICKEN', 'NON-VEG', '', '', '', '\r\nHeat a large skillet or medium saucepan over medium-high heat. Add the oil and onions and cook onions down until lightly golden, about 3-4 minutes. Add ginger and garlic and let cook for 30 seconds, stirring so it doesn’t burn.\r\n\r\nAdd the chicken, tomato paste, and spices. Cook for 5-6 minutes or until everything is cooked through.\r\n\r\nAdd the heavy cream and simmer for 8-10 minutes stirring occasionally. Serve over Basmati rice or with naan.', '', '286 calories of Chicken Breast (cooked), no skin, roasted, (1 breast, bone and skin removed)\r\n\r\n77 calories of Butter, salted, (0.75 tbsp)\r\n\r\n71 calories of Almonds, (0.13 cup, ground)\r\n\r\n20 calories of Yogurt, plain, low fat, (0.13 cup (8 fl oz))\r\n\r\n17 calories of Tomatoes, red, ripe, canned, wedges in tomato juice, (0.25 cup)\r\n\r\n13 calories of Tomato Paste, (0.06 cup)\r\n\r\n9 calories of Ginger, ground, (0.50 tbsp)\r\n\r\n5 calories of Turmeric, ground, (0.19 tbsp)\r\n\r\n4 calories of Coriander seed, (0.25 tbsp)\r\n\r\n2 calories of Garlic, (0.50 tsp)\r\n\r\n2 calories of Chili powder, (0.25 tsp)\r\n\r\n0 calories of Cinnamon, ground, (0.06 tsp)\r\n', 'Calories	505.4\r\nTotal Fat	22.3 g\r\nSaturated Fat	8.1 g\r\nPolyunsaturated Fat	3.3 g\r\nMonounsaturated Fat	8.5 g\r\nCholesterol	171.5 mg\r\nSodium	484.4 mg\r\nPotassium	1,032.9 mg\r\nTotal Carbohydrate	16.4 g\r\nDietary Fiber	3.7 g\r\nSugars	4.8 g\r\nProtein	59.7 g', ''),
('8', 'COACHELLA CHICKEN BISCUIT RECIPE', 'NON-VEG', '', '', '', 'Whisk the buttermilk, 2 tablespoons hot sauce, the garlic, thyme, 1/2 teaspoon salt and a few grinds of pepper in a large bowl. Add the chicken and turn to coat. Cover and refrigerate 30 minutes.\r\nMeanwhile, combine the cornflakes, flour, 1/2 teaspoon salt and a few grinds of pepper in a shallow baking dish. Combine the honey and the remaining 2 tablespoons hot sauce in a small bowl; set aside.\r\nHeat 1/2 inch of peanut oil in a large cast-iron skillet over medium-high heat until a deep-fry thermometer registers 350 degrees F. Meanwhile, remove the chicken cutlets from the buttermilk mixture, letting the excess drip off, then press into the cereal mixture on both sides. Working in batches, fry the chicken until golden and crisp, about 2 minutes per side. Transfer to a rack set over a baking sheet and season with salt.\r\nBrush the cut sides of the biscuits with the mayonnaise; sandwich with the fried chicken, lettuce, pickles and a drizzle of the spicy honey.', '', 'There are 440 calories in a Chicken Biscuit from Chick-fil-A. Most of those calories come from fat (41%) and carbohydrates (43%).\r\n\r\n', 'per Biscuit\r\n440\r\nCALORIES\r\n20G\r\nFAT\r\n48G\r\nCARBS\r\n16G\r\nPROTEIN', ''),
('9', 'LAAL MAAS', 'NON-VEG', '', '', '', 'How to Make Rajasthani Laal Maas\r\n1.Dry roast the red chillies to give it a nice distinctive aroma which adds great flavor to the dish.\r\n2.Add to that the coriander seeds and cumin seeds.\r\n3.Once done, grind it into a nice fine powder.\r\n4.Heat some mustard oil in a pan. Add to this the garlic and ginger.\r\n5.Once the garlic turns slightly brown add the lamb pieces.\r\n6.Give it a good mix. This is also a good time to add salt.\r\n7.Now add the kachri powder. Not only does this powder tenderize the meat, its also adds a nice tangy flavor to it.\r\n8.Now add the chopped onions and mix all well.\r\n9.Once the onions have roasted well add the whole spices, cardamom, black pepper, cinnamon, mace, black cardamom. Stir well.\r\n10.Now add the red chilly powder and let it roast for about a minute.\r\n11.Add enough water to cook the lamb. Cover it and let it simmer for a couple of minutes till the meat is cooked.\r\n12.Once the meat is cooked, take out all the pieces on a platter and strain the gravy.\r\n13.Straining the gravy gets rid of all the whole spices and keeps the essence and flavors intact.\r\n14.Now add the lamb pieces you had taken out to the refined gravy and put it back on fire but on low heat.\r\n15.Add about 1/2 cup water and some coriander leaves.\r\n16.Let it simmer for a while and when you reach a good consistency of gravy, turn off the heat.\r\n17.Serve hot with a good garnishing of chopped coriander leaves', '', 'Traditionally, Lal Maas used to be made with wild boar or deer, so chillies veiled the gamy odour of the meat. Mutton today is the meat of choice (and Rajasthan produces the best), but Mathania chillies continue to define the dish.\r\nADVERTISEMENT', 'Calories	50	Sodium	0 mg\r\nTotal Fat	0 g	Potassium	179 mg\r\nSaturated	-- g	Total Carbs	12 g\r\nPolyunsaturated	-- g	Dietary Fiber	1 g\r\nMonounsaturated	-- g	Sugars	2 g\r\nTrans	-- g	Protein	2 g\r\nCholesterol	-- mg	 	 \r\nVitamin A	81%	Calcium	2%\r\nVitamin C	9%	Iron	4%', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foodtable`
--
ALTER TABLE `foodtable`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
<?php
session_start();
if($_POST['NON-VEG'])
 {
   $_SESSION['type']=$_POST['NON-VEG'];
   header('location:http://localhost/insert/search2.php');
 }

else if($_POST['VEG'])
 {
   $_SESSION['type']=$_POST['VEG'];
   header('location:http://localhost/insert/search2.php');
 }
 
else if($_POST['SNACKS'])
 {
   $_SESSION['type']=$_POST['SNACKS'];
   header('location:http://localhost/insert/search2.php');
 }
 
else if($_POST['DESSERT'])
 {
   $_SESSION['type']=$_POST['DESSERT'];
   header('location:http://localhost/insert/search2.php');
 }
 
else if($_POST['CHINESE'])
 {
   $_SESSION['type']=$_POST['CHINESE'];
   header('location:http://localhost/insert/search2.php');
 }
 
else if($_POST['ITALIAN'])
 {
   $_SESSION['type']=$_POST['ITALIAN'];
   header('location:http://localhost/insert/search2.php');
 }
 
else if($_POST['BEVERAGE'])
 {
   $_SESSION['type']=$_POST['BEVERAGE'];
   header('location:http://localhost/insert/search2.php');
 }
?>
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
-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 07:55 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `E-MAIL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`USERNAME`, `PASSWORD`, `E-MAIL`) VALUES
('AARYAN', 'GUPTA', 'leo@gmail.com'),
('ADITYA', 'SINGHVI', 'ADITYA@gmail.com'),
('PRIYWRAT', 'RANAWAT', 'priywrat@gmail.com'),
('SANDEEP ', 'RAJAWAT', 'ashu108singh@gmail.com'),
('SATWIK', 'MOHANTY', 'satwik0810@gmail.com'),
('VIBHOR', 'SHROTRIYA', 'VIBHOR@GMAIL.COM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`USERNAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

<?PHP
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'user');
$q="select * from details where USERNAME='$username' AND PASSWORD='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
 $_SESSION['username']=$username;
 header('location:http://localhost/insert/home1.php');
}
else
{
  header('location:http://localhost/insert/login.php');	
}
?>