<?php
session_start();
$servername = "localhost";
$username = "root";
$password = '';
$db = "bookstore";

$conn = new mysqli($servername, $username, $password, $db);

$username = $_REQUEST['username'];
$password=$_REQUEST['password'];

$sql="select * from users where username='$username' and password='$password' ";
$result=$conn->query($sql);
if($result->num_rows >0)    
{
    while($row = $result->fetch_assoc()){
        $_SESSION['id']=$row["id"];
        $_SESSION['name']=$row["username"];
        $_SESSION['email']=$row["email"];
        $_SESSION['city']=$row["city"];
        $_SESSION['pass']=$row["password"];
        $_SESSION['mobile']=$row["Mobile"];
        
    }
    header('location:2homee.php');
}
else
{
    header('location:login.php');
    $_SESSION['logerror']="Invaid user";
}
?>