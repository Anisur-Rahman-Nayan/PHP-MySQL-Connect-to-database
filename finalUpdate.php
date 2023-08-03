<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

$stname = $_REQUEST['stname'];
$stid = $_REQUEST['stid'];
$stemail = $_REQUEST['stemail'];
$stcontact = $_REQUEST['stphone'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE studentinfo SET name = '$stname' , email='$stemail', contact='$stcontact' WHERE id= $stid" ;


if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>



</body>
</html>