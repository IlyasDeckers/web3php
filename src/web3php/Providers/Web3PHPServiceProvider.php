<?php
namespace IlyasDeckers\Web3PHP\Providers;

use Illuminate\Support\ServiceProvider;

class Web3PHPServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/../config/web3.php' => config_path('web3.php'),
        ]);

        App::bind('wallets', function() {
            return new \IlyasDeckers\Web3PHP\Ethereum;
        });
    }
}
