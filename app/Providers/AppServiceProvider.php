<?php

namespace App\Providers;

use App\Http\Resources\Artist\ArtistResource;
use App\Services\ArtistService;
use App\Services\PurchaseService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('artist', ArtistService::class);
        $this->app->bind('purchase', PurchaseService::class);
        $this->app->bind('user', UserService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ArtistResource::withoutWrapping();
    }
}
