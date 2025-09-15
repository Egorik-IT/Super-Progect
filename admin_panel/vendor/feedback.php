<?php

    require_once '../../connect.php';

    $f_id = $_GET['id'];
    $f_status = $_GET['status'];
    $f_token = $_GET['token'];

    $f_id = htmlspecialchars($f_id);
    $f_status = htmlspecialchars($f_status);
    $f_token = htmlspecialchars($f_token);

    mysqli_query($connect, "UPDATE `feedbacks` SET `verify` = '$f_status' WHERE `feedbacks`.`feedback_id` = '$f_id'");

    header('Location: ../../admin_auth/redirect.php?status=1&token='.$f_token);
?>