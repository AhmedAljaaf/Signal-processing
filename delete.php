<?php

/**
 * @author Ahmed J. Aljaaf
 * @copyright 2016
 */
// require_once('config.php');
    $delet_sql = "DELETE FROM `new_signal_test` WHERE `HR`=0 OR `UC`=0";
        if ($mysqli->query($delet_sql) === TRUE) {
                echo "Signal parts with missing of more then 1.5 second have been deleted </br>";
            } else {
                echo "No missing part with more than 1.5 second has been found </br>";
            }

?>     