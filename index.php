<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Pay Products</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand text-light" href="index.php">Pay Products</a>
  <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon text-light"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav text-light">
      <a class="nav-item nav-link active text-light" href="index.php">Home<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link text-light" href="#">Customers</a>
      <a class="nav-item nav-link text-light" href="#">Transactions</a>
    </div>
  </div>
</nav>

<div class="container mt-4">
    <h1>All Products</h1>
    <!-- Products -->
    <h3>Phones</h3>
    <div class="row">
        <!-- Item 1 -->

        <div class="col-md-3">
            <div class="card  border border-primary mb-4" >
            <img class="card-img-top" src="./img/phones/iphone-12.jpg" alt="Card image cap" id="thumbnail">
            <div class="card-body">
                <h5 class="card-title">Apple iPhone 12</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./pay.php?product=Apple iPhone 12&price=1200" class="btn btn-primary">Go Pay</a>
            </div>
        </div>
        </div>

            <!-- Item 2 -->
        <div class="col-md-3">
          <div class="card border border-primary mb-4" >
            <img class="card-img-top" src="./img/phones/pro-max.jpg" alt="Card image cap" id="thumbnail">
            <div class="card-body">
                <h5 class="card-title">Apple iPhone 12 Pro</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./pay.php?product=Apple iPhone 12 Pro&price=1500" class="btn btn-primary">Go Pay</a>
            </div>
        </div>
        </div>

               <!-- Item 3 -->
               <div class="col-md-3">
          <div class="card border border-primary mb-4" >
            <img class="card-img-top" src="./img/phones/sam-note-10.jpg" alt="Card image cap" id="thumbnail">
            <div class="card-body">
                <h5 class="card-title">Samsung Note 10</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./pay.php?product=Samsung Note 10&price=800" class="btn btn-primary">Go Pay</a>
            </div>
        </div>
        </div>


               <!-- Item 4 -->
               <div class="col-md-3">
          <div class="card border border-primary mb-4" >
            <img class="card-img-top" src="./img/phones/xiomi-note-9.jpg" alt="Card image cap" id="thumbnail">
            <div class="card-body">
                <h5 class="card-title">Xiaomi Note 9</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./pay.php?product=Xiaomi Note 9&price=600" class="btn btn-primary">Go Pay</a>
            </div>
        </div>
        </div>


    </div>


    <!-- Headphones -->
    <h3>Headphones</h3>
    <div class="row">
        <!-- Item 1 -->

        <div class="col-md-3">
            <div class="card  border border-primary mb-4" >
            <img class="card-img-top" src="./img/headphones/soundcare.jpg" alt="Card image cap" id="thumbnail">
            <div class="card-body">
                <h5 class="card-title">Soundcare Headphones</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./pay.php?product=Soundcare Headphones&price=150" class="btn btn-primary">Go Pay</a>
            </div>
        </div>
        </div>

            <!-- Item 2 -->
        <div class="col-md-3">
          <div class="card border border-primary mb-4" >
            <img class="card-img-top" src="./img/headphones/bose.jpg" alt="Card image cap" id="thumbnail">
            <div class="card-body">
                <h5 class="card-title">Bose Headphones</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./pay.php?product=Bose Headphones&price=250" class="btn btn-primary">Go Pay</a>
            </div>
        </div>
        </div>

               <!-- Item 3 -->
               <div class="col-md-3">
          <div class="card border border-primary mb-4" >
            <img class="card-img-top" src="./img/headphones/marshell.jpg" alt="Card image cap" id="thumbnail">
            <div class="card-body">
                <h5 class="card-title">Marshell Headphones</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./pay.php?product=Marshell Headphones&price=350" class="btn btn-primary">Go Pay</a>
            </div>
        </div>
        </div>


               <!-- Item 4 -->
               <div class="col-md-3">
            <div class="card border border-primary mb-4" >
                <img class="card-img-top" src="./img/headphones/beats.jpg" alt="Card image cap" id="thumbnail">
                <div class="card-body">
                    <h5 class="card-title">Beats Headphones</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="./pay.php?product=Beats Headphones&price=450" class="btn btn-primary">Go Pay</a>
                </div>
            </div>
        </div>
    </div>



    <!-- Watches -->
    <h3>Watches</h3>
    <div class="row">
        <!-- Item 1 -->

        <div class="col-md-3">
            <div class="card  border border-primary mb-4" >
            <img class="card-img-top" src="./img/watches/rolex.jpg" alt="Card image cap" id="thumbnail">
            <div class="card-body">
                <h5 class="card-title">Rolex</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./pay.php?product=Rolex&price=3500" class="btn btn-primary">Go Pay</a>
            </div>
        </div>
        </div>

            <!-- Item 2 -->
        <div class="col-md-3">
          <div class="card border border-primary mb-4" >
            <img class="card-img-top" src="./img/watches/patek.jpg" alt="Card image cap" id="thumbnail">
            <div class="card-body">
                <h5 class="card-title">Patek Philippe</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./pay.php?product=Patek Philippe&price=4500" class="btn btn-primary">Go Pay</a>
            </div>
        </div>
        </div>

               <!-- Item 3 -->
               <div class="col-md-3">
          <div class="card border border-primary mb-4" >
            <img class="card-img-top" src="./img/watches/casio.jpg" alt="Card image cap" id="thumbnail">
            <div class="card-body">
                <h5 class="card-title">Casio Watch</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./pay.php?product=Casio watch&price=500" class="btn btn-primary">Go Pay</a>
            </div>
        </div>
        </div>


               <!-- Item 4 -->
               <div class="col-md-3">
            <div class="card border border-primary mb-4" >
                <img class="card-img-top" src="./img/watches/seiko.jpg" alt="Card image cap" id="thumbnail">
                <div class="card-body">
                    <h5 class="card-title">Seiko Watch</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="./pay.php?product=Seiko Watch&price=400" class="btn btn-primary">Go Pay</a>
                </div>
            </div>
        </div>
    </div>


     <!-- Laptops -->
     <h3>Laptops</h3>
    <div class="row">
        <!-- Item 1 -->

        <div class="col-md-3">
            <div class="card  border border-primary mb-4" >
            <img class="card-img-top" src="./img/laptops/hp.jpg" alt="Card image cap" id="thumbnail">
            <div class="card-body">
                <h5 class="card-title">HP Pavilion</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./pay.php?product=HP Pavilion&price=2000" class="btn btn-primary">Go Pay</a>
            </div>
        </div>
        </div>

            <!-- Item 2 -->
        <div class="col-md-3">
          <div class="card border border-primary mb-4" >
            <img class="card-img-top" src="./img/laptops/apple.jpg" alt="Card image cap" id="thumbnail">
            <div class="card-body">
                <h5 class="card-title">Apple MacBook Pro</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./pay.php?product=Apple MacBook Pro&price=2300" class="btn btn-primary">Go Pay</a>
            </div>
        </div>
        </div>

               <!-- Item 3 -->
               <div class="col-md-3">
          <div class="card border border-primary mb-4" >
            <img class="card-img-top" src="./img/laptops/asus.jpg" alt="Card image cap" id="thumbnail">
            <div class="card-body">
                <h5 class="card-title">Asus Laptop</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./pay.php?product=Asus Laptop&price=1300" class="btn btn-primary">Go Pay</a>
            </div>
        </div>
        </div>


               <!-- Item 4 -->
               <div class="col-md-3">
            <div class="card border border-primary mb-4" >
                <img class="card-img-top" src="./img/laptops/msi.jpg" alt="Card image cap" id="thumbnail">
                <div class="card-body">
                    <h5 class="card-title">MSI Laptop</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="./pay.php?product=MSI Laptop&price=1900" class="btn btn-primary">Go Pay</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Televisions -->
    <h3>Televisions</h3>
    <div class="row">
        <!-- Item 1 -->

        <div class="col-md-3">
            <div class="card  border border-primary mb-4" >
            <img class="card-img-top" src="./img/tv/samsung.jpg" alt="Card image cap" id="thumbnail">
            <div class="card-body">
                <h5 class="card-title">Samsung HDTV</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./pay.php?product=Samsung HDTV&price=1800" class="btn btn-primary">Go Pay</a>
            </div>
        </div>
        </div>

            <!-- Item 2 -->
        <div class="col-md-3">
          <div class="card border border-primary mb-4" >
            <img class="card-img-top" src="./img/tv/sony.jpg"  alt="Card image cap" id="thumbnail">
            <div class="card-body">
                <h5 class="card-title">Sony LED TV</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./pay.php?product=Sony LED TV&price=1200" class="btn btn-primary">Go Pay</a>
            </div>
        </div>
        </div>

               <!-- Item 3 -->
               <div class="col-md-3">
          <div class="card border border-primary mb-4" >
            <img class="card-img-top" src="./img/tv/panasonic.jpg" alt="Card image cap" id="thumbnail">
            <div class="card-body">
                <h5 class="card-title">Panasonic LCD TV</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./pay.php?product=Panasonic LCD TV&price=1100" class="btn btn-primary">Go Pay</a>
            </div>
        </div>
        </div>


               <!-- Item 4 -->
               <div class="col-md-3">
            <div class="card border border-primary mb-4" >
                <img class="card-img-top" src="./img/tv/lg.jpg" alt="Card image cap" id="thumbnail">
                <div class="card-body">
                    <h5 class="card-title">LG LED TV</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="./pay.php?product=LG LED TV&price=1300" class="btn btn-primary">Go Pay</a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="bg-primary footer">
    <p class="text-center text-light">Copyrights &copy; 2021 Pay Products.</p>
    <p class="text-center text-light">Gimna Katugampala Production</p>
</footer>


    

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>