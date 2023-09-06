<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\ProfileController;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('update-post', function (User $user, Post $post) {
            return ($user->id === $post->user_id || ProfileController::isAdmin($user->id))
                ? Response::allow()
                : Response::deny('You must be an administrator to edit a post that is not yours');
        });
    }
}
