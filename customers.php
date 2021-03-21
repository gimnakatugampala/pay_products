<?php

    require_once('config/db.php');
    require_once('lib/pdo_db.php');
    require_once('models/Customers.php');

    //Init Customers
    $customer = new Customer();
    $customers = $customer->getCustomers();
    // print_r($customers);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>View Customers</title>
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
      <a class="nav-item nav-link text-light" href="./customers.php">Customers</a>
      <a class="nav-item nav-link text-light" href="./transactions.php">Transactions</a>
    </div>
  </div>
</nav>


<div class="container mt-4">
<h2>Customers</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Customer ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($customers as $c) :?>
        <tr>
            <td><?php echo $c->id?></td>
            <td><?php echo $c->first_name?> <?php echo $c->last_name?></td>
            <td><?php echo $c->email?></td>
            <td><?php echo $c->created_at?></td>
        </tr>
    <?php endforeach;?>
    </tbody>

</table>
<br>
<a href="index.php" class="btn btn-priamry">Buy More Products</a>

</div>
    
</body>
</html>