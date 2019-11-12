<!doctype html>
<?php require('connection.php');?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Donator Profile</title>

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
         $qry="SELECT * FROM donator d, login l WHERE (d.did=l.id) and (d.name='$name' and l.password='$pwd')";
       
      $res=mysqli_query($conn,$qry) or die(mysqli_error($conn));
        if(mysqli_num_rows($res)>0)
        {
          while(  $retrive=mysqli_fetch_array($res))
          {
            $row=$retrive;
            $did=$row[0];                     
           ?>
    <header>
        
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">

            
            
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm" style=" background-color:greenyellow;">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">

        <strong>Donator's Page</strong>
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
      <h1 class="jumbotron-heading"><?php echo $row[1];?></h1>
      <p class="lead text-muted">Hey! These are the farmers who need a helping hand.</p>
      
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container" align="center">

      <div class="row">
        <div class="col-md-4" >
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><img class="mb-4" src="don2.PNG" alt="" width="200" height="200">
            </svg>
            <div class="card-body">
              <p class="card-text">Yellavva Dodmani, a farmer in Satti village.
                  “I have lost all the money I spent on seeds and fertilizers for raising crops on my five-acre farm due to the floods. The precious top soil is also lost. Now, I have to spend a lot of money again on labour and compost too to prepare land for the next sowing season”</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Donate</button>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
          
        
           <div class="col-md-4" >
           <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><img class="mb-4" src="don1.jpg" alt="" width="200" height="200">
            </svg>
            <div class="card-body">
              <p class="card-text">Subbayya, a farmer in Peravaram village. "I'am not having enough money to support the family or to give back the loans. The crops did not make any profit as the wholesaler bought the crop for less price than proposed."</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Donate</button>
                  
                </div>  
              </div>
            </div>
          </div>
        </div>
          
          
           <div class="col-md-4" >
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><img class="mb-4" src="don3.jpg" alt="" width="200" height="200">
</svg>
            <div class="card-body">
              <p class="card-text">Baikunth Kumar,   a farmer in Mhow village.
                  "Due to lack of rains in our village, the seeds sown prior to monsoons have not germinated, due to which the yeild has not been productive."</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Donate</button>
                  
                </div>   
              </div>
            </div>
          </div>
        </div>
          
      </div>  
        <p class="mt-5 mb-3 text-muted">&copy; Farmasmart</p>
    </div>
      
  </div>

</main>
            
                
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
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>