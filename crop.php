<?php require('connection.php');

$type=$_POST['type'];
$qty=$_POST['qty'];
$amt=$_POST['amount'];
$id=$_POST['fid'];

echo $id;
echo $type;
echo $amt;
echo $qty;

$sql = "INSERT INTO `crop`(`fid`, `cropname`, `unit_price`, `instockqty`) VALUES ('$id','$type','$amt','$qty')";

if (($conn->query($sql)) == TRUE) {
          ?> <div><p>Information Registered</p> </div> <?php
}

?>