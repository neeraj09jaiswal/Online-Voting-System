<html>
	<head>
	<title>OVS | Vote</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
	</head>

	<body>
	<header>
	<h1><img src="logo.png" width="125px" height="70px">  Online Voting </h1>
<nav class ="menu">
	<ul>
	<li><a href="contactus.php">Contact us</a></li>
	<li><a href="about.php">About</a></li>
	<li><a href="Login.php">Sign Out</a></li>
        <li><a href="home.php">Home</a></li>

	</ul>

	</nav>
	</header>

	<div class="main">
		<p>Now you are logged in into the voting system and Now you can vote for your Candidate </p>
		<form action="#" method="post">
		<section>
				<h1>Candidate 1</h1>
				<img src="c1.jpg" alt="Smiley face" height=200px width=200px>

				<br>
				<br>
				<label class="radioc">
					<input type="radio" name="lm" value="first">
					<span class="circle">Nidhi
					</span>
				</label>
		</section>
		<aside class="right">
				<h1>Candidate 2</h1>
				<img src="c2.jpg" alt="Smiley face" height=200px width=200px>
				<br>
				<br>
				<label class="radioc">
					<input type="radio" name="lm" value="second">
					<span class="circle">Tolu
					</span>
				</label>
		
		
	</aside>

	<input type="submit" name="btn" value="Submit">

	</form>
	<?php
	
     if (isset($_POST['btn']))
      {
     	if(isset($_POST['lm']))
     	{
         $conn=mysqli_connect("localhost","root","","online");
         $ab=$_POST['lm'];
         	$sql="INSERT INTO `result`(`result`) VALUES ('.$ab.')";
         	mysqli_query($conn,$sql);
		header('location: home.php');
      	}
     	else
     	{
     		echo "<script>alert('Please Select Atleast One')</script>";
     	}
     	
     }



	?>
	 
       
</div>
	
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
section{

	width: 50%;
	height: 30%;
	text-align: center;
	float: left;
	height: 400px;

}
.right{
	width: 49%;
	height: 30%;
	text-align: center;
	float: left;
	height: 400px;
	border-left: 2px solid green;
	
}
.main{
	padding-left: 10px;
	width: 99%;
	background: none;
	text-align: center;
	border: 2px solid #4caf50;
	color: black;
	font-size: 18px;

}
.main p{
	color: red;
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
	

</style>