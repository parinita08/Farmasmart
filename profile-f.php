<!doctype html>
<?php require('connection.php');?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Farmer's Shop</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      


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
    <link href="album.css" rel="stylesheet">
  </head>
  <body>
   
      <?php 
           $name=$_POST['name'];
            $pwd=$_POST['inputPassword'];
         $qry="SELECT * FROM farmer f, login l WHERE (f.fid=l.id) and (f.name='$name' and l.password='$pwd')";
       
      $res=mysqli_query($conn,$qry) or die(mysqli_error($conn));
        if(mysqli_num_rows($res)>0)
        {
          while(  $retrive=mysqli_fetch_array($res))
          {
            $row=$retrive;
            $fid=$row[0];                     
           ?>
     <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
     
      </div>
    </div>
  </div>
         
         
  <div class="navbar navbar-dark bg-dark shadow-sm" style=" background-color:greenyellow;">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
<!--        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>-->
          
        <strong>Farmer's Shop</strong>
      </a>
      <div >
<a href="home.html" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Logout</a>
          </div>
    </div>
  </div>
</header>
      
      <main role="main">
    <section class="jumbotron text-center" style=" background-color:greenyellow;">
    <div class="container">
        
      <h1 class="jumbotron-heading"><?php echo $row[1]; ?></h1>
      <p class="lead text-muted">Hey Farmer! Your FID is <?php echo $row[0];?> . You can look up your stock here and add more as well!</p>
      
    </div>
  </section>

       <?php
      
            $crop="SELECT * FROM `crop` WHERE fid='$fid'";
                $res1=mysqli_query($conn,$crop) or die(mysqli_error($conn));
                if(mysqli_num_rows($res1)>0)
                {
                  while(  $row1=mysqli_fetch_array($res1))
                  {  
            
    ?>
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">FID: <?php echo $row1[0]; ?></text></svg>
            <div class="card-body">
              <p class="card-text">
                <p> Type:<?php echo $row1[1]; ?></p>
                <p> Qunatity:<?php echo $row1[3]; ?></p>
                <p> Unit Price:<?php echo $row1[2]; ?></p>
                
              <div class="d-flex justify-content-between align-items-center">
               
               
    </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
          </div>
            <?php }} ?>
     
    <div class="col-md-4">
        <form  action="crop.php" method="post">
              <h1 class="h3 mb-3 font-weight-normal">Add Crop</h1>
                    <div style="padding:10px;">
                      <label >Type</label>
              <input type="name" name="type" class="form-control" placeholder="Describe the type of Crop you want to sell" required autofocus>
                    </div>
            <div style="padding:10px;">
              <label >Quantity</label>
              <input type="qty" name="qty" class="form-control" placeholder="The quantity of the crop" required>
              </div>
                <div style="padding:10px;">
              <label  >Amount</label>
              <input type="amount" name="amount" class="form-control" placeholder="Unit Price" required>
              </div>
              <div style="padding:10px;">
              <label  >ID</label>
              <input type="amount" name="fid" class="form-control" placeholder="ID Displayed near your user name" required>
              </div>
              <div style="padding:10px;">     
              <button class="btn btn-lg btn-success btn-block" type="submit">Sell</button>
              
      </div> 
<!--            <input type="hidden" name="id" value="$fid" />-->
        </form>
    </div>
          
          
        <p class="mt-5 mb-3 text-muted">&copy; Farmasmart</p>
   
    <?php } }else {
              
              echo "Enter Correct data or role";
                ?> 
      <div>
        <a href="login-f.php">Login as Farmer</a>

        </div>
        <div>
        <a href="login-w.php">Login as Wholesaler</a>

        </div>
        <div>
        <a href="login-d.php">Login as Donator</a>

        </div>
         <?php }?>
      

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    </body>
</html>
