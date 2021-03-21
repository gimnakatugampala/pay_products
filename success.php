<?php

    if(!empty($_GET['product'])  && !empty($_GET['tid'])){
        $GET = filter_var_array($_GET,FILTER_SANITIZE_STRING);

        $product = $GET['product'];
        $price = $GET['price'];
        $tid = $GET['tid'];
        $first_name = $GET['first_name'];
        $last_name = $GET['last_name'];

    }else{
        header('Location:index.php');
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
    <title>Thank You For Buying | <?php echo $product;?></title>
</head>
<body>

<div class="container mt-4">
<h2>Thank You for Purhasing <?php echo $product; ?> </h2>
<h5> <?php echo $first_name;?>  <?php echo $last_name;?>,you will be getting your product within 1-3 days.</h5>
<hr>

    <img src="./truck.gif" class="mx-auto">

<p>Your transaction ID is <?php echo $tid;?> </p>
<p>You Spent about $<?php echo $price;?> </p>
<p>Check Your Email for more info</p>
<p><a href="./index.php" class="btn btn-primary mt-2">Go Back</a></p>

</div>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
</body>
</html>