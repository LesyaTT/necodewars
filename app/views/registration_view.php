<?php
?>

<form action="" class="registration" method="post">
    <input type="text" placeholder = 'Имя' name = 'name'>
    <input type="text" name="surname" id="" placeholder="Фамилия">
    <input type="text" placeholder = 'Логин' name="login">
    <input type="password" placeholder = 'Пароль' name="password">
    <input type="password" placeholder = 'Повторите пароль' name="repeat_password">
    <input type="number" name="admin">
    <button>Зарегистрироваться</button>
    <?php
        echo $data;
    ?>
</form>
