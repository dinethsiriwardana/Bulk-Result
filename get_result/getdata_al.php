<?php


$json_string1 = file_get_contents('https://result.doenets.lk/result/service/AlResult?index=2801579&nic=');   //web srapping 



//*************************************** 
//********************Format srap file as an Arra */
//*************************************** 

$json_string1 = str_replace('[','""} ,',$json_string1);
$json_string1 = ("[". $json_string1) ;
$json_string1 = substr_replace($json_string1 ,"",-1);	
$json_string1 = str_replace('],"studentInfo":""} ,',',',$json_string1);	

//**************************************** */

$someArray = json_decode($json_string1, true);   //Convert Srap data to Arra   

$name = $someArray[0]["name"];
$index_no = $someArray[0]["indexNo"];
$nic = $someArray[0]["nic"];
$drank = $someArray[0]["districtRank"];
$drank = str_replace(' (NEW)','',$drank);
$irank = $someArray[0]["islandRank"];
$irank = str_replace(' (NEW)','',$irank);
$zscore = $someArray[0]["zScore"];
$stream = $someArray[0]["stream"];
$subjectName_1 = $someArray[1]["subjectName"];
$subjectResult_1 = $someArray[1]["subjectResult"];
$subjectName_2 = $someArray[2]["subjectName"];
$subjectResult_2 = $someArray[2]["subjectResult"];
$subjectName_3 = $someArray[3]["subjectName"];
$subjectResult_3 = $someArray[3]["subjectResult"];
$cgt = $someArray[4]["subjectName"];
$subjectResult__cgt = $someArray[4]["subjectResult"];
$ge = $someArray[5]["subjectName"];
$subjectResult_ge = $someArray[5]["subjectResult"];


$all_array = [$name ,$index_no ,$nic ,$drank ,$irank ,$zscore ,$stream ,$subjectName_1 ,$subjectResult_1 ,$subjectName_2 ,$subjectResult_2 ,$subjectName_3 ,$subjectResult_3  ,$subjectResult__cgt ,$subjectResult_ge];

// echo "<h2>Result Sheet</h2>";
// echo "<h6>Name: - ".$someArray[0]["name"]."</h3>" ;
// echo "<h6>Index No: - ".$someArray[0]["indexNo"]."</h3>";
// echo "<h6>NIC No: - ".$someArray[0]["nic"]."</h3>";
// echo "<h6>D Rank: - ".$someArray[0]["districtRank"]."</h3>";
// echo "<h6>I Rank: - ".$someArray[0]["islandRank"]."</h3>";
// echo "<h6>Z Score: - ".$someArray[0]["zScore"]."</h3>";
// echo "<h6>Stream: - ".$someArray[0]["stream"]."</h3>";
// echo "<table>";
//   echo "<tr> ";
//     echo "<th>".$someArray[1]["subjectName"]."</th> ";
//     echo "<th>".$someArray[1]["subjectResult"]."</th> ";
//   echo "</tr> ";
//   echo "<tr> ";
//     echo "<th>".$someArray[2]["subjectName"]."</th> ";
//     echo "<th>".$someArray[2]["subjectResult"]."</th> ";
//   echo "</tr> ";
//     echo "<tr> ";
//     echo "<th>".$someArray[3]["subjectName"]."</th> ";
//     echo "<th>".$someArray[3]["subjectResult"]."</th> ";
//   echo "</tr> ";
//     echo "<tr> ";
//     echo "<th>".$someArray[4]["subjectName"]."</th> ";
//     echo "<th>".$someArray[4]["subjectResult"]."</th> ";
//   echo "</tr> ";
//   echo "</tr> ";
//     echo "<tr> ";
//     echo "<th>".$someArray[5]["subjectName"]."</th> ";
//     echo "<th>".$someArray[5]["subjectResult"]."</th> ";
//   echo "</tr> ";
// echo "</table>";


?>