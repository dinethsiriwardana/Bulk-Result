<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>

<?php


//$json_string2 = '{"param":"Examination","value":"G.C.E. (O/L) EXAMINATION","arr":["first","sec"]}';


/*

//Sample for json

$json_string0 = '{"examination":"G.C.E. (O/L) EXAMINATION (After Rescrutiny)","year":"2019","name":"SIRIWARDHANA ARACHCHILAGE KAVEESHA DILMIN SIRIWARDHANA","indexNo":"93629435",
    "nic":null,"districtRank":null,"islandRank":null,"marks":null,"status":null,"zScore":null,"stream":null,"subjectResults":[
            {"subjectName":"BUDDHISM","subjectResult":"A"},
            {"subjectName":"SINHALA LANGUAGE & LITT.","subjectResult":"A"},
            {"subjectName":"ENGLISH LANGUAGE","subjectResult":"A"},
            {"subjectName":"MATHEMATICS","subjectResult":"A"},
            {"subjectName":"HISTORY","subjectResult":"A"},
            {"subjectName":"SCIENCE","subjectResult":"A"},
            {"subjectName":"DANCING (ORIENTAL)","subjectResult":"A"},
            {"subjectName":"SECOND LANGUAGE (TAMIL)","subjectResult":"A"},
            {"subjectName":"INFOR. & COMM. TECHNOLOGY","subjectResult":"A"}]}';
 
$json_string0 = str_replace('[','""} ,',$json_string0);
$json_string0 = ("[". $json_string0) ;
$json_string0 = substr_replace($json_string0 ,"",-1);

//$someArray = json_decode($json_string0, true);      //from code

*/

$json_string1 = file_get_contents('https://result.doenets.lk/result/service/OlResult?index=63066866&nic=');   //web srapping 




$json_string1 = str_replace('[','""} ,',$json_string1);
$json_string1 = ("[". $json_string1) ;
$json_string1 = substr_replace($json_string1 ,"",-1);	
$json_string1 = str_replace('],"studentInfo":""} ,',',',$json_string1);		// ready for create array



// Convert JSON string to Array


$someArray = json_decode($json_string1, true);      // from web


/*


echo "<br>";
echo "<br>";
echo "from php code <br>";
echo $json_string0 ;
echo "<br>";
echo "from web <br>";
echo $json_string1 ;
echo "<br>";
echo "<br>";
*/

/* 

//test print

 print_r($someArray);        // Dump all data of the Array
 echo "<br>";
 print_r($someArray1);        // Dump all data of the Array

echo "<br>";
echo "<br>";
echo $someArray[2]["subjectName"]; // Access Array data

echo "<br>";

echo $someArray[1]["subjectResult"];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

*/

echo "<h2>Result Sheet</h2>";
echo "<h3>Name: - ".$someArray[0]["name"]."</h3>" ;
echo "<h3>Index No: - ".$someArray[0]["indexNo"]."</h3>";
echo "<table>";
  echo "<tr> ";
    echo "<th>".$someArray[1]["subjectName"]."</th> ";
    echo "<th>".$someArray[1]["subjectResult"]."</th> ";
  echo "</tr> ";
  echo "<tr> ";
    echo "<th>".$someArray[2]["subjectName"]."</th> ";
    echo "<th>".$someArray[2]["subjectResult"]."</th> ";
  echo "</tr> ";
    echo "<tr> ";
    echo "<th>".$someArray[3]["subjectName"]."</th> ";
    echo "<th>".$someArray[3]["subjectResult"]."</th> ";
  echo "</tr> ";
    echo "<tr> ";
    echo "<th>".$someArray[4]["subjectName"]."</th> ";
    echo "<th>".$someArray[4]["subjectResult"]."</th> ";
  echo "</tr> ";
    echo "<tr> ";
    echo "<th>".$someArray[5]["subjectName"]."</th> ";
    echo "<th>".$someArray[5]["subjectResult"]."</th> ";
  echo "</tr> ";
    echo "<tr> ";
    echo "<th>".$someArray[6]["subjectName"]."</th> ";
    echo "<th>".$someArray[6]["subjectResult"]."</th> ";
  echo "</tr> ";
    echo "<tr> ";
    echo "<th>".$someArray[7]["subjectName"]."</th> ";
    echo "<th>".$someArray[7]["subjectResult"]."</th> ";
  echo "</tr> ";
    echo "<tr> ";
    echo "<th>".$someArray[8]["subjectName"]."</th> ";
    echo "<th>".$someArray[8]["subjectResult"]."</th> ";
  echo "</tr> ";
    echo "<tr> ";
    echo "<th>".$someArray[9]["subjectName"]."</th> ";
    echo "<th>".$someArray[9]["subjectResult"]."</th> ";
  echo "</tr> ";
  
  


  
  
echo "</table>";






?>