<?php
 return [
    'access_key' => env('AMAZON_PRODUCTS_ACCESS_KEY'),
	'secret_key' => env('AMAZON_PRODUCTS_SECRET_KEY'),
	'host' => env('AMAZON_PAAPI5_HOST', 'webservices.amazon.com'),
	'region' => env('AMAZON_PAAPI5_HOST', 'us-east-1'),
 ];