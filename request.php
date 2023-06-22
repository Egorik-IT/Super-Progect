<?php

require_once 'connect.php';

$name = $_POST['name'];
$phone__number = $_POST['phone__number'];



mysqli_query($connect, "INSERT INTO `request` (`id`, `name`, `phone`) VALUES (NULL, '$name', '$phone__number') ");

header('Location: index.html');


?>