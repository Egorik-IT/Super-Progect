<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>Авторизация - ООО "ЕВРОМЕТРЫ"</title>
</head>
<body>
    <div class="admin">
        <div class="admin-container container-fluid" style="max-width: 30vmax;">
            <div class="feedback-flex d-flex flex-column align-items-center gap-5">
                <form action="vendor/auth.php" method="post" class="admin-auth-form border-0 shadow w-100">
                    <div class="mt-3 mb-3 px-3">
                      <label class="form-label">Логин</label>
                      <input type="text" name="login" class="form-control" maxlength="128" required>
                      <div id="emailHelp" class="form-text">Обычно это ваше имя на латинице.</div>
                    </div>
                    <div class="mb-3 px-3">
                      <label class="form-label">Пароль</label>
                      <input type="password" name="password" class="form-control" maxlength="128" required>
                    </div>
                    <div class="d-grid px-3 pb-3">
                        <button class="btn btn-primary" type="submit">Войти</button>
                    </div>
                    <?php
                        $a_status = $_GET['status'];
                        if ($a_status == -1) {
                            ?>
                            <div class="d-grid px-3 pb-3">
                                <div class="form-text" style="color: red;">Не верный логин или пароль.</div>
                            </div>
                            <?php
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>