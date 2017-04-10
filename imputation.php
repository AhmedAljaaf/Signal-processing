<?php

/**
 * @author Ahmed J. Aljaaf
 * @copyright 2016
 */
    if ($i<$rowcount-9){
            // make array key ready
            $a=$i-1; // befor i
            $b=$i+1; // 2nd key
            $c=$i+2; //3dr key
            $d=$i+3; //4th key
            $e=$i+4; //5th key
            $f=$i+5; //6th key
            $g=$i+6; //7th key
            $h=$i+7; //7th key
            $m=$i+8; //7th key
            $n=$i+9; //7th key
            
            // Imputing one missing value
            if ( $array_three[$i] == 0 && $array_three[$b] != 0 && $array_three[$a] != 0)
            {
                $befor_zeros = $array_three[$a];
                $after_zeros = $array_three[$b];
                $mean = ($befor_zeros+$after_zeros)/2;
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$array_one[$i]'");
                echo 'Record Number '.$i.' is imputed with '.$mean.'</br>';
            } else
            // Imputing two missing values
            if ( $array_three[$i] == 0 && $array_three[$b] == 0 && $array_three[$c] != 0 && $array_three[$a] != 0)
            {
                $befor_zeros = $array_three[$a];
                $after_zeros = $array_three[$c];
                $mean = ($befor_zeros+$after_zeros)/2;
                $next_value = $array_one[$b];
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$array_one[$i]'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$next_value'");
                echo 'Record Number '.$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
            } else
            // Imputing three missing values
            if ( $array_three[$i] == 0 && $array_three[$b] == 0 && $array_three[$c] == 0 && $array_three[$d] != 0 && $array_three[$a] != 0)
            {
                $befor_zeros = $array_three[$a];
                $after_zeros = $array_three[$d];
                $mean = ($befor_zeros+$after_zeros)/2;
                $next_value = $array_one[$b];
                $third_value = $array_one[$c];
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$array_one[$i]'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$next_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$third_value'");
                echo 'Record Number '.$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
            } else
             // Imputing four missing values
            if ( $array_three[$i] == 0 && $array_three[$b] == 0 && $array_three[$c] == 0 && $array_three[$d] == 0 && $array_three[$e] != 0 && $array_three[$a] != 0)
            {
                $befor_zeros = $array_three[$a];
                $after_zeros = $array_three[$e];
                $mean = ($befor_zeros+$after_zeros)/2;
                $next_value = $array_one[$b];
                $third_value = $array_one[$c];
                $fourth_value = $array_one[$d];
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$array_one[$i]'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$next_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$third_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$fourth_value'");
                echo 'Record Number '.$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
            } else
            // Imputing five missing values
            if ( $array_three[$i] == 0 && $array_three[$b] == 0 && $array_three[$c] == 0 && $array_three[$d] == 0 && $array_three[$e] == 0 && $array_three[$f] != 0 && $array_three[$a] != 0)
            {
                $befor_zeros = $array_three[$a];
                $after_zeros = $array_three[$f];
                $mean = ($befor_zeros+$after_zeros)/2;
                $next_value = $array_one[$b];
                $third_value = $array_one[$c];
                $fourth_value = $array_one[$d];
                $fifth_value = $array_one[$e];
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$array_one[$i]'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$next_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$third_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$fourth_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$fifth_value'");
                echo 'Record Number '.$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
            } else
            // Imputing six missing values
            if ( $array_three[$i] == 0 && $array_three[$b] == 0 && $array_three[$c] == 0 && $array_three[$d] == 0 && $array_three[$e] == 0 && $array_three[$f] == 0 && $array_three[$g] != 0 && $array_three[$a] != 0)
            {
                $befor_zeros = $array_three[$a];
                $after_zeros = $array_three[$g];
                $mean = ($befor_zeros+$after_zeros)/2;
                $next_value = $array_one[$b];
                $third_value = $array_one[$c];
                $fourth_value = $array_one[$d];
                $fifth_value = $array_one[$e];
                $sixth_value = $array_one[$f];
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$array_one[$i]'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$next_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$third_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$fourth_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$fifth_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$sixth_value'");
                echo 'Record Number '.$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
            } else
           // Imputing seven missing values
            if ( $array_three[$i] == 0 && $array_three[$b] == 0 && $array_three[$c] == 0 && $array_three[$d] == 0 && $array_three[$e] == 0 && $array_three[$f] == 0 && $array_three[$g] == 0 && $array_three[$h] != 0 && $array_three[$a] != 0)
            {
                $befor_zeros = $array_three[$a];
                $after_zeros = $array_three[$h];
                $mean = ($befor_zeros+$after_zeros)/2;
                $next_value = $array_one[$b];
                $third_value = $array_one[$c];
                $fourth_value = $array_one[$d];
                $fifth_value = $array_one[$e];
                $sixth_value = $array_one[$f];
                $seventh_value = $array_one[$g];
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$array_one[$i]'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$next_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$third_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$fourth_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$fifth_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$sixth_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$seventh_value'");
                echo 'Record Number '.$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
            }
            // Imputing eight missing values
            if ( $array_three[$i] == 0 && $array_three[$b] == 0 && $array_three[$c] == 0 && $array_three[$d] == 0 && $array_three[$e] == 0 && $array_three[$f] == 0 && $array_three[$g] == 0 && $array_three[$h] == 0 && $array_three[$m] != 0 && $array_three[$a] != 0)
            {
                $befor_zeros = $array_three[$a];
                $after_zeros = $array_three[$m];
                $mean = ($befor_zeros+$after_zeros)/2;
                $next_value = $array_one[$b];
                $third_value = $array_one[$c];
                $fourth_value = $array_one[$d];
                $fifth_value = $array_one[$e];
                $sixth_value = $array_one[$f];
                $seventh_value = $array_one[$g];
                $eight_value = $array_one[$h];
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$array_one[$i]'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$next_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$third_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$fourth_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$fifth_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$sixth_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$seventh_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$eight_value'");
                echo 'Record Number '.$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
            }
            // Imputing nine missing values
            if ( $array_three[$i] == 0 && $array_three[$b] == 0 && $array_three[$c] == 0 && $array_three[$d] == 0 && $array_three[$e] == 0 && $array_three[$f] == 0 && $array_three[$g] == 0 && $array_three[$h] == 0 && $array_three[$m] == 0 && $array_three[$n] != 0 && $array_three[$a] != 0)
            {
                $befor_zeros = $array_three[$a];
                $after_zeros = $array_three[$n];
                $mean = ($befor_zeros+$after_zeros)/2;
                $next_value = $array_one[$b];
                $third_value = $array_one[$c];
                $fourth_value = $array_one[$d];
                $fifth_value = $array_one[$e];
                $sixth_value = $array_one[$f];
                $seventh_value = $array_one[$g];
                $eight_value = $array_one[$h];
                $ninth_value = $array_one[$m];
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$array_one[$i]'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$next_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$third_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$fourth_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$fifth_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$sixth_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$seventh_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$eight_value'");
                $update = $mysqli->query("UPDATE `new_signal_test` SET `UC`='$mean' WHERE `Time`='$ninth_value'");
                echo 'Record Number '.$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
                echo 'Record Number '.++$i.' is imputed with '.$mean.'</br>';
            }
    } 
?>