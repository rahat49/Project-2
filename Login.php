<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <title>Student Login</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div class="wrapper">
 <nav class="navbar">
				<ul>
					<li><a  href="index.php">Home</a></li>
					<li><a href="About.html">About</a></li>
				    <li><a href="contact.php">Contact us</a></li>
				   <li><a class="active" href="Login.php">Student Login</a></li>
				   <li><a href="reg.php">Register</a></li>
				   <li><a href="teacher_login.php">Teacher </a></li>
				</ul>
			</nav>
     <div class="login-box">
  <h1>Student Login</h1>
  <form action="login_action.php" method="POST">
  <div class="textbox">
    <i class="fas fa-user"></i>	
    <input type="number" name="id" placeholder="STUDENT ID" value="">
  </div>
  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" placeholder="PASSWORD" value="">
  </div>
  <input type="submit" name="submit"class="btn" value="LOG IN">
<p class="change_link">
Not a member yet? 
<a class="bottom" href="reg.php">Register</a>
</p></div></div>
</form>
  </body>
</html>
