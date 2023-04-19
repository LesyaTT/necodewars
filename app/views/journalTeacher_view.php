<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        input::placeholder { /* Most modern browsers support this now. */
            color: lightgrey;
        }
    </style>
</head>
<body>
<?php var_dump($results); ?>
<div class="d-flex align-items-center mt-5">
    <h1 class="text-danger fz-1 fw-light">Выберите группу:</h1>
    <form action="" method="post" class="d-flex align-items-center">
        <select class="form-select w-100 bg-dark ms-3 border-danger text-light me-3" name="select_group" id="">
            <option value="Выберите..." selected>
                Серунчик лоххх
            </option>
            <?php
            foreach ($data as $item) {
                if ($item[0] !== "") {
                    ?>
                    <option value="<?php echo $item[0]; ?>">
                        <?php echo $item[0]; ?>
                    </option>
                    <?php
                }
            }
            ?>
        </select>
        <input type="submit" value="выбрать"
               class="text-light p-2 text-uppercase bg-danger border-0 rounded-2 fw-semibold fs-6 text-decoration-none"
               name="submit">
    </form>
</div>

<div class="mt-3">
    <div class="d-flex flex-column">
        <?php foreach ($more as $student){ ?>
        <div class="d-flex align-items-center border border-danger rounded-2 p-3">
            <div class="d-flex me-3">
                <p class="text-light me-3 fw-semibold fs-4" style="margin-bottom: 0px;">
                    <?php echo $student [1]; ?>
                </p>
                <p class="text-light fw-semibold fs-4" style="margin-bottom: 0px;">
                    <?php echo $student [2]; ?>
                </p>
            </div>
            <div class="d-flex gap-3">
                <?php foreach ($grades as $grade) {
                    if ($student[0] == $grade[1]) {
                        ?>
                            <form action="" method="post" class="d-flex flex-column border rounded-2 border-danger p-3">
                                <p class="text-light mb-1">
                                    Задание №
                                    <input class="text-light border-0 bg-transparent" style="max-width: 35px" value="<?php echo $grade[2]; ?>" name="task_id" readonly>
                                </p>
                                <input class="text-success border-0 bg-transparent mb-1" style="max-width: 30px" placeholder="<?php echo $grade[6]; ?>" name="grade">
                                <input type="submit" name="submit1" value="Изменить" class="text-light p-1 bg-danger border-0 rounded-2 fs-6 text-decoration-none">
                            </form>
                    <?php }
                }
                } ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
