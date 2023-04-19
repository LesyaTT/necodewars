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
        <input type="submit" value="выбрать" class="text-light p-2 text-uppercase bg-danger border-0 rounded-2 fw-semibold fs-6 text-decoration-none" name="submit">
    </form>
</div>

<div class="mt-3">
    <table class="table table-dark">
        <thead>
        <tr>
            <th colspan="2">
                Студент
            </th>
            <th colspan="30">
                Март
            </th>
        </tr>
        <tr>
            <td>
                Имя
            </td>
            <td>
                Фамилия
            </td>
            <?php
            for ($i = 1; $i <= 30; $i++) {
                ?>
                <td><?php echo $i; ?></td> <?php
            }
            ?>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php
        foreach ($more as $student) {
            if ($student[6] == 0) {
                ?>
                <tr>
                    <td><?php echo $student[1]; ?></td>
                    <td><?php echo $student[2]; ?></td>
                    <?php
                    foreach ($grades as $item) {
                        if ($student[0] == $item[1]) {
                            ?>
                            <td>
                                <?php echo $item[6]; ?>
                            </td>
                        <?php }
                    } ?>
                </tr> <?php }
        } ?>
        </tbody>
    </table>
</div>
</body>
</html>
