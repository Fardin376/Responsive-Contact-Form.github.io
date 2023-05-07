<?php

$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$conn = mysqli_connect("localhost", "root", "", "contact_db") or die("Connection Failed");

$sql = "INSERT INTO msg_tbl(First_name, Last_name, Email, Subject, Message) VALUES('{$firstname}', '{$lastname}', '{$email}', '{$subject}', '{$message}')";

$query = mysqli_query($conn, $sql) or die("Query Failed!");

header("location: http://localhost/contact_form/contactForm.php");
mysqli_close($conn);

?>