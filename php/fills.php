<?php
$conn = new mysqli("localhost","root","","jquery");
$sql = "INSERT INTO new (username, passwords,mail) VALUES ('{$_POST["username"]}','{$_POST["password"]}','{$_POST["email"]}')";

if ($conn->query($sql)) {
  echo "Record inserted successfully";
} else {
  echo "Error";
}

$conn->close();
?>
