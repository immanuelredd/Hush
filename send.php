<?php
$email = filter_input(INPUT_POST, 'email');
if (!empty($email)) {
$host = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'hush';

//create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
    die('connect Error ('.mysqli_connect_errno().')' . mysqli_connect_error());
}
 else{
     $sql = "INSERT INTO notify_me(email)
     values ('$email')";
     if ($conn->query($sql)) {
         echo "New record Added successfully";
     }   
     else{
         echo "Error: ". $sql ."<br>".$conn->error;
     }
     $conn->close();
 }
}
else {
    echo "email Should not be empty";
    die();
}
?>