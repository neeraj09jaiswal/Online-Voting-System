<html>
	<head>
	<title>Online Voting System</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
	</head>

	<body>
	<h1><img src="logo.png" width="125px" height="70px">  Online Voting </h1>
	<nav class ="menu">
	<ul>
	<li><a href="contactus.php">Contact us</a></li>
	<li><a href="about.php">About</a></li>
	<li><a href="register.php">Register</a></li>
    <li><a href="Login.php">Log In</a></li>
	</ul>
	
	 </nav>
	  <h2>&nbsp;Welcome!!!</h2>
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="s2.png" style="width:70%;height:40%">
</div>
<div class="mySlides fade">
   <img src="s1.png" style="width:70%;height:40%"> 
</div>
<div class="mySlides fade">
  <img src="s4.jpg" style="width:70%;height:40%"> 
</div>
<div class="mySlides fade">
  <img src="pro1.jpg" style="width:70%;height:40%">
</div>
 <div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
</div>

</div>

<div class="option">
	<br><br><br><br><br>
<a class="a active" href="dateelection.php">[+] DATE OF ELECTION</a><br><br>
<a class="b" href="result.php">[+] ELECTION RESULT&nbsp;</a><br><br>
<a class="c" href="detail.php">[+] ELECTION DETAIIL</a><br><br>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>	

</html>

<style>
body{

	background:#fff;
	margin:0;
}
body{
	font-family: sans-serif;
	background-image:url(mph.jpg);
	background-size: cover;
	background-attachment: fixed;

}
h2{
	text-align: center;
}
.menu ul h1{
	display:inline;
	font-weight: 400;
	font -size: 32px;
	float: left;
	margin-top:0px;
	margin-right:0px;
}

.menu{
	width:100%;
	background:#142b47;
	overflow:auto;
}
.menu ul{
	margin:0;
	padding:0;
	list-style:none;
	line-height:50px;
}
.menu li{ 
	float:right;
}
.menu ul li a{
	background:#142b47;
	text-decoration:none;
	width:120px;
	display:block;
	text-align:center;
	color:f2f2f2;
	font-size:18px;
	font-spacing:calibri;
	letter-spacing:0.5px;
	margin-right: 6px;
}
.menu li a:hover{
	color:#fff;
	opacity:0.2;
	font-size:18px;
}
	
 .option{
width: 350px;
height: 10px;
position: absolute;
top: 20%;                                  /*to bring the home,cont. etc downward */
left: 70%;
}
.option{
	
text-decoration: nonr;
font-size: 25px;
font-family: verdana;
font-weight: bold;
height: 30px;    /* to create gap between home,cont..etc */
margin:5px 0;    /* to create gap between home, cont etc back ground or make separate background of each*/
float:left;                                  
display: inline-block;                             /*to bring the home,contact us etc. in a stack form */               /* baome, about me etc font color */
line-height: 25px;                                /* to adjust the home, about me etc position(top or down) in their background*/
text-align: right;                               /* to bring the  home, about me etc in the center of their background*/ 
transition: 300ms; /* to flow smothly  home, contact us, ect at the left side when cursor will go on home ,cont. etc*/
}

.a{

	background-color: green;
	border-left: 2px solid green;

	border-right: 2px solid green;
	width: 80%;/* to change the width of home and when the cursor will go on it's width will be increase */ 
}
.b{

	background-color: green;
	border-left: 2px solid green;

	border-right: 2px solid green;
	width: 80%;/* to change the width of about me and when the cursor will go on it's width will be increase */ 
}
.c{
	background-color: green;
	border-left: 2px solid green;
	
	border-right: 2px solid green;
	width: 80%; /* to change the width of gallery and when the cursor will go on it's width will be increase */ 
}

.option a:hover{
background-color: #142b47; /*to change the background color when we will bring the cursor on the home, contact us etc*/  
color:  white  ; /*to change the font color  of home, contact us.. etc. when we will bring the cursor on the home, contact us etc*/
width: 90%;   /* to show the 100% width when cursor will go on home, contact us etc*/
}


</style>