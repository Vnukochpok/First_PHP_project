<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$email = $_POST["email"];
$password = $_POST["password"];

//поиск пользователя в БД
$login_qu="SELECT * FROM users WHERE email='$email'";
$login_qu_res=mysqli_query($conn, $login_qu);


if (/*подсчет строк в ответе*/mysqli_num_rows($login_qu_res) == 1) {
    $user = mysqli_fetch_assoc($login_qu_res);
    if (/*проверка пароля по ХЭШУ*/password_verify($password, $user['password'])) {
      //echo "успешный вход в лк";
      session_start();
      $_SESSION['email'] = $user['email'];
      header("Location: lk.php");
    } else {
      echo "Неверный пароль.";
    }
  } else {
    echo "Пользователь не найден.";
  }
?>