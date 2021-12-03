<?php
    function getMissingNumber($array){
        $length = count($array) - 1;
        $total = ($length + 1) * ($length + 2) / 2;
        for ( $i = 0; $i < $length; $i++){
            $total -= $array[$i];
        }
        return $total;
    }

    $array  = [1,2,3,4,5,6,7,9,10];
    $missing = getMissingNumber($array);

    echo "The missing number is: ".$missing;
?>
