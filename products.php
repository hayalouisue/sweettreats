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
        <h1 class="text-white font-tertiary">What We Offer</h1>
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
            <img class="rounded card-img-top" src="pics/pic1.png" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="1gummies.html">Gummies</a></h4>
              <p class="cars-text">₱25.00<br>A chewy, fruity treat that’s fun to eat and perfect for sharing.</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
      
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/pic2.png" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="2chocolatebar.html">Chocolate Bar</a></h4>
              <p class="cars-text">₱40.00<br>Smooth and rich chocolate that melts in your mouth with every bite.</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
      
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/pic3.png" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="3lollipop.html">Lollipop</a></h4>
              <p class="cars-text">₱10.00<br>Colorful and sweet hard candy on a stick that lasts and lasts.</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
    
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/pic4.png" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="4marshmallow.html">Marshmallow</a></h4>
              <p class="cars-text">₱20.00<br>Soft, fluffy treats that are perfect for snacking or toasting.</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
      
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/pic5.png" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="5gummyteeth.html">Gummy Teeth</a></h4>
              <p class="cars-text">₱30.00<br>Playful, chewy candy shaped like little teeth with a fruity punch.

</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
       
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/pic6.png" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="6gummycorn.html">Gummy Corn</a></h4>
              <p class="cars-text">₱30.00<br>Sweet and chewy candy shaped like corn kernels, fun and tasty.</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/pic7.png" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="7gummyworms.html">Gummy Worms</a></h4>
              <p class="cars-text">₱25.00<br>Wiggly, colorful worms bursting with tangy-sweet flavor.</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/pic8.png" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="8gummyflowers.html">Gummy Flowers</a></h4>
              <p class="cars-text">₱30.00<br>Pretty floral-shaped gummies with a garden of fruity flavors.</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/pic9.png" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="9gummyhearts.html">Gummy Hearts</a></h4>
              <p class="cars-text">₱30.00<br>Heart-shaped treats filled with love and sweet, fruity taste.</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/pic10.png" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="10choco.html">Choco</a></h4>
              <p class="cars-text">₱35.00<br>A bite-sized chocolate delight that satisfies your sweet tooth.</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/pic11.png" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="11gummycola.html">Gummy Cola</a></h4>
              <p class="cars-text">₱25.00<br>Fizzy, cola-flavored gummies that taste just like your favorite drink.</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/pic12.png" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="12chocoal.html">Chocolate-Covered Almonds</a></h4>
              <p class="cars-text">₱50.00<br>Crunchy almonds coated in rich, velvety chocolate.</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/pic13.png" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="13rockcandy.html">Rock Candy</a></h4>
              <p class="cars-text">₱15.00<br>Crystal-like sugar sticks that shimmer and crunch with sweetness.</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/pic14.png" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="14candyrings.html">Candy Rings</a></h4>
              <p class="cars-text">₱10.00<br>Wearable candy that’s sweet, fruity, and fun to eat.</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/pic15.png" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="15jellybeans.html">Jelly Beans</a></h4>
              <p class="cars-text">₱25.00<br>Tiny bean-shaped candies with a surprise of flavors in every bite.</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/pic16.png" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="16chocopret.html">Chocolate-Covered Pretzels</a></h4>
              <p class="cars-text">₱45.00<br>A perfect mix of salty crunch and smooth chocolate coating.</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/pic17.png" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="17sourbelts.html">Sour Belts</a></h4>
              <p class="cars-text">₱30.00<br>Tangy, colorful candy strips packed with a punch of sour flavor.</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/pic18.png" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="18toffeebites.html">Toffee Bites</a></h4>
              <p class="cars-text">₱35.00<br>Buttery, crunchy toffee candy that’s hard to resist.</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/pic19.png" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="19candybuttons.html">Candy Buttons</a></h4>
              <p class="cars-text">₱15.00<br>Cute little sugar dots on paper strips, full of colorful charm.</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/pic20.png" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="20bubblegum.html">Bubblegum Balls</a></h4>
              <p class="cars-text">₱5.00<br>Round, chewy gum balls bursting with classic bubble-blowing fun.</p>
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
