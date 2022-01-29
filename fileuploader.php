<?php 
include "preloader.php";

include "php/log.php";
$csv = array();

$datetime = date("YmdHis");

$textfile = fopen("filedata/".$_COOKIE['email']."/".$datetime."", "w");
   

log_data($datetime,$myfile);
new_data_file($datetime,$allfile);

// check there are no errors
if($_FILES['csv']['error'] == 0){
    $name = $_FILES['csv']['name'];
    // $ext = strtolower(end(explode('.', $_FILES['csv']['name'])));
    $type = $_FILES['csv']['type'];
    $tmpName = $_FILES['csv']['tmp_name'];

    // check the file is a csv
    
        if(($handle = fopen($tmpName, 'r')) !== FALSE) {
            // necessary if a large csv file
            set_time_limit(0);

            $row = 0;

            while(($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
                // number of fields in the csv
                $col_count = count($data);

                // get the values from the csv
                $csv[$row]['col1'] = $data[0];
                fwrite($textfile, $data[0]);


                // inc the row
                $row++;
            }
            fclose($handle);
            setcookie('file_name', $datetime, 0 , "/");
            // include "preloader.php";
            echo "<script>
            setTimeout(myFunction, 5000)
            function myFunction() {
                var preloader = document.getElementById('ploader')
                console.log(preloader)
                preloader.className = 'bloaderhidden'
                window.location.href = './maininterface.php';
              }
            </script>";



        }
    
} 


?>
