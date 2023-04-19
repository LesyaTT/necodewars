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
    <div class="" style="min-height: calc(100vh - 170px);">
        <div class="d-flex justify-content-between mt-5">
            <div class="text-light w-50 me-5">
                <div class="h-50">
                    <h1 class="fs-2 text-secondary">Задание №<?php echo $id; ?></h1>
                    <h2 class="fs-1 text-danger"> <?php echo $title; ?></h2>
                    <p class="fs-3"> <?php echo $description; ?></p>
                </div>
                <div class="h-75 border-2 border-danger border rounded-2 p-3 text-light fw-semibold fs-4">
                    <p class="text-center text-light mb-4 fs-3">Автотесты:</p>
                    <p class="text-center text-danger fs-4 mb-4">Используйте $название_переменной = fgets(STDIN); для создания переменных
                        <br> (Или ожидаемый ввод из примера ниже)</p>
                    <p class="text-light fw-light fw-semibold">
                        Ожидаемый ввод:
                        <br/>
                        <?php
                        $arr = explode(',', $input);
                        foreach ($arr as $value){
                        ?>  <p class="fw-light mb-0"> <?php echo 'Число: ' . $value . '<br/>'; ?> </p> <?php
                    }
                    ?>
                    </p>
                    <p class="text-light fw-light fw-semibold">
                        Ожидаемый вывод:
                        <br/>
                        <?php
                        $arr = explode(',', $output);
                        foreach ($arr as $value){
                        ?>  <p class="fw-light mb-0"> <?php echo 'Число: ' . $value . '<br/>'; ?> </p> <?php
                }
                ?>
                    </p>
                </div>
            </div>
            <div class="w-50">
                <form action="" method="post" class="d-flex flex-column align-items-center h-50" style="min-height: 650px">
                    <textarea type="text" name="code" class="w-100 h-100 bg-transparent mb-3 text-light p-3 rounded-2"><?php echo '<?php' . PHP_EOL ?></textarea>
                    <input type="submit" class="w-100 text-light p-2 bg-danger border-0 rounded-2 fw-semibold fs-5" value="Проверить" name="submit">
                </form>
                <div class="border border-2 border-danger rounded-2 w-100 h-50 mt-3 d-flex flex-column align-items-center p-2">
                    <div class="border-bottom h-50 mb-3 border-1 border-danger w-100 text-center">
                        <p class="fw-light text-light fs-4 fw-semibold">Результат: </p>
                        <p class="fw-light text-light fs-5"> <?php echo($data);?> </p>
                    </div>
                    <div class="h-50 w-100 text-center">
                        <p class="fw-light text-light fs-4 fw-semibold">Оценка:</p>
                        <p class="fw-light text-light fs-5"> <?php echo($results);?> </p>
                        <p class="fw-light text-light fs-5"> <?php echo($grades);?> </p>
                        <p class="fw-light text-light fs-5 fw-bold"> <?php echo($gradeScore);?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>