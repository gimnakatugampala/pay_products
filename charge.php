<!-- This is where money is granted from the user -->
<?php

require_once('vendor/autoload.php');


\Stripe\Stripe::setApiKey('sk_test_51IXLVDGd7aaYQi1p5pAlrycqc8OR8T7J0zGHzEY5pDS5N4vC0PtChdZzvryUATE6rHIkhMKxJhiqmLCTifjvMqgV00FGdJu71g');

// Get the User Inserted Details & Sanitize it
$POST = filter_var_array($_POST,FILTER_SANITIZE_STRING);

$first_name = $POST['first_name'];
$last_name = $POST['last_name'];
$email = $POST['email'];
$token = $_POST['stripeToken'];
$product = $_POST['product'];
$price = $_POST['price'].'00';


//Create Customer In Stripe
$customer = \Stripe\Customer::create([
    'email'=> $email,
    'source'=>$token
]);

//Charge Customer

$charge = \Stripe\Charge::create([
  'amount' => (int)$price,
  'currency' => 'usd',
  'description' => $product,
  'customer' => $customer->id,
]);


//Redirect to a Success Page
header('Location:success.php?product='.$product.'&price='.$price.'&tid='.$charge->id.'&first_name='.$first_name.'&last_name='.$last_name);
