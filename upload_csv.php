<?php

/**
 * @author Ahmed J. Aljaaf
 * @copyright 2016
 */

require_once('config.php'); // DB connection info

    if (isset($_POST['submit']))
    {
        // Delete old data
        $sql_clear = "TRUNCATE TABLE new_signal_test";
        mysqli_query($mysqli, $sql_clear) or die(mysqli_error());
        
        $fname = $_FILES['sel_file']['name'];
        echo 'Uploading : '.$fname.' <br>';
        $chk_ext = explode(".",$fname);
        
        if (strtolower(end($chk_ext)) == "csv")
        {
            $filename = $_FILES['sel_file']['name'];
            $handle = fopen($filename,"r");
            
            while(($data = fgetcsv($handle, 1000, ",")) != FALSE)
            {
                $sql = "INSERT INTO new_signal_test (Time, HR, UC) VALUES('$data[0]','$data[1]','$data[2]')";
                mysqli_query($mysqli, $sql) or die(mysqli_error());
            }
            fclose($handle);
            echo 'CSV File has been uploaded successfully <br>';
            
        } else {
            echo 'Error : invalid file has been selected <br>';
        }
        
       // $fp = fopen($filename,"r");

        //parse the csv file row by row
        /**
 * while(($row = fgetcsv($fp,"500",",")) != FALSE)
 *         {
 *             //insert csv data into mysql table
 *             $sql = "INSERT INTO new_signal_test (Time, HR, UC) VALUES('" . implode("','",$row) . "')";
 *             if(!mysqli_query($mysqli, $sql))
 *             {
 *                 die('Error : ' . mysqli_error());
 *             }
 *                 
 *         }
 *         echo 'CSV File has been uploaded successfully <br>';
 *         fclose($fp);
 */
    } // end if
    
//$filename = '1001.csv';
// open the csv file

//close the db connection
//mysqli_close($mysqli);            
?>


<h4>Import CSV file and start process</h4>
<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data">
    Select file : <input type="file" name="sel_file" size="20" />
    <input type="submit" name="submit" value="start"/>
</form>