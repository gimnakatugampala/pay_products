<?php

    if(!empty($_GET['product']) && !empty($_GET['price'])){
        $GET = filter_var_array($_GET,FILTER_SANITIZE_STRING);

        $product = $GET['product'];
        $price = $GET['price'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Pay Now | <?php echo $product;?></title>
</head>
<body>

<div class="container">
<h2 class="my-4 text-center"><?php echo $product;?> [$<?php echo $price;?>]</h2>
<form action="./charge.php" method="post" id="payment-form">
  <div class="form-row">

  <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
  <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
  <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address">

    
    <div id="card-element" class="form-control mb-3">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display Element errors. -->
    <div id="card-errors" role="alert"></div>
  </div>

  <button class="btn btn-primary btn-block">Submit Payment</button>
</form>
</div>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="./js/script.js"></script>
</body>
</html>