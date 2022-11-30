<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "Databases123$$$";
$db = "candy";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<table border="1" align="center">
<tr>
  <td>Candy ID</td>
  <td>Candy Name</td>
  <td>Candy Type</td>
</tr>

<?php

$query = mysqli_query($conn, "SELECT * FROM Candy")
   or die (mysqli_error($conn));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['candy_id']}</td>
    <td>{$row['name']}</td>
    <td>{$row['type']}</td>
   </tr>";
}

?>

</table>
</body>
</html>
