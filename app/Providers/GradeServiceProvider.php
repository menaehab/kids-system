<?php

namespace App\Providers;

use App\Models\Grade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class GradeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        View::composer('*', function ($view) {
            $view->with('grades', Grade::all());
        });
    }
}
