<?php

namespace App\Providers;

use App\Contructs\Repositories\BaseRepository;
use App\Repositories\Eloquents\CategoryProductRepository;
use App\Repositories\Eloquents\MenuRepository;
use App\Repositories\Eloquents\ProductRepository;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BaseRepository::class,CategoryProductRepository::class);
        $this->app->bind(BaseRepository::class,MenuRepository::class);
        $this->app->bind(BaseRepository::class,ProductRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        Schema::defaultStringLength(191);
    }
}
