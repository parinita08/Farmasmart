
<!doctype html>
<html lang="en">
<?php require('connection.php');?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
      

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {                                        
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

<img class="mb-4" src="parilogojpg-01.jpg" alt="" width="200" height="200">
    
<?php      
if(isset($_POST['submit'])) {
    
          $name= $_POST['un'];
          $ph=$_POST['phone'];
          $add=$_POST['add'];
          $pwd=$_POST['inputPassword'];
          $r=$_POST['role'];

     // echo $name;
     // echo $r;
    if($r=="f")
    { 
        $sql = "INSERT INTO farmer (name,phno,address) VALUES('$name', '$ph', '$add')";
       
        if (($conn->query($sql)) == TRUE) 
           
       {   echo "Info Registered";
           
           $qry="SELECT fid FROM `farmer` WHERE name='$name'";
        
           
              $res=mysqli_query($conn,$qry) or die(mysqli_error($conn));
                
                if(mysqli_num_rows($res)>0)
                {
                  while(  $retrive=mysqli_fetch_array($res))
                  {
                    $row=$retrive;
                    $fid=$row[0];
                     //echo $wid;     
                        if (($conn->query($qry)) == TRUE) 

                        {     echo "$fid";

                            $sql2 = "INSERT INTO login (id, password ,role) VALUES('$fid','$pwd','$r')";

                             if (($conn->query($sql2)) == TRUE) {

                                   echo "Info into Login";


                                } else {
                                    echo "Error: " . $sql2. "<br>" . $conn->error;
                                } 
                      }
                }
           
                   
           }
    
        }
    }
    if($r=="d")
    { $sql = "INSERT INTO donator (name,phno,address) VALUES('$name', '$ph', '$add')";
      
//     
        if (($conn->query($sql)) == TRUE) 
           
       {   echo "Info Registered";
           
           $qry="SELECT did FROM `donator` WHERE name='$name'";
        
           
              $res=mysqli_query($conn,$qry) or die(mysqli_error($conn));
                
                if(mysqli_num_rows($res)>0)
                {
                  while(  $retrive=mysqli_fetch_array($res))
                  {
                    $row=$retrive;
                    $did=$row[0];
                     //echo $wid;     
                        if (($conn->query($qry)) == TRUE) 

                        {     echo "$did";

                            $sql2 = "INSERT INTO login (id, password ,role) VALUES('$did','$pwd','$r')";

                             if (($conn->query($sql2)) == TRUE) {

                                   echo "Info into Login";


                                } else {
                                    echo "Error: " . $sql2. "<br>" . $conn->error;
                                } 
                      }
                }
           
                   
           }
    
        }
    }
    if($r=="w")
    { $sql = "INSERT INTO wholesaler (name,phno,address) VALUES('$name', '$ph', '$add')";
            
     
        if (($conn->query($sql)) == TRUE) 
           
       {   echo "Info Registered";
           
           $qry="SELECT wid FROM `wholesaler` WHERE name='$name'";
        
           
              $res=mysqli_query($conn,$qry) or die(mysqli_error($conn));
                
                if(mysqli_num_rows($res)>0)
                {
                  while(  $retrive=mysqli_fetch_array($res))
                  {
                    $row=$retrive;
                    $wid=$row[0];
                     //echo $wid;     
                        if (($conn->query($qry)) == TRUE) 

                        {     echo "$wid";

                            $sql2 = "INSERT INTO login (id, password ,role) VALUES('$wid','$pwd','$r')";

                             if (($conn->query($sql2)) == TRUE) {

                                   echo "Info into Login";


                                } else {
                                    echo "Error: " . $sql2. "<br>" . $conn->error;
                                } 
                      }
                }
           
                   
           }
    
        }
    }
        
    
    
    
}

  else { ?>
    
 <form  class="form-container1" action="reg.php" method="post" > 
  <div class="container-fluid" align="center" >
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <div class="col-sm-3 col-md-4" >
    
  <label >User Name</label>
  <input type="un" name="un" class="form-control" placeholder="Please Enter Your Name" required>

  <label >Phone Number</label>
  <input type="phone" name="phone" class="form-control" placeholder="Please enter your Number" required>

  <label >Address</label>
  <input type="add" name="add" class="form-control" placeholder="Please enter your Address" required>
  
<!--
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
-->
  <label for="inputPassword" >Password</label>
  <input type="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>

  <div style="padding:10px;">
<select name="role">
<option value="f">Farmer</option>
<option value="w">Wholesaler</option>
<option value="d">Donator</option>

</select>
      </div>
      <div>
  <button class="btn btn-lg btn-success btn-block" type="submit" name="submit" >Register</button>
    </div>
</div>
    </div>
 </form> 
    <?php  }?>
      
      <div>
    <a href="login-f.php">Login as Farmer</a>

    </div>
    <div>
    <a href="login-w.php">Login as Wholesaler</a>

    </div>
    <div>
    <a href="login-d.php">Login as Donator</a>
        
    </div>
      
  <p class="mt-5 mb-3 text-muted">&copy; farmasmart</p>
      
      
      <?php
//       if(isset($_POST['un']) && isset($_POST['phone']) && isset($_POST['add']) &&     isset($_POST['inputpassword'])){ 
        
        //echo $_POST['un'];
//    
//       }else{} 
      
      
      
?>
      
</body>
</html>
