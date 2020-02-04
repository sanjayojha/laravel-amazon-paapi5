# Laravel Package for Amazon PAAPI v5 (Using official SDK)
Laravel package for Amazon Product Advertising API v5 using Official PHP SDK

Note: This is just wrapper around official PHP SDK for amazon [Product Advertising API](https://webservices.amazon.com/paapi5/documentation/index.html).

## Installation
1. `composer require sanjayojha/laravel-amazon-paapi5`
2. Laravel 6.0 or earlier
3. `php artisan vendor:publish --provider="Sanjayojha\LaravelAmazonPaapi5\LaravelAmazonPaapi5ServiceProvider" --tag="config"` will create a `config/amazon-api-key.php` file.
4. Add your Amazon access and secret keys into the your `.env` file: 
```
AMAZON_PRODUCTS_ACCESS_KEY=youAccessKey
AMAZON_PRODUCTS_PRIVATE_KEY=youPrivateKey
```

## Usage
```
TODO
```

## Testing

TODO


Complete documentation, installation instructions, and examples for using official PHP SDK are available [here](https://webservices.amazon.com/paapi5/documentation/with-sdk.html).
