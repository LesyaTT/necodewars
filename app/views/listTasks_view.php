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
        <div class="d-flex flex-column align-items-center">
            <h1 class="text-danger fs-1 fw-light mb-5 mt-5">Выберите задание:</h1>
            <p class="text-light fs-3 fw-semibold"><?php echo($data);?></p>
            <?php foreach ($data as $task){
                ?>
                <div class="d-flex justify-content-between align-items-center border border-1 rounded-2 border-danger w-75 mb-3 p-4">
                    <div class="d-flex flex-column">
                        <p class="fs-3 text-secondary">Задание № <?php echo $task[0] ?> </p>
                        <p class="fs-2 text-danger fw-semibold"> <?php echo $task[1] ?> </p>
                        <p class="text-light fs-4"> <?php echo $task[2] ?> </p>
                        <p class="fs-4 text-danger"> Последний срок сдачи: <b class="text-light"><?php echo $task[7] ?></b> </p>
                    </div>
                    <form action="" method="get" class="d-flex flex-column align-items-center">
                        <a href="/task?taskId=<?php echo $task[0];?>" class="text-light p-3 bg-danger border-0 rounded-2 fw-semibold fs-4 text-decoration-none">Выполнить</a>
                        <div class="d-flex mt-3">
                            <p class="fs-4 text-secondary me-2">
                                Статус выполнения: <p class="fw-semibold fs-4 text-light">
                                <?php
                                $found = false;
                                foreach ($more as $item) {
                                    if ($task[0] == $item[0]) {
                                        $found = true;
                                        break;
                                    }
                                }
                                echo $found ? 'Сдано' : 'Не сдано';
                                ?>
                            </p>
                            </p>
                        </div>
                    </form>
                </div>
                <?php
            } ?>
        </div>
    </div>
</body>
</html>
