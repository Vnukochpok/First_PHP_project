<?php
    $title = "Калькулятор";
    require("blocks/header.php");
?>
    <h1>Калькулятор</h1>
    <form action="check_calc.php" method="post">
        <input type="number1" name="first" placeholder="Введите первое число" class="form-control">
        <select id="mySelect" name="mySelect">
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="umnozh">*</option>
            <option value="delen">/</option>
        </select>
        <input type="number2" name="second" placeholder="Введите второе число" class="form-control">
        
        <input type="submit" value="Отправить" class="btn btn-success">
    </form>
</div>
    
<?php
require("blocks/footer.php");
?>