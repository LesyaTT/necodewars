
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php var_dump($data);?>
    <main>
        <div class="" style="min-height: calc(100vh - 170px);">
            <div class="d-flex justify-content-between mt-5">
                <div class="text-light w-50 me-5">
                    <div class="h-50">
                        <h1 class="fs-2 text-secondary">Задание №<?php echo $task_id; ?></h1>
                        <h2 class="fs-1 text-danger"> Название: <?php echo $title; ?></h2>
                        <p class="fs-3"> Описание: <?php echo $description; ?></p>
                        <hr>
                        <p class="fs-3"> <?php echo $autotest_result; ?></p>
                        <p class="fs-3"> <?php echo $plagearism_result; ?></p>
                        <hr>
                        <p class="fs-3"> Оценка: <?php echo $grade; ?></p>
                        <div class="d-flex align-items-center">
                            <p class="fs-3 me-2" style="margin: 0"> Новая оценка:
                            <form action="" method="post">
                                <input type="text" class="bg-transparent border-1 border-danger rounded-2 text-white me-1" name="newGrade">
                                <input type="submit" name="submit" value="Изменить" class="text-light p-1 bg-danger border-0 rounded-2 fs-6">
                            </form>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-50">
                    <form action="" method="post" class="d-flex flex-column align-items-center h-50" style="min-height: 650px">
                        <textarea type="text" name="code" class="w-100 h-100 bg-transparent mb-3 text-light p-3 rounded-2"><?php echo '<?php' . PHP_EOL ?><?php echo $data['code'];?></textarea>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>