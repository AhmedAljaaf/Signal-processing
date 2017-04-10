<?php

/**
 * @author Ahmed J. Aljaaf
 * @copyright 2016
 */

require_once('config.php'); // DB connection info
if (isset($_POST['process']))
    {
$select = $mysqli->query("SELECT * FROM `new_signal_test`");
$rowcount=mysqli_num_rows($select); // Total number of rows
if ($rowcount>0) {
        while ($row = mysqli_fetch_row($select)) { 
                $array_one[] = $row[0]; //  return an array of Time column 
                $array_two[] = $row[1]; // return an array of the HR column values
                $array_three[] = $row[2]; // return an array of the UC column values
        }  // End while
        
        echo ". . . . UC Imputation starts . . . .</br>";
        for ($i=0; $i<$rowcount; $i++) {  // go through the array and select the first and last date.
              include ('imputation.php');   // impute missing rate less than 1.5 second in UC.
            } // End for
        echo ". . . . UC Imputation finished . . . .</br>";
        
        echo ". . . . HR Imputation starts . . . .</br>";
        for ($i=0; $i<$rowcount; $i++) {  // go through the array and select the first and last date.
             include ('HR_imputation.php'); // impute missing rate less than 1.5 secondin HR.
            } // End for
        echo ". . . . HR Imputation finished . . . .</br>";
        

         include ('delete.php');
         include ('sort_time.php');
        
        echo ". . . . End processing . . . .</br>";
        
} // End if => $rowcount>0   
else {
        // In case of empty table
        echo 'table is empty';
        }
} // if submitted
//$mysqli->close();
?>

<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
    <input type="checkbox" name="checkbox" value="check"  />&nbsp;Start process my signal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" name="process" value="process" onclick="if(!this.form.checkbox.checked){alert('You must tick checkbox first.');return false}"  />
</form>