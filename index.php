<?php

        if(!isset($_POST['convert']) || preg_replace('/[0-1]/', '', $_POST['number'])){
            echo "enter a valid number";
        }else {
            $bin = $_POST['number'];


            $size = strlen($bin);

            $a = 0;
            while ($a < $size) {
                $arrayBin[$a] = substr($bin, $a, 1);
                $a++;
            }

            $i = 0;
            while ($i < $size) {
                $arrayPot[$i] = 2 ** $i;
                $i++;
            }

            $v = 0;
            $r = $size - 1;
            $result = [];
            while ($v < $size) {
                $result[$v] = $arrayPot[$v] * $arrayBin[$r];
                $v++;
                $r--;
            }

            echo array_sum($result);
        }    
        
   

    

?>




