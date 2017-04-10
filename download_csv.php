<?php

/**
 * @author Ahmed J. Aljaaf
 * @copyright 2016
 */

require_once('config.php'); // DB connection info

    $select = $mysqli->query("SELECT * FROM `new_signal_test`");
    if (!$select) die('Error: can not fetch records');
    
    // in case table comes with header
    // $rowcount = mysqli_num_rows($select);
    //$headers = array();
       // for ($i = 0; $i < $rowcount; $i++) {
          //  $headers[] = mysqli_fetch_field_direct($select , $i);
            
       // }
        $fp = fopen('php://output', 'w');
        if ($fp && $select) {
            header('Content-Type: text/csv');
            header('Content-Disposition: attachment; filename="export.csv"');
            header('Pragma: no-cache');
            header('Expires: 0');
           // fputcsv($fp, $headers);
                while ($row = $select->fetch_array(MYSQLI_NUM)) {
                    fputcsv($fp, array_values($row));
                }
                die;
        }
    
?>
