<?php
namespace Sanjayojha\LaravelAmazonPaapi5;

use Illuminate\Support\ServiceProvider;
use Sanjayojha\LaravelAmazonPaapi5\Configuration;
use GuzzleHttp\Client;

class LaravelAmazonPaapi5ServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton('AmazonPaapi5', function($app) {
            $config = new Configuration();
			$config->setAccessKey(config('amazon-api-key.access_key', env('AMAZON_PAAPI5_ACCESS_KEY')));
			$config->setSecretKey(config('amazon-api-key.secret_key', env('AMAZON_PAAPI5_SECRET_KEY')));
			$config->setHost(config('amazon-api-key.host', env('AMAZON_PAAPI5_HOST')));
			$config->setRegion(config('amazon-api-key.region', env('AMAZON_PAAPI5_REGION')));
			$client = new Client();
            
            return new LaravelAmazonPaapi5($client, $config);
        });

        
    }

    /**
	 * Perform post-registration booting of services.
	 */
	public function boot()
	{
		// config
		$this->publishes([
			__DIR__.'/../config/amazon-api-key.php' => config_path('amazon-api-key.php'),
		], 'config');
	}
}