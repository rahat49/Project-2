<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title> Register</title>
<link rel="stylesheet" href="register.css">
</head>
<body>

<nav class="navbar">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="About.html">About</a></li>
				    <li><a href="contact.php">Contact us</a></li>
				   <li><a  href="Login.php">Student Login</a></li>
				   <li><a class="active" href="reg.php">Register</a></li>
				   <li><a href="teacher_login.php">Teacher</a></li>
				</ul>
			</nav>

<div class="Register-box">

<h1>Register Here</h1>

<form action = "connect.php "method="POST">

<div class="textbox">
<i class="fas fa-id-card"></i>
<input type="text" name="id" placeholder="STUDENT ID" value="" >
 </div>

<div class="textbox">
<i class="fas fa-user"></i>
<input type="text" name="name" placeholder="STUDENT NAME" value="">
 </div>

  <div class="textbox">
<i class="fas fa-chalkboard-teacher"></i>
<input type="text" name="program" placeholder="PROGRAM" value="">
 </div>

<div class="textbox">
<i class="fas fa-lock"></i>
<input type="password" name="password" placeholder="PASSWORD" value="">
</div>

<input type="submit" class="btn" value="Register">
<p class="change_link">

<a class="bottom" href="treg.php">Teacher Registration </a>

</p>
</div>
</div>
</body>
</html>
