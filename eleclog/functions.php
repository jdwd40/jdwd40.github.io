<?php

    function calcAmountUsed($amount, $yesterday_amount) {
        $amount_used = $yesterday_amount - $amount;
        $average [] = $amount_used;
        $current_average = array_sum($average) / count($average);
        echo "<td>" . $amount_used . "</td>";
        echo "<td>" . $current_average . "</td>";
    
    }

   

?>
