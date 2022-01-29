
<!DOCTYPE html>
<html>
<body>
<?php
include 'getdata_al.php';
$data = [
	['Name', 'Index No', 'NIC','D Rank','I Rank','Z Score','Stream','Subject Name','Subject Result','Subject Name','Subject Result','Subject Name','Subject Result',"COMMON GENERAL TEST","GENERAL ENGLISH"],
];
print_r($data);
echo "<br>";

array_push($data, $all_array);
print_r($data);

$filename = 'stock.csv';

// open csv file for writing
$f = fopen($filename, 'a');

if ($f === false) {
	die('Error opening the file ' . $filename);
}

// write each row at a time to a file
foreach ($data as $row) {
	fputcsv($f, $row);
}

// close the file
fclose($f);
?>

</body>
</html>
