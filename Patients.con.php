<?php
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$ssn = filter_input(INPUT_POST, 'ssn');
$age = filter_input(INPUT_POST, 'age');
$gender = filter_input(INPUT_POST, 'gender');
$Dssn = filter_input(INPUT_POST, 'Dssn');


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
$sql = "INSERT INTO Patient (Ssn, Fname, Lname, age, sex, Dssn)
values ($ssn,'$fname', '$lname', $age, '$gender', $Dssn )";
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
