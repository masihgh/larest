<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

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
        Passport::tokensExpireIn(config('auth.token_expiration.access_tokens'));
        Passport::refreshTokensExpireIn(config('auth.token_expiration.refresh_tokens'));
        Passport::personalAccessTokensExpireIn(config('auth.token_expiration.personal_access_tokens'));
    }
}
