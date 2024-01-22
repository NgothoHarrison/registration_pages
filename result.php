<?php

$Username = $_POST['Username'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

// connection to database

$conn = new mysqli('localhost', 'root', '', 'signup');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into signup(Username, Email, Password)
        values(?, ?, ?)");
    $stmt->bind_param("sss",$Username, $Email, $Password);
    $stmt->execute();
    echo "signup.php";
    $stmt->close();
    $conn->close();
}

?>
