<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"carpooldb");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$mname=$_POST['mname'];
$rno=$_POST['rno'];
$vdesc=$_POST['vdesc'];

$sql = "INSERT INTO vehicle (v_model, v_rno, v_desc) VALUES ('$mname', '$rno', '$vdesc')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
