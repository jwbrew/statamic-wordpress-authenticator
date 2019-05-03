<?php

namespace Statamic\Addons\WordpressAuthenticator;

use Statamic\Extend\ServiceProvider;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class WordpressAuthenticatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->registerPolicies();
        Auth::extend('file', function () {
            return new WordpressUserProvider();
        });
      }
}
