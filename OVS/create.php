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
        <li><a href="home.php">Home</a></li>	

	</ul>
	</nav>


<script src="https://www.gstatic.com/firebasejs/5.9.1/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyC4vu_cvK8HS487nUTqvZ7CEfOflWlFIL4",
    authDomain: "online-voting-system-c2550.firebaseapp.com",
    databaseURL: "https://online-voting-system-c2550.firebaseio.com",
    projectId: "online-voting-system-c2550",
    storageBucket: "online-voting-system-c2550.appspot.com",
    messagingSenderId: "1079287749978"
  };
  firebase.initializeApp(config);
</script>

	<div class="login-box">
		<h1>Create Password</h1>
		<div class="textbox">
			<i class="fa fa-user" area-hidden="true"></i>
			<input type="text" placeholder="Registration no." name="" value="">
		</div>
		<div class="textbox">
			<i class="fa fa-lock" aria-hidden="true"></i>
			<input type="password" placeholder="Enter Password" name="" value="">
		</div>
		  <a href="Login.html"> <button>Submit</button></a>

	
		
		
</body>

</html>
<style>

body{

	background:#fff;
	margin:0;
}
body{
	background-image:url(mph.jpg);
	background-size: cover;
	background-attachment: fixed;

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
	




body{
	margin:0;
	padding: 0;
	font-family: sans-serif;
	background: url(mph.jpg) no-repeat;
	background-size: cover;
}
.login-box{
	width: 280px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	color: black;

}
.login-box h1{
	float: left;
	font-size: 40px;
	border-bottom: 6px solid #4caf50;
	margin-bottom: 50px;
	padding: 5px 0;
}
.textbox{
	width: 100%;
	overflow: hidden;
	font-size: 20px;
	padding: 8px 0;
	margin: 8px 0;
	border-bottom: 1px solid #4caf50;

}
.textbox i{
	width: 26px;
	float: left;
	text-align: center;

}
.textbox input{
	border: none;
	outline: none;
	background: none;
	color: black;
	font-size: 18px;
	width: 80%;
	float: left;
	margin: 0 10px;

}
.btn{
	width: 100%;
	background: none;
	border: 2px solid #4caf50;
	color: black;
	padding: 5px;
	font-size: 18px;
	cursor: pointer;
	margin: 12px 0;
}
</style>
