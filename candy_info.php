<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<body>

<title>Super Cool World Cup Database Project</title>
<header>
<h1>Super Cool World Cup Database Project</h1>
<p>Carlos, Vishnu, Thang</p>
</header>
<?php
$servername = "localhost";
$username = "root";
$password = "Databases123$$$";
$db = "WorldCupDB";

$search = $_POST['search'];

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully.\n";
?>
<p>G=Goal, OG=Own Goal, Y=Yellow Card, R=Red Card, SY = Red Card by second yellow, P=Penalty, MP=Missed Penalty, I = Substitution In, O=Substitute Out</p>

<p>Search for a player:</p>

<form action="candy_info.php" method="GET">
<input id="search" name="search" type="text" placeholder="Type here">
<input id="submit" type="submit" value="Search">
</form>

<table border="1" align="center">
<tr>
  <td>Player_Name</td>
  <td>Year</td>
  <td>RowID</td>
  <td>RoundID</td>
  <td>MatchID</td>
  <td>Team_Initials</td>
  <td>Coach_Name</td>
  <td>Line_up</td>
  <td>Shirt_Number</td>
  <td>Position</td>
  <td>EVENT</td>
  <td>Stage</td>
  <td>AwayTeamInitials</td>
  <td>HomeTeamInitials</td>
</tr>

<?php

$query = mysqli_query($conn, "SELECT DISTINCT * FROM WorldCupPlayers P join WorldCupMatches  M ON P.MatchID=M.MatchID and P.RoundID = M.RoundID WHERE P.Player_Name LIKE '%C.Ronaldo%'")
   or die (mysqli_error($conn));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['Player_Name']}</td>
    <td>{$row['Year']}</td>
    <td>{$row['RowID']}</td>
    <td>{$row['RoundID']}</td>
    <td>{$row['MatchID']}</td>
    <td>{$row['Team_Initials']}</td>
    <td>{$row['Coach_Name']}</td>
    <td>{$row['Line_up']}</td>
    <td>{$row['Shirt_Number']}</td>
    <td>{$row['Position']}</td>
    <td>{$row['EVENT']}</td>
    <td>{$row['Stage']}</td>
    <td>{$row['AwayTeamInitials']}</td>
    <td>{$row['HomeTeamInitials']}</td>
   </tr>";
}

?>

</table>

<p>Top 10 countries by goals scored:</p>
<table border="1" align="center">
<tr>
  <td>TEAM</td>
  <td>Total_Goals_Scored</td>
</tr>

<?php
$query = mysqli_query($conn, "SELECT TEAM, SUM(Goals_For) as Total_Goals_Scored from TeamInfo GROUP BY Team ORDER BY SUM(Goals_For) DESC LIMIT 10")
   or die (mysqli_error($conn));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['TEAM']}</td>
    <td>{$row['Total_Goals_Scored']}</td>
    </tr>";
}
?>

<table border="1" align="center">
<tr>
  <td>TEAM</td>
  <td>Total_Goals_AGAINST</td>
</tr>

<p>Top 10 countries by goals conceded:</p>

<?php
$query = mysqli_query($conn, "SELECT SUM(Goals_AGAINST) AS Total_Goals_AGAINST, TEAM from TeamInfo GROUP BY Team Order BY SUM(Goals_AGAINST) DESC LIMIT 10")
  or die (mysqli_error($conn));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['TEAM']}</td>
    <td>{$row['Total_Goals_AGAINST']}</td>
    </tr>";
}
?>

<table border="1" align="center">
<tr>
  <td>TEAM</td>
  <td>Appearences</td>
</tr>

<p>Top 10 countries by World Cup appearances:</p>

<?php
$query = mysqli_query($conn, "SELECT COUNT(TEAM) as Appearances, TEAM from TeamInfo GROUP BY TEAM ORDER BY COUNT(TEAM) DESC LIMIT 10")
  or die (mysqli_error($conn));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['TEAM']}</td>
    <td>{$row['Appearances']}</td>
    </tr>";
}
?>

<table border="1" align="center">
<tr>
  <td>TEAM</td>
  <td>Total_Wins</td>
</tr>

<p>Top 10 countries by World Cup wins (as of 2014):</p>

<?php
$query = mysqli_query($conn, "SELECT COUNT(Winner) as Total_Wins, Winner as TEAM FROM WorldCups GROUP BY Winner ORDER BY COUNT(Winner) DESC LIMIT 10")
  or die (mysqli_error($conn));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['TEAM']}</td>
    <td>{$row['Total_Wins']}</td>
    </tr>";
}
?>

</body>
</html>
