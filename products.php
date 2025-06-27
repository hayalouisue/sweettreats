<?php
session_start();

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Welcome Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <link href="css/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

  <style>
    html, body {
      height: 100%;
    }

    .wrapper {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .content {
      flex: 1;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <header class="navigation fixed-top">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navigation">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="homepage.php">Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="products.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Log-out</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- page title -->
  <section class="page-title-alt bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-white font-tertiary">What we offer</h1>
      </div>
    </div>
  </div>
  <!-- background shapes -->
  <img src="images/illustrations/leaf-bg-top.png" alt="illustrations" class="bg-shape-1 w-100">
  <img src="images/illustrations/dots-group-sm.png" alt="illustrations" class="bg-shape-2">
  <img src="images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-3">
  <img src="images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
  <img src="images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-5">
  <img src="images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-6">
</section>
<!-- /page title -->

<!-- about -->
<section class="section">
  <div class="container">
    <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-5.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="#">Gummies</a></h4>
              <p class="cars-text">$4.00<br>DESCRIPTIONNNN</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
      
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-5.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="#">Chocolate Bar</a></h4>
              <p class="cars-text">$4.00<br>DESCRIPTIONNNN</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
      
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-5.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="#">Lollipop</a></h4>
              <p class="cars-text">$4.00<br>DESCRIPTIONNNN</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
    
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-5.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="#">Marshmallow</a></h4>
              <p class="cars-text">$4.00<br>DESCRIPTIONNNN</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
      
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-5.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="#">Gummy Teeth</a></h4>
              <p class="cars-text">$4.00<br>DESCRIPTIONNNN</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
       
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-5.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="#">Gummy Corn</a></h4>
              <p class="cars-text">$4.00<br>DESCRIPTIONNNN</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-5.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="#">Gummy Worms</a></h4>
              <p class="cars-text">$4.00<br>DESCRIPTIONNNN</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-5.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="#">Gummy Flowers</a></h4>
              <p class="cars-text">$4.00<br>DESCRIPTIONNNN</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-5.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="#">Gummy Hearts</a></h4>
              <p class="cars-text">$4.00<br>DESCRIPTIONNNN</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-5.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="#">Choco</a></h4>
              <p class="cars-text">$4.00<br>DESCRIPTIONNNN</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-5.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="#">Gummy Cola</a></h4>
              <p class="cars-text">$4.00<br>DESCRIPTIONNNN</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-5.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="#">Gummy Cola</a></h4>
              <p class="cars-text">$4.00<br>DESCRIPTIONNNN</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-5.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="#">Gummy Cola</a></h4>
              <p class="cars-text">$4.00<br>DESCRIPTIONNNN</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-5.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="#">Gummy Cola</a></h4>
              <p class="cars-text">$4.00<br>DESCRIPTIONNNN</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-5.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="#">Gummy Cola</a></h4>
              <p class="cars-text">$4.00<br>DESCRIPTIONNNN</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-5.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="#">Gummy Cola</a></h4>
              <p class="cars-text">$4.00<br>DESCRIPTIONNNN</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-5.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="#">Gummy Cola</a></h4>
              <p class="cars-text">$4.00<br>DESCRIPTIONNNN</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-5.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="#">Gummy Cola</a></h4>
              <p class="cars-text">$4.00<br>DESCRIPTIONNNN</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-5.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="#">Gummy Cola</a></h4>
              <p class="cars-text">$4.00<br>DESCRIPTIONNNN</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-5.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="#">Gummy Cola</a></h4>
              <p class="cars-text">$4.00<br>DESCRIPTIONNNN</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
    </div>
  </div>
</section>
<!-- /blog -->


    <!-- footer -->
<footer class="bg-dark footer-section">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5 class="text-light">Email</h5>
          <p class="text-white paragraph-lg font-secondary">sweet.treats@gmail.com</p>
        </div>
        <div class="col-md-4">
          <h5 class="text-light">Phone</h5>
          <p class="text-white paragraph-lg font-secondary">0977-135-2302</p>
        </div>
        <div class="col-md-4">
          <h5 class="text-light">Address</h5>
          <p class="text-white paragraph-lg font-secondary">10 Santa Teresita, Caloocan City</p>
        </div>
      </div>
    </div>
  </div>
</footer>
    <!-- /footer -->
  </div>

  <script src="plugins/jQuery/jquery.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
