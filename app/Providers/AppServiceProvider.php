<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;
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
        // check the current logged in user id and the post's user_id if it matches.
        Gate::define('update-post', function(User $user, Post $post){
            return $user->id === $post->user_id;
        });
    }
}
