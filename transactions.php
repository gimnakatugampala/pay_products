<?php

    require_once('config/db.php');
    require_once('lib/pdo_db.php');
    require_once('models/Transaction.php');

    //Init Customers
    $transaction = new Transactions();
    $transactions = $transaction->getTransactions();
    // print_r($transactions);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>View Transactions</title>
</head>
<body>

<div class="container mt-4">

<h2>Transactions</h2>
<table class="table table-striped">

    <thead>
        <tr>
            <th>Transaction ID</th>
            <th>Customer</th>
            <th>Product</th>
            <th>Amount</th>
            <th>Currency</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($transactions as $t) :?>
        <tr>
            <td><?php echo $t->id?></td>
            <td><?php echo $t->customer_id?></td>
            <td><?php echo $t->product?></td>
            <td><?php echo sprintf('%.2f', $t->amount /100);?></td>
            <td><?php echo strtoupper($t->currency);?></td>
            <td><?php echo $t->created_at?></td>
        </tr>
    <?php endforeach;?>
    </tbody>

</table>
<br>
<a href="index.php" class="btn btn-priamry">Buy More Products</a>

</div>
    
</body>
</html>