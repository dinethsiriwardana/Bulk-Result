<?php 

$myfile = fopen("filedata/".$_COOKIE['email']."/log.txt", "a") or die("Unable to open file!");
$allfile = fopen("filedata/".$_COOKIE['email']."/allfile.txt", "a") or die("Unable to open file!");

function log_data($filename,$myfile){

    $dateandtime = "[".date("Y-m-d")." - ".date("H:i:s")."] - ";
    $details = "Create New File as - ". $filename;
    $data = $dateandtime.$details."\n";
    fwrite($myfile, $data);
}
function new_data_file($data,$myfile){
    $data = $data."\n";
    fwrite($myfile, $data);
}





?>