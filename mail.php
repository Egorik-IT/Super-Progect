<?php

require_once 'connect.php';

$email = $_POST['email'];

mysqli_query($connect, "INSERT INTO `mailing` (`id`, `email`) VALUES (NULL, '$email')");

header('Location: index.html');


?>