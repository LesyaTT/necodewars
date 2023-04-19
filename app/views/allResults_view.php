<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <main>
        <div class="d-flex flex-column mt-4">
            <?php foreach ($data as $item){
                ?>
                <div class="d-flex justify-content-between align-items-center border border-1 rounded-2 border-danger w-100 mb-3 p-4">
                    <div class="w-50">
                        <p class="fs-3 text-secondary fw-bold">Задание №<?php echo $item[2];?></p>
                        <p class="fs-4 text-light fw-semibold mt-4">Код студента: <br></p>
                        <div class="text-light border border-danger rounded-2 p-3">
                            <?php echo($item[3]);?>
                        </div>
                    </div>
                    <div class="">
                        <p class="text-light fs-4">
                            Выполнил: <?php echo $item[0] . ' ' . $item[1];?>
                        </p>
                        <p class="text-light">
                            <?php echo $when;?>
                        </p>
                        <p class="text-danger fs-4 fw-semibold">
                            Оценка по результатам автотестов: <?php echo $item[4];?>
                        </p>
                    </div>
                    <a href="/taskResult?task_id=<?php echo $item[2];?>&student_id=<?php echo $item[5];?>" class="text-light p-3 bg-danger border-0 rounded-2 fw-semibold fs-5 text-decoration-none">Оценить</a>
                </div>
                <?php
            }
            ?>
        </div>
    </main>
</body>
</html>
