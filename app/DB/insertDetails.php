<?php
// Including database connections
require_once 'db_connection.php';
// Fetching and decoding the inserted data
$data = json_decode(file_get_contents("php://input"));


// Escaping special characters from submitting data & storing in new variables.
$username = mysqli_real_escape_string($conn, $data->user_name);
$email = mysqli_real_escape_string($conn, $data->email);
$password = mysqli_real_escape_string($conn, $data->password);
$name = mysqli_real_escape_string($conn, $data->name);

// mysqli insert query
//$query = "INSERT into userr (token,email,password,user_name,status) VALUES ('sdad','sada','asda','sada','0')";
$query = "INSERT into userr (token,email,password,user_name,status) VALUES ('$username','$email','$password','$name','0')";
// Inserting data into database
mysqli_query($conn, $query);
echo true;
?>

