<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>

    <main class="d-flex flex-column align-items-center">
        <h1 class="text-light mt-5 mb-4">
            Все существующие в системе студенты:
        </h1>
        <div class="d-flex gap-4">
            <?php
                foreach ($data as $item) { ?>
                    <div class="d-flex flex-column justify-content-evenly border border-2 border-danger rounded-2 align-items-center p-5">
                        <p class="text-danger fw-semibold">Имя: <span class="text-light fw-light"><?php echo $item[1]; ?></span></p>
                        <p class="text-danger fw-semibold">Фамилия: <span class="text-light fw-light"><?php echo $item[2]; ?></span></p>
                        <p class="text-danger fw-semibold">Группа: <span class="text-light fw-light"><?php echo $item[3]; ?></span></p>
                    </div>
                <?php }
            ?>
        </div>
    </main>

</body>
</html>
