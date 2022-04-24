<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "classroom";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: ");
}
echo "successfully";

$sql="INSERT INTO contact(Id,Name,Email,Message)VALUES('$_POST[id]','$_POST[name]','$_POST[email]','$_POST[message]')";


if (mysqli_query($conn, $sql)) {
    echo "Message sent ";
  
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>