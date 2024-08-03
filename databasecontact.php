<?php session_start();

$servername = "localhost";
$username = "root";
$password = '';
$db = "bookstore";

$conn = new mysqli($servername, $username, $password, $db);
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$message=$_REQUEST['message'];
$sql="insert into contact(name,email,subject,message) values('$name','$email','$subject','$message')";
$conn->query($sql);
header('location:index.php');
?>