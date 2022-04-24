<?php
  $conn = mysqli_connect("localhost", "root", "", "Classroom");
  if(!$conn){
	  echo ("Error Connection:".mysqli_connect_error());
  }
  if(isset($_POST['submit'])){
	  $Id = $_POST['id'];
	  $Password = $_POST['password'];

   $sql = "select * from student where id= '$Id' and password = '$Password'";
   $result = mysqli_query($conn,$sql);
   $num = mysqli_num_rows($result);

   if($num ==1){

	   header ("location:afterlogin.php");
   }
   else{



//myFunction();


	   echo "Wrong Password";
   }

  }

?>


