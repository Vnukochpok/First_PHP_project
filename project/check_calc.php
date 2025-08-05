<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Калькулятор</title>
</head>
<body>
    <div class="container mt-2">
    <a href="calculator.php">Вернуться в калькулятор</a><br><br>
    
<?php

    //print_r($_POST);
    $first_num = $_POST["first"];
    $second_num = $_POST["second"];
    $choice = $_POST["mySelect"];
    
    
    $skip = true;
    while( $skip == true) {
        if(is_numeric($first_num) == false || is_numeric($second_num) == false ) {
        echo "Введите число для корректной работы!";
        $skip=false;
        exit();
        }

        if ($choice == "plus") {
            echo "Ответ = " . $first_num + $second_num;
            $skip=false;
            exit();
        }
    
        if ($choice == "minus") {
            echo "Ответ = " . $first_num - $second_num;
            $skip=false;
            exit();
        }

        if ($choice == "umnozh") {
            echo "Ответ = " . $first_num * $second_num;
            $skip=false;
            exit();
        }
    
        if ($choice == "delen") {
            echo "Ответ = " . $first_num / $second_num;
            $skip=false;
            exit();
        }
    }
?>

</div>
</body>
</html>