<?php

require_once 'connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


mysqli_query($connect, "INSERT INTO `communicate` (`id`, `name`, `email`, `message`) VALUES (NULL, '$name', '$email', '$message')");

header('Location: index.html');


?>