<?php

$servername="localhost:8080";
$username = "root";
$password = "";
$dbname="farmasmart";
    
$conn = mysqli_connect($servername, $username, $password, $dbname)
    or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
//$selected = mysql_select_db("db2",$dbhandle)
//    or die("Could not selected db2");
//echo "Coneted to db2<br>", "<br>";
//
//$result = mysql_query("SELECT ID, Name, Mark1, Mark2, Mark3 FROM cnt2");
//
//while($row = mysql_fetch_array($result)){
//    echo "<b>Name: </b>".$row{'Name'}." <b>ID: </b>".$row{'ID'}." <b>First Mark: </b>".$row{'Mark1'}." <b>Second Mark: </b>".$row{'Mark2'}." <b>Third Mark: </b>".$row{'Mark3'}."<br>";
//}
//mysql_close($dbhandle);
?>
