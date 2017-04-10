<?php

/**
 * @author Ahmed J. Aljaaf
 * @copyright 2016
 */

require_once('config.php'); // DB connection info
    $select = $mysqli->query("SELECT `Time` FROM `new_signal_test`");
    $rowcount=mysqli_num_rows($select);
        if ($rowcount>0) {
            while ($row = mysqli_fetch_row($select)) { 
                $time_array[] = $row[0]; // return an array of the time column values
            }  // End while
            
            // sort time intervals values
            $new_time = 0; // start time interval
                for ($i=0; $i<$rowcount; $i++){
                    $current_value = $time_array[$i];
                        $update = $mysqli->query("UPDATE `new_signal_test` SET `Time`='$new_time' WHERE `Time`='$current_value'");
                        $new_time = $new_time + 0.25; // increasing time interval by 0.25 each iteration.
                } // End for
                $affected_rows = mysqli_affected_rows($mysqli);
                if ($affected_rows>0){
                    echo ". . . . Time interval has been sorted . . . .</br>";
                } else {
                    echo 'Time interval has already been sorted<br>';
                }
    } else echo 'Sorting time intervals cannot be established due to empty table<br>';
    

?>