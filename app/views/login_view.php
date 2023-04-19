<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
</head>
<body>
    <div class="align-items-center d-flex flex-column mt-5">
        <h1 class="text-light fw-light text-center mb-5">Войдите в свой аккаунт</h1>
        <form action="" method="post" class="d-flex flex-column w-50">
            <input class="w-100 text-light mb-3 border-danger border-bottom border-top-0 border-start-0 border-end-0 p-2 bg-transparent rounded-2" type="text" placeholder = 'Логин' name="login" required>
            <input class="w-100 text-light mb-3 border-danger border-bottom border-top-0 border-start-0 border-end-0 p-2 bg-transparent rounded-2" type="password" placeholder = 'Пароль' name="password" required>
            <input class="w-100 text-light p-2 bg-danger border-0 rounded-2 fw-semibold fs-5" type="submit" name="submit" value="Войти">
        </form>
    </div>

    <?php
        print_r($data);
    ?>
</body>
</html>