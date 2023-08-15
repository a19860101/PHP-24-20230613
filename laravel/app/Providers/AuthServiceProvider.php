<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        // 'App\Models\Article' => 'App\Policies\ArticlePolicy',
        Article::class => ArticlePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // 定義管理者規則
        Gate::define('admin',function($user){
            return $user->role == 'admin';
        });
        // 定義一般會員規則
        Gate::define('member',function($user){
            return $user->role == 'member';
        });
    }
}
