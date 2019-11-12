<?php require('connection.php');?>

<?php
          echo $_POST['un'];
//    if(isset($_POST['un']) && isset($_POST['phone']) && isset($_POST['add']) &&     isset($_POST['inputpassword'])):
          $name= $_POST['un'];
          $ph=$_POST['phone'];
          $add=$_POST['add'];
          $pwd=$_POST['inputPassword'];

      echo $name;
      echo $ph;
       $sql = "INSERT INTO farmer (name,phno,address) VALUES('$name', '$ph', '$add')";

if ($conn->query($sql) === TRUE) {
    echo "Information Registered";
?>
<div>
<a href="login.php">Login</a>
</div>
<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

+
        ?>