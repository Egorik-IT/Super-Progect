<?php

require_once 'connect.php';

$name = $_POST['name'];
$phone__number = $_POST['phone__number'];
$time = $_POST['time'];


mysqli_query($connect, "INSERT INTO `request` (`id`, `name`, `phone`, `time`) VALUES (NULL, '$name', '$phone__number', '$time') ");

header('Location: index.html');


?>