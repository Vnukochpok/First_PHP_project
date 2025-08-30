<?php
    session_start();

    $title = "Личный кабинет";
    require("blocks/header.php");

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project_db";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $email = $_SESSION["email"];
?>


<?php

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $sql_res=mysqli_query($conn, $sql);


    if (mysqli_num_rows($sql_res) == 1){
        $user_data = mysqli_fetch_assoc($sql_res);
        
        echo "<br><br>Ваше имя: " . $user_data['name'];
        echo "<br><br>Ваша фамилия: " . $user_data['surname'];
        echo "<br><br>Ваша электронная почта: " . $user_data['email'];
        echo "<br><br>Информация о вас: " . $user_data['about'];
        echo "<br><br>Дата регистрации: " . $user_data['reg_date'];

        echo "<br><br><a href='exit.php'>Выйти из личного кабинета</a>";

    }


require("blocks/footer.php");
?>