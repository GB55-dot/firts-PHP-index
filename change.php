<?php
    // Constant
    const MY_AGE = 35;
    // MY_AGE = 39; - ERROR
    echo MY_AGE . "<br>";

    $number = 10; //integer
    echo $number . "<br>";

    $num = 0.67; //float
    $word = "Variable"; //string
    $bool = true; //boolean
    echo $word . ": " . $num . " and " . $number;
    $number2 = "5";
    echo " Сумма: " . ($number + intval($number2)) . "<br>";
?>