<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <title>Teacher Login</title>
    <link rel="stylesheet" href="teacherlogin.css">
  </head>
  <body>
<nav class="navbar">
				<ul>
					<li><a  href="index.php">Home</a></li>
					<li><a href="About.html">About</a></li>
				    <li><a href="contact.php">Contact us</a></li>
				   <li><a  href="Login.php">Student Login</a></li>
				   <li><a href="reg.php">Register</a></li>
				   <li><a class="active" href="teacher_login.php">Teacher</a></li>
				</ul>
			</nav>
      <div class="login-box">
  <h1>Teacher Login</h1>
  <form action="teacher_login_action.php" method="POST">
  <div class="textbox">
    <i class="fas fa-user"></i>

    <input type="number" name="id" placeholder="TEACHER ID" value="">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" placeholder="PASSWORD" value="">
  </div>

  <input type="submit" name="submit"class="btn" value="LOG IN">
  
Not a member yet? 
<a class= "bottom" href="treg.php">Register</a>
</div>
</form>
  </body>
</html>
