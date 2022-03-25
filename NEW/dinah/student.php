<?php
$fname=POST_[“fname”];
$lname=POST_[“lname”];
$email=POST_[“email”];

$servername='localhost';
$username='root';
$password='';
$dbname='john';
$sql = ("INSERT INTO student (firstname, lastname, email) VALUES (‘$fname', ‘$lname', ‘$email')");
if (mysqli_query($conn, $sql))
 { 
     echo("New record created successfully");
     
} else
 {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
