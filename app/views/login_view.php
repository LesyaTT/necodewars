<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
</head>
<body>
    <div>
        <h1>
            Войдите в свой аккаунт
        </h1>
        <div>
            <div>
                <div>
                    <a href="/login">Войти</a>
                    <a href="/registration">Зарегистрироваться</a>
                </div>
                <a href="">
                    Забыли пароль?
                </a>
            </div>
            <form action="" method="post">
                <input type="text" placeholder = 'Логин' name="login">
                <input type="password" placeholder = 'Пароль' name="password">
                <button>Войти</button>
            </form>

            <?php
            print_r($data);
            ?>
        </div>
    </div>
</body>
</html>