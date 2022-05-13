<?php

namespace App\Providers;

use App\Models\Service;
use App\Policies\BannerPolicy;
use App\Policies\ClientPolicy;
use App\Policies\NewsletterPolicy;
use App\Policies\ServicePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();


        Gate::define('create-service', [ServicePolicy::class, 'create']);
        Gate::define('edit-service', [ServicePolicy::class, 'update']);

        Gate::define('create-client', [ClientPolicy::class, 'create']);
        Gate::define('edit-client', [ClientPolicy::class, 'update']);

        Gate::define('create-subscribe', [NewsletterPolicy::class, 'create']);
        Gate::define('edit-subscribe', [NewsletterPolicy::class, 'update']);
        
        Gate::define('edit-banner', [BannerPolicy::class, 'update']);
    }
}
