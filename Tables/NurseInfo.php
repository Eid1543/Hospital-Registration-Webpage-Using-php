<!DOCTYPE html>
<html>
<head>
<title>Information</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>SSN</th>
<th>name</th>
<th>Department Number</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "hospital");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Ssn, name, Dnum FROM Nurse";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Ssn"]. "</td><td>" . $row["name"] .  "</td><td>" . $row["Dnum"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>