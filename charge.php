<?php
require_once('vendor/autoload.php');
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/Customers.php');
require_once('models/Transaction.php');



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

//Customer Data
$customerData = [
  'id'=> $charge->customer,
  'first_name'=> $first_name,
  'last_name'=> $last_name,
  'email'=> $email
];

//Init Customer
$customer = new Customer();

//Add Cutomer to DB
$customer->addCustomer($customerData);


//Transaction Data
$transactionData = [
  'id'=> $charge->id,
  'customer_id'=> $charge->customer,
  'product'=> $charge->description,
  'amount'=> $charge->amount,
  'currency'=>$charge->currency,
  'status'=>$charge->status
];

//Init Transactiton
$transations = new Transactions();

//Add Cutomer to DB
$transations->addTransactions($transactionData);



//Redirect to a Success Page
header('Location:success.php?product='.$product.'&price='.$price.'&tid='.$charge->id.'&first_name='.$first_name.'&last_name='.$last_name);
?>
