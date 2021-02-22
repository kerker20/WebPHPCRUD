<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Webarchi";

$uname=$_GET["username"];
$uemail=$_GET["email"];
$upass=$_GET["password"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO accounts (username, email, password)
VALUES ('$uname', '$uemail', '$upass')";

if ($conn->query($sql) === TRUE) {
    header("location: index1.php");
    exit;
}

$conn->close();
?>