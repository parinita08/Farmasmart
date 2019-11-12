
<!doctype html>
<?php require('connection.php');?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
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
      
<div class="container-fluid" align="center" style="padding:100px" >
    <div class="col-sm-3 col-md-4" >
    <form class="form-signin"  action="profile-w.php"  method="post">
  <img class="mb-4" src="parilogojpg-01.jpg" alt="" width="72" height="72">
        
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <div style="padding:10px;">
          <label for="inputEmail" class="sr-only">User Name</label>
  <input type="name" name="name" class="form-control" placeholder="User Name" required autofocus>
        </div>
       
    <div style="padding:10px;">
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>
  </div>
<!--        <select name="role">-->
<!--<option value="f">Farmer</option>-->
<!--<option value="w">Wholesaler</option>-->
<!--<option value="d">Donator</option>-->

<!--</select>-->
  <div style="padding:10px;">    

  <div>
<!--  <button class="btn btn-lg btn-success btn-block" type="submit" name="submit" >Login</button>-->
      <button class="btn btn-lg btn-success btn-block" type="submit" name="submit" href="profile-w.php">Login as Wholesaler</button>
      
    </div>
  <p class="mt-5 mb-3 text-muted">&copy; Farmasmart</p>
      </div> 
</form>
      </div>
      </div>
</body>
</html>
