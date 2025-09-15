<?php

require_once 'connect.php';

$u_name = $_POST['name'];
$u_email = $_POST['email'];
$f_header = $_POST['header'];
$f_text = $_POST['text'];

$u_name = htmlspecialchars($u_name);
$u_email = htmlspecialchars($u_email);
$f_header = htmlspecialchars($f_header);
$f_text = htmlspecialchars($f_text);

mysqli_query($connect, "INSERT INTO 
    `feedbacks` (`feedback_id`, `user_name`, `user_email`, `feedback_header`, `feedback_text`, `verify`) 
    VALUES (NULL, '$u_name', '$u_email', '$f_header', '$f_text', '0')");

header('Location: about__us.html');
?>