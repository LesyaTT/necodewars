<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="" style="min-height: calc(100vh - 170px);">
        <div class="d-flex flex-column mt-5 align-items-center">
            <p class="text-danger fs-2">
                Имя: <span class="text-light"><?php echo $name ?></span>
            </p>
            <p class="text-danger fs-2">
                Фамилия: <span class="text-light"><?php echo $surname ?></span>
            </p>
        </div>
        <div class="text-light fw-light text-center mt-4">
            <a href="/allResults" class="w-50 text-light p-3 bg-none border border-2 rounded-2 fs-5 text-decoration-none fw-semibold border-danger me-3">Посмотреть все выполненные задания</a>
            <a href="/allStudents" class="w-50 text-light p-3 bg-none border border-2 rounded-2 fs-5 text-decoration-none fw-semibold border-danger">Посмотреть список студентов</a>
        </div>
        <div class="align-items-center d-flex flex-column mt-5">
            <h1 class="text-light fw-light text-center mb-5">Создать задание</h1>
            <form action="" method="post" class="d-flex flex-column w-50">
                <div class="d-flex align-items-center gap-5">
                    <div class="">
                        <input class="w-100 text-light mb-3 border-danger border-bottom border-top-0 border-start-0 border-end-0 p-2 bg-transparent rounded-2" type="text" name="title" placeholder="Название">
                        <input class="w-100 text-light mb-3 border-danger border-bottom border-top-0 border-start-0 border-end-0 p-2 bg-transparent rounded-2" type="text" name = 'desc' placeholder="Описание">
                        <label for="video" class="text-light fw-semibold">
                            Видеоописание:
                        </label>
                        <input class="w-100 text-light mb-3 border-danger border-bottom border-top-0 border-start-0 border-end-0 p-2 bg-transparent rounded-2" type="file" name = 'video'>
                        <label for="date" class="text-light fw-semibold">
                            Последний срок сдачи:
                        </label>
                        <input type="date" name="date" class="w-100 text-light mb-3 border-danger border-bottom border-top-0 border-start-0 border-end-0 p-2 bg-transparent rounded-2">
                    </div>
                    <div class="">
                        <input class="w-100 text-light mb-3 border-danger border-bottom border-top-0 border-start-0 border-end-0 p-2 bg-transparent rounded-2" type="text" name="input" placeholder="Ожидаемый ввод">
                        <input class="w-100 text-light mb-3 border-danger border-bottom border-top-0 border-start-0 border-end-0 p-2 bg-transparent rounded-2" type="text" name="output" placeholder="Ожидаемый вывод">
                    </div>
                </div>
                <h2 class="text-light fw-light text-center mt-4 mb-4">Выберите группу или группы:</h2>
                <div class="d-flex mb-5 flex-column justify-content-between align-items-center">
                    <form action="" method="post" class="d-flex">
                        <div class="d-flex justify-content-between">
                            <?php
                            foreach ($more as $item) {
                                if(($item['0'] !== '')&&($item['0'] !== 'NULL')){ ?>
                                    <input type="checkbox" name="groups[]" value="<?php echo $item['0']; ?>" class="btn-check" id="btncheck<?php echo $item['0']; ?>" autocomplete="off">
                                    <label class="btn btn-outline-danger me-3 w-100" for="btncheck<?php echo $item['0']; ?>"><?php echo $item['0']?></label>
                                <?php }}?>
                        </div>
                        <input type="submit" name="submit" value="Создать" class="w-50 text-light p-2 bg-danger border-0 rounded-2 fw-semibold fs-5 mt-4">
                    </form>
                    <p><?php var_dump($grades);?></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

