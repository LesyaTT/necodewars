<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <div class="border border-1 border-danger mt-5 rounded-3 pb-5">
        <h1 class="text-light fw-light text-center mb-5 mt-5">Зарегистрируйте новый аккаунт</h1>
        <div class="d-flex justify-content-center gap-3">
            <button class="btn-student w-25 text-light p-2 bg-danger border-0 rounded-2 fw-semibold fs-5">
                Студент
            </button>
            <button class="btn-teacher w-25 text-light p-2 bg-danger border-0 rounded-2 fw-semibold fs-5">
                Преподаватель
            </button>
        </div>
        <div class="align-items-center d-none flex-column mt-5 student">
            <form action="" method="post" class="d-flex flex-column w-50">
                <input class="w-100 text-light mb-3 border-danger border-bottom border-top-0 border-start-0 border-end-0 p-2 bg-transparent rounded-2" type="text" placeholder = 'Имя' name = 'name' required>
                <input class="w-100 text-light mb-3 border-danger border-bottom border-top-0 border-start-0 border-end-0 p-2 bg-transparent rounded-2" type="text" name="surname" id="" placeholder="Фамилия" required>
                <input class="w-100 text-light mb-3 border-danger border-bottom border-top-0 border-start-0 border-end-0 p-2 bg-transparent rounded-2" type="text" name="group" placeholder="Группа" required>
                <input class="w-100 text-light mb-3 border-danger border-bottom border-top-0 border-start-0 border-end-0 p-2 bg-transparent rounded-2" type="text" placeholder = 'Логин' name="login" required>
                <input class="w-100 text-light mb-3 border-danger border-bottom border-top-0 border-start-0 border-end-0 p-2 bg-transparent rounded-2" type="password" placeholder = 'Пароль' name="password" required>
                <input class="w-100 text-light mb-3 border-danger border-bottom border-top-0 border-start-0 border-end-0 p-2 bg-transparent rounded-2" type="password" placeholder = 'Повторите пароль' name="repeat_password" required>
                <input class="w-100 text-light p-2 bg-danger border-0 rounded-2 fw-semibold fs-5" type="submit" name="submit" value="Зарегистрироваться">
                <?php
                    echo $data;
                ?>
            </form>
        </div>
        <div class="align-items-center d-none flex-column mt-5 teacher">
            <form action="" method="post" class="d-flex flex-column w-50">
                <input class="w-100 text-light mb-3 border-danger border-bottom border-top-0 border-start-0 border-end-0 p-2 bg-transparent rounded-2" type="text" placeholder = 'Имя' name = 'name'>
                <input class="w-100 text-light mb-3 border-danger border-bottom border-top-0 border-start-0 border-end-0 p-2 bg-transparent rounded-2" type="text" name="surname" id="" placeholder="Фамилия">
                <input class="w-100 text-light mb-3 border-danger border-bottom border-top-0 border-start-0 border-end-0 p-2 bg-transparent rounded-2" type="text" placeholder = 'Логин' name="login">
                <input class="w-100 text-light mb-3 border-danger border-bottom border-top-0 border-start-0 border-end-0 p-2 bg-transparent rounded-2" type="password" placeholder = 'Пароль' name="password">
                <input class="w-100 text-light mb-3 border-danger border-bottom border-top-0 border-start-0 border-end-0 p-2 bg-transparent rounded-2" type="password" placeholder = 'Повторите пароль' name="repeat_password">
                <input type="number" class="w-100 text-light mb-3 border-danger border-bottom border-top-0 border-start-0 border-end-0 p-2 bg-transparent rounded-2" placeholder = 'Код преподавателя' name="teacher_code">
                <input class="w-100 text-light p-2 bg-danger border-0 rounded-2 fw-semibold fs-5" type="submit" name="submit" value="Зарегистрироваться">
                <?php
                    echo $data;
                ?>
            </form>
        </div>
    </div>
    <script defer>
        let teacherForm = document.querySelector('.teacher');
        let studentForm = document.querySelector('.student');

        let teacherBtn = document.querySelector('.btn-teacher');
        let studentBtn = document.querySelector('.btn-student');

        studentBtn.addEventListener('click', function (){
            studentForm.classList.remove('d-none');
            studentForm.classList.add('d-flex');
            teacherForm.classList.add('d-none');
        })

        teacherBtn.addEventListener('click', function (){
            teacherForm.classList.remove('d-none');
            teacherForm.classList.add('d-flex');
            studentForm.classList.add('d-none');
        })
    </script>
</body>
</html>
