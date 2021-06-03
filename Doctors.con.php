<?php
$name = filter_input(INPUT_POST, 'name');
$ssn = filter_input(INPUT_POST, 'ssn');
$Dnumber = filter_input(INPUT_POST, 'Dnumber');
$speciality = filter_input(INPUT_POST, 'speciality');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hospital";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO Doctor (Ssn, name, Speciality, Dnum)
values ($ssn,'$name', '$speciality' ,$Dnumber )";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}

?>
