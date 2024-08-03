<?php 

$servername = "localhost";
$username = "root";
$password = '';
$db = "bookstore";

$conn = new mysqli($servername, $username, $password, $db);
$title=$_REQUEST['booktitle'];
$standard=$_REQUEST['standard'];
$category=$_REQUEST['category'];
$description=$_REQUEST['description'];
$price=$_REQUEST['price'];
$sql="insert into upl(title,standard,categories,description,price) values('$title','$standard','$category','$description','$price')";
if ($conn->query($sql) === TRUE) {
    header("location:2homee.php");



}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>