<!doctype html>
<?php require('connection.php');?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Wholesaler Profile</title>

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

      
      //For Wholesaler Info
           $name=$_POST['name'];
            $pwd=$_POST['inputPassword'];
       
      $qry="SELECT * FROM wholesaler w, login l WHERE (w.wid=l.id) and (w.name='$name' and l.password='$pwd')";
       
      $res=mysqli_query($conn,$qry) or die(mysqli_error($conn));
        if(mysqli_num_rows($res)>0)
        {
          while(  $retrive=mysqli_fetch_array($res))
          {
            $row=$retrive;
            $fid=$row[0];
             //echo $wid;     
              
              
               //For crop on display
              
                
                      
                 
           ?>
      
        
           
    <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
<!--
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
-->
        </div>
        
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
<!--        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>-->
        <strong>Wholesaler's Cart</strong>
      </a>
      <div >
<a href="home.html" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Logout</a>
          </div>
    <form class="form-inline my-2 my-lg-0" action="srch.php" method="post">
      <input class="form-control mr-sm-2" name="srch" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
  </div>
</header>

<main role="main">

  <section class="jumbotron text-center" style=" background-color:greenyellow;">
    <div class="container">
      <h1 class="jumbotron-heading"><?php echo $row[1];?></h1>
      <p class="lead text-muted">View the Crop on sale and buy what you need</p>
      
    </div>
  </section>
    
    <?php
      
            $crop="SELECT * FROM crop c , farmer f WHERE c.fid=f.fid";
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
                <p> Farmer's Name:<?php echo $row1[5]; ?></p>
                <p> Address:<?php echo $row1[7]; ?></p>
                <p> Phone No.:<?php echo $row1[6]; ?></p>
              <div class="d-flex justify-content-between align-items-center">
               
                <form  action="buy.php" method="post">

                            <div style="padding:10px;">
                              <label >No.of units</label>
                              <input type="name" name="units" class="form-control" placeholder="Enter No.of Units" required autofocus>
                            </div>
                        
                      <div style="padding:10px;">     
                      <button class="btn btn-lg btn-success btn-block" type="submit">Buy</button>

                        </div> 

                </form>
               </div>
              </div>
            </div>
          </div>
        </div>     
      </div>
    </div>
  

      <?php } }
              
               }
                }else {
              
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
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
