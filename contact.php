<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Form</title>
    <link rel="stylesheet" href="contact form.css">

  </head>
  <body>
           <nav class="navbar">
				<ul>
					<li><a  href="index.php">Home</a></li>
					<li><a href="About.html">About</a></li>
					<li><a class="active" href="contact.php">Contact us</a></li>
				    <li><a href="Login.php">Student Login</a></li>
				   <li><a href="reg.php">Register</a></li>
				   <li><a href="teacher_login.php">Teacher Login</a></li>
				</ul>
			</nav>
			
<form action="contactconnection.php" method="POST">
   <div class="contact-section">
      </div>
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="" method="post">
          
		   <input type="number" name="id" class="text-box" placeholder="Your ID" required >
		   <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
          
        </form>
      </div>
    </div>
    

  </body>
</html>