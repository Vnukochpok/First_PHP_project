<?php
    $title = "Регистрация";
    require("blocks/header.php");
?>


<form action="reg_check.php" method="post">
        <input type="text" name="name" placeholder="Введите ваше имя" class="form-control"><br>
        <input type="text" name="surname" placeholder="Введите вашу фамилию" class="form-control"><br>
        <input type="text" name="password" placeholder="Введите пароль" class="form-control"><br>
        <input type="email" name="email" placeholder="Введите ваш email" class="form-control"><br>
        <input type="text" name="about" placeholder="Введите краткую информацию о себе" class="form-control"><br>
        <input type="submit" value="Отправить" class="btn btn-success">
    </form>








<?php

require("blocks/footer.php");
?>