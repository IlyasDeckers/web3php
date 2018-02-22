<?php
namespace IlyasDeckers\Web3PHP;

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
            __DIR__.'/../config/web3.php' => config_path('sweet-alert.php'),
        ]);
    }
}