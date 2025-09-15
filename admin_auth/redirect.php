<?php

    $status = $_GET['status'];
    $token = $_GET['token'];

    $status = htmlspecialchars($status);
    $token = htmlspecialchars($token);

    if ($status == 1) {
        header('Location: ../admin_panel/index.php?token='.$token);
    }
    else if ($status == 0) {
        header('Location: index.php');
    }
    else if ($status == -1) {
        header('Location: index.php?status=-1');
    }

?>