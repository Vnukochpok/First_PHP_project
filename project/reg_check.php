<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_db";

$conn = new mysqli($servername, $username, $password, $dbname);

$name = $_POST["name"];
$surname = $_POST["surname"];
$password = $_POST["password"];
$email = $_POST["email"];
$about = $_POST["about"];

//добавление пользователя
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO users (name, surname, password, email, about)
        VALUES('$name','$surname','$hashed_password', '$email','$about')";

if(strlen($name) < 2){
    echo "Введите настоящее имя";
    echo '<a href="registration.php">Зарегистрироваться на сайте</a>';
}
else if(strlen($surname) < 2){
    echo "Введите настоящую фамилию";
    echo '<a href="registration.php">Зарегистрироваться на сайте</a>';
}
else if(strlen($password) < 6){
    echo "Введите пароль, состоящий более чем из 6 символов";
    echo '<a href="registration.php">Зарегистрироваться на сайте</a>';
}
else if(strlen($about) < 10){
    echo "Расскажите, пожалуйста, хоть что-нибудь о себе";
    echo '<a href="registration.php">Зарегистрироваться на сайте</a>';
}
if($conn->query($sql)===TRUE){
    echo "Пользователь успешно добавлен в базу данных<br>";
    echo '<a href="index.php">Главная страница</a>';
}

?>