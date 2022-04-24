<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Classroom";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: ");
}
echo "successfully";

$sql="INSERT INTO student(Id,Name,Program,Password)VALUES('$_POST[id]','$_POST[name]','$_POST[program]','$_POST[password]')";


if (mysqli_query($conn, $sql)) {
  header ("location:Login.php");

}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
