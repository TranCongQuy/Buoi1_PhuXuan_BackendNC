<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Post;
use App\Policies\PostPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Post::class => PostPolicy::class, // Map Post model với PostPolicy
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Giữ lại Gate từ Lab 1 (có thể dùng kết hợp)
        Gate::define('update-post', function ($user, $post) {
            return $user->id === $post->user_id || $user->id === 1;
        });

        Gate::define('delete-post', function ($user, $post) {
            return $user->id === $post->user_id || $user->id === 1;
        });
    }
}