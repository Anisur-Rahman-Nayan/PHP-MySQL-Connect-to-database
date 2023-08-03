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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, id, email, contact FROM studentinfo";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"]. " NAME: " . $row["name"]. " EMAIL: " . $row["email"]. " PHONE NUMBER: " . $row["contact"]. " " ."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>


<form action="finalDelete.php">
    <br><br><br><br><br>
    <label for="delete">Delete A Student's Infromation By ID:</label>
    <input type="number" name="id" id="delete">
    <input type="submit" value="Submit">
</form>


</body>
</html>