<?php

    require_once '../../connect.php';

    $a_login = $_POST['login'];
    $a_password = $_POST['password'];

    $a_login = htmlspecialchars($a_login);
    $a_password = htmlspecialchars($a_password);

    $admin = mysqli_query($connect, "SELECT * FROM `admins` WHERE `admin_name` = '$a_login'");
    $admin = mysqli_fetch_assoc($admin);

    if ($admin['admin_password'] != $a_password) {
        header('Location: ../redirect.php?status=-1');
    }
    else {
        header('Location: ../redirect.php?status=1&token='.$admin['admin_token']);
    }
?>