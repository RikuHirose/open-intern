<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // User
        $this->app->bind(
            \App\Repositories\UserRepositoryInterface::class,
            \App\Repositories\Eloquent\UserRepository::class
        );

        // Company
        $this->app->bind(
            \App\Repositories\CompanyRepositoryInterface::class,
            \App\Repositories\Eloquent\CompanyRepository::class
        );

        // Review
        $this->app->bind(
            \App\Repositories\ReviewRepositoryInterface::class,
            \App\Repositories\Eloquent\ReviewRepository::class
        );

        // Industry
        $this->app->bind(
            \App\Repositories\IndustryRepositoryInterface::class,
            \App\Repositories\Eloquent\IndustryRepository::class
        );

        // Like
        $this->app->bind(
            \App\Repositories\LikeRepositoryInterface::class,
            \App\Repositories\Eloquent\LikeRepository::class
        );

        // SocialProvider
        $this->app->bind(
            \App\Repositories\SocialProviderRepositoryInterface::class,
            \App\Repositories\Eloquent\SocialProviderRepository::class
        );

        // CompanyIndustry
        $this->app->bind(
            \App\Repositories\CompanyIndustryRepositoryInterface::class,
            \App\Repositories\Eloquent\CompanyIndustryRepository::class
        );

        // History
        $this->app->bind(
            \App\Repositories\HistoryRepositoryInterface::class,
            \App\Repositories\Eloquent\HistoryRepository::class
        );

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
