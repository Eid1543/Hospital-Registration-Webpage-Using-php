<?php
$name = filter_input(INPUT_POST, 'name');
$number = filter_input(INPUT_POST, 'number');

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
$sql = "INSERT INTO department (Dnum, name)
values ($number,'$name')";
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
