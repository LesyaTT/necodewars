<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/main.scss">
</head>
<body class="bg-dark ps-5 pe-5 pt-2">
    <header class="d-flex justify-content-between align-items-center">
        <p class="text-danger fs-1 fw-bold mb-0">code w/</p>
        <div class="d-flex">
            <a class="border border-2 border-danger rounded-2 p-2 me-3 text-uppercase fw-semibold text-decoration-none text-light" href='/login'>Войти</a>
            <a class="border border-2 border-danger rounded-2 p-2 text-uppercase fw-semibold text-decoration-none text-light" href='/registration'>Зарегистрироваться</a>
        </div>
    </header>
    <?php include 'app/views/'.$content_view; ?>
    <footer class="position-absolute bottom-0 d-flex pb-2 align-items-center">
        <p class="text-danger fs-3 fw-bold mb-0 text-opacity-75 me-3">code w/</p>
        <p class="text-light-emphasis mb-0">© все права защищены мной так-то совесть имейте</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
