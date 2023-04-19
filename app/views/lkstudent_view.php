<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="d-flex flex-column mt-5 align-items-center">
        <p class="text-danger fs-2">
            Имя: <span class="text-light"><?php echo $name ?></span>
        </p>
        <p class="text-danger fs-2">
            Фамилия: <span class="text-light"><?php echo $surname ?></span>
        </p>
        <p class="text-danger fs-2">
            Группа: <span class="text-light"><?php echo $group ?></span>
        </p>
    </div>
    <div class="d-flex flex-column align-items-center mt-4">
        <h1 class="text-light fw-semibold mb-3">Выполненные задания: </h1>
        <div class="d-flex w-100 gap-4 flex-wrap">
            <?php foreach ($more as $item) {?>
                <div class="d-flex justify-content-between align-items-center border border-1 rounded-2 border-danger mb-3 p-4" style="min-width: 25%">
                    <div class="d-flex flex-column">
                        <p class="fs-3 text-secondary">Задание № <?php echo $item[0] ?> </p>
                        <p class="fs-2 text-danger fw-semibold"> <?php echo $item[1] ?> </p>
                        <p class="text-light fs-4"> <?php echo $item[2] ?> </p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>
