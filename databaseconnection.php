<?php session_start();

$servername = "localhost";
$username = "root";
$password = '';
$db = "bookstore";

$conn = new mysqli($servername, $username, $password, $db);



    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password=$_REQUEST['password'];
    $mobile=$_REQUEST['mobile'];
    $city=$_REQUEST['city'];
    $sql = "INSERT INTO users(username, email, password, Mobile, city) VALUES ('$username', '$email', '$password','$mobile', '$city')";
    if ($conn->query($sql) === TRUE) {
        $lastId = $conn->insert_id;
        $_SESSION['id']=$lastId;
        $_SESSION['name']=$username;
        $_SESSION['email']=$email;
        $_SESSION['pass']=$password;
        $_SESSION['city']=$city;
        $_SESSION['mobile']=$mobile;
        header('Location:2homee.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


?>
