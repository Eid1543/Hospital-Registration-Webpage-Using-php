<?php
$id = filter_input(INPUT_POST, 'id');
$Problem = filter_input(INPUT_POST, 'Problem');
$pssn = filter_input(INPUT_POST, 'pssn');

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
$sql = "INSERT INTO Medical_Record (id, problem, pssn)
values ($id,'$Problem', $pssn )";
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
