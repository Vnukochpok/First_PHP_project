<?php
    $title = "Вход в личный кабинет";
    require("blocks/header.php");
?>


<form action="login_check.php" method="post">
    <input type="email" name="email" placeholder="Введите ваш email" class="form-control"><br>
        <input type="text" name="password" placeholder="Введите пароль" class="form-control"><br>
        <input type="submit" value="Отправить" class="btn btn-success">
    </form>



<?php

require("blocks/footer.php");
?>