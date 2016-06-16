<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;

class ViewsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $categoryList = Category::all();
        view()->share('categoryList', $categoryList);
    }

    /**'value'
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
