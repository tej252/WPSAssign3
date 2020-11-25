<?php

    function IsLuhn($array){
        $sum = 0;
        $double = false;
        foreach ($array as $char) {
            $val = (int) $char;
            if($double){
                $val *= 2;
            }
            $sum += intdiv($val, 10);
            $sum += $val%10;
            $double = !$double;
        }
        if($sum % 10 == 0){
            return true;
        } else {
            return false;
        }
    }

    if(isset($_POST['number'])){
        $value = $_POST['number'];
        $array = array_reverse(str_split($value));
        if(IsLuhn($array)){
            echo "It is a valid SIM number<br>";
        } else {
            echo "It is not a valid SIM number<br>";
        }
    } else {
        echo "No number passed as parameter";
    }
?>
