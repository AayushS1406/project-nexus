<?php 
session_start();
$_SESSION['logged_in'] = true;
include('connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="homepage.css">
</head>
</head>
<body>
  <script>
    <?php if ($_SESSION['logged_in']) {
      echo "alert('Login successful');";
      unset($_SESSION['logged_in']); // unset the session variable after displaying the popup
    }
    ?>
  </script>
     <!--NavBar--> 
    <nav class="navbar navbar-expand-lg bg-white shadow py-3 sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      QuickBite
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#about">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#menu">Menu</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#reservation">Reservations</a>
        </li>
        
        <li class="nav-item">
        <a class="nav-link" href="logout.php" style="font-size:20px font-weight:bold; ">Logout</a>
        </li>
      </ul>
      <a href="#" class="btn btn-brand">Order Online</a>
      <!-- <form class="d-flex" role="search">
        <button class="btn btn-outline-success" type="submit">Order Online</button>
      </form> -->
    </div>
  </div>
    </nav>
    <div id="heroSlider" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item text-center bg-cover vh-100 active slide-1" data-bs-interval="10000">
      <div class="container h-100 d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h6 class="text-white">Welcome to QuickBite</h6>
            <h1 class="display-1 fw-bold text-white">Char-grilled and flavor-filled</h1>
            <a href="#" class="btn btn-brand">Reservation</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item text-center bg-cover vh-100 slide-2" data-bs-interval="2000">
    <div class="container h-100 d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h6 class="text-white">Welcome to QuickBite</h6>
            <h1 class="display-1 fw-bold text-white">Fresh & Tasty Food</h1>
            <a href="#" class="btn btn-brand">Reservation</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroSlide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section id="about">
  <div class="container">
    <div class="row gy-4 align-items-center">
      <div class="col-lg-5">
        <img src="img/about_us.jpg" alt="">
      </div>
      <div class="col-lg-5">
        <h1>About Us</h1>
        <div class="divider my-4">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ea placeat, a nulla ab ratione! Vero.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores officia pariatur saepe nihil cumque aliquid dolores, labore delectus temporibus eligendi vel porro!</p>
        <a href="#" class="btn btn-brand">Explore Menu</a>
        </div>
        
      </div>
    </div>
  </div>

</section>
<section id="menu">
  <div class="container">
    <div class="row">
      <div class="col-12 intro-text">
        <h1>Explore Our Menu</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut a nulla illo eaque praesentium? Tempore, nam!</p>
      </div>
    </div>
  </div>
 <div class="container">
    <div class="row gy-4">
      <div class="col-lg-3 col-sm-6">
        <div class="menu-item bg-white shadow-on-hover">
          <img src="img/item_1.jpg" alt="">
          <div class="menu-item-content p-4">
            <div>
            <span>Rated(5.4)</span>

            <span class="stars">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-half-fill"></i>
            </span>
            </div>
            <h5 class="mt-1 mb-2"><a href="#">Spicy Pepperoni Pizza</a></h5>
            <p class="small">
              A classic for a reason. Our Pepperoni Pizza features a perfect blend of savory pepperoni, rich tomato sauce, and melted mozzarella cheese, all baked to golden perfection on our signature crust.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="menu-item bg-white shadow-on-hover">
          <img src="img/item_2.jpg" alt="">
          <div class="menu-item-content p-4">
            <div>
            <span>Rated(5.4)</span>

            <span class="stars">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-half-fill"></i>
            </span>
            </div>
            <h5 class="mt-1 mb-2"><a href="#">Hottie Chicken</a></h5>
            <p class="small">
              A classic for a reason. Our Pepperoni Pizza features a perfect blend of savory pepperoni, rich tomato sauce, and melted mozzarella cheese, all baked to golden perfection on our signature crust.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="menu-item bg-white shadow-on-hover">
          <img src="img/item_3.jpg" alt="">
          <div class="menu-item-content p-4">
            <div>
            <span>Rated(5.4)</span>

            <span class="stars">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-half-fill"></i>
            </span>
            </div>
            <h5 class="mt-1 mb-2"><a href="#">Sexy Stake</a></h5>
            <p class="small">
              A classic for a reason. Our Pepperoni Pizza features a perfect blend of savory pepperoni, rich tomato sauce, and melted mozzarella cheese, all baked to golden perfection on our signature crust.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="menu-item bg-white shadow-on-hover">
          <img src="img/item_4.jpg" alt="">
          <div class="menu-item-content p-4">
            <div>
            <span>Rated(5.4)</span>

            <span class="stars">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-half-fill"></i>
            </span>
            </div>
            <h5 class="mt-1 mb-2"><a href="#">Salty Samosa</a></h5>
            <p class="small">
              A classic for a reason. Our Pepperoni Pizza features a perfect blend of savory pepperoni, rich tomato sauce, and melted mozzarella cheese, all baked to golden perfection on our signature crust.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="menu-item bg-white shadow-on-hover">
          <img src="img/item_5.jpg" alt="">
          <div class="menu-item-content p-4">
            <div>
            <span>Rated(5.4)</span>

            <span class="stars">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-half-fill"></i>
            </span>
            </div>
            <h5 class="mt-1 mb-2"><a href="#">Spicy Steak</a></h5>
            <p class="small">
              A classic for a reason. Our Pepperoni Pizza features a perfect blend of savory pepperoni, rich tomato sauce, and melted mozzarella cheese, all baked to golden perfection on our signature crust.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="menu-item bg-white shadow-on-hover">
          <img src="img/item_6.jpg" alt="">
          <div class="menu-item-content p-4">
            <div>
            <span>Rated(5.4)</span>

            <span class="stars">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-half-fill"></i>
            </span>
            </div>
            <h5 class="mt-1 mb-2"><a href="#">Spicy egg</a></h5>
            <p class="small">
              A classic for a reason. Our Pepperoni Pizza features a perfect blend of savory pepperoni, rich tomato sauce, and melted mozzarella cheese, all baked to golden perfection on our signature crust.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="menu-item bg-white shadow-on-hover">
          <img src="img/item_7.jpg" alt="">
          <div class="menu-item-content p-4">
            <div>
            <span>Rated(5.4)</span>

            <span class="stars">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-half-fill"></i>
            </span>
            </div>
            <h5 class="mt-1 mb-2"><a href="#">Tangy Taco</a></h5>
            <p class="small">
              A classic for a reason. Our Pepperoni Pizza features a perfect blend of savory pepperoni, rich tomato sauce, and melted mozzarella cheese, all baked to golden perfection on our signature crust.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="menu-item bg-white shadow-on-hover">
          <img src="img/item_8.jpg" alt="">
          <div class="menu-item-content p-4">
            <div>
            <span>Rated(5.4)</span>

            <span class="stars">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-half-fill"></i>
            </span>
            </div>
            <h5 class="mt-1 mb-2"><a href="#">Big Mac</a></h5>
            <p class="small">
              A classic for a reason. Our Pepperoni Pizza features a perfect blend of savory pepperoni, rich tomato sauce, and melted mozzarella cheese, all baked to golden perfection on our signature crust.
            </p>
          </div>
        </div>
      </div>
    </div>
 </div>
</section>

<section id="reservation">
  <div class="container">
    <div class="row">
      <div class="col-12 intro-text">
        <h1>Book Your Table</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum earum nobis odio explicabo, numquam distinctio commodi.</p>
      </div>
    </div>
    <form action="#" class="row justify-content-center">
      <div class="col-lg-8">
      <div class="row g-3">
      <div class="form-group col-md-6">
        <input type="text" class="form-control" placeholder="Full Name">
      </div>

      <div class="form-group col-md-6">
        <input type="email" class="form-control" placeholder="Email">
      </div>

      <div class="form-group col-md-6">
        <input type="date" class="form-control" placeholder="Date">
      </div>

      <div class="form-group col-md-6">
        <input type="time" class="form-control" placeholder="Time">
      </div>

      <div class="form-group col-md-6">
        <input type="text" class="form-control" placeholder="Number of people">
      </div>

      <div class="form-group col-md-6">
        <input type="location" class="form-control" placeholder="Location">
      </div>
      <div class="form-group col-md-12">
        <textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
      </div>

      <div class="form-group text-center col-md-12">
        <a href="#" class="btn btn-brand">Send Message</a>
      </div>


      </div>
      </div>
    </form>
  </div>
</section>
<div class="row g-0">
  <div class="col-lg-3 col-sm-6">
    <div class="insta-post">
      <img src="img/insta_pic1.png" alt="">
      <a href="#" class="insta-btn">
      <i class="ri-instagram-fill"></i>
      </a>
    </div>
  </div>

  <div class="col-lg-3 col-sm-6">
    <div class="insta-post">
      <img src="img/insta_pic2.jpg" alt="">
      <a href="#" class="insta-btn">
      <i class="ri-instagram-fill"></i>
      </a>
    </div>
  </div>

  <div class="col-lg-3 col-sm-6">
    <div class="insta-post">
      <img src="img/insta_pic3.png" alt="">
      <a href="#" class="insta-btn">
      <i class="ri-instagram-fill"></i>
      </a>
    </div>
  </div>

  <div class="col-lg-3 col-sm-6">
    <div class="insta-post">
      <img src="img/insta_pic4.jpg" alt="">
      <a href="#" class="insta-btn">
      <i class="ri-instagram-fill"></i>
      </a>
    </div>
  </div>
</div>
<footer class="bg-cover">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
        <a class="navbar-brand mb-4" href="#">
          QuickBite
        </a>
        <p>QuickBite is a food delivery service that connects customers with local restaurants and food
        <div class="social-links">
          <a href="#"><i class="ri-facebook-circle-fill"></i></a>
          <a href="#"><i class="ri-instagram-fill"></i></a>
          <a href="#"><i class="ri-youtube-fill"></i></a>
          <a href="#"><i class="ri-google-play-fill"></i></a>
        </div>
        </div>
        <div class="col-lg-3 ms-auto">
          <h6 class="text-white mb-4">CONTACT</h6>
          <p class="mb-1">P:(03)9283 4726</p>
          <p class="mb-1">E:info@quickbite.com.au</p>
          <p class="mb-0">A:23 Main Street, Suite 200 Anytown, CA 12345</p>
        </div>
        </div>
        <div class="col-lg-3">
          <h6 class="text-white mb-4">OPENING HOURS</h6>
          <p class="mb-1">Monday-Friday : 8:00 - 22:00</p>
          <p class="mb-1">Saturday-Sunday : 8:00 - 22:00</p>
        </div>
      </div>
    </div>

  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-auto">
          <p class="mb-0">
            Copyrights all rights reserved
          </p>
          <p class="mb-0">
            Designed by <a href="#">Aayush</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>