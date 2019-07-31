<?php
require_once('vendor/autoload.php');

$stripe = [
  "secret_key"      => "YOUR SECRET KEY",
  "publishable_key" => "YOUR PUBLISHABLE KEY",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>