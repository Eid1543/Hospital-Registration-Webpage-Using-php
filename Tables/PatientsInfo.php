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
<th>first name</th>
<th>last name</th>
<th>age</th>
<th>sex</th>
<th>Doctor SSN</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "hospital");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Ssn, Fname, Lname, age, sex, Dssn FROM Patient";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Ssn"]. "</td><td>" . $row["Fname"] .  "</td><td>" . $row["Lname"] .  "</td><td>" . $row["age"] .  "</td><td>" . $row["sex"] .  "</td><td>" . $row["Dssn"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>