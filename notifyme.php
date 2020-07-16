<?php

//test db connection
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hush';

$email = $_POST['email'];

try
{
  $connection = new PDO('mysql:host = $username;$dbname;', $username, $password);
  echo "Connection Successful";
  $statement = $connection->prepare('INSERT INTO notify_me (email)
  VALUE (:email)');

  $statement->execute([
      'email' => $email,
      ]);
}

catch(PDOExceptio $e)
{
  echo "Connection Unsuccessful: " . $e->getMessage();
}
?>