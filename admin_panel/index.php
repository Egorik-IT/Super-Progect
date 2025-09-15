<?php

require_once '../connect.php';

$token = $_GET['token'];

$admin = mysqli_query($connect, "SELECT * FROM `admins` WHERE `admin_token` = '$token'");
$admin = mysqli_fetch_assoc($admin);

if ($admin == NULL) {
    header('Location: ../admin_auth/redirect.php?status=0');
}

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/layout.css">
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>Админ - ООО "ЕВРОМЕТРЫ"</title>
</head>
<body>
    <div class="main">
        <div class="main-container container-fluid">
            <div class="main-flex d-flex flex-column">
                <div class="head block mt-2 mb-2 p-2 shadow">
                    <div class="row">
                        <div class="col align-self-center">
                            <p class="m-0">Админ панель</p>
                            <p class="m-0">Администратор:&nbsp;<a style="font-weight: bold;"><?= $admin['admin_name'] ?></a></p>
                        </div>
                        <div class="col col-auto align-self-center">
                            <a class="btn btn-primary" href="http://sergacng.beget.tech/index.html" role="button">Вернуться на главную</a>
                        </div>
                    </div>
                </div>
                <div class="body mb-2">
                    <div class="card-body p-0">
                        <div class="row gx-2">
                            <div class="col">
                                <div class="card-body-new shadow-sm p-3 block">
                                    <h3 class="text-center">Новые отзывы</h3>
                                    <hr>
                                    <div class="row row-cols-1 gy-3">
                                        <?php
                                        $feedbacks = mysqli_query($connect, "SELECT * FROM `feedbacks`");
                                        $feedbacks = mysqli_fetch_all($feedbacks);
                                        $have_feedbacks = false;

                                        foreach ($feedbacks as $feedback) {
                                            if ($feedback[5] != 0) {
                                                continue;
                                            }
                                            ?>
                                            <div class="col">
                                                <div class="feedback-card border-0 shadow">
                                                    <div class="card-header">
                                                        <?= $feedback[1] ?>
                                                        <?= $feedback[2] ?>
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $feedback[3] ?></h5>
                                                        <p class="card-text"><?= $feedback[4] ?></p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="row gx-2">
                                                            <div class="col">
                                                                <div class="d-grid">
                                                                    <a href="vendor/feedback.php?id=<?= $feedback[0] ?>&status=1&token=<?= $token ?>" class="btn btn-success">
                                                                        Опубликовать отзыв&nbsp;
                                                                        <i class="fa-solid fa-check"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="d-grid">
                                                                    <a href="vendor/feedback.php?id=<?= $feedback[0] ?>&status=-1&token=<?= $token ?>" class="btn btn-danger">
                                                                        Отклонить отзыв&nbsp;
                                                                        <i class="fa-solid fa-xmark"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $have_feedbacks = true;
                                        }

                                        if (!$have_feedbacks) {
                                            ?>
                                            <div class="text-center">Новых отзывов нету.</div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body-old shadow-sm p-3 block">
                                    <h3 class="text-center">Опубликованные отзывы</h3>
                                    <hr>
                                    <div class="row row-cols-1 gy-3">
                                        <?php
                                        $feedbacks = mysqli_query($connect, "SELECT * FROM `feedbacks`");
                                        $feedbacks = mysqli_fetch_all($feedbacks);
                                        $have_feedbacks = false;

                                        foreach ($feedbacks as $feedback) {
                                            if ($feedback[5] < 1) {
                                                continue;
                                            }
                                            ?>
                                            <div class="col">
                                                <div class="feedback-card border-0 shadow">
                                                    <div class="card-header">
                                                        <p class="mb-0"><?= $feedback[1] ?></p>
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $feedback[3] ?></h5>
                                                        <p class="card-text"><?= $feedback[4] ?></p>
                                                    </div>
                                                    <div class="card-footer p-2">
                                                        <div class="d-grid">
                                                            <a href="vendor/feedback.php?id=<?= $feedback[0] ?>&status=-2&token=<?= $token ?>" class="btn btn-danger">
                                                                Удалить отзыв&nbsp;
                                                                <i class="fa-solid fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $have_feedbacks = true;
                                        }
                                        if (!$have_feedbacks) {
                                            ?>
                                            <div class="text-center">Отзывов еще нету.</div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer mb-3">
                    <div class="row gy-4 pt-3 px-3">
                        <div class="col">
                            
                        </div>
                    </div>
                    <hr>
                    <p class="reserved text-center">&copy; 2025. ООО «ЕВРОМЕТРЫ». Все права защищены.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
