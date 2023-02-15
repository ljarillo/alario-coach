<?php

namespace App\Providers;

use App\Models\Patient;
use App\Models\User;
use App\Observers\PatientObserver;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        User::observe(UserObserver::class);
        Patient::observe(PatientObserver::class);
    }
}
