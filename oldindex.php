<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

    <meta name="theme-color" content="#fafafa">
</head>

<body>
<h1>hello</h1>
<form>
    <input type="text" name="search" placeholder="Search...">
    <input type="submit" value="Go">
</form>

<?php

$db = new mysqli('localhost', 'carlos', 'Databases123$$$', 'WorldCupDB');

// Check for errors in the connection
if ($db->connect_error) {
die(" Connection failed: " . $db->connect_error);
}

if (isset($_POST['search'])) {
// Escape the search query to prevent SQL injection attacks
$search = $db->real_escape_string($_POST['search']);

// Save the search query to a file or database
}
$query = $search;

$result = $db->query($query);

// Check if the query was successful
if (!$result) {
// Print an error if the query was unsuccessful
echo "Error: " . $db->error;
}

if ($result) {
// Print the results of the query
while ($row = $result->fetch_assoc()) {
echo "Field 1: " . $row['field1'] . "<br>";
echo "Field 2: " . $row['field2'] . "<br>";
// Add additional fields as needed
echo "<br>";
}
else {
// Print an error if the query was unsuccessful
echo "Error: " . $db->error;
}
?>

</body>

</html>
